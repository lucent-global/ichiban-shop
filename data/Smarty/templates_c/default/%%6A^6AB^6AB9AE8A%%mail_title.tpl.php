<?php /* Smarty version 2.6.26, created on 2012-04-20 03:31:22
         compiled from mail_templates/mail_title.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'mail_templates/mail_title.tpl', 24, false),)), $this); ?>
【<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_shopname'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
】 <?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_mailtitle'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
