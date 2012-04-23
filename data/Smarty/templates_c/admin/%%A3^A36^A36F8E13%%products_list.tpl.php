<?php /* Smarty version 2.6.26, created on 2012-04-22 22:25:42
         compiled from ownersstore/products_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'ownersstore/products_list.tpl', 33, false),array('modifier', 'h', 'ownersstore/products_list.tpl', 36, false),array('modifier', 'default', 'ownersstore/products_list.tpl', 44, false),array('modifier', 'sfDispDBDate', 'ownersstore/products_list.tpl', 44, false),array('modifier', 'nl2br', 'ownersstore/products_list.tpl', 95, false),)), $this); ?>
<table id="ownersstore-products-list" class="list center">
    <tr>
        <th>ロゴ</th>
        <th>商品名</th>
        <th>導入バージョン</th>
        <th>インストール</th>
        <th>設定</th>
        <th>購入ステータス</th>
    </tr>
    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrProducts'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['products_list_loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['products_list_loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['products_list_loop']['iteration']++;
?>
        <tr>
            <td>
                <a href="<?php echo ((is_array($_tmp=@OSTORE_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" target="_blank">
                    <img src="<?php echo ((is_array($_tmp=@OSTORE_SSLURL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
resize.php?image=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['main_list_image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
&amp;width=50&amp;height=50" /></a>
            </td>
            <td>
                <p>
                    <a href="<?php echo ((is_array($_tmp=@OSTORE_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" target="_blank">
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</a>
                </p>
                <p>Version.<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['version'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "--") : smarty_modifier_default($_tmp, "--")); ?>
　<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['last_update_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfDispDBDate', true, $_tmp, false) : SC_Utils_Ex::sfDispDBDate($_tmp, false)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</p>
            </td>
            <td>
                <div id="ownersstore_version<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
">
                    <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['installed_version'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "--") : smarty_modifier_default($_tmp, "--")))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

                </div>
            </td>

                        <?php if (((is_array($_tmp=$this->_tpl_vars['product']['download_flg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>

                <td>
                    <div id="ownersstore_download<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
">
                                        <?php if (((is_array($_tmp=$this->_tpl_vars['product']['version_up_flg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <span class="icon_confirm">
                        <a href="#" onclick="OwnersStore.download(<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
);return false;">アップデート</a>
                        </span>
                                        <?php else: ?>
                        <span class="icon_confirm">
                        <a href="#" onclick="OwnersStore.download(<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
);return false;">ダウンロード</a>
                        </span>
                    <?php endif; ?>
                    </div>
                </td>

                <td>
                                        <?php if (((is_array($_tmp=$this->_tpl_vars['product']['installed_flg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <span class="icon_confirm">
                        <a href="#" onclick="win02('../load_module_config.php?module_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
', 'load', 615, 400);return false;">
                            設定</a>
                        </span>
                    <?php else: ?>
                        <div id='ownersstore_settings<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
' style="display:none">
                        <span class="icon_confirm">
                        <a href="#" onclick="win02('../load_module_config.php?module_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
', 'load', 615, 400);return false;">
                            設定</a>
                        </span>
                        </div>
                        <div id='ownersstore_settings_default<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
' style="display:bloc">--</div>
                    <?php endif; ?>
                </td>

            <?php else: ?>

                <td>--</td>
                <td>--</td>
            <?php endif; ?>

            <td><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
        </tr>
    <?php endforeach; endif; unset($_from); ?>
</table>