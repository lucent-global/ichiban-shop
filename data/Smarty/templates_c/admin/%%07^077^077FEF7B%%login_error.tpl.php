<?php /* Smarty version 2.6.26, created on 2012-04-19 03:35:54
         compiled from login_error.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'login_error.tpl', 29, false),)), $this); ?>

<div id="outside">
    <div id="out-wrap">
            <div class="logo">
                <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/logo_resize.jpg" width="99" height="15" alt="EC-CUBE" />
            </div>
        <div id="error">
            <div class="out-top"></div>
            <div class="contents">
                <div class="message">
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_error'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

                </div>
            </div>
            <div class="btn-area-top"></div>
            <div class="btn-area">
                <ul>
                    <li>
                        <a class="btn-action" href="<?php echo ((is_array($_tmp=@ADMIN_LOGIN_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"><span class="btn-prev">ログインページに戻る</span></a>
                    </li>
                </ul>
            </div>
            <div class="btn-area-bottom"></div>
        </div>
    </div>
</div>
