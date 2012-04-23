<?php /* Smarty version 2.6.26, created on 2012-04-20 03:31:22
         compiled from mail_templates/customer_regist_mail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'mail_templates/customer_regist_mail.tpl', 28, false),)), $this); ?>
　※本メールは自動配信メールです。
　等幅フォント(MSゴシック12ポイント、Osaka-等幅など)で
　最適にご覧になれます。

┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
　※本メールは、
　<?php echo ((is_array($_tmp=$this->_tpl_vars['CONF']['shop_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
より会員登録を希望された方に
　お送りしています。
　もしお心当たりが無い場合は、
　その旨<?php echo ((is_array($_tmp=$this->_tpl_vars['CONF']['email02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
まで
　ご連絡いただければ幸いです。
┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛

<?php echo ((is_array($_tmp=$this->_tpl_vars['name01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['name02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 様

<?php echo ((is_array($_tmp=$this->_tpl_vars['CONF']['shop_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
でございます。

この度は会員登録依頼をいただきましてまことに有り難うございます。

本会員登録が完了いたしました。
ショッピングをお楽しみくださいませ。

今後ともどうぞ<?php echo ((is_array($_tmp=$this->_tpl_vars['CONF']['shop_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
をよろしくお願い申し上げます。


