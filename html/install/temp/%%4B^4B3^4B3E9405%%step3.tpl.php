<?php /* Smarty version 2.6.26, created on 2012-04-18 02:50:03
         compiled from step3.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'step3.tpl', 42, false),array('modifier', 'h', 'step3.tpl', 46, false),)), $this); ?>
<script type="text/javascript">
<!--
    // モードとキーを指定してSUBMITを行う。
    function fnModeSubmit(mode) {
        switch(mode) {
        case 'drop':
            if(!window.confirm('一度削除したデータは、元に戻せません。\n削除しても宜しいですか？')){
                return;
            }
            break;
        default:
            break;
        }
        document.form1['mode'].value = mode;
        document.form1.submit();
    }
//-->
</script>

<form name="form1" id="form1" method="post" action="?">
<input type="hidden" name="mode" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="step" value="0" />

<?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrHidden'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
    <input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
<?php endforeach; endif; unset($_from); ?>

<div class="contents">
    <div class="message">
        <h2>データベースの初期化</h2>
    </div>
    <div class="result-info02">
    <p class="action-message">
        <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_db_version'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><span class="bold">接続情報：</span><br />
            <?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_db_version'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

        <?php endif; ?>
        データベースの初期化を開始します。<br />
        ※すでにテーブル等が作成されている場合は中断されます。</P>
        <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'complete'): ?>
            <input type="checkbox" id="skip" name="db_skip" <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_db_skip'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'on'): ?>checked="checked"<?php endif; ?> /> <label for="skip">データベースの初期化処理を行わない</label>
        <?php endif; ?>
    </div>
    <div class="result-info02">
        <?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrErr'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0 || ((is_array($_tmp=$this->_tpl_vars['tpl_message'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_message'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<br />
            <span class="attention top"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['all'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
            <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['all'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
                <ul class="btn-area">
                    <li><a class="btn-normal" href="javascript:;" onclick="fnModeSubmit('drop'); return false;">既存データをすべて削除する</a></li>
                </ul>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>

<div class="btn-area-top"></div>
    <div class="btn-area">
        <ul>
            <li><a class="btn-action" href="javascript:;" onclick="document.form1['mode'].value='return_step2';document.form1.submit();return false;"><span class="btn-prev">前へ戻る</span></a></li>
            <li><a class="btn-action" href="javascript:;" onclick="document.body.style.cursor='wait'; document.form1.submit(); return false;"><span class="btn-next">次へ進む</span></a></li>
        </ul>
    </div>
    <div class="btn-area-bottom"></div>
</form>