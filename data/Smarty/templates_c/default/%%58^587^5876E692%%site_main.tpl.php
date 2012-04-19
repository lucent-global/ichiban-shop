<?php /* Smarty version 2.6.26, created on 2012-04-19 04:40:04
         compiled from ./site_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'function_exists', './site_main.tpl', 24, false),array('modifier', 'script_escape', './site_main.tpl', 28, false),array('modifier', 'count', './site_main.tpl', 37, false),)), $this); ?>
<body>
<?php if (((is_array($_tmp='sfPrintA8Tag')) ? $this->_run_mod_handler('function_exists', true, $_tmp) : function_exists($_tmp)) === TRUE): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => (@MODULE_REALDIR)."mdl_a8/print_a8_tag.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<?php echo ((is_array($_tmp=$this->_tpl_vars['GLOBAL_ERR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

<noscript>
    <p>JavaScript を有効にしてご利用下さい.</p>
</noscript>

<div class="frame_outer">
    <a name="top" id="top"></a>

        <?php if (count(((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['HeaderTopNavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) > 0): ?>
        <div id="headertopcolumn">
                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['HeaderTopNavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['HeaderTopNaviKey'] => $this->_tpl_vars['HeaderTopNaviItem']):
?>
                <!-- ▼<?php echo ((is_array($_tmp=$this->_tpl_vars['HeaderTopNaviItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 -->
                <?php if (((is_array($_tmp=$this->_tpl_vars['HeaderTopNaviItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
                    <?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => ((is_array($_tmp=$this->_tpl_vars['HeaderTopNaviItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array('items' => ((is_array($_tmp=$this->_tpl_vars['HeaderTopNaviItem'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))), $this); ?>

                <?php else: ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['HeaderTopNaviItem']['tpl_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array('items' => ((is_array($_tmp=$this->_tpl_vars['HeaderTopNaviItem'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php endif; ?>
                <!-- ▲<?php echo ((is_array($_tmp=$this->_tpl_vars['HeaderTopNaviItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 -->
            <?php endforeach; endif; unset($_from); ?>
                    </div>
    <?php endif; ?>
            <?php if (((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['header_chk'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 2): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['header_tpl'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
    
        <div id="wrapper">
    <div id="container" class="clearfix">

                <?php if (count(((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['TopNavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) > 0): ?>
            <div id="topcolumn">
                                <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['TopNavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['TopNaviKey'] => $this->_tpl_vars['TopNaviItem']):
?>
                    <!-- ▼<?php echo ((is_array($_tmp=$this->_tpl_vars['TopNaviItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 -->
                    <?php if (((is_array($_tmp=$this->_tpl_vars['TopNaviItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
                        <?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => ((is_array($_tmp=$this->_tpl_vars['TopNaviItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array('items' => ((is_array($_tmp=$this->_tpl_vars['TopNaviItem'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))), $this); ?>

                    <?php else: ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['TopNaviItem']['tpl_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array('items' => ((is_array($_tmp=$this->_tpl_vars['TopNaviItem'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endif; ?>
                    <!-- ▲<?php echo ((is_array($_tmp=$this->_tpl_vars['TopNaviItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 -->
                <?php endforeach; endif; unset($_from); ?>
                            </div>
        <?php endif; ?>
        
                <?php if (count(((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['LeftNavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) > 0): ?>
            <div id="leftcolumn" class="side_column">
                                <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['LeftNavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['LeftNaviKey'] => $this->_tpl_vars['LeftNaviItem']):
?>
                    <!-- ▼<?php echo ((is_array($_tmp=$this->_tpl_vars['LeftNaviItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 -->
                    <?php if (((is_array($_tmp=$this->_tpl_vars['LeftNaviItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
                        <?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => ((is_array($_tmp=$this->_tpl_vars['LeftNaviItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array('items' => ((is_array($_tmp=$this->_tpl_vars['LeftNaviItem'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))), $this); ?>

                    <?php else: ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['LeftNaviItem']['tpl_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array('items' => ((is_array($_tmp=$this->_tpl_vars['LeftNaviItem'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endif; ?>
                    <!-- ▲<?php echo ((is_array($_tmp=$this->_tpl_vars['LeftNaviItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 -->
                <?php endforeach; endif; unset($_from); ?>
                            </div>
        <?php endif; ?>
        
                <div 
            <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_column_num'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 3): ?>
                id="three_maincolumn"
            <?php elseif (((is_array($_tmp=$this->_tpl_vars['tpl_column_num'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 2): ?>
                <?php if (count(((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['LeftNavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) == 0): ?>
                    id="two_maincolumn_left"
                <?php else: ?>
                    id="two_maincolumn_right"
                <?php endif; ?>
            <?php elseif (((is_array($_tmp=$this->_tpl_vars['tpl_column_num'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>
                id="one_maincolumn"
            <?php endif; ?>
            class="main_column"
        >
                        <?php if (count(((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['MainHead'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) > 0): ?>
                <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['MainHead'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['MainHeadKey'] => $this->_tpl_vars['MainHeadItem']):
?>
                    <!-- ▼<?php echo ((is_array($_tmp=$this->_tpl_vars['MainHeadItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 -->
                    <?php if (((is_array($_tmp=$this->_tpl_vars['MainHeadItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
                        <?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => ((is_array($_tmp=$this->_tpl_vars['MainHeadItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array('items' => ((is_array($_tmp=$this->_tpl_vars['MainHeadItem'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))), $this); ?>

                    <?php else: ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['MainHeadItem']['tpl_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array('items' => ((is_array($_tmp=$this->_tpl_vars['MainHeadItem'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endif; ?>
                    <!-- ▲<?php echo ((is_array($_tmp=$this->_tpl_vars['MainHeadItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 -->
                <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
            
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['tpl_mainpage'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            
                        <?php if (count(((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['MainFoot'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) > 0): ?>
                <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['MainFoot'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['MainFootKey'] => $this->_tpl_vars['MainFootItem']):
?>
                    <!-- ▼<?php echo ((is_array($_tmp=$this->_tpl_vars['MainFootItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 -->
                    <?php if (((is_array($_tmp=$this->_tpl_vars['MainFootItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
                        <?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => ((is_array($_tmp=$this->_tpl_vars['MainFootItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array('items' => ((is_array($_tmp=$this->_tpl_vars['MainFootItem'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))), $this); ?>

                    <?php else: ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['MainFootItem']['tpl_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array('items' => ((is_array($_tmp=$this->_tpl_vars['MainFootItem'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endif; ?>
                    <!-- ▲<?php echo ((is_array($_tmp=$this->_tpl_vars['MainFootItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 -->
                <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
                    </div>
        
                <?php if (count(((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['RightNavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) > 0): ?>
            <div id="rightcolumn" class="side_column">
                                <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['RightNavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['RightNaviKey'] => $this->_tpl_vars['RightNaviItem']):
?>
                    <!-- ▼<?php echo ((is_array($_tmp=$this->_tpl_vars['RightNaviItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 -->
                    <?php if (((is_array($_tmp=$this->_tpl_vars['RightNaviItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
                        <?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => ((is_array($_tmp=$this->_tpl_vars['RightNaviItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array('items' => ((is_array($_tmp=$this->_tpl_vars['RightNaviItem'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))), $this); ?>

                    <?php else: ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['RightNaviItem']['tpl_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array('items' => ((is_array($_tmp=$this->_tpl_vars['RightNaviItem'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endif; ?>
                    <!-- ▲<?php echo ((is_array($_tmp=$this->_tpl_vars['RightNaviItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 -->
                <?php endforeach; endif; unset($_from); ?>
                            </div>
        <?php endif; ?>
        
                <?php if (count(((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['BottomNavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) > 0): ?>
            <div id="bottomcolumn">
                                <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['BottomNavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['BottomNaviKey'] => $this->_tpl_vars['BottomNaviItem']):
?>
                    <!-- ▼<?php echo ((is_array($_tmp=$this->_tpl_vars['BottomNaviItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 -->
                    <?php if (((is_array($_tmp=$this->_tpl_vars['BottomNaviItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
                        <?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => ((is_array($_tmp=$this->_tpl_vars['BottomNaviItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array('items' => ((is_array($_tmp=$this->_tpl_vars['BottomNaviItem'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))), $this); ?>

                    <?php else: ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['BottomNaviItem']['tpl_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array('items' => ((is_array($_tmp=$this->_tpl_vars['BottomNaviItem'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endif; ?>
                    <!-- ▲<?php echo ((is_array($_tmp=$this->_tpl_vars['BottomNaviItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 -->
                <?php endforeach; endif; unset($_from); ?>
                            </div>
        <?php endif; ?>
        
    </div>
    </div>
    
        <?php if (((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['footer_chk'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 2): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['footer_tpl'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
            <?php if (count(((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['FooterBottomNavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) > 0): ?>
        <div id="footerbottomcolumn">
                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['FooterBottomNavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['FooterBottomNaviKey'] => $this->_tpl_vars['FooterBottomNaviItem']):
?>
                <!-- ▼<?php echo ((is_array($_tmp=$this->_tpl_vars['FooterBottomNaviItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 -->
                <?php if (((is_array($_tmp=$this->_tpl_vars['FooterBottomNaviItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
                    <?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => ((is_array($_tmp=$this->_tpl_vars['FooterBottomNaviItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array('items' => ((is_array($_tmp=$this->_tpl_vars['FooterBottomNaviItem'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))), $this); ?>

                <?php else: ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['FooterBottomNaviItem']['tpl_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array('items' => ((is_array($_tmp=$this->_tpl_vars['FooterBottomNaviItem'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php endif; ?>
                <!-- ▲<?php echo ((is_array($_tmp=$this->_tpl_vars['FooterBottomNaviItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 -->
            <?php endforeach; endif; unset($_from); ?>
                    </div>
    <?php endif; ?>
    </div>

</body>