<?php
// {{{ requires
// モジュール名
define('MDL_UP_CW', 'mdl_db_import');
require_once(CLASS_EX_REALDIR . "page_extends/admin/LC_Page_Admin_Ex.php");
require_once DATA_REALDIR. 'module/Tar.php';
require_once CLASS_EX_REALDIR . 'helper_extends/SC_Helper_FileManager_Ex.php';

/**
 * サンプルモジュールのページクラス.
 *
 * @package Page
 * @author LOCKON CO.,LTD.
 * @version $Id$
 */
class LC_Page_Mdl_Upload_Cyber extends LC_Page_Admin_Ex {

    /**
     * Page を初期化する.
     *
     * @return void
     */
    function init() {
        parent::init();
        $this->tpl_mainpage = MODULE_REALDIR . MDL_UP_CW. "/config.tpl";
        $this->tpl_subtitle = '2.11移行モジュール';
        $this->tpl_mode = $this->getMode();
        
        // 途中経過保存テキスト場所
        $this->save_text = MODULE_REALDIR . MDL_UP_CW. "/save.log";
        // CSV保存ディレクトリ
        $this->save_dir = MODULE_REALDIR . MDL_UP_CW. "/shift_data";
    }

    /**
     * Page のプロセス.
     *
     * @return void
     */
    function process() {
        $this->action();
        $this->sendResponse();
    }

    /**
     * Page のアクション.
     *
     * @return void
     */
    function action() {
        // データ移行処理開始
        if($this->tpl_mode == "shift"){
            // 途中経過保存テキストがあるか確認
            if(!file_exists($this->save_text)){
                // 解凍後のディレクトリがなければshift_data.tar.gz解凍
                if(!is_dir($this->save_dir)){
                    $objUpFile = $this->lfInitUploadFile();
                    $this->arrErr = $this->lfCheckError($objUpFile);
                    if (SC_Utils_Ex::isBlank($this->arrErr)) {
                        // フォルダ作成
                        if (!file_exists($this->save_dir)) {
                            if (!mkdir($this->save_dir, 0777)) {
                                $this->arrErr['tar_file'] = "※ フォルダが作成できませんでした。<br/>";
                            }
                        }
                        // 一時フォルダから保存ディレクトリへ移動
                        $objUpFile->moveTempFile();
                        // 解凍
                        if (!SC_Helper_FileManager_Ex::unpackFile($this->save_dir ."/". $_FILES['tar_file']['name'])) {
                            $this->arrErr['tar_file'] = "※ ファイルの解凍に失敗しました。<br/>";
                        }
                    }
                }
                $this->doShift();
            // あれば内容を確認して登録処理開始
            // 確認事項：テーブル・行数
            }else{
                // テキストから開始行取得
                $fp = fopen($this->save_text, 'r');
                $start = fgets($fp);
                fclose($fp);
                // 処理開始
                $this->doShift($start);
            }
            // CSVデータフォルダ削除
            SC_Utils_Ex::sfDelFile($this->save_dir);
            
        }
        
        
        // データ移行処理中ではなく、途中経過保存テキストがあったらボタンの文言変更
        if(file_exists($this->save_text)){
            $this->tpl_submit = "データ移行を続きから実行";
        }
        
        // 初期ページ表示
        $this->setTemplate($this->tpl_mainpage);
    }

    /**
     * デストラクタ.
     *
     * @return void
     */
    function destroy() {
        parent::destroy();
    }

    /**
     * ファイル情報の初期化を行う.
     *
     * @return void
     */
    function lfInitUploadFile(&$objUpFile) {
        $objUpFile = new SC_UploadFile_Ex(TEMPLATE_TEMP_REALDIR, $this->save_dir);
        $objUpFile->addFile("移行データ", 'tar_file', array(), 10000000, true, 0, 0, false);
        return $objUpFile;
    }

    /**
     * uploadモードのパラメータ検証を行う.
     *
     * @param object $objFormParam SC_FormParamのインスタンス
     * @param object $objUpFile SC_UploadFileのインスタンス
     * @return array エラー情報を格納した連想配列, エラーが無ければ(多分)nullを返す
     */
    function lfCheckError(&$objUpFile) {
        /*
         * ファイル形式チェック
         * ファイルが壊れていることも考慮して, 展開可能かチェックする.
         */
        $tar = new Archive_Tar($_FILES['tar_file']['tmp_name'], true);
        $arrArchive = $tar->listContent();
        if (!is_array($arrArchive)) {
            $arrErr['tar_file'] = "※ 移行データが解凍できません。許可されている形式は、tar/tar.gzです。<br />";
        } else {
            $make_temp_error = $objUpFile->makeTempFile('tar_file', false);
            if (!SC_Utils_Ex::isBlank($make_temp_error)) {
                $arrErr['template_file'] = $make_temp_error;
            }
        }
        return $arrErr;
    }

