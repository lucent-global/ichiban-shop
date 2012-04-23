<?php /* Smarty version 2.6.26, created on 2012-04-20 02:23:15
         compiled from system/masterdata.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'system/masterdata.tpl', 26, false),array('modifier', 'h', 'system/masterdata.tpl', 57, false),array('function', 'html_options', 'system/masterdata.tpl', 30, false),)), $this); ?>
<div id="basis" class="contents-main">
    <form name="form1" id="form1" method="post" action="?">
    <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
    <input type="hidden" name="mode" value="show" />
    <div id="basis-masterdata-select" class="btn">
        <select name="master_data_name" id="master_data_name">
        <?php echo smarty_function_html_options(array('output' => ((is_array($_tmp=$this->_tpl_vars['arrMasterDataName'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'values' => ((is_array($_tmp=$this->_tpl_vars['arrMasterDataName'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['masterDataName'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

        </select>
        <a class="btn-normal" href="javascript:;" onclick="fnFormModeSubmit('form1', 'show', '', ''); return false;"><span>選択</span></a>
    </div>
    </form>

    <?php if (((is_array($_tmp=$_POST['mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'show'): ?>

        <form name="form2" id="form2" method="post" action="?">
        <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <input type="hidden" name="mode" value="edit" />
        <input type="hidden" name="master_data_name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['masterDataName'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <p class="remark attention">
            マスターデータの値を設定できます。<br />
            重複したIDを登録することはできません。<br />
            空のIDを登録すると、値は削除されます。<br />
            設定値によってはサイトが機能しなくなる場合もありますので、十分ご注意下さい。
        </p>
        <?php if (((is_array($_tmp=$this->_tpl_vars['errorMessage'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
            <div class="message">
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['errorMessage'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
            </div>
        <?php endif; ?>

        <table class="form">
            <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrMasterData'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['val']):
?>
                <tr>
                    <th>ID：<input type="text" name="id[]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="6" /></th>
                    <td>値：<input type="text" name="name[]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['val'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" style="" size="60" class="box60" /></td>
                </tr>
            <?php endforeach; endif; unset($_from); ?>
        </table>

        <h2>追加のデータ</h2>
        <table class="form">
            <tr>
                <th>ID：<input type="text" name="id[]" size="6" /></th>
                <td>値：<input type="text" name="name[]" style="" size="60" class="box60" /></td>
            </tr>
        </table>
        <div class="btn-area">
            <ul>
                <li><a class="btn-action" href="javascript:;" onclick="document.form2.submit(); return false;"><span class="btn-next">この内容で登録する</span></a></li>
            </ul>
        </div>

        </form>
    <?php endif; ?>

</div>