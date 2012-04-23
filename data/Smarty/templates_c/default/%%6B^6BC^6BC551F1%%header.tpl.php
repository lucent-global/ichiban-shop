<?php /* Smarty version 2.6.26, created on 2012-04-20 00:16:15
         compiled from /home/s-kadowaki/s-kadowaki.dev.1ban-shop.com/html/../data/Smarty/templates/default/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/home/s-kadowaki/s-kadowaki.dev.1ban-shop.com/html/../data/Smarty/templates/default/header.tpl', 27, false),array('modifier', 'h', '/home/s-kadowaki/s-kadowaki.dev.1ban-shop.com/html/../data/Smarty/templates/default/header.tpl', 27, false),)), $this); ?>
<!--▼HEADER-->
<div id="header_wrap">
    <div id="header" class="clearfix">
        <div id="logo_area">
            <p>
                <a href="<?php echo ((is_array($_tmp=@TOP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/header-h1.png" alt="1ban-shop 超お得タイムセールサイト" /><span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrSiteInfo']['shop_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
/<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</span></a>
            </p>
        </div>
            
        <div id="countDown">
         	<object width="440" height="128" data="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/flash/timer.swf" type="application/x-shockwave-flash">
           		<param value="<!--$TPL_URLPATH}-->img/flash/timer.swf" name="movie" />
           		<param value="heig" name="quality" />
          		<param value="true" name="play" />
           		<param value="true" name="loop" />
           		<param value="transparent" name="wmode" />
            	<param value="showall" name="scale" />
           		<param value="true" name="menu" />
           		<param value="false" name="devicefont" />
           		<param value="" name="salign" />
           		<param value="sameDomaine" name="allowScriptAccess" />
             </object>
           	<a href="http://www.adobe.com/go/getflash" style="display:none"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Adobe Flash Player を取得" </a>
    　　 </div>
        <div id="header_navi">
             <ul>
                <li id="nav_mypage"><a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
mypage/login.php">Myページ</a></li>
                <li id="nav_guide"><a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
guide/privacy.php">ご利用ガイド</a></li>
                <li id="nav_contact"><a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
contact/">お問い合わせ</a></li>
             </ul>
             <div id="custmerRegist"><a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
entry/">無料会員登録</a></div>
        </div>
    </div>
</div>
<!--▲HEADER-->