    /**
     * DB登録
     *
     * @return void
     */
    function doShift($start = 1) {
        $objQuery =& SC_Query_Ex::getSingletonInstance();

        ?>
        <html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHAR_CODE ?>" />
        </head>
        <body>
        <p>進捗状況</p>
        <div style="background-color: #EEEEEE;">
        <?php
        // 一部のIEは256バイト以上受け取ってから表示を開始する。
        SC_Utils_Ex::sfFlush(true);

        $safe_mode = (boolean)ini_get('safe_mode');
        $max_execution_time
            = is_numeric(ini_get('max_execution_time'))
            ? intval(ini_get('max_execution_time'))
            : intval(get_cfg_var('max_execution_time'))
            ;
            
        // auth.txtがあればAUTH_MAGIC書き換え
        if(file_exists($this->save_dir. "/auth.txt")){
            $fp = fopen($this->save_dir. "/auth.txt", 'r');
            // 2.4系のAUTH_MAGIC
            $old_auth = fgets($fp);
            fclose($fp);
    if(ADMIN_FORCE_SSL){
        $force_ssl = "TRUE";
    }else{
        $force_ssl = "FALSE";
    }
    $config_data =
    "<?php\n".
    "    define ('ECCUBE_INSTALL', 'ON');\n" .
    "    define ('HTTP_URL', '" . HTTP_URL . "');\n" .
    "    define ('HTTPS_URL', '" . HTTPS_URL . "');\n" .
    "    define ('ROOT_URLPATH', '" . ROOT_URLPATH . "');\n" .
    "    define ('DOMAIN_NAME', '" . DOMAIN_NAME . "');\n" .
    "    define ('DB_TYPE', '" . DB_TYPE . "');\n" .
    "    define ('DB_USER', '" . DB_USER . "');\n" .
    "    define ('DB_PASSWORD', '" . DB_PASSWORD . "');\n" .
    "    define ('DB_SERVER', '" . DB_SERVER . "');\n" .
    "    define ('DB_NAME', '" . DB_NAME . "');\n" .
    "    define ('DB_PORT', '" . DB_PORT .  "');\n" .
    "    define ('ADMIN_DIR', '" . ADMIN_DIR .  "');\n" .
    "    define ('ADMIN_FORCE_SSL', " . $force_ssl .  ");\n".
    "    define ('ADMIN_ALLOW_HOSTS', '".ADMIN_ALLOW_HOSTS."');\n".
    "    define ('AUTH_MAGIC', '" . $old_auth . "');\n".
    "    define ('PASSWORD_HASH_ALGOS', '" . PASSWORD_HASH_ALGOS . "');\n".
    "?>";
            //$fp = fopen(CONFIG_REALFILE, 'w');
            if ($fp = fopen(CONFIG_REALFILE, 'w')) {
                fwrite($fp, $config_data);
                fclose($fp);
            }
            echo "AUTH_MAGIC書き換え完了<br />";
            SC_Utils_Ex::sfFlush();
            unlink($this->save_dir. "/auth.txt");
        }else{
            echo "AUTH_MAGIC書き換え完了済<br />";
            SC_Utils_Ex::sfFlush();
        }
            
        // 配列を利用して作業を作成
        $arrDatabase = $this->lfGetDatabase();
        
        foreach($arrDatabase as $key => $val){
        
            // keyからcsv名取得
            $filename = $key . ".csv";
        
            // csvファイルがあれば処理開始なければスキップ
            if(file_exists($this->save_dir. "/" .$key. ".csv")){
                // DB内容削除
                switch($key){
                    case 'dtb_products_class':
                        $objQuery->delete("dtb_class");
                        $objQuery->delete("dtb_classcategory");
                        $objQuery->delete("dtb_class_combination");
                        break;
                    case 'dtb_products':
                        $objQuery->delete('dtb_products');
                        $objQuery->delete('dtb_products_class');
                        $objQuery->delete('dtb_product_status');
                        break;
                    case 'dtb_order':
                        $objQuery->delete("dtb_shipping");
                    default:
                        $objQuery->delete($key);
                }
                // CSVファイルの文字コード変換
                $enc_filepath = SC_Utils_Ex::sfEncodeFile($this->save_dir . "/" .$key. ".csv", CHAR_CODE, CSV_TEMP_REALDIR);
                // CSV処理
                $fp = fopen($enc_filepath, 'r');
                
                /** 現在行(CSV形式。空行は除く。) */
                $cntCurrentLine = 0;
                /** 挿入した行数 */
                $cntInsert = 0;
                while (!feof($fp)) {
                    $arrCSV = fgetcsv($fp, ZIP_CSV_LINE_MAX);
                    if (empty($arrCSV)) continue;
                    $cntCurrentLine++;
                    if ($cntCurrentLine >= $start) {
                    $arrData = array();
                    //配列を再生成
                    $arrData = array_combine($val['column'], $arrCSV);
                    switch($key){
                    case 'dtb_category':
                        $this->lfRegistCategory($arrData);
                        break;
                    case 'dtb_order':
                        $this->lfRegistOrder($arrData);
                        break;
                    case 'dtb_order_detail':
                        $this->lfRegistOrderDetail($arrData);
                        break;
                    case 'dtb_products':
                        // 削除されていない商品のみ処理
                        if($arrData['del_flg'] == 0){
                            $this->lfRegistProduct($arrData);
                        }
                        break;
                    case 'dtb_products_class':
                        $this->lfRegistProductsClass($arrData);
                        break;
                    case 'dtb_customer':
                        $this->lfRegistCustomer($arrData);
                        break;
                    case 'dtb_other_deliv':
                        $this->lfRegistOtherDeliv($arrData);
                        break;
                    case 'dtb_baseinfo':
                        $this->lfRegistBaseinfo($arrData);
                        break;
                    default:
                        $objQuery->insert($key, $arrData);
                    }
                        $cntInsert++;
                    }
                    
                    // 行数保存
                    if ($fplog = fopen($this->save_text, 'w')) {
                        fwrite($fplog, $cntCurrentLine + 1);
                        fclose($fplog);
                    }
                                        
                    // 暴走スレッドが残留する確率を軽減したタイムアウト防止のロジック
                    // TODO 動作が安定していれば、SC_Utils 辺りに移動したい。
                    if (!$safe_mode) {
                        // タイムアウトをリセット
                        set_time_limit($max_execution_time);
                    }
                }
                fclose($fplog);
                $start = 1;
                $cntCurrentLine = 0;
                
                if ($fplog = fopen($this->save_text, 'w')) {
                fwrite($fplog, "1");
                fclose($fplog);
                }
                
                echo "■".$val['name'] . "移行完了<br />";
                echo $cntInsert."件<br />";
                SC_Utils_Ex::sfFlush();
                // CSV削除
                unlink($this->save_dir . "/" .$key. ".csv");
            }else{
                echo $val['name'] . "移行完了済<br />";
                SC_Utils_Ex::sfFlush();
            }
        }

        echo '</div>' . "\n";

        // カテゴリの商品数カウント実行(エラーになるため後日に
        //SC_Helper_DB_Ex::sfCountCategory($objQuery);
        ?>
        <script type="text/javascript" language="javascript">
            <!--
                // 完了画面
                function complete() {
                    document.open("text/html","replace");
                    document.clear();
                    document.write("<p>データ移行完了しました。</p>");
                    document.write("<p><a href='/admin/system/' target='_blank'>○システム設定＞メンバ管理</a>　にてパスワードの再登録をお願いします。</p>");
                    document.write("<p><font color='red'>※今回のログイン中にパスワードを再登録しないと、次回からログインできなくなります。</p>");
                    document.close();
                }
                // コンテンツを削除するため、タイムアウトで呼び出し。
                setTimeout("complete()", 0);
            // -->
        </script>
        </body>
        </html>
        <?php
        unlink($this->save_text);
    }


/***dtb_baseinfo***/
    function lfRegistBaseinfo($sqlval){
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        $sqlval['shop_name_eng'] = NULL;
        $sqlval['latitude'] = NULL;
        $sqlval['longitude'] = NULL;
        $sqlval['downloadable_days'] = 30;
        $sqlval['downloadable_days_unlimited'] = NULL;
        if(strlen($sqlval['point_rate']) <= 0){
            $sqlval['point_rate'] = '0';
        }
        if(strlen($sqlval['welcome_point']) <= 0){
            $sqlval['welcome_point'] = '0';
        }
        $objQuery->insert("dtb_baseinfo", $sqlval);
    }

/***dtb_customer関連***/

