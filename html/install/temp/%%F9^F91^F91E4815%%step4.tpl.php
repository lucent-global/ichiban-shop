<?php /* Smarty version 2.6.26, created on 2012-04-18 02:50:14
         compiled from step4.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'step4.tpl', 23, false),array('modifier', 'php_uname', 'step4.tpl', 31, false),array('modifier', 'h', 'step4.tpl', 31, false),)), $this); ?>
<form name="form1" id="form1" method="post" action="?">
<input type="hidden" name="mode" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="step" value="0" />
<input type="hidden" name="db_skip" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_db_skip'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="senddata_site_url" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_site_url'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="senddata_shop_name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_shop_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="senddata_cube_ver" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_cube_ver'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="senddata_php_ver" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_php_ver'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="senddata_db_ver" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_db_ver'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="senddata_os_type" value="<?php echo ((is_array($_tmp=((is_array($_tmp="")) ? $this->_run_mod_handler('php_uname', true, $_tmp) : php_uname($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=$_SERVER['SERVER_SOFTWARE'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
<?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrHidden'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
    <input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
<?php endforeach; endif; unset($_from); ?>


<div class="contents">
    <div class="message">
        <h2>サイト情報について</h2>
         <p>EC-CUBEのシステム向上及び、デバッグのため以下の情報のご提供をお願いいたします。</p>
    </div>
    <div class="result-info01">
        <ul class="site-info-list">
            <li><span class="bold">サイトURL：</span><?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_site_url'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</li>
            <li><span class="bold">店舗名：</span><?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_shop_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</li>
            <li><span class="bold">EC-CUBEバージョン：</span><?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_cube_ver'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</li>
            <li><span class="bold">PHP情報：</span><?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_php_ver'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</li>
            <li><span class="bold">DB情報：</span><?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_db_ver'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</li>
            <li><span class="bold">OS情報：</span><?php echo ((is_array($_tmp=((is_array($_tmp="")) ? $this->_run_mod_handler('php_uname', true, $_tmp) : php_uname($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=$_SERVER['SERVER_SOFTWARE'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</li>
        </ul>
    </div>
    <div class="result-info02">
        <input type="radio" id="ok" name="send_info" checked value="true" /><label for="ok">はい(推奨)</label>&nbsp;
        <input type="radio" id="ng" name="send_info" value="false" /><label for="ng">いいえ</label>
    </div>
    <div class="btn-area-top"></div>
    <div class="btn-area">
        <ul>
            <li><a class="btn-action" href="#" onclick="document.form1['mode'].value='return_step3';document.form1.submit();return false;">
                <span class="btn-prev">前へ戻る</span></a></li>
            <li><a class="btn-action" href="javascript:;" onclick="document.form1.submit(); return false;">
                <span class="btn-next">次へ進む</span></a></li>
        </ul>
    <div class="btn-area-bottom"></div>
</div>
</form>