<?php /* Smarty version 2.6.26, created on 2012-04-20 06:37:32
         compiled from pager.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'pager.tpl', 4, false),)), $this); ?>
<div class="pager">
    <ul>
    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrPagenavi']['arrPageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
        <li<?php if (((is_array($_tmp=$this->_tpl_vars['arrPagenavi']['now_page'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?> class="on"<?php endif; ?>><a href="#" onclick="fnNaviSearchPage(<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
, '<?php echo ((is_array($_tmp=$this->_tpl_vars['arrPagenavi']['mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span></a></li>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
</div>