    /**
     * 顧客登録を行う.
     */
    function lfRegistCustomer($sqlval) {
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        $arrList['update_date'] = 'NOW()';
        if(is_numeric($sqlval['customer_id'])) {
            // id指定登録の場合、secret_keyを作成
            $where = "customer_id = ?";
            $customer_count = $objQuery->count("dtb_customer", $where, array($sqlval['customer_id']));
            if($customer_count > 0){
                $objQuery->update("dtb_customer", $sqlval, $where, array($sqlval['customer_id']));
            }else{
                // secret_keyを作成
                $sqlval["secret_key"] = SC_Helper_Customer_Ex::sfGetUniqSecretKey();
                $sqlval['create_date'] = $arrList['update_date'];
                // INSERTの実行
                $objQuery->insert("dtb_customer", $sqlval);
                // シーケンスの調整
                $seq_count = $objQuery->currVal('dtb_customer_customer_id');
                if($seq_count < $sqlval['customer_id']){
                    $objQuery->setVal('dtb_customer_customer_id', $sqlval['customer_id'] + 1);
                }
            }
        }else{
            // 新規登録
            $sqlval['customer_id'] = $objQuery->nextVal('dtb_customer_customer_id');
            $sqlval['create_date'] = $arrList['update_date'];
            $objQuery->insert("dtb_customer", $sqlval);
        }
    }
    /**
     * 他の住所登録を行う.
     */
    function lfRegistOtherDeliv($sqlval) {
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        if(is_numeric($sqlval['other_deliv_id'])) {
            // id指定登録の場合、secret_keyを作成
            $where = "other_deliv_id = ?";
            $customer_count = $objQuery->count("dtb_other_deliv", $where, array($sqlval['other_deliv_id']));
            if($customer_count > 0){
                $objQuery->update("dtb_other_deliv", $sqlval, $where, array($sqlval['other_deliv_id']));
                }else{
                // INSERTの実行
                $objQuery->insert("dtb_other_deliv", $sqlval);
                // シーケンスの調整
                $seq_count = $objQuery->currVal('dtb_other_deliv_other_deliv_id');
                if($seq_count < $sqlval['other_deliv_id']){
                    $objQuery->setVal('dtb_other_deliv_other_deliv_id', $sqlval['other_deliv_id'] + 1);
                }
            }
        }else{
            // 新規登録
                SC_Utils_Ex::sfFlush();
            $sqlval['other_deliv_id'] = $objQuery->nextVal('dtb_other_deliv_other_deliv_id');
            $objQuery->insert("dtb_other_deliv", $sqlval);
        }
    }

/***dtb_products関連***/

    /**
     * 商品登録を行う.
     *
     * FIXME: 商品登録の実処理自体は、LC_Page_Admin_Products_Productと共通化して欲しい。
     *
     * @param SC_Query $objQuery SC_Queryインスタンス
     * @param string|integer $line 処理中の行数
     * @return void
     */
    function lfRegistProduct($arrList) {
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        $objProduct = new SC_Product_Ex();
        $arrList['update_date'] = 'NOW()';

        // 商品登録情報を生成する。
        // 商品テーブルのカラムに存在しているもののうち、Form投入設定されていないデータは上書きしない。
        $arrProductColumn = $objQuery->listTableFields('dtb_products');
        $sqlval = SC_Utils_Ex::sfArrayIntersectKeys($arrList, $arrProductColumn);

        // 必須入力では無い項目だが、空文字では問題のある特殊なカラム値の初期値設定
        $sqlval = $this->lfSetProductDefaultData($sqlval);

        if($sqlval['product_id'] != "") {
            // 同じidが存在すればupdate存在しなければinsert
            $where = "product_id = ?";
            $product_count = $objQuery->count("dtb_products", $where, array($sqlval['product_id']));
            if($product_count > 0){
                $objQuery->update("dtb_products", $sqlval, $where, array($sqlval['product_id']));
            }else{
                $sqlval['create_date'] = $arrList['update_date'];
                // INSERTの実行
                $objQuery->insert("dtb_products", $sqlval);
                // シーケンスの調整
                $seq_count = $objQuery->currVal('dtb_products_product_id');
                if($seq_count < $sqlval['product_id']){
                    $objQuery->setVal('dtb_products_product_id', $sqlval['product_id'] + 1);
                }
            }
            $product_id = $sqlval['product_id'];
        } else {
            // 新規登録
            $sqlval['product_id'] = $objQuery->nextVal('dtb_products_product_id');
            $product_id = $sqlval['product_id'];
            $sqlval['create_date'] = $arrList['update_date'];
            // INSERTの実行
            $objQuery->insert("dtb_products", $sqlval);
        }

        // カテゴリ登録
        if($arrList['category_ids'] != "") {
            $arrCategory_id = explode(',', $arrList['category_ids']);
            $this->objDb->updateProductCategories($arrCategory_id, $product_id);
        }

        // 商品規格情報を登録する
        $this->lfRegistProductClass($arrList, $product_id, $arrList['product_class_id']);

        // 商品ステータスを登録する
        $this->lfRegistProductStatus($arrList, $product_id);

        // 関連商品登録
        $this->lfRegistReccomendProducts($arrList, $product_id);
    }

    function lfRegistProductStatus($arrList, $product_id){
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        $str_length = strlen($arrList['product_flag']);
        
        for($i=0;$i<$str_length;$i++){
            $j = $i + 1;
            $tmp_flag = 0;
            $tmp_flag = substr($arrList['product_flag'], $i, 1);
            if($tmp_flag == 1){
                $sqlval = array();
                $sqlval['product_id'] = $product_id;
                $sqlval['creator_id'] = '0';
                $sqlval['create_date'] = 'Now()';
                $sqlval['update_date'] = 'Now()';
                $sqlval['del_flg'] = '0';
                $sqlval['product_status_id'] = $j;
                $tmp_count = 0;
                $tmp_count = $objQuery->count("dtb_product_status", "product_id = ? AND product_status_id = ?", array($sqlval['product_id'], $sqlval['product_status_id']));
                if($tmp_count < 1){
                    $objQuery->insert('dtb_product_status', $sqlval);
                }
            }
        }
    }

