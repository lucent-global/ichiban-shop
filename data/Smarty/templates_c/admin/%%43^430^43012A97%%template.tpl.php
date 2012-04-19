<?php /* Smarty version 2.6.26, created on 2012-04-19 03:37:25
         compiled from design/template.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'design/template.tpl', 38, false),array('modifier', 'h', 'design/template.tpl', 41, false),)), $this); ?>
<script type="text/javascript"><!--
function submitRegister() {
    var form = document.form1;
    var msg    = "テンプレートを変更します。";

    if (window.confirm(msg)) {
        form['mode'].value = 'register';
        form.submit();
    }
}
// -->
</script>

<form name="form1" method="post" action="?">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="mode" value="" />
<input type="hidden" name="template_code" value="" />
<input type="hidden" name="device_type_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['device_type_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
<div id="design" class="contents-main">
    <p class="remark">
        テンプレートを選択し、「この内容で登録する」ボタンを押すと、<br />
        選択したテンプレートへデザインを変更することが出来ます。
    </p>

    <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['err'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
        <div class="message">
            <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['err'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
        </div>
    <?php endif; ?>

    <table class="list center">
        <col width="5%" />
        <col width="30%" />
        <col width="50%" />
        <col width="10%" />
        <col width="5%" />
        <tr>
            <th>選択</th>
            <th>名前</th>
            <th>保存先</th>
            <th>ダウンロード</th>
            <th class="delete">削除</th>
        </tr>
        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['templates'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tpl']):
?>
        <?php $this->assign('tplcode', ((is_array($_tmp=$this->_tpl_vars['tpl']['template_code'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))); ?>
        <tr class="center">
            <td><input type="radio" name="template_code" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tplcode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['tplcode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['tpl_select'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>checked="checked"<?php endif; ?> /></td>
            <td class="left"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl']['template_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
            <td class="left">data/Smarty/templates/<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tplcode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
/</td>
            <td><span class="icon_confirm"><a href="javascript:;" onClick="fnFormModeSubmit('form2', 'download','template_code','<?php echo ((is_array($_tmp=$this->_tpl_vars['tplcode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
');return false;">ダウンロード</a></span></td>
            <td><span class="icon_delete"><a href="javascript:;" onClick="fnFormModeSubmit('form2', 'delete','template_code','<?php echo ((is_array($_tmp=$this->_tpl_vars['tplcode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
');return false;">削除</a></span></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
    </table>
    <div class="btn-area">
        <ul>
            <li><a class="btn-action" href="javascript:;" onclick="submitRegister();return false;"><span class="btn-next">この内容で登録する</span></a></li>
        </ul>
    </div>
</div>
</form>
<form name="form2" method="post" action="?">
  <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
  <input type="hidden" name="mode" value="" />
  <input type="hidden" name="template_code" value="" />
  <input type="hidden" name="device_type_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['device_type_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
</form>