<?php /* Smarty version 2.6.26, created on 2012-04-21 13:45:36
         compiled from mail/template.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'mail/template.tpl', 25, false),array('modifier', 'date_format', 'mail/template.tpl', 48, false),array('modifier', 'h', 'mail/template.tpl', 48, false),)), $this); ?>
<form name="form1" id="form1" method="post" action="?">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<div class="btn">
    <a class="btn-action" href="./template_input.php"><span class="btn-next">テンプレートを新規入力</span></a>
</div>
<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrTemplates'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?>
<div id="mail" class="contents-main">
    <table class="list center">
    <col width="15%" />
    <col width="35%" />
    <col width="20%" />
    <col width="10%" />
    <col width="10%" />
    <col width="10%" />
        <tr>
            <th>作成日</th>
            <th>subject</th>
            <th>メール形式</th>
            <th>編集</th>
            <th>削除</th>
            <th>プレビュー</th>
        </tr>
        <?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrTemplates'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['data']['show'] = true;
$this->_sections['data']['max'] = $this->_sections['data']['loop'];
$this->_sections['data']['step'] = 1;
$this->_sections['data']['start'] = $this->_sections['data']['step'] > 0 ? 0 : $this->_sections['data']['loop']-1;
if ($this->_sections['data']['show']) {
    $this->_sections['data']['total'] = $this->_sections['data']['loop'];
    if ($this->_sections['data']['total'] == 0)
        $this->_sections['data']['show'] = false;
} else
    $this->_sections['data']['total'] = 0;
if ($this->_sections['data']['show']):

            for ($this->_sections['data']['index'] = $this->_sections['data']['start'], $this->_sections['data']['iteration'] = 1;
                 $this->_sections['data']['iteration'] <= $this->_sections['data']['total'];
                 $this->_sections['data']['index'] += $this->_sections['data']['step'], $this->_sections['data']['iteration']++):
$this->_sections['data']['rownum'] = $this->_sections['data']['iteration'];
$this->_sections['data']['index_prev'] = $this->_sections['data']['index'] - $this->_sections['data']['step'];
$this->_sections['data']['index_next'] = $this->_sections['data']['index'] + $this->_sections['data']['step'];
$this->_sections['data']['first']      = ($this->_sections['data']['iteration'] == 1);
$this->_sections['data']['last']       = ($this->_sections['data']['iteration'] == $this->_sections['data']['total']);
?>
        <tr>
            <td><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrTemplates'][$this->_sections['data']['index']]['create_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y/%m/%d') : smarty_modifier_date_format($_tmp, '%Y/%m/%d')))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
            <td class="left"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrTemplates'][$this->_sections['data']['index']]['subject'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
            <?php $this->assign('type', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrTemplates'][$this->_sections['data']['index']]['mail_method'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp))); ?>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['arrMagazineType'][$this->_tpl_vars['type']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
            <td><a href="./template_input.php?mode=edit&amp;template_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrTemplates'][$this->_sections['data']['index']]['template_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">編集</a></td>
            <td><a href="#" onclick="fnDelete('?mode=delete&amp;id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrTemplates'][$this->_sections['data']['index']]['template_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;">削除</a></td>
            <td><a href="#" onclick="win03('./preview.php?mode=template&amp;template_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrTemplates'][$this->_sections['data']['index']]['template_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
','preview','650','700'); return false;" target="_blank">プレビュー</a></td>
        </tr>
        <?php endfor; endif; ?>
    </table>
</div>
<?php endif; ?>
</form>