    /**
     * 商品データ登録前に特殊な値の持ち方をする部分のデータ部分の初期値補正を行う
     *
     * @param array $sqlval 商品登録情報配列
     * @return $sqlval 登録情報配列
     */
    function lfSetProductDefaultData(&$sqlval) {
        //新規登録時のみ設定する項目
        if( $sqlval['product_id'] == "") {
            if($sqlval['status'] == "") {
                $sqlval['status'] = DEFAULT_PRODUCT_DISP;
            }
        }
        //共通で空欄時に上書きする項目
        if($sqlval['del_flg'] == ""){
            $sqlval['del_flg'] = '0'; //有効
        }
        if($sqlval['creator_id'] == "") {
            $sqlval['creator_id'] = $_SESSION['member_id'];
        }
        return $sqlval;
    }

    /**
     * 商品規格（規格なし）登録を行う.
     *
     * FIXME: 商品規格登録の実処理自体は、LC_Page_Admin_Products_Productと共通化して欲しい。
     *
     * @param SC_Query $objQuery SC_Queryインスタンス
     * @param array $arrList 商品規格情報配列
     * @param integer $product_id 商品ID
     * @param integer $product_class_id 商品規格ID
     * @return void
     */
    function lfRegistProductClass($arrList, $product_id, $product_class_id) {
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        $objProduct = new SC_Product_Ex();
        
        //同一商品IDなら削除する
        $objQuery->delete("dtb_products_class", "product_id = ?", array($arrList['product_id']));
        // 商品規格登録情報を生成する。
        $arrProductClassColumn = $objQuery->listTableFields('dtb_products_class');
        $sqlval = SC_Utils_Ex::sfArrayIntersectKeys($arrList, $arrProductClassColumn);
        // 必須入力では無い項目だが、空文字では問題のある特殊なカラム値の初期値設定
        $sqlval = $this->lfSetProductClassDefaultData($sqlval);

        // point_rateがある場合修正
        if(is_numeric($arrList['point_rate'])){
            $sqlval['point_rate'] = $arrList['point_rate'];
        }

        if($product_class_id == "") {
            // 新規登録
            $sqlval['product_id'] = $product_id;
            $sqlval['product_class_id'] = $objQuery->nextVal('dtb_products_class_product_class_id');
            $sqlval['create_date'] = $arrList['update_date'];
            // INSERTの実行
            $objQuery->insert("dtb_products_class", $sqlval);
            $product_class_id = $sqlval['product_class_id'];
        } else {
            // UPDATEの実行
            $where = "product_class_id = ?";
            $objQuery->update("dtb_products_class", $sqlval, $where, array($product_class_id));
        }
        // 支払い方法登録
        if($arrList['product_payment_ids'] != "") {
            $arrPayment_id = explode(',', $arrList['product_payment_ids']);
            $objProduct->setPaymentOptions($product_class_id, $arrPayment_id);
        }
    }

    /**
     * 関連商品登録を行う.
     *
     * FIXME: 商品規格登録の実処理自体は、LC_Page_Admin_Products_Productと共通化して欲しい。
     *        DELETE/INSERT ではなく UPDATEへの変更も・・・
     *
     * @param SC_Query $objQuery SC_Queryインスタンス
     * @param array $arrList 商品規格情報配列
     * @param integer $product_id 商品ID
     * @return void
     */
    function lfRegistReccomendProducts($arrList, $product_id) {
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        $objQuery->delete("dtb_recommend_products", "product_id = ?", array($product_id));
        for($i = 1; $i <= RECOMMEND_PRODUCT_MAX; $i++) {
            $keyname = "recommend_product_id" . $i;
            $comment_key = "recommend_comment" . $i;
            if($arrList[$keyname] != "") {
                $arrProduct = $objQuery->select("product_id", "dtb_products", "product_id = ?", array($arrList[$keyname]));
                if($arrProduct[0]['product_id'] != "") {
                    $arrval['product_id'] = $product_id;
                    $arrval['recommend_product_id'] = $arrProduct[0]['product_id'];
                    $arrval['comment'] = $arrList[$comment_key];
                    $arrval['update_date'] = $arrList['update_date'];
                    $arrval['create_date'] = $arrList['update_date'];
                    $arrval['creator_id'] = $_SESSION['member_id'];
                    $arrval['rank'] = RECOMMEND_PRODUCT_MAX - $i + 1;
                    $objQuery->insert("dtb_recommend_products", $arrval);
                }
            }
        }
    }

    /**
     * 商品規格データ登録前に特殊な値の持ち方をする部分のデータ部分の初期値補正を行う
     *
     * @param array $sqlval 商品登録情報配列
     * @return $sqlval 登録情報配列
     */
    function lfSetProductClassDefaultData(&$sqlval) {
        //新規登録時のみ設定する項目
        if($sqlval['product_class_id'] == "") {
            if($sqlval['point_rate'] == "") {
                $sqlval['point_rate'] = '0';
            }
            if($sqlval['product_type_id'] == "") {
                $sqlval['product_type_id'] = DEFAULT_PRODUCT_DOWN;
            }
            // TODO: 在庫数、無制限フラグの扱いについて仕様がぶれているので要調整
            if($sqlval['stock'] == "" and $sqlval['stock_unlimited'] != UNLIMITED_FLG_UNLIMITED) {
                //在庫数設定がされておらず、かつ無制限フラグが設定されていない場合、強制無制限
                $sqlval['stock_unlimited'] = UNLIMITED_FLG_UNLIMITED;
            }elseif($sqlval['stock'] != "" and $sqlval['stock_unlimited'] != UNLIMITED_FLG_UNLIMITED) {
                //在庫数設定時は在庫無制限フラグをクリア
                $sqlval['stock_unlimited'] = UNLIMITED_FLG_LIMITED;
            }elseif($sqlval['stock'] != "" and $sqlval['stock_unlimited'] == UNLIMITED_FLG_UNLIMITED) {
                //在庫無制限フラグ設定時は在庫数をクリア
                $sqlval['stock'] = '';
            }
        }else{
            //更新時のみ設定する項目
            if(array_key_exists('stock_unlimited', $sqlval) and $sqlval['stock_unlimited'] == UNLIMITED_FLG_UNLIMITED) {
                $sqlval['stock'] = '';
            }
        }
        //共通で設定する項目
        if($sqlval['del_flg'] == ""){
            $sqlval['del_flg'] = '0'; //有効
        }
        if($sqlval['creator_id'] == "") {
            $sqlval['creator_id'] = $_SESSION['member_id'];
        }
        return $sqlval;
    }

/***dtb_products_class関連***/

