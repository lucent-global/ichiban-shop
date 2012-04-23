<?php /* Smarty version 2.6.26, created on 2012-04-22 22:42:57
         compiled from mail_templates/contact_mail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'mail_templates/contact_mail.tpl', 22, false),)), $this); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_header'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

　※本メールは自動配信メールです。
　等幅フォント(MSゴシック12ポイント、Osaka-等幅など)で
　最適にご覧になれます。

┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
　※本メールは、
　<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_shopname'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
より、お問い合わせをされた方に
　お送りしています。
　もしお心当たりが無い場合は、このままこのメールを破棄して
　ください。
　またその旨、<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_infoemail'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
まで
　ご連絡いただければ幸いです。
┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛

<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['name01']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
様

以下のお問い合わせを受付致しました。
確認次第ご連絡いたしますので、少々お待ちください。

■お名前　：<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['name01']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['name02']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['kana01']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['kana02']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
) 様
■郵便番号：<?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['zip01']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) && ((is_array($_tmp=$this->_tpl_vars['arrForm']['zip02']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>〒<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['zip01']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
-<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['zip02']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php endif; ?>

■住所　　：<?php echo ((is_array($_tmp=$this->_tpl_vars['arrPref'][$this->_tpl_vars['arrForm']['pref']['value']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['addr01']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['addr02']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

■電話番号：<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['tel01']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
-<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['tel02']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
-<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['tel03']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

■お問い合わせの内容
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['contents']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_footer'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
