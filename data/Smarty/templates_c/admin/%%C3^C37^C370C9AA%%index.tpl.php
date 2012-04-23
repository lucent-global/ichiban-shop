<?php /* Smarty version 2.6.26, created on 2012-04-21 13:34:47
         compiled from ownersstore/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'ownersstore/index.tpl', 33, false),)), $this); ?>
<link rel="stylesheet" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
css/thickbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
js/ownersstore.js.php"></script>

<form name="form1" id="form1" method="post" action="?">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<div id="ownersstore" class="contents-main">

    <!--購入商品一覧ここから-->
    <div id="ownersstore_products_list"></div>
    <!--購入商品一覧ここまで-->

    <div class="btn">
        <a class="btn-normal" href="javascript:;" onclick="OwnersStore.products_list();return false;"><span>購入商品一覧を取得する</span></a>
    </div>

    <div id="ownersstore_index">
        <iframe src="<?php echo ((is_array($_tmp=@OSTORE_SSLURL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
info/" style="width:950px;height:600px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
    </div>
</div>
</form>