    /**
     * 商品規格（規格あり）登録を行う.
     *
     * @param SC_Query $objQuery SC_Queryインスタンス
     * @param string|integer $line 処理中の行数
     * @return void
     */
    function lfRegistProductsClass($arrList) {
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        $update_date = 'NOW()';
        
        $arrProductClassColumn = $objQuery->listTableFields('dtb_products_class');
        $sqlval = SC_Utils_Ex::sfArrayIntersectKeys($arrList, $arrProductClassColumn);
        // 必須入力では無い項目だが、空文字では問題のある特殊なカラム値の初期値設定
        $sqlval = $this->lfSetProductClassDefaultData($sqlval);

        if($arrList['product_class_id'] == "") {
            // 新規登録
            $sqlval['product_id'] = $arrList['product_id'];
            $product_class_id = $objQuery->nextVal('dtb_products_class_product_class_id');
            $sqlval['product_class_id'] = $product_class_id;
            $sqlval['create_date'] = $update_date;
            $sqlval['update_date'] = $update_date;
            // INSERTの実行
            $objQuery->insert("dtb_products_class", $sqlval);
            $product_class_id = $sqlval['product_class_id'];
            
            //親規格登録
            $parent_class_id = $objQuery->getOne("SELECT class_id FROM dtb_class WHERE name = ?", array($arrList['parent_class_name']));
            if($parent_class_id == ""){
                $parent_class_id = $this->lfInsertClass($arrList['parent_class_name'], $update_date);
            }
            
            //親規格カテゴリ登録
            $parent_classcategory_id = $objQuery->getOne("SELECT classcategory_id FROM dtb_classcategory WHERE class_id =? AND name = ?", array($parent_class_id,$arrList['parent_classcategory_name']));
            if(!is_numeric($parent_classcategory_id)){
                $parent_classcategory_id = $this->lfInsertClassCategory($parent_class_id, $arrList['parent_classcategory_name'], $update_date);
            }
            
            //子規格名があれば子規格登録
            if($arrList['class_name'] != ""){
            $child_class_id = $objQuery->getOne("SELECT class_id FROM dtb_class WHERE name = ?", array($arrList['class_name']));
            if($child_class_id == ""){
                $child_class_id = $this->lfInsertClass($arrList['class_name'],$update_date);
            }
            }else{
                $child_class_id = "";
            }
            
            //子規格カテゴリ登録
            if($arrList['classcategory_name'] != ""){
            $child_classcategory_id = $objQuery->getOne("SELECT classcategory_id FROM dtb_classcategory WHERE class_id =? AND name = ?", array($child_class_id,$arrList['classcategory_name']));
            if(!is_numeric($child_classcategory_id)){
                $child_classcategory_id = $this->lfInsertClassCategory($child_class_id, $arrList['classcategory_name'], $update_date);
            }
            }else{
                $child_classcategory_id = "";
            }
            
            //親規格組み合わせ登録
            $class_combination_id = $objQuery->nextVal('dtb_class_combination_class_combination_id');
            $arrComb1['class_combination_id'] = $class_combination_id;
            $arrComb1['classcategory_id'] = $parent_classcategory_id;
            $arrComb1['level'] = 1;
            $objQuery->insert('dtb_class_combination', $arrComb1);
            // 子規格も登録する場合
            if (!SC_Utils_Ex::isBlank($child_classcategory_id)) {
                $class_combination_id = $objQuery->nextVal('dtb_class_combination_class_combination_id');
                $arrComb2['class_combination_id'] = $class_combination_id;
                $arrComb2['classcategory_id'] = $child_classcategory_id;
                $arrComb2['parent_class_combination_id'] = $arrComb1['class_combination_id'];
                $arrComb2['level'] = 2;
                $objQuery->insert('dtb_class_combination', $arrComb2);
            }
            
            //dtb_products_classの組み合わせIDを更新
            $sqlval = array();
            $sqlval['class_combination_id'] = $class_combination_id;
            $where = "product_class_id = ?";
            $objQuery->update("dtb_products_class", $sqlval, $where, array($product_class_id));
        } else {
            // UPDATEの実行
            $where = "product_class_id = ?";
            $sqlval['update_date'] = $update_date;
            $objQuery->update("dtb_products_class", $sqlval, $where, array($product_class_id));
        }
        // 支払い方法登録
        if($arrList['product_payment_ids'] != "") {
            $arrPayment_id = explode(',', $arrList['product_payment_ids']);
            $objProduct->setPaymentOptions($product_class_id, $arrPayment_id);
        }
    }

   /**
     * 規格情報を新規登録
     *
     * @return integer class_id
     */
     function lfInsertClass($name, $update_date) {
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        // INSERTする値を作成する。
        $sqlval['name'] = $name;
        $sqlval['creator_id'] = $_SESSION['member_id'];
        $sqlval['rank'] = $objQuery->max('rank', "dtb_class") + 1;
        $sqlval['create_date'] = $update_date;
        $sqlval['update_date'] = $update_date;
        // INSERTの実行
        $sqlval['class_id'] = $objQuery->nextVal('dtb_class_class_id');
        $objQuery->insert("dtb_class", $sqlval);
        return $sqlval['class_id'];
    }

   /**
     * 規格分類情報を新規登録
     *
     * @return integer 規格カテゴリID
     */
    function lfInsertClassCategory($class_id, $name, $update_date) {
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        // 親規格IDの存在チェック
        $where = "del_flg <> 1 AND class_id = ?";
        $class_id = $objQuery->get("class_id", "dtb_class", $where, array($class_id));
        if(!SC_Utils_Ex::isBlank($class_id)) {
            // INSERTする値を作成する。
            $sqlval['name'] = $name;
            $sqlval['class_id'] = $class_id;
            $sqlval['creator_id'] = $_SESSION['member_id'];
            $sqlval['rank'] = $objQuery->max('rank', "dtb_classcategory", $where, array($class_id)) + 1;
            $sqlval['create_date'] = $update_date;
            $sqlval['update_date'] = $update_date;
            // INSERTの実行
            $sqlval['classcategory_id'] = $objQuery->nextVal('dtb_classcategory_classcategory_id');
            $objQuery->insert("dtb_classcategory", $sqlval);
        }
        return $sqlval['classcategory_id'];
    }

/***dtb_category関連***/

