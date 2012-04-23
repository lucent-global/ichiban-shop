<?php /* Smarty version 2.6.26, created on 2012-04-22 22:14:22
         compiled from products/product.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'products/product.tpl', 61, false),array('modifier', 'h', 'products/product.tpl', 65, false),array('modifier', 'sfGetErrorColor', 'products/product.tpl', 159, false),array('modifier', 'default', 'products/product.tpl', 210, false),array('modifier', 'function_exists', 'products/product.tpl', 324, false),array('modifier', 'sfNoImageMainList', 'products/product.tpl', 411, false),array('function', 'html_options', 'products/product.tpl', 115, false),array('function', 'html_radios', 'products/product.tpl', 125, false),array('function', 'html_checkboxes', 'products/product.tpl', 131, false),)), $this); ?>
<script type="text/javascript">
// 表示非表示切り替え
function lfDispSwitch(id){
    var obj = document.getElementById(id);
    if (obj.style.display == 'none') {
        obj.style.display = '';
    } else {
        obj.style.display = 'none';
    }
}

// セレクトボックスのリストを移動
// (移動元セレクトボックスID, 移動先セレクトボックスID)
function fnMoveSelect(select, target) {
    $('#' + select).children().each(function() {
        if (this.selected) {
            $('#' + target).append(this);
            $(this).attr({selected: false});
        }
    });
    // IE7再描画不具合対策
    if ($.browser.msie && $.browser.version >= 7) {
        $('#' + select).hide();
        $('#' + select).show();
        $('#' + target).hide();
        $('#' + target).show();
    }
}

// target の子要素を選択状態にする
function selectAll(target) {
    $('#' + target).children().attr({selected: true});
}

</script>

<form name="form1" id="form1" method="post" action="?" enctype="multipart/form-data">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrSearchHidden'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
    <?php if (is_array ( ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) )): ?>
        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c_item']):
?>
        <input type="hidden" name="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
[]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['c_item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
        <?php endforeach; endif; unset($_from); ?>
    <?php else: ?>
        <input type="hidden" name="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
    <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<input type="hidden" name="mode" value="edit" />
<input type="hidden" name="image_key" value="" />
<input type="hidden" name="down_key" value="">
<input type="hidden" name="product_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
<input type="hidden" name="product_class_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['product_class_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
<input type="hidden" name="copy_product_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['copy_product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
<input type="hidden" name="anchor_key" value="" />
<input type="hidden" name="select_recommend_no" value="" />
<input type="hidden" name="has_product_class" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['has_product_class'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
<?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrForm']['arrHidden'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
<?php endforeach; endif; unset($_from); ?>
<div id="products" class="contents-main">
    <h2>基本情報</h2>

    <table class="form">
        <tr>
            <th>商品ID</th>
            <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
        </tr>
        <tr>
            <th>商品名<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="name" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" size="60" class="box60" />
                <span class="attention"> (上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th>商品カテゴリ<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <table class="layout">
                    <tr>
                        <td>
                            <select name="category_id[]" id="category_id" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?> height: 120px; min-width: 200px;" onchange="" size="10" multiple>
                            </select>
                        </td>
                        <td style="padding: 15px;">
                            <a class="btn-normal" href="javascript:;" name="on_select" onclick="fnMoveSelect('category_id_unselect','category_id'); return false;">&nbsp;&nbsp;&lt;-&nbsp;登録&nbsp;&nbsp;</a><br /><br />
                            <a class="btn-normal" href="javascript:;" name="un_select" onclick="fnMoveSelect('category_id','category_id_unselect'); return false;">&nbsp;&nbsp;削除&nbsp;-&gt;&nbsp;&nbsp;</a>
                        </td>
                        <td>
                            <select name="category_id_unselect[]" id="category_id_unselect" onchange="" size="10" style="height: 120px; min-width: 200px;" multiple>
                                <?php echo smarty_function_html_options(array('values' => ((is_array($_tmp=$this->_tpl_vars['arrCatVal'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'output' => ((is_array($_tmp=$this->_tpl_vars['arrCatOut'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                            </select>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <th>公開・非公開<span class="attention"> *</span></th>
            <td>
                <?php echo smarty_function_html_radios(array('name' => 'status','options' => ((is_array($_tmp=$this->_tpl_vars['arrDISP'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'separator' => '&nbsp;&nbsp;'), $this);?>

            </td>
        </tr>
        <tr>
            <th>商品ステータス</th>
            <td>
                <?php echo smarty_function_html_checkboxes(array('name' => 'product_status','options' => ((is_array($_tmp=$this->_tpl_vars['arrSTATUS'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['product_status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'separator' => '&nbsp;&nbsp;'), $this);?>

            </td>
        </tr>
        <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['has_product_class'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == false): ?>
        <tr>
            <th>商品種別<span class="attention"> *</span></th>
            <td>
                <?php echo smarty_function_html_radios(array('name' => 'product_type_id','options' => ((is_array($_tmp=$this->_tpl_vars['arrProductType'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['product_type_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'separator' => '&nbsp;&nbsp;'), $this);?>

            </td>
        </tr>
        <tr>
            <th>ダウンロード商品ファイル名<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['down_filename'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="down_filename" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['down_filename'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['down_filename'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php endif; ?>" size="60" class="box60" />
                <span class="red"> (上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
        <tr>
            <?php $this->assign('key', 'down_file'); ?>
            <th>ダウンロード商品用<br />ファイルアップロード<span class="attention"> *</span></th>
            <td>
                <a name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"></a>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['down_realfilename'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['down_realfilename'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['down_realfilename'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
<input type="hidden" name="down_realfilename" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['down_realfilename'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
">
                        <a href="" onclick="selectAll('category_id'); fnModeSubmit('delete_down', 'down_key', '<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;">[ファイルの取り消し]</a><br>
                    <?php endif; ?>
                    <input type="file" name="down_file" size="40" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" />
                    <a class="btn-normal" href="javascript:;" name="btn" onclick="selectAll('category_id'); fnModeSubmit('upload_down', 'down_key', '<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;">アップロード</a><br />登録可能拡張子：<?php echo ((is_array($_tmp=@DOWNLOAD_EXTENSION)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
　(パラメーター DOWNLOAD_EXTENSION)
            </td>
        </tr>
        <tr>
            <th>商品コード<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['product_code'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="product_code" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['product_code'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['product_code'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" size="60" class="box60" />
                <span class="attention"> (上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th><?php echo ((is_array($_tmp=@NORMAL_PRICE_TITLE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['price01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="price01" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['price01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="6" class="box6" maxlength="<?php echo ((is_array($_tmp=@PRICE_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['price01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>"/>円
                <span class="attention"> (半角数字で入力)</span>
            </td>
        </tr>
        <tr>
            <th><?php echo ((is_array($_tmp=@SALE_PRICE_TITLE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['price02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="price02" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['price02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="6" class="box6" maxlength="<?php echo ((is_array($_tmp=@PRICE_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['price02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>"/>円
                <span class="attention"> (半角数字で入力)</span>
            </td>
        </tr>
        <tr>
            <th>在庫数<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['stock'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="stock" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['stock'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="6" class="box6" maxlength="<?php echo ((is_array($_tmp=@AMOUNT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['stock'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>"/>
                <input type="checkbox" name="stock_unlimited" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['stock_unlimited'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == '1'): ?>checked<?php endif; ?> onclick="fnCheckStockLimit('<?php echo ((is_array($_tmp=@DISABLED_RGB)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
');"/>無制限
            </td>
        </tr>
        <?php endif; ?>

        <tr>
            <th>商品送料</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['deliv_fee'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="deliv_fee" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['deliv_fee'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="6" class="box6" maxlength="<?php echo ((is_array($_tmp=@PRICE_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['deliv_fee'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>"/>円
                <span class="attention"> (半角数字で入力)</span>
                <?php if (((is_array($_tmp=@OPTION_PRODUCT_DELIV_FEE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 1): ?><br /><span class="attention">※現在無効です</span> (パラメーター OPTION_PRODUCT_DELIV_FEE)<?php endif; ?>
            </td>
        </tr>
        <tr>
            <th>ポイント付与率<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['point_rate'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="point_rate" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['point_rate'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['arrForm']['arrInfo']['point_rate'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['arrForm']['arrInfo']['point_rate'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="6" class="box6" maxlength="<?php echo ((is_array($_tmp=@PERCENTAGE_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['point_rate'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>"/>％
                <span class="attention"> (半角数字で入力)</span>
            </td>
        </tr>
        <tr>
            <th>発送日目安</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['deliv_date_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <select name="deliv_date_id" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['deliv_date_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
                    <option value="">選択してください</option>
                    <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrDELIVERYDATE'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['deliv_date_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                </select>
            </td>
        </tr>
        <tr>
            <th>購入制限</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['sale_limit'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="sale_limit" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['sale_limit'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="6" class="box6" maxlength="<?php echo ((is_array($_tmp=@AMOUNT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['sale_limit'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>"/>
                <span class="attention"> (半角数字で入力)</span>
            </td>
        </tr>
        <tr>
            <th>メーカー</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['maker_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <select name="maker_id" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['maker_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
                    <option value="">選択してください</option>
                    <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrMaker'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['maker_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                </select>
            </td>
        </tr>
        <tr>
            <th>メーカーURL</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['comment1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="comment1" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['comment1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@URL_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['comment1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" />
                <span class="attention"> (上限<?php echo ((is_array($_tmp=@URL_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th>検索ワード<br />※複数の場合は、カンマ( , )区切りで入力して下さい</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['comment3'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <textarea name="comment3" cols="60" rows="8" class="area60" maxlength="<?php echo ((is_array($_tmp=@LLTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['comment3'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['comment3'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea><br />
                <span class="attention"> (上限<?php echo ((is_array($_tmp=@LLTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th>備考欄(SHOP専用)</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['note'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <textarea name="note" cols="60" rows="8" class="area60" maxlength="<?php echo ((is_array($_tmp=@LLTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['note'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['note'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea><br />
                <span class="attention"> (上限<?php echo ((is_array($_tmp=@LLTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th>一覧-メインコメント<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['main_list_comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <textarea name="main_list_comment" maxlength="<?php echo ((is_array($_tmp=@MTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['main_list_comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" cols="60" rows="8" class="area60"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['main_list_comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea><br />
                <span class="attention"> (上限<?php echo ((is_array($_tmp=@MTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th>詳細-メインコメント<span class="attention">(タグ許可)*</span></th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['main_comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <textarea name="main_comment" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['main_comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@LLTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['main_comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" cols="60" rows="8" class="area60"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['main_comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea><br />
                <span class="attention"> (上限<?php echo ((is_array($_tmp=@LLTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
        <tr>
            <?php $this->assign('key', 'main_list_image'); ?>
            <th>一覧-メイン画像<br />[<?php echo ((is_array($_tmp=@SMALL_IMAGE_WIDTH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
×<?php echo ((is_array($_tmp=@SMALL_IMAGE_HEIGHT)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]</th>
            <td>
                <a name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"></a>
                <a name="main_image"></a>
                <a name="main_large_image"></a>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['arrFile'][$this->_tpl_vars['key']]['filepath'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
                <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['arrFile'][$this->_tpl_vars['key']]['filepath'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />　<a href="" onclick="selectAll('category_id'); fnModeSubmit('delete_image', 'image_key', '<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;">[画像の取り消し]</a><br />
                <?php endif; ?>
                <input type="file" name="main_list_image" size="40" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" />
                <a class="btn-normal" href="javascript:;" name="btn" onclick="selectAll('category_id'); fnModeSubmit('upload_image', 'image_key', '<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;">アップロード</a>
            </td>
        </tr>
        <tr>
            <?php $this->assign('key', 'main_image'); ?>
            <th>詳細-メイン画像<br />[<?php echo ((is_array($_tmp=@NORMAL_IMAGE_WIDTH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
×<?php echo ((is_array($_tmp=@NORMAL_IMAGE_HEIGHT)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['arrFile'][$this->_tpl_vars['key']]['filepath'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
                <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['arrFile'][$this->_tpl_vars['key']]['filepath'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />　<a href="" onclick="selectAll('category_id'); fnModeSubmit('delete_image', 'image_key', '<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;">[画像の取り消し]</a><br />
                <?php endif; ?>
                <input type="file" name="main_image" size="40" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" />
                <a class="btn-normal" href="javascript:;" name="btn" onclick="selectAll('category_id'); fnModeSubmit('upload_image', 'image_key', '<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;">アップロード</a>
            </td>
        </tr>
        <tr>
            <?php $this->assign('key', 'main_large_image'); ?>
            <th>詳細-メイン拡大画像<br />[<?php echo ((is_array($_tmp=@LARGE_IMAGE_WIDTH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
×<?php echo ((is_array($_tmp=@LARGE_IMAGE_HEIGHT)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['arrFile'][$this->_tpl_vars['key']]['filepath'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
                <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['arrFile'][$this->_tpl_vars['key']]['filepath'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />　<a href="" onclick="selectAll('category_id'); fnModeSubmit('delete_image', 'image_key', '<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;">[画像の取り消し]</a><br />
                <?php endif; ?>
                <input type="file" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="40" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" />
                <a class="btn-normal" href="javascript:;" name="btn" onclick="selectAll('category_id'); fnModeSubmit('upload_image', 'image_key', '<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;">アップロード</a>
            </td>
        </tr>
    </table>

        <?php if (((is_array($_tmp='sfViewAdminOpe')) ? $this->_run_mod_handler('function_exists', true, $_tmp) : function_exists($_tmp)) === TRUE): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => (@MODULE_REALDIR)."mdl_opebuilder/admin_ope_view.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>

    <div class="btn">
        <a class="btn-normal" href="javascript:;" onclick="selectAll('category_id'); lfDispSwitch('sub_detail'); return false;"><span>サブ情報表示/非表示</span></a>
    </div>

    <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['sub_find'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == true): ?>
    <div id="sub_detail" style="">
    <?php else: ?>
    <div id="sub_detail" style="display:none">
    <?php endif; ?>
    <h2>サブ情報</h2>
    <table class="form">
        <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=@PRODUCTSUB_MAX)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cnt']['show'] = true;
$this->_sections['cnt']['max'] = $this->_sections['cnt']['loop'];
$this->_sections['cnt']['step'] = 1;
$this->_sections['cnt']['start'] = $this->_sections['cnt']['step'] > 0 ? 0 : $this->_sections['cnt']['loop']-1;
if ($this->_sections['cnt']['show']) {
    $this->_sections['cnt']['total'] = $this->_sections['cnt']['loop'];
    if ($this->_sections['cnt']['total'] == 0)
        $this->_sections['cnt']['show'] = false;
} else
    $this->_sections['cnt']['total'] = 0;
if ($this->_sections['cnt']['show']):

            for ($this->_sections['cnt']['index'] = $this->_sections['cnt']['start'], $this->_sections['cnt']['iteration'] = 1;
                 $this->_sections['cnt']['iteration'] <= $this->_sections['cnt']['total'];
                 $this->_sections['cnt']['index'] += $this->_sections['cnt']['step'], $this->_sections['cnt']['iteration']++):
$this->_sections['cnt']['rownum'] = $this->_sections['cnt']['iteration'];
$this->_sections['cnt']['index_prev'] = $this->_sections['cnt']['index'] - $this->_sections['cnt']['step'];
$this->_sections['cnt']['index_next'] = $this->_sections['cnt']['index'] + $this->_sections['cnt']['step'];
$this->_sections['cnt']['first']      = ($this->_sections['cnt']['iteration'] == 1);
$this->_sections['cnt']['last']       = ($this->_sections['cnt']['iteration'] == $this->_sections['cnt']['total']);
?>
        <!--▼商品<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
-->
        <tr>
            <th>詳細-サブタイトル(<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
)</th>
            <?php $this->assign('key', "sub_title".($this->_sections['cnt']['iteration'])); ?>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="sub_title<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="60" class="box60" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
"/>
                <span class="attention"> (上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th>詳細-サブコメント(<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
)<span class="attention">(タグ許可)</span></th>
            <?php $this->assign('key', "sub_comment".($this->_sections['cnt']['iteration'])); ?>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <textarea name="sub_comment<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" cols="60" rows="8" class="area60" maxlength="<?php echo ((is_array($_tmp=@LLTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea><br />
                <span class="attention"> (上限<?php echo ((is_array($_tmp=@LLTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
        <tr>
            <?php $this->assign('key', "sub_image".($this->_sections['cnt']['iteration'])); ?>
            <th>詳細-サブ画像(<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
)<br />[<?php echo ((is_array($_tmp=@NORMAL_SUBIMAGE_WIDTH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
×<?php echo ((is_array($_tmp=@NORMAL_SUBIMAGE_HEIGHT)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]</th>
            <td>
                <a name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"></a>
                <?php $this->assign('largekey', "sub_large_image".($this->_sections['cnt']['iteration'])); ?>
                <a name="<?php echo ((is_array($_tmp=$this->_tpl_vars['largekey'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"></a>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['arrFile'][$this->_tpl_vars['key']]['filepath'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
                <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['arrFile'][$this->_tpl_vars['key']]['filepath'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />　<a href="" onclick="selectAll('category_id'); fnModeSubmit('delete_image', 'image_key', '<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;">[画像の取り消し]</a><br />
                <?php endif; ?>
                <input type="file" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="40" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
"/>
                <a class="btn-normal" href="javascript:;" name="btn" onclick="selectAll('category_id'); fnModeSubmit('upload_image', 'image_key', '<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;">アップロード</a>
            </td>
        </tr>
        <tr>
            <?php $this->assign('key', "sub_large_image".($this->_sections['cnt']['iteration'])); ?>
            <th>詳細-サブ拡大画像(<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
)<br />[<?php echo ((is_array($_tmp=@LARGE_SUBIMAGE_WIDTH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
×<?php echo ((is_array($_tmp=@LARGE_SUBIMAGE_HEIGHT)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['arrFile'][$this->_tpl_vars['key']]['filepath'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
                <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['arrFile'][$this->_tpl_vars['key']]['filepath'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />　<a href="" onclick="selectAll('category_id'); fnModeSubmit('delete_image', 'image_key', '<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;">[画像の取り消し]</a><br />
                <?php endif; ?>
                <input type="file" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="40" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
"/>
                <a class="btn-normal" href="javascript:;" name="btn" onclick="selectAll('category_id'); fnModeSubmit('upload_image', 'image_key', '<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;">アップロード</a>
            </td>
        </tr>
        <!--▲商品<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
-->
        <?php endfor; endif; ?>
    </table>
    </div>

    <div class="btn">
        <a class="btn-normal" href="javascript:;" onclick="selectAll('category_id'); lfDispSwitch('recommend_select'); return false;"><span>関連商品表示/非表示</span></a>
    </div>

    <?php if (((is_array($_tmp=@OPTION_RECOMMEND)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>
    <?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrRecommend'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?>
    <div id="recommend_select" style="">
    <?php else: ?>
    <div id="recommend_select" style="display:none">
    <?php endif; ?>
    <h2>関連商品</h2>
    <table class="form">
        <!--▼関連商品-->
        <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=@RECOMMEND_PRODUCT_MAX)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cnt']['show'] = true;
$this->_sections['cnt']['max'] = $this->_sections['cnt']['loop'];
$this->_sections['cnt']['step'] = 1;
$this->_sections['cnt']['start'] = $this->_sections['cnt']['step'] > 0 ? 0 : $this->_sections['cnt']['loop']-1;
if ($this->_sections['cnt']['show']) {
    $this->_sections['cnt']['total'] = $this->_sections['cnt']['loop'];
    if ($this->_sections['cnt']['total'] == 0)
        $this->_sections['cnt']['show'] = false;
} else
    $this->_sections['cnt']['total'] = 0;
if ($this->_sections['cnt']['show']):

            for ($this->_sections['cnt']['index'] = $this->_sections['cnt']['start'], $this->_sections['cnt']['iteration'] = 1;
                 $this->_sections['cnt']['iteration'] <= $this->_sections['cnt']['total'];
                 $this->_sections['cnt']['index'] += $this->_sections['cnt']['step'], $this->_sections['cnt']['iteration']++):
$this->_sections['cnt']['rownum'] = $this->_sections['cnt']['iteration'];
$this->_sections['cnt']['index_prev'] = $this->_sections['cnt']['index'] - $this->_sections['cnt']['step'];
$this->_sections['cnt']['index_next'] = $this->_sections['cnt']['index'] + $this->_sections['cnt']['step'];
$this->_sections['cnt']['first']      = ($this->_sections['cnt']['iteration'] == 1);
$this->_sections['cnt']['last']       = ($this->_sections['cnt']['iteration'] == $this->_sections['cnt']['total']);
?>
        <?php $this->assign('recommend_no', ($this->_sections['cnt']['iteration'])); ?>
        <tr>
            <?php $this->assign('key', "recommend_id".($this->_sections['cnt']['iteration'])); ?>
            <?php $this->assign('anckey', "recommend_no".($this->_sections['cnt']['iteration'])); ?>
            <th>関連商品(<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
)<br />
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrRecommend'][$this->_tpl_vars['recommend_no']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <img src="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
resize_image.php?image=<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrRecommend'][$this->_tpl_vars['recommend_no']]['main_list_image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfNoImageMainList', true, $_tmp) : SC_Utils_Ex::sfNoImageMainList($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
&width=65&height=65" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrRecommend'][$this->_tpl_vars['recommend_no']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                <?php endif; ?>
            </th>
            <td>
                <a name="<?php echo ((is_array($_tmp=$this->_tpl_vars['anckey'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"></a>
                <input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrRecommend'][$this->_tpl_vars['recommend_no']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                <a class="btn-normal" href="javascript:;" name="change" onclick="selectAll('category_id'); win03('./product_select.php?no=<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
', 'search', '615', '500'); return false;">変更</a>
                <?php $this->assign('key', "recommend_delete".($this->_sections['cnt']['iteration'])); ?>
                <input type="checkbox" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="1" />削除<br />
               <?php $this->assign('key', "recommend_comment".($this->_sections['cnt']['iteration'])); ?>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                商品コード:<?php echo ((is_array($_tmp=$this->_tpl_vars['arrRecommend'][$this->_tpl_vars['recommend_no']]['product_code_min'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<br />
                商品名:<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrRecommend'][$this->_tpl_vars['recommend_no']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
<br />
                <textarea name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" cols="60" rows="8" class="area60" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" ><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrRecommend'][$this->_tpl_vars['recommend_no']]['comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea><br />
                <span class="attention"> (上限<?php echo ((is_array($_tmp=@LTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
        <?php endfor; endif; ?>
        <!--▲関連商品-->
    </table>
    </div>
    <?php endif; ?>

    <div class="btn-area">
        <?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrSearchHidden'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?>
        <!--▼検索結果へ戻る-->
        <ul>
            <li><a class="btn-action" href="javascript:;" onclick="fnChangeAction('<?php echo ((is_array($_tmp=@ADMIN_PRODUCTS_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); fnModeSubmit('search','',''); return false;"><span class="btn-prev">検索画面に戻る</span></a></li>
        <!--▲検索結果へ戻る-->
        <?php endif; ?>
            <li><a class="btn-action" href="javascript:;" onclick="selectAll('category_id'); document.form1.submit(); return false;"><span class="btn-next">確認ページへ</span></a></li>
        </ul>
    </div>
</div>
</form>