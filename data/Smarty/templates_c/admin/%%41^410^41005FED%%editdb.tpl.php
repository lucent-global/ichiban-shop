<?php /* Smarty version 2.6.26, created on 2012-04-21 13:30:24
         compiled from system/editdb.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'system/editdb.tpl', 26, false),)), $this); ?>

<form name="index_form" method="post" action="?"> 
    <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
    <input type="hidden" name="mode" value="confirm" />
    <div class="btn">
        <a class="btn-action" href="javascript:;" onclick="fnFormModeSubmit('index_form', 'confirm', '', '');"><span class="btn-next">変更する</span></a>
    </div>
    <table class="list">
        <col width="5%" />
        <col width="5%" />
        <col width="28%" />
        <col width="25%" />
        <col width="43%" />
        <tr>
            <th colspan="2">インデックス</th>
            <th rowspan="2">テーブル名</th>
            <th rowspan="2">カラム名</th>
            <th rowspan="2">説明</th>
        </tr>
        <tr>
            <th>ON</th>
            <th>OFF</th>
        </tr>

        <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrForm'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <td class="center"><input type="radio" name="indexflag_new[<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_sections['cnt']['index']]['indexflag'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == '1'): ?>checked<?php endif; ?> /></td>
                <td class="center"><input type="radio" name="indexflag_new[<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]" value="" <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_sections['cnt']['index']]['indexflag'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != '1'): ?>checked<?php endif; ?> /></td>
                <th class="column"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_sections['cnt']['index']]['table_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</th>
                <th class="column"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_sections['cnt']['index']]['column_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</th>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_sections['cnt']['index']]['recommend_comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
            </tr>
            <input type="hidden" name="table_name[<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_sections['cnt']['index']]['table_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
            <input type="hidden" name="column_name[<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_sections['cnt']['index']]['column_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
            <input type="hidden" name="indexflag[<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_sections['cnt']['index']]['indexflag'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <?php endfor; endif; ?>
    </table>

    <a class="btn-action" href="javascript:;" onclick="fnFormModeSubmit('index_form', 'confirm', '', ''); return false;"><span class="btn-next">変更する</span></a>
</form>