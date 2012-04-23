<?php /* Smarty version 2.6.26, created on 2012-04-20 02:24:13
         compiled from basis/kiyaku.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'basis/kiyaku.tpl', 25, false),array('modifier', 'h', 'basis/kiyaku.tpl', 35, false),)), $this); ?>
<form name="form1" id="form1" method="post" action="?">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="mode" value="edit" />
<input type="hidden" name="kiyaku_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_kiyaku_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<div id="basis" class="contents-main">
    <table class="form">
        <tr>
            <th>規約タイトル<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['kiyaku_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="kiyaku_title" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['kiyaku_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@SMTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['kiyaku_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != "" || ((is_array($_tmp=$this->_tpl_vars['arrErr']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" size="60" class="box60"/>
                <span class="attention"> (上限<?php echo ((is_array($_tmp=@SMTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th>規約内容<span class="attention"> *</span></th>
            <td>
            <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['kiyaku_text'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
            <textarea name="kiyaku_text" maxlength="<?php echo ((is_array($_tmp=@MLTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" cols="60" rows="8" class="area60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['kiyaku_text'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" ><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['kiyaku_text'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea>
            <span class="attention"> (上限<?php echo ((is_array($_tmp=@MLTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
    </table>
    <div class="btn-area">
        <ul>
            <li><a class="btn-action" href="javascript:;" onclick="fnFormModeSubmit('form1', 'edit', '', ''); return false;"><span class="btn-next">この内容で登録する</span></a></li>
        </ul>
    </div>

    <table class="list">
        <col width="65%" />
        <col width="10%" />
        <col width="10%" />
        <col width="15%" />
        <tr>
            <th>規約タイトル</th>
            <th>編集</th>
            <th>削除</th>
            <th>移動</th>
        </tr>
        <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrKiyaku'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <tr style="background:<?php if (((is_array($_tmp=$this->_tpl_vars['tpl_kiyaku_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['arrKiyaku'][$this->_sections['cnt']['index']]['kiyaku_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>#ffffff<?php else: ?><?php echo ((is_array($_tmp=@SELECT_RGB)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php endif; ?>;">
            <?php $this->assign('kiyaku_id', ((is_array($_tmp=$this->_tpl_vars['arrKiyaku'][$this->_sections['cnt']['index']]['kiyaku_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))); ?>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrKiyaku'][$this->_sections['cnt']['index']]['kiyaku_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                <td align="center">
                    <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_kiyaku_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['arrKiyaku'][$this->_sections['cnt']['index']]['kiyaku_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <a href="?" onclick="fnModeSubmit('pre_edit', 'kiyaku_id', <?php echo ((is_array($_tmp=$this->_tpl_vars['arrKiyaku'][$this->_sections['cnt']['index']]['kiyaku_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;">編集</a>
                    <?php else: ?>
                    編集中
                    <?php endif; ?>
                </td>
                <td align="center">
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrClassCatCount'][$this->_tpl_vars['class_id']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) > 0): ?>
                    -
                    <?php else: ?>
                    <a href="?" onclick="fnModeSubmit('delete', 'kiyaku_id', <?php echo ((is_array($_tmp=$this->_tpl_vars['arrKiyaku'][$this->_sections['cnt']['index']]['kiyaku_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;">削除</a>
                    <?php endif; ?>
                </td>
                <td align="center">
                    <?php if (((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 1): ?>
                    <a href="?" onclick="fnModeSubmit('up', 'kiyaku_id', <?php echo ((is_array($_tmp=$this->_tpl_vars['arrKiyaku'][$this->_sections['cnt']['index']]['kiyaku_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;">上へ</a>
                    <?php endif; ?>
                    <?php if (((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ((is_array($_tmp=$this->_sections['cnt']['last'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <a href="?" onclick="fnModeSubmit('down', 'kiyaku_id', <?php echo ((is_array($_tmp=$this->_tpl_vars['arrKiyaku'][$this->_sections['cnt']['index']]['kiyaku_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;">下へ</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endfor; endif; ?>
    </table>

</div>
</form>