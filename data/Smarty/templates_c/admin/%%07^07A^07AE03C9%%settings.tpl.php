<?php /* Smarty version 2.6.26, created on 2012-04-22 22:25:11
         compiled from ownersstore/settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'ownersstore/settings.tpl', 25, false),array('modifier', 'sfGetErrorColor', 'ownersstore/settings.tpl', 38, false),array('modifier', 'h', 'ownersstore/settings.tpl', 38, false),)), $this); ?>
<form name="form1" id="form1" method="post" action="?">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="mode" value="register" />

<div id="ownersstore" class="contents-main">

    <!--入力項目ここから-->
    <p class="remark"><span class="attention">※認証キーは<a href="<?php echo ((is_array($_tmp=@OSTORE_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" target="_blank">EC-CUBEオーナーズストア</a>で取得できます。</span></p>
    <table class="form">
        <tr>
            <th>認証キーの設定</th>
            <td>
                <?php $this->assign('key', 'public_key'); ?>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><?php endif; ?>
                <textarea name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" cols="60" rows="8" class="area60" maxlength="<?php echo ((is_array($_tmp=@MTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea>
            </td>
        </tr>
    </table>
    <!--入力項目ここまで-->

    <!--登録ボタンここから-->
    <div class="btn-area">
        <ul>
            <li><a class="btn-action" href="javascript:;" onclick="fnFormModeSubmit('form1', 'register', '', ''); return false;"><span class="btn-next">この内容で登録する</span></a></li>
        </ul>
    </div>
    <!--登録ボタンここまで-->

</div>
</form>