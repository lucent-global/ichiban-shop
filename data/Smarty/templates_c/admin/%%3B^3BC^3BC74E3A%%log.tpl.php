<?php /* Smarty version 2.6.26, created on 2012-04-21 13:31:09
         compiled from system/log.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'system/log.tpl', 25, false),array('modifier', 'h', 'system/log.tpl', 34, false),array('modifier', 'nl2br', 'system/log.tpl', 36, false),)), $this); ?>

<p>直近の<?php echo ((is_array($_tmp=$this->_tpl_vars['line_max'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
行</p>
<table class="list log">
    <tr>
        <th>日時</th>
        <th>パス</th>
        <th>内容</th>
    </tr>
    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['tpl_ec_log'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['line']):
?>
        <tr>
            <td class="date"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['line']['date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
            <td class="path"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['line']['path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
            <td class="body"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['line']['body'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
        </tr>
    <?php endforeach; endif; unset($_from); ?>
</table>