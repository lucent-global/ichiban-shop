<?php /* Smarty version 2.6.26, created on 2012-04-20 06:37:29
         compiled from products/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'products/index.tpl', 60, false),array('modifier', 'h', 'products/index.tpl', 73, false),array('modifier', 'sfGetErrorColor', 'products/index.tpl', 73, false),array('modifier', 'sfNoImageMainList', 'products/index.tpl', 245, false),array('modifier', 'number_format', 'products/index.tpl', 253, false),array('modifier', 'sfTrimURL', 'products/index.tpl', 269, false),array('modifier', 'sfTrim', 'products/index.tpl', 281, false),array('modifier', 'count', 'products/index.tpl', 295, false),array('function', 'html_options', 'products/index.tpl', 101, false),array('function', 'html_checkboxes', 'products/index.tpl', 108, false),)), $this); ?>
<script type="text/javascript">
// URLの表示非表示切り替え
function lfnDispChange(){
    inner_id = 'switch';

    cnt = document.form1.item_cnt.value;

    if($('#disp_url1').css("display") == 'none'){
        for (i = 1; i <= cnt; i++) {
            disp_id = 'disp_url'+i;
            $('#' + disp_id).css("display", "");

            disp_id = 'disp_cat'+i;
            $('#' + disp_id).css("display", "none");

            $('#' + inner_id).html('    URL <a href="#" onClick="lfnDispChange();"> &gt;&gt; カテゴリ表示<\/a>');
        }
    }else{
        for (i = 1; i <= cnt; i++) {
            disp_id = 'disp_url'+i;
            $('#' + disp_id).css("display", "none");

            disp_id = 'disp_cat'+i;
            $('#' + disp_id).css("display", "");

            $('#' + inner_id).html('    カテゴリ <a href="#" onClick="lfnDispChange();"> &gt;&gt; URL表示<\/a>');
        }
    }

}

</script>


<div id="products" class="contents-main">
<form name="search_form" id="search_form" method="post" action="?">
    <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
    <input type="hidden" name="mode" value="search" />
    <h2>検索条件設定</h2>

    <!--検索条件設定テーブルここから-->
    <table>
        <tr>
            <th>商品ID</th>
            <td colspan="3">
                <?php $this->assign('key', 'search_product_id'); ?>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <?php endif; ?>
                <input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['length'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" size="30" class="box30"/>
            </td>
        </tr>
        <tr>
            <th>商品コード</th>
            <td>
                <?php $this->assign('key', 'search_product_code'); ?>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <?php endif; ?>
                <input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['length'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" size="30" class="box30" />
            </td>
            <th>商品名</th>
            <td>
                <?php $this->assign('key', 'search_name'); ?>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <?php endif; ?>
                <input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['length'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" size="30" class="box30" />
            </td>
        </tr>
        <tr>
            <th>カテゴリ</th>
            <td>
                <?php $this->assign('key', 'search_category_id'); ?>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <select name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
                <option value="">選択してください</option>
                <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrCatList'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                </select>
            </td>
            <th>種別</th>
            <td>
                <?php $this->assign('key', 'search_status'); ?>
                <span class="attention"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</span>
                <?php echo smarty_function_html_checkboxes(array('name' => ($this->_tpl_vars['key']),'options' => ((is_array($_tmp=$this->_tpl_vars['arrDISP'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

            </td>
        </tr>
        <tr>
            <th>登録・更新日</th>
            <td colspan="3">
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['search_startyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['arrErr']['search_endyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['search_startyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['search_endyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <?php endif; ?>
                <select name="search_startyear" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['search_startyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
                <option value="">----</option>
                <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrStartYear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_startyear']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                </select>年
                <select name="search_startmonth" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['search_startyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
                <option value="">--</option>
                <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrStartMonth'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_startmonth']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                </select>月
                <select name="search_startday" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['search_startyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
                <option value="">--</option>
                <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrStartDay'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_startday']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                </select>日～
                <select name="search_endyear" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['search_endyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
                <option value="">----</option>
                <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrEndYear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_endyear']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                </select>年
                <select name="search_endmonth" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['search_endyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
                <option value="">--</option>
                <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrEndMonth'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_endmonth']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                </select>月
                <select name="search_endday" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['search_endyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
                <option value="">--</option>
                <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrEndDay'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_endday']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                </select>日
            </td>
        </tr>
        <tr>
            <th>商品ステータス</th>
            <td colspan="3">
            <?php $this->assign('key', 'search_product_statuses'); ?>
            <span class="attention"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</span>
            <?php echo smarty_function_html_checkboxes(array('name' => ($this->_tpl_vars['key']),'options' => ((is_array($_tmp=$this->_tpl_vars['arrSTATUS'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

            </td>
        </tr>
    </table>
    <div class="btn">
        <p class="page_rows">検索結果表示件数
        <?php $this->assign('key', 'search_page_max'); ?>
        <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
            <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
        <?php endif; ?>
        <select name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
            <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrPageMax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_page_max']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

        </select> 件</p>

        <div class="btn-area">
            <ul>
                <li><a class="btn-action" href="javascript:;" onclick="fnFormModeSubmit('search_form', 'search', '', ''); return false;"><span class="btn-next">この条件で検索する</span></a></li>
            </ul>
        </div>

    </div>
    <!--検索条件設定テーブルここまで-->
</form>  


<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrErr'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) == 0 && ( ((is_array($_tmp=$_POST['mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'search' || ((is_array($_tmp=$_POST['mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'delete' )): ?>

<!--★★検索結果一覧★★-->
<form name="form1" id="form1" method="post" action="?">
    <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
    <input type="hidden" name="mode" value="search" />
    <input type="hidden" name="product_id" value="" />
    <input type="hidden" name="category_id" value="" />
    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrHidden'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
    <h2>検索結果一覧</h2>
    <div class="btn">
        <span class="attention"><!--検索結果数--><?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_linemax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
件</span>&nbsp;が該当しました。
        <!--検索結果-->
        <?php if (((is_array($_tmp=@ADMIN_MODE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == '1'): ?>
            <a class="btn-normal" href="javascript:;" onclick="fnModeSubmit('delete_all','',''); return false;">検索結果をすべて削除</a>
        <?php endif; ?>
        <a class="btn-tool" href="javascript:;" onclick="fnModeSubmit('csv','',''); return false;">CSV ダウンロード</a>
        <a class="btn-tool" href="../contents/csv.php?tpl_subno_csv=product">CSV 出力項目設定</a>
    </div>
    <?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrProducts'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['tpl_pager'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <!--検索結果表示テーブル-->
        <table class="list" id="products-search-result">
            <col width="5%" />
            <col width="8%" />
            <col width="8%" />
            <col width="8%" />
            <col width="25%" />
            <col width="8%" />
            <col width="8%" />
            <col width="5%" />
            <col width="5%" />
            <col width="5%" />
            <col width="5%" />
            <col width="5%" />
            <tr>
                <th rowspan="2">商品ID</th>
                <th rowspan="2">商品画像</th>
                <th rowspan="2">商品コード</th>
                <th rowspan="2">価格(円)</th>
                <th>商品名</th>
                <th rowspan="2">在庫</th>
                <th rowspan="2">種別</th>
                <th rowspan="2">編集</th>
                <th rowspan="2">確認</th>
                <?php if (((is_array($_tmp=@OPTION_CLASS_REGIST)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>
                <th rowspan="2">規格</th>
                <?php endif; ?>
                <th rowspan="2">削除</th>
                <th rowspan="2">複製</th>
            </tr>
            <tr>
                <th nowrap><a href="#" onClick="lfnDispChange(); return false;">カテゴリ ⇔ URL</a></th>
            </tr>

            <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrProducts'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <?php $this->assign('status', ($this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['status'])); ?>
                <tr style="background:<?php echo ((is_array($_tmp=$this->_tpl_vars['arrPRODUCTSTATUS_COLOR'][$this->_tpl_vars['status']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;">
                    <td class="id" rowspan="2"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
                    <td class="thumbnail" rowspan="2">
                    <img src="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
resize_image.php?image=<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['main_list_image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfNoImageMainList', true, $_tmp) : SC_Utils_Ex::sfNoImageMainList($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
&amp;width=65&amp;height=65">            </td>
                    <td rowspan="2"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['product_code_min'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

                        <?php if (((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['product_code_min'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['product_code_max'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                            <br />～ <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['product_code_max'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

                        <?php endif; ?>
                    </td>
                                        <td rowspan="2" class="right">
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['price02_min'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>

                        <?php if (((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['price02_min'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['price02_max'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                            <br />～ <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['price02_max'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>

                        <?php endif; ?>            </td>
                    <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                                                            <td class="menu" rowspan="2">
                        <?php if (((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['stock_unlimited_min'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>無制限<?php else: ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['stock_min'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
<?php endif; ?>
                        <?php if (((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['stock_unlimited_min'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['stock_unlimited_max'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['stock_min'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['stock_max'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                            <br />～ <?php if (((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['stock_unlimited_max'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>無制限<?php else: ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['stock_max'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
<?php endif; ?>
                        <?php endif; ?>            </td>
                                        <?php $this->assign('key', ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))); ?>
                    <td class="menu" rowspan="2"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrDISP'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
                    <td class="menu" rowspan="2"><span class="icon_edit"><a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" onclick="fnChangeAction('./product.php'); fnModeSubmit('pre_edit', 'product_id', <?php echo ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;" >編集</a></span></td>
                    <td class="menu" rowspan="2"><span class="icon_confirm"><a href="<?php echo ((is_array($_tmp=((is_array($_tmp=@HTTP_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfTrimURL', true, $_tmp) : SC_Utils_Ex::sfTrimURL($_tmp)); ?>
/products/detail.php?product_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
&amp;admin=on" target="_blank">確認</a></span></td>
                    <?php if (((is_array($_tmp=@OPTION_CLASS_REGIST)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>
                    <td class="menu" rowspan="2"><span class="icon_class"><a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" onclick="fnChangeAction('./product_class.php'); fnModeSubmit('pre_edit', 'product_id', <?php echo ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;" >規格</a></span></td>
                    <?php endif; ?>
                    <td class="menu" rowspan="2"><span class="icon_delete"><a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" onclick="fnSetFormValue('category_id', '<?php echo ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); fnModeSubmit('delete', 'product_id', <?php echo ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;">削除</a></span></td>
                    <td class="menu" rowspan="2"><span class="icon_copy"><a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" onclick="fnChangeAction('./product.php'); fnModeSubmit('copy', 'product_id', <?php echo ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;" >複製</a></span></td>
                </tr>
                <tr style="background:<?php echo ((is_array($_tmp=$this->_tpl_vars['arrPRODUCTSTATUS_COLOR'][$this->_tpl_vars['status']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;">
                    <td>
                                                <div id="disp_cat<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="display:<?php echo ((is_array($_tmp=$this->_tpl_vars['cat_flg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">
                            <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['categories'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['categories'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['categories']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['category_id']):
        $this->_foreach['categories']['iteration']++;
?>
                                <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrCatList'][$this->_tpl_vars['category_id']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfTrim', true, $_tmp) : SC_Utils_Ex::sfTrim($_tmp)); ?>

                                <?php if (! ((is_array($_tmp=($this->_foreach['categories']['iteration'] == $this->_foreach['categories']['total']))) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><br /><?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                        </div>

                                                <div id="disp_url<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="display:none">
                            <?php echo ((is_array($_tmp=((is_array($_tmp=@HTTP_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfTrimURL', true, $_tmp) : SC_Utils_Ex::sfTrimURL($_tmp)); ?>
/products/detail.php?product_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

                        </div>
                    </td>
                </tr>
                <!--▲商品<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
-->
            <?php endfor; endif; ?>
        </table>
        <input type="hidden" name="item_cnt" value="<?php echo count(((is_array($_tmp=$this->_tpl_vars['arrProducts'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))); ?>
" />
        <!--検索結果表示テーブル-->
    <?php endif; ?>

</form>

<!--★★検索結果一覧★★-->        
<?php endif; ?>
</div>