    /**
     * カテゴリ登録を行う.
     *
     * FIXME: 登録の実処理自体は、LC_Page_Admin_Products_Categoryと共通化して欲しい。
     *
     * @param SC_Query $objQuery SC_Queryインスタンス
     * @param string|integer $line 処理中の行数
     * @return integer カテゴリID
     */
    function lfRegistCategory($arrList) {
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        $update_date = 'NOW()';
        
        // 登録情報を生成する。
        // テーブルのカラムに存在しているもののうち、Form投入設定されていないデータは上書きしない。
        $arrCategoryColumn = $objQuery->listTableFields('dtb_category');
        $sqlval = SC_Utils_Ex::sfArrayIntersectKeys($arrList, $arrCategoryColumn);

        // 必須入力では無い項目だが、空文字では問題のある特殊なカラム値の初期値設定
        $sqlval = $this->lfSetCategoryDefaultData($sqlval);

        if($sqlval['category_id'] != "") {
            // 同じidが存在すればupdate存在しなければinsert
            $where = "category_id = ?";
            $category_count = $objQuery->count("dtb_category", $where, array($sqlval['category_id']));
            if($category_count > 0){
                // UPDATEの実行
                $where = "category_id = ?";
                $objQuery->update("dtb_category", $sqlval, $where, array($sqlval['category_id']));
            }else{
                $sqlval['create_date'] = $arrList['update_date'];
                // 新規登録
                $category_id = $this->registerCategory($sqlval['parent_category_id'],
                                        $sqlval['category_name'],
                                        $_SESSION['member_id'],
                                        $sqlval['category_id']);
            }
            $category_id = $sqlval['category_id'];
            // TODO: 削除時処理
        }else{
            // 新規登録
            $category_id = $this->registerCategory($sqlval['parent_category_id'],
                                        $sqlval['category_name'],
                                        $_SESSION['member_id']);
        }
        return $category_id;
    }

    /**
     * カテゴリを登録する
     *
     * @param integer 親カテゴリID
     * @param string カテゴリ名
     * @param integer 作成者のID
     * @param integer 指定カテゴリID
     * @return integer カテゴリID
     */
    function registerCategory($parent_category_id, $category_name, $creator_id, $category_id = null) {
        $objQuery =& SC_Query_Ex::getSingletonInstance();

        $rank = null;
        if ($parent_category_id == 0) {
            // ROOT階層で最大のランクを取得する。
            $where = "parent_category_id = ?";
            $rank = $objQuery->max('rank', "dtb_category", $where, array($parent_category_id)) + 1;
        } else {
            // 親のランクを自分のランクとする。
            $where = "category_id = ?";
            $rank = $objQuery->get('rank', "dtb_category", $where, array($parent_category_id));
            // 追加レコードのランク以上のレコードを一つあげる。
            $sqlup = "UPDATE dtb_category SET rank = (rank + 1) WHERE rank >= ?";
            $objQuery->exec($sqlup, array($rank));
        }

        $where = "category_id = ?";
        // 自分のレベルを取得する(親のレベル + 1)
        $level = $objQuery->get('level', "dtb_category", $where, array($parent_category_id)) + 1;

        $arrCategory = array();
        $arrCategory['category_name'] = $category_name;
        $arrCategory['parent_category_id'] = $parent_category_id;
        $arrCategory['create_date'] = "Now()";
        $arrCategory['update_date'] = "Now()";
        $arrCategory['creator_id']  = $creator_id;
        $arrCategory['rank']        = $rank;
        $arrCategory['level']       = $level;
        //カテゴリIDが指定されていればそれを利用する
        if(isset($category_id)){
            $arrCategory['category_id'] = $category_id;
            // シーケンスの調整
            $seq_count = $objQuery->currVal('dtb_category_category_id');
            if($seq_count < $arrCategory['category_id']){
                $objQuery->setVal('dtb_category_category_id', $arrCategory['category_id'] + 1);
            }
        }else{
            $arrCategory['category_id'] = $objQuery->nextVal('dtb_category_category_id');
        }
        $objQuery->insert("dtb_category", $arrCategory);

        return $arrCategory['category_id'];
    }

    /**
     * データ登録前に特殊な値の持ち方をする部分のデータ部分の初期値補正を行う
     *
     * @param array $sqlval 商品登録情報配列
     * @return $sqlval 登録情報配列
     */
    function lfSetCategoryDefaultData(&$sqlval) {
        if($sqlval['del_flg'] == ""){
            $sqlval['del_flg'] = '0'; //有効
        }
        if($sqlval['creator_id'] == "") {
            $sqlval['creator_id'] = $_SESSION['member_id'];
        }
        if($sqlval['parent_category_id'] == "") {
            $sqlval['parent_category_id'] = (string)"0";
        }
        return $sqlval;
    }

/***dtb_order関連***/

    /**
     * 新規受注登録を行う.
     *
     *
     * @param SC_Query $objQuery SC_Queryインスタンス
     * @param string|integer $line 処理中の行数
     * @return void
     */
     function lfRegistOrder($arrList) {
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        $arrList['update_date'] = 'NOW()';

        // 商品テーブルのカラムに存在しているもののうち、Form投入設定されていないデータは上書きしない。
        $arrOrderColumn = $objQuery->listTableFields('dtb_order');
        $sqlval = SC_Utils_Ex::sfArrayIntersectKeys($arrList, $arrOrderColumn);

        // 必須入力では無い項目だが、空文字では問題のある特殊なカラム値の初期値設定
        //$sqlval = $this->lfSetOrderDefaultData($sqlval);

        if($sqlval['order_id'] != "") {
            //$sqlval['create_date'] = $arrList['update_date'];
            // INSERTの実行
            $objQuery->insert("dtb_order", $sqlval);
            // シーケンスの調整
            $seq_count = $objQuery->currVal('dtb_order_order_id');
            if($seq_count < $sqlval['order_id']){
                $objQuery->setVal('dtb_order_order_id', $sqlval['order_id'] + 1);
            }
        } else {
            // 新規登録
            $sqlval['order_id'] = $objQuery->nextVal('dtb_order_order_id');
            $order_id = $sqlval['order_id'];
            //$sqlval['create_date'] = $arrList['update_date'];
            // INSERTの実行
            $objQuery->insert("dtb_order", $sqlval);
        }
        // 配送先情報を登録する
        $this->lfRegistShipping($objQuery, $arrList, $sqlval['order_id']);
    }

