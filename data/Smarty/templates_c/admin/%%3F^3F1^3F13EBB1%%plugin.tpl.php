<?php /* Smarty version 2.6.26, created on 2012-04-21 13:45:27
         compiled from system/plugin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'system/plugin.tpl', 26, false),array('modifier', 'sfGetErrorColor', 'system/plugin.tpl', 40, false),array('modifier', 'h', 'system/plugin.tpl', 40, false),array('modifier', 'default', 'system/plugin.tpl', 74, false),)), $this); ?>
<!--<form name="form1" id="form1" method="post" action="?">-->
<form name="form1" method="post" action="?" enctype="multipart/form-data">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="mode" value="" />
<input type="hidden" name="plugin_id" value="" />
<input type="hidden" name="plugin_code" value="" />

<div id="system" class="contents-main">

    <h2>プラグイン登録</h2>
    <table class="form">
        <tr>
            <th>プラグイン<span class="attention"> *</span></th>
            <td>
                <?php $this->assign('key', 'plugin_file'); ?>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="file" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" class="box54" size="64" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>style="background-color:<?php echo ((is_array($_tmp=((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
"<?php endif; ?>>
            </td>
        </tr>
    </table>

    <div class="btn-area">
        <a class="btn-action" href="javascript:;" onclick="fnModeSubmit('upload', '', '');return false;"><span class="btn-next">この内容で登録する</span></a>
    </div>

    <!--▼プラグイン一覧ここから-->
    <h2>プラグイン一覧</h2>
    <?php if (count ( ((is_array($_tmp=$this->_tpl_vars['plugins'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?>
        <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['plugin_error'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['plugin_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['plugin_code'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
        <table class="list" width="900">
            <col width="15%" />
            <col width="10%" />
            <col width="25%" />
            <col width="28%" />
            <col width="7%" />
            <col width="5%" />
            <col width="5%" />
            <col width="5%" />
            <tr>
                <th>プラグイン名</th>
                <th>作者</th>
                <th>サイトURL</th>
                <th>説明</th>
                <th>商品ステータス</th>
                <th>操作</th>
                <th>設定</th>
                <th>移動</th>
            </tr>
            <?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['plugins'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['data']['show'] = true;
$this->_sections['data']['max'] = $this->_sections['data']['loop'];
$this->_sections['data']['step'] = 1;
$this->_sections['data']['start'] = $this->_sections['data']['step'] > 0 ? 0 : $this->_sections['data']['loop']-1;
if ($this->_sections['data']['show']) {
    $this->_sections['data']['total'] = $this->_sections['data']['loop'];
    if ($this->_sections['data']['total'] == 0)
        $this->_sections['data']['show'] = false;
} else
    $this->_sections['data']['total'] = 0;
if ($this->_sections['data']['show']):

            for ($this->_sections['data']['index'] = $this->_sections['data']['start'], $this->_sections['data']['iteration'] = 1;
                 $this->_sections['data']['iteration'] <= $this->_sections['data']['total'];
                 $this->_sections['data']['index'] += $this->_sections['data']['step'], $this->_sections['data']['iteration']++):
$this->_sections['data']['rownum'] = $this->_sections['data']['iteration'];
$this->_sections['data']['index_prev'] = $this->_sections['data']['index'] - $this->_sections['data']['step'];
$this->_sections['data']['index_next'] = $this->_sections['data']['index'] + $this->_sections['data']['step'];
$this->_sections['data']['first']      = ($this->_sections['data']['iteration'] == 1);
$this->_sections['data']['last']       = ($this->_sections['data']['iteration'] == $this->_sections['data']['total']);
?>
            <tr>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['plugin_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['plugin_code'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['plugin_code'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['plugin_version'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ''): ?><br /><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['plugin_version'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
<?php endif; ?></td>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['author'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '-') : smarty_modifier_default($_tmp, '-')))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['plugin_site_url'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '-') : smarty_modifier_default($_tmp, '-')))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['plugin_description'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '-') : smarty_modifier_default($_tmp, '-')))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                <td class="center">
                    <?php if (((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['enable'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=@PLUGIN_ENABLE_TRUE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    有効
                    <?php elseif (((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['enable'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=@PLUGIN_ENABLE_FALSE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    無効
                    <?php else: ?>-<?php endif; ?>
                </td>
                <td class="center">
                    <?php if (((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=@PLUGIN_STATUS_UPLOADED)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <a class="btn-normal" href="javascript:;" name="install" onclick="fnSetFormValue('plugin_id', '<?php echo ((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['plugin_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); fnModeSubmit('install','plugin_code','<?php echo ((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['plugin_code'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;">install</a>
                    <?php else: ?>
                        <?php if (((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['enable'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=@PLUGIN_ENABLE_TRUE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                            <a class="btn-normal" href="javascript:;" name="disable" onclick="fnSetFormValue('plugin_id', '<?php echo ((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['plugin_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); fnModeSubmit('disable','plugin_code','<?php echo ((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['plugin_code'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;">disable</a><br />
                        <?php else: ?>
                            <a class="btn-normal" href="javascript:;" name="enable" onclick="fnSetFormValue('plugin_id', '<?php echo ((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['plugin_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); fnModeSubmit('enable','plugin_code','<?php echo ((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['plugin_code'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;">enable</a><br />
                        <?php endif; ?>
                            <a class="btn-normal" href="javascript:;" name="uninstall" onclick="fnSetFormValue('plugin_id', '<?php echo ((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['plugin_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); fnModeSubmit('uninstall','plugin_code','<?php echo ((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['plugin_code'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;">uninstall</a>
                    <?php endif; ?>
                </td>
                <td class="center">
                    <?php if (((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['plugin_setting_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ''): ?>
                        <a href="?" onclick="win03('<?php echo ((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['plugin_setting_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
','plugin_setting','620','760'); return false;">設定</a>
                    <?php else: ?>
                        -
                    <?php endif; ?>
                </td>
                <td align="center">
                <?php if (((is_array($_tmp=$this->_sections['data']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 1): ?>
                <a href="?" onclick="fnModeSubmit('up','plugin_id', '<?php echo ((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['plugin_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;">上へ</a>
                <?php endif; ?>
                <?php if (((is_array($_tmp=$this->_sections['data']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ((is_array($_tmp=$this->_sections['data']['last'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                <a href="?" onclick="fnModeSubmit('down','plugin_id', '<?php echo ((is_array($_tmp=$this->_tpl_vars['plugins'][$this->_sections['data']['index']]['plugin_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;">下へ</a>
                <?php endif; ?>
                </td>
            </tr>
            <?php endfor; endif; ?>
        </table>
    <?php else: ?>
        登録されているプラグインはありません。
    <?php endif; ?>

</div>
</form>