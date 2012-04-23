<?php /* Smarty version 2.6.26, created on 2012-04-21 14:43:03
         compiled from customer/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'customer/index.tpl', 59, false),array('modifier', 'h', 'customer/index.tpl', 94, false),array('function', 'html_checkboxes', 'customer/index.tpl', 69, false),array('function', 'html_options', 'customer/index.tpl', 75, false),array('function', 'mailto', 'customer/index.tpl', 146, false),)), $this); ?>
<script type="text/javascript">
<!--

    function fnDelete(customer_id) {
        if (confirm('この顧客情報を削除しても宜しいですか？')) {
            document.form1.mode.value = "delete"
            document.form1['edit_customer_id'].value = customer_id;
            document.form1.submit();
            return false;
        }
    }

    function fnEdit(customer_id) {
        document.form1.action = './edit.php';
        document.form1.mode.value = "edit_search"
        document.form1['edit_customer_id'].value = customer_id;
        document.form1.search_pageno.value = 1;
        document.form1.submit();
        return false;
    }

    function fnReSendMail(customer_id) {
        if (confirm('仮登録メールを再送しても宜しいですか？')) {
            document.form1.mode.value = "resend_mail"
            document.form1['edit_customer_id'].value = customer_id;
            document.form1.submit();
            return false;
        }
    }
//-->
</script>


<div id="customer" class="contents-main">
<form name="search_form" id="search_form" method="post" action="?">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="mode" value="search" />

    <h2>検索条件設定</h2>

    <!--検索条件設定テーブルここから-->
    <table class="form">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => (@TEMPLATE_ADMIN_REALDIR)."/adminparts/form_customer_search.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <tr>
            <th>会員状態</th>
            <td colspan="3"><?php echo smarty_function_html_checkboxes(array('name' => 'search_status','options' => ((is_array($_tmp=$this->_tpl_vars['arrStatus'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'separator' => "&nbsp;",'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_status']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>
</td>
        </tr>
    </table>
    <div class="btn">
        <p class="page_rows">検索結果表示件数
        <select name="search_page_max">
            <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrPageMax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_page_max'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

        </select> 件</p>
        <div class="btn-area">
            <ul>
                <li><a class="btn-action" href="javascript:;" onclick="fnFormModeSubmit('search_form', 'search', '', ''); return false;"><span class="btn-next">この条件で検索する</span></a></li>
            </ul>
        </div>
    </div>
</form>
<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrErr'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) == 0 && ( ((is_array($_tmp=$_POST['mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'search' || ((is_array($_tmp=$_POST['mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'delete' || ((is_array($_tmp=$_POST['mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'resend_mail' )): ?>

<!--★★検索結果一覧★★-->
<form name="form1" id="form1" method="post" action="?">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="mode" value="search" />
<input type="hidden" name="edit_customer_id" value="" />
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
        <a class="btn-normal" href="javascript:;" onclick="fnModeSubmit('csv','',''); return false;">CSV ダウンロード</a>
        <a class="btn-normal" href="javascript:;" onclick="location.href='../contents/csv.php?tpl_subno_csv=customer'">CSV 出力項目設定</a>
    </div>
    <?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrData'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['tpl_pager'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <!--検索結果表示テーブル-->
    <table class="list" id="customer-search-result">
        <col width="5%" />
        <col width="10%" />
        <col width="25%" />
        <col width="5%" />
        <col width="30%" />
        <col width="7%" />
        <col width="7%" />
        <tr>
            <th rowspan="2">種別</th>
            <th>顧客ID</th>
            <th rowspan="2">お名前/(フリガナ)</th>
            <th rowspan="2">性別</th>
            <th>TEL</th>
            <th rowspan="2">編集</th>
            <th rowspan="2">削除</th>
        </tr>
        <tr>
            <th>都道府県</th>
            <th>メールアドレス</th>
        </tr>
        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrData'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
            <tr>
                <td class="center" rowspan="2"><?php if (((is_array($_tmp=$this->_tpl_vars['row']['status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>仮<?php else: ?>本<?php endif; ?></td>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['customer_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                <td rowspan="2"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['name01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['name02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
<br>(<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['kana01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['kana02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
)</td>
                <td class="center" rowspan="2"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrSex'][$this->_tpl_vars['row']['sex']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['tel01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
-<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['tel02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
-<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['tel03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                <td class="center" rowspan="2"><span class="icon_edit"><a href="#" onclick="return fnEdit('<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['customer_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
');">編集</a></span></td>
                <td class="center" rowspan="2"><span class="icon_delete"><a href="#" onclick="return fnDelete('<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['customer_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
');">削除</a></span></td>
            </tr>
            <tr>
                <td><?php $this->assign('pref', ((is_array($_tmp=$this->_tpl_vars['row']['pref'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['arrPref'][$this->_tpl_vars['pref']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
                <td><?php echo smarty_function_mailto(array('address' => ((is_array($_tmp=$this->_tpl_vars['row']['email'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'encode' => 'javascript'), $this);?>
</a><?php if (((is_array($_tmp=$this->_tpl_vars['row']['status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?><br /><a href="#" onclick="return fnReSendMail('<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['customer_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
');">仮登録メール再送</a><?php endif; ?></td>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
    </table>
    <!--検索結果表示テーブル-->

    <?php endif; ?>
</form>
<!--★★検索結果一覧★★-->

<?php endif; ?>
</div>