    /**
     * 配送先登録を行う.
     *
     * @param SC_Query $objQuery SC_Queryインスタンス
     * @param array $arrList 受注登録情報配列
     * @param integer $order_id 受注ID
     * @return void
     */
     function lfRegistShipping($objQuery, $arrList, $order_id) {
        // 配送先登録情報を生成する。
        // 配送先テーブルのカラムに存在しているもののうち、Form投入設定されていないデータは上書きしない。
        $arrShippingColumn = $objQuery->listTableFields('dtb_shipping');
        $sqlval = SC_Utils_Ex::sfArrayIntersectKeys($arrList, $arrShippingColumn);
        // 必須入力では無い項目だが、空文字では問題のある特殊なカラム値の初期値設定
        //$sqlval = $this->lfSetShippingDefaultData($sqlval);
        
        $objQuery->delete("dtb_shipping", "order_id = ?", array($order_id));
        
        // 配送日付を timestamp に変換
        if (!SC_Utils_Ex::isBlank($sqlval['shipping_date'])) {
            $d = mb_strcut($sqlval["shipping_date"], 0, 10);
            $arrDate = explode("/", $d);
            $ts = mktime(0, 0, 0, $arrDate[1], $arrDate[2], $arrDate[0]);
            $sqlval['shipping_date'] = date("Y-m-d", $ts);
        }
        // 非会員購入の場合は shipping_id が存在しない
        if (!is_numeric($sqlval['shipping_id'])) {
            $sqlval['shipping_id'] = '0';
        }
        $sqlval['order_id'] = $order_id;
        //$sqlval['product_class_id'] = $objQuery->nextVal('dtb_products_class_product_class_id');
        $sqlval['create_date'] = $arrList['update_date'];

        if(strlen($sqlval['deliv_id']) > 0){
            $sqlval['deliv_id'] = '1';
        }
        
        // INSERTの実行
        $objQuery->insert("dtb_shipping", $sqlval);
    }

/***dtb_order_detail関連***/

    /**
     * 新規受注登録を行う.
     */
    function lfRegistOrderDetail($arrList) {
        $objQuery =& SC_Query_Ex::getSingletonInstance();

        // 商品テーブルのカラムに存在しているもののうち、Form投入設定されていないデータは上書きしない。
        $arrOrderDetailColumn = $objQuery->listTableFields('dtb_order_detail');
        $sqlval = SC_Utils_Ex::sfArrayIntersectKeys($arrList, $arrOrderDetailColumn);
        
        $sqlval['product_class_id'] = $this->lfGetProductClassId($arrList);

        $sqlval['order_detail_id'] = $objQuery->nextVal('dtb_order_detail_order_detail_id');
        // INSERTの実行
        $objQuery->insert("dtb_order_detail", $sqlval);
            
    }

    /**
     * 規格名称等からproduct_class_idを出す.
     *
     *
     * @param SC_Query $objQuery SC_Queryインスタンス
     * @return product_class_id 規格ID
     */
    function lfGetProductClassId($arrList){
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        //規格ある場合
        if($arrList['parent_class_name'] != "" && $arrList['parent_classcategory_name'] != ""){
        $parent_class_id = $objQuery->getOne("SELECT class_id FROM dtb_class WHERE name = ?", array($arrList['parent_class_name']));
        $classcategory_id1 = $objQuery->getOne("SELECT classcategory_id FROM dtb_classcategory WHERE class_id =? AND name = ?", array($parent_class_id,$arrList['parent_classcategory_name']));

        $class_combination_id = $objQuery->select("class_combination_id", "dtb_class_combination", "classcategory_id = ?", array($classcategory_id1));
        // where文作成
        $where = "";
        $arrval = array();
        foreach($class_combination_id as $val){
            if($where == ""){
                $where = "( parent_class_combination_id = ?";
            }else{
                $where .= " OR parent_class_combination_id = ?";
            }
                $arrval[] = $val['class_combination_id'];
        }
        $where .= " )";
        if($arrList['class_name'] != "" && $arrList['classcategory_name'] != ""){
            $class_id = $objQuery->getOne("SELECT class_id FROM dtb_class WHERE name = ?", array($arrList['class_name']));
            $classcategory_id2 = $objQuery->getOne("SELECT classcategory_id FROM dtb_classcategory WHERE class_id =? AND name = ?", array($class_id,$arrList['classcategory_name']));
            $where .= " AND classcategory_id = ?";
            $arrval[] = $classcategory_id2;
            
            $class_combination_id = $objQuery->getOne("SELECT class_combination_id FROM dtb_class_combination WHERE ".$where, $arrval);
            $product_class_id = $objQuery->getOne("SELECT product_class_id FROM dtb_products_class WHERE product_id = ? AND class_combination_id = ?", array($arrList['product_id'], $class_combination_id));
        }else{
            $where .= " AND product_id = ?";
            $arrval[] = $arrList['product_id'];
            $product_class_id = $objQuery->getOne("SELECT product_class_id FROM dtb_products_class WHERE ".$where, $arrval);
        }

        //規格無い場合
        }else{
            $product_class_id = $objQuery->getOne("SELECT product_class_id FROM dtb_products_class WHERE product_id = ? AND class_combination_id IS NULL", array($arrList['product_id']));
        }
        
        return $product_class_id;
    }






