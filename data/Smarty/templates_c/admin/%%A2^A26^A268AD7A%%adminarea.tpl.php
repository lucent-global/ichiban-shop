<?php /* Smarty version 2.6.26, created on 2012-04-21 13:45:12
         compiled from system/adminarea.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'system/adminarea.tpl', 33, false),array('modifier', 'h', 'system/adminarea.tpl', 40, false),array('modifier', 'sfGetErrorColor', 'system/adminarea.tpl', 66, false),)), $this); ?>
<script type="text/javascript">
jQuery(function(){
    $("a.btn-action").click(function(){
        $("form#form1").submit();
        return false;   
    });
});
</script>
<form name="form1" id="form1" method="post" action="?">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<div id="system" class="contents-main">
    <div class="notice">
        <p class="remark"><span class="attention">間違った設定を適用すると管理画面にアクセス出来なくなる可能性があります。<br/>
        良く解らない場合はこの設定は変更しないでください。</span></p>
        <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['all'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
            <p class="error"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['all'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</p>
        <?php endif; ?>
    </div>
    <h2>管理機能設定</h2>
    <table id="basis-index-admin">
        <tr>
            <th>ディレクトリ名</th>
            <td>
                <?php $this->assign('key', 'admin_dir'); ?>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@ID_MAX_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="40" class="box40" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>"/>/
            </td>
        </tr>
        <tr>
            <th>SSL制限</th>
            <td>
                <?php $this->assign('key', 'admin_force_ssl'); ?>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="checkbox" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="1" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>checked="checked"<?php endif; ?><?php if (! ((is_array($_tmp=$this->_tpl_vars['tpl_enable_ssl'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?> disabled="disabled"<?php endif; ?> /><label for="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">SSLを強制する。</label>
            </td>
        </tr>
        <tr>
            <th>IP制限</th>
            <td>
                <?php $this->assign('key', 'admin_allow_hosts'); ?>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <textarea name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" cols="60" rows="8" class="area60" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" ><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea>
                <span class="attention"> (上限<?php echo ((is_array($_tmp=@LTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span><br />
                <span>※管理機能へのアクセスを特定のIPアドレスからの接続のみに制限します。<br />
                アクセスを許可するIPアドレスを1行づつ入力してください。何も入力しない場合は全てを許可します。</span><br />
            </td>
        </tr>
    </table>


    <div class="btn-area">
        <ul>
            <li><a class="btn-action" href="#"><span class="btn-next">この内容で登録する</span></a></li>
        </ul>
    </div>
</div>
<div style="display: none">
    <div id="maparea">
        <div id="maps" style="width: 300px; height: 300px"></div>
        <a class="btn-normal" href="javascript:;" id="inputPoint">この位置を入力</a>
    </div>
</div>
</form>