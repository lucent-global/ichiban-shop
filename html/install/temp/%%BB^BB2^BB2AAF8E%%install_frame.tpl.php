<?php /* Smarty version 2.6.26, created on 2012-04-16 08:50:35
         compiled from install_frame.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'install_frame.tpl', 25, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?php echo ((is_array($_tmp=@CHAR_CODE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <meta http-equiv="content-script-type" content="text/javascript" />
        <meta http-equiv="content-style-type" content="text/css" />
        <link rel="stylesheet" href="css/admin_contents.css" type="text/css" media="all" />
        <script type="text/javascript" src="../js/css.js"></script>
        <script type="text/javascript" src="../js/navi.js"></script>
        <script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
        <title>EC-CUBEインストール</title>
    </head>
    <body>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['GLOBAL_ERR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

        <noscript>
            <p>JavaScript を有効にしてご利用下さい。</p>
        </noscript>
        <div id="outside">
            <div id="out-wrap">
                <div class="logo">
                    <img src="img/logo_resize.jpg" width="99" height="15" alt="EC-CUBE" />
                </div>
                <div id="out-area">
                    <div class="out-top"></div>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['tpl_mainpage'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
                <?php if (strlen ( ((is_array($_tmp=$this->_tpl_vars['install_info_url'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) != 0): ?>
                <div id="info-area">
                            <iframe src="<?php echo ((is_array($_tmp=$this->_tpl_vars['install_info_url'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" width="562" height="550" frameborder="no" scrolling="no">
                                                         こちらはEC-CUBEからのお知らせです。この部分は iframe対応ブラウザでご覧下さい。
                            </iframe>
                 </div>
                <?php endif; ?>
            </div>
        </div>
    </body>
</html>