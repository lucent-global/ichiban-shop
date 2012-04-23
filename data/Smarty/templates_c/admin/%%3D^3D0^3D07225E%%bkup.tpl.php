<?php /* Smarty version 2.6.26, created on 2012-04-21 13:30:51
         compiled from system/bkup.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'system/bkup.tpl', 25, false),array('modifier', 'h', 'system/bkup.tpl', 40, false),array('modifier', 'sfCutString', 'system/bkup.tpl', 79, false),)), $this); ?>
<form name="form1" id="form1" method="post" action="" onsubmit="return false;">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="mode" value="edit" />
<input type="hidden" name="list_name" value="" />
<div id="system" class="contents-main">
    <p class="remark">
        データベースのバックアップを行います。<br />
        テンプレートファイル等はバックアップされません。
    </p>
    <table class="form">
        <tr>
            <th>バックアップ名<span class="attention"> *</span></th>
            <td>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['bkup_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['bkup_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <?php endif; ?>
                <input type="text" name="bkup_name" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['bkup_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['bkup_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?> ime-mode: disabled;" /><span class="attention"> (上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th>バックアップメモ</th>
            <td>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['bkup_memo'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['bkup_memo'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <?php endif; ?>
                <textarea name="bkup_memo" maxlength="<?php echo ((is_array($_tmp=@MTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" cols="60" rows="5" class="area60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['bkup_memo'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" ><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['bkup_memo'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea>
                <span class="attention"> (上限<?php echo ((is_array($_tmp=@MTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
    </table>

    <div class="btn"><a class="btn-normal" href="javascript:;" name="cre_bkup" onclick="document.body.style.cursor = 'wait'; form1.mode.value='bkup'; document.form1.submit(); return false;"><span>バックアップデータを作成する</span></a></div>


    <h2>バックアップ一覧</h2>


    <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['list_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['list_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><br />
    <?php endif; ?>
        <?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrBkupList'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?>
        <table class="list">
            <tr>
                <th>バックアップ名</th>
                <th>バックアップメモ</th>
                <th>作成日</th>
                <th>リストア</th>
                <th>ダウンロード</th>
                <th class="delete">削除</th>
            </tr>
            <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrBkupList'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <tr>
                    <td ><?php echo ((is_array($_tmp=$this->_tpl_vars['arrBkupList'][$this->_sections['cnt']['index']]['bkup_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
                    <td ><?php echo ((is_array($_tmp=$this->_tpl_vars['arrBkupList'][$this->_sections['cnt']['index']]['bkup_memo'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
                    <td align="center"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrBkupList'][$this->_sections['cnt']['index']]['create_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfCutString', true, $_tmp, 19, true, false) : SC_Utils_Ex::sfCutString($_tmp, 19, true, false)); ?>
</td>
                    <td align="center"><a href="#" onclick="document.body.style.cursor = 'wait'; fnModeSubmit('restore','list_name','<?php echo ((is_array($_tmp=$this->_tpl_vars['arrBkupList'][$this->_sections['cnt']['index']]['bkup_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
');">リストア</a></td>
                    <td align="center"><a href="#" onclick="fnModeSubmit('download','list_name','<?php echo ((is_array($_tmp=$this->_tpl_vars['arrBkupList'][$this->_sections['cnt']['index']]['bkup_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
');">ダウンロード</a></td>
                    <td align="center">
                        <a href="#" onclick="fnModeSubmit('delete','list_name','<?php echo ((is_array($_tmp=$this->_tpl_vars['arrBkupList'][$this->_sections['cnt']['index']]['bkup_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
');">削除</a>
                    </td>
                </tr>
            <?php endfor; endif; ?>
        </table>
    <?php endif; ?>

    <?php if (((is_array($_tmp=$this->_tpl_vars['restore_msg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
        <h2>実行結果</h2>
        <div class="message">
            <?php if (((is_array($_tmp=$this->_tpl_vars['restore_err'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == false): ?>
                <div class="btn"><a class="btn-normal" href="javascript:;" name="restore_config" onClick="document.body.style.cursor = 'wait'; form1.mode.value='restore_config'; form1.list_name.value='<?php echo ((is_array($_tmp=$this->_tpl_vars['restore_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'; submit(); return false;"><span>テーブル構成を無視してリストアする</span></a></div>
            <?php endif; ?>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['restore_msg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

        </div>
    <?php endif; ?>

</div>
</form>