    // カラム取得
    function lfGetDatabase(){
         //基本情報
         $arrDatabase['dtb_baseinfo'] = array('name' => "基本情報データ",
         'column' => array(
'company_name',
'company_kana',
'zip01',
'zip02',
'pref',
'addr01',
'addr02',
'tel01',
'tel02',
'tel03',
'fax01',
'fax02',
'fax03',
'business_hour',
'law_company',
'law_manager',
'law_zip01',
'law_zip02',
'law_pref',
'law_addr01',
'law_addr02',
'law_tel01',
'law_tel02',
'law_tel03',
'law_fax01',
'law_fax02',
'law_fax03',
'law_email',
'law_url',
'law_term01',
'law_term02',
'law_term03',
'law_term04',
'law_term05',
'law_term06',
'law_term07',
'law_term08',
'law_term09',
'law_term10',
'tax',
'tax_rule',
'email01',
'email02',
'email03',
'email04',
'email05',
'free_rule',
'shop_name',
'shop_kana',
'point_rate',
'welcome_point',
'update_date',
'top_tpl',
'product_tpl',
'detail_tpl',
'mypage_tpl',
'good_traded',
'message',
'regular_holiday_ids'));
         //顧客データ
         $arrDatabase["dtb_customer"] =array('name' => "顧客データ",
         'column' => array(
"customer_id",
"name01",
"name02",
"kana01",
"kana02",
"zip01",
"zip02",
"pref",
"addr01",
"addr02",
"email",
"email_mobile",
"tel01",
"tel02",
"tel03",
"fax01",
"fax02",
"fax03",
"sex",
"job",
"birth",
"password",
"reminder",
"reminder_answer",
"first_buy_date",
"last_buy_date",
"buy_times",
"buy_total",
"point",
"note",
"status",
"create_date",
"update_date",
"del_flg",
"mobile_phone_id",
"mailmaga_flg"
               ));
         //別のお届け先データ
         $arrDatabase["dtb_other_deliv"] =array('name' => "顧客データ（別のお届け先）",
         'column' => array(
"other_deliv_id",
"customer_id",
"name01",
"name02",
"kana01",
"kana02",
"zip01",
"zip02",
"pref",
"addr01",
"addr02",
"tel01",
"tel02",
"tel03"
                ));
         //商品データ
         $arrDatabase["dtb_products"] =array('name' => "商品データ",
         'column' => array(
"product_id",
"product_class_id",
"parent_class_combination_id",
"class_combination_id",
"parent_class_id",
"class_id",
"parent_classcategory_id",
"classcategory_id",
"maker_id",
"maker_name",
"name",
"status",
"comment1",
"comment2",
"comment3",
"comment4",
"comment5",
"comment6",
"note",
"main_list_comment",
"main_list_image",
"main_comment",
"main_image",
"main_large_image",
"sub_title1",
"sub_comment1",
"sub_image1",
"sub_large_image1",
"sub_title2",
"sub_comment2",
"sub_image2",
"sub_large_image2",
"sub_title3",
"sub_comment3",
"sub_image3",
"sub_large_image3",
"sub_title4",
"sub_comment4",
"sub_image4",
"sub_large_image4",
"sub_title5",
"sub_comment5",
"sub_image5",
"sub_large_image5",
"deliv_date_id",
"del_flg",
"product_type_id",
"product_code",
"stock",
"stock_unlimited",
"sale_limit",
"price01",
"price02",
"deliv_fee",
"point_rate",
"down_filename",
"down_realfilename",
"recommend_product_id1",
"recommend_comment1",
"recommend_product_id2",
"recommend_comment2",
"recommend_product_id3",
"recommend_comment3",
"recommend_product_id4",
"recommend_comment4",
"recommend_product_id5",
"recommend_comment5",
"recommend_product_id6",
"recommend_comment6",
"product_flag",
"product_flag_name",
"category_id",
"category_name"
                ));
         $arrDatabase["dtb_products_class"] =array('name' => "商品規格データ",
         'column' => array(
                 "product_id"
                ,"product_class_id"
                ,"product_code"
                ,"parent_class_name"
                ,"parent_classcategory_name"
                ,"class_name"
                ,"classcategory_name"
                ,"stock"
                ,"stock_unlimited"
                ,"price01"
                ,"price02"
                ,"point_rate"
                ,"product_type_id"
                ,"down_filename"
                ,"down_realfilename"
                ));
         //商品カテゴリデータ
         $arrDatabase["dtb_category"] =array('name' => "カテゴリデータ",
         'column' => array(
                 "category_id"
                ,"category_name"
                ,"parent_category_id"
                ));
         $arrDatabase["dtb_product_categories"] =array('name' => "カテゴリ商品紐付けデータ",
         'column' => array(
                 "product_id"
                ,"category_id"
                ,"rank"
               ));
         //受注データ
         $arrDatabase["dtb_order"] =array('name' => "受注データ",
         'column' => array(
                 "order_id"
                ,"customer_id"
                ,"message"
                ,"order_name01"
                ,"order_name02"
                ,"order_kana01"
                ,"order_kana02"
                ,"order_email"
                ,"order_tel01"
                ,"order_tel02"
                ,"order_tel03"
                ,"order_fax01"
                ,"order_fax02"
                ,"order_fax03"
                ,"order_zip01"
                ,"order_zip02"
                ,"order_pref"
                ,"order_addr01"
                ,"order_addr02"
                ,"order_sex"
                ,"order_birth"
                ,"order_job"
                ,"shipping_name01"
                ,"shipping_name02"
                ,"shipping_kana01"
                ,"shipping_kana02"
                ,"shipping_tel01"
                ,"shipping_tel02"
                ,"shipping_tel03"
                ,"shipping_fax01"
                ,"shipping_fax02"
                ,"shipping_fax03"
                ,"shipping_zip01"
                ,"shipping_zip02"
                ,"shipping_pref"
                ,"shipping_addr01"
                ,"shipping_addr02"
                ,"subtotal"
                ,"discount"
                ,"deliv_id"
                ,"deliv_fee"
                ,"charge"
                ,"use_point"
                ,"add_point"
                ,"birth_point"
                ,"tax"
                ,"total"
                ,"payment_total"
                ,"payment_id"
                ,"payment_method"
                ,"time_id"
                ,"deliv_time"
                ,"note"
                ,"status"
                ,"create_date"
                ,"update_date"
                ,"commit_date"
                ,"payment_date"
                ,"device_type_id"
                ,"del_flg"
                ,"shipping_date"
                ,"memo01"
                ,"memo02"
                ,"memo03"
                ,"memo04"
                ,"memo05"
                ,"memo06"
                ,"memo07"
                ,"memo08"
                ,"memo09"
                ,"memo10"
                ));
         $arrDatabase["dtb_order_detail"] =array('name' => "受注詳細データ",
         'column' => array(
                 "order_id"
                ,"product_id"
                //,"'' as product_class_id"
                ,"parent_class_name"
                ,"parent_classcategory_name"
                ,"class_name"
                ,"classcategory_name"
                ,"product_name"
                ,"product_code"
                ,"price"
                ,"quantity"
                ,"point_rate"
               ));
         return $arrDatabase;
    }
}
?>