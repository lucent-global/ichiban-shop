<?php /* Smarty version 2.6.26, created on 2012-04-21 13:45:43
         compiled from mail/history.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'mail/history.tpl', 25, false),array('modifier', 'sfDispDBDate', 'mail/history.tpl', 47, false),array('modifier', 'h', 'mail/history.tpl', 47, false),)), $this); ?>
<form name="form1" id="form1" method="post" action="?">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="search_pageno" value="" />
<input type="hidden" name="mode" value="" />
<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrDataList'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['tpl_pager'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div id="mail" class="contents-main">
        <table class="list center">
            <tr>
                <th>配信開始時刻</th>
                <th>配信終了時刻</th>
                <th>Subject</th>
                <th>プレビュー</th>
                <th>配信条件</th>
                <th>配信総数</th>
                <th>配信済数</th>
                <th>配信失敗数</th>
                <th>未配信数</th>
                <th>再試行</th>
                <th class="delete">削除</th>
            </tr>
            <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrDataList'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cnt']['show'] = true;
$this->_sections['cnt']['max'] = $this->_sections['cnt']['loop'];
$this->_sections['cnt']['step'] = 1;
$this->_sections['cnt']['start'] = $this->_sections['cnt']['step'] > 0 ? 0 : $this->_sections['cnt']['loop']-1;
if ($this->_sections['cnt']['show']) {
    $this->_sections['cnt']['total'] = $this->_sections['cnt']['loop'];
    if ($this->_sections['cnt']['total'] == 0)
        $this->_sections['cnt']['show'] = false;
} else
    $this->_sections['cnt']['total'] = 0;
if ($this->_sections['cnt']['show']):

            for ($this->_sections['cnt']['index'] = $this->_sections['cnt']['start'], $this->_sections['cnt']['iteration'] = 1;
                 $this->_sections['cnt']['iteration'] <= $this->_sections['cnt']['total'];
                 $this->_sections['cnt']['index'] += $this->_sections['cnt']['step'], $this->_sections['cnt']['iteration']++):
$this->_sections['cnt']['rownum'] = $this->_sections['cnt']['iteration'];
$this->_sections['cnt']['index_prev'] = $this->_sections['cnt']['index'] - $this->_sections['cnt']['step'];
$this->_sections['cnt']['index_next'] = $this->_sections['cnt']['index'] + $this->_sections['cnt']['step'];
$this->_sections['cnt']['first']      = ($this->_sections['cnt']['iteration'] == 1);
$this->_sections['cnt']['last']       = ($this->_sections['cnt']['iteration'] == $this->_sections['cnt']['total']);
?>
            <tr>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrDataList'][$this->_sections['cnt']['index']]['start_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfDispDBDate', true, $_tmp) : SC_Utils_Ex::sfDispDBDate($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrDataList'][$this->_sections['cnt']['index']]['end_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfDispDBDate', true, $_tmp) : SC_Utils_Ex::sfDispDBDate($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                <td class="left"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrDataList'][$this->_sections['cnt']['index']]['subject'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                <td><a href="javascript:;" onclick="win03('./preview.php?mode=history&amp;send_id=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrDataList'][$this->_sections['cnt']['index']]['send_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
', 'confirm', '720', '600'); return false;">確認</a></td>
                <td><a href="javascript:;" onclick="win03('./<?php echo ((is_array($_tmp=@DIR_INDEX_PATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
?mode=query&amp;send_id=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrDataList'][$this->_sections['cnt']['index']]['send_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
','query','615','800'); return false;">確認</a></td>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrDataList'][$this->_sections['cnt']['index']]['count_all'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrDataList'][$this->_sections['cnt']['index']]['count_sent'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                <td style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrDataList'][$this->_sections['cnt']['index']]['count_error'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) >= 1): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>">
                    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrDataList'][$this->_sections['cnt']['index']]['count_error'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

                </td>
                <td style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrDataList'][$this->_sections['cnt']['index']]['count_unsent'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) >= 1): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>">
                    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrDataList'][$this->_sections['cnt']['index']]['count_unsent'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

                </td>
                <td>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrDataList'][$this->_sections['cnt']['index']]['count_error'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) >= 1 || ((is_array($_tmp=$this->_tpl_vars['arrDataList'][$this->_sections['cnt']['index']]['count_unsent'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) >= 1): ?>
                        <a href="index.php?mode=retry&amp;send_id=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrDataList'][$this->_sections['cnt']['index']]['send_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" onclick="return window.confirm('未配信と配信失敗となった宛先に再送信を試みますか?');">実行</a>
                    <?php endif; ?>
                </td>
                <td><a href="?mode=delete&send_id=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrDataList'][$this->_sections['cnt']['index']]['send_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" onclick="return window.confirm('配信履歴を削除しても宜しいでしょうか');">削除</a></td>
            </tr>
            <?php endfor; endif; ?>
        </table>
    </div>
<?php else: ?>
    <div id="complete">
        <div class="complete-top"></div>
        <div class="contents">
            <div class="message">
                配信履歴はありません
            </div>
        </div>
        <div class="btn-area-top"></div>
        <div class="btn-area">
            <ul>
                <li><a class="btn-action" href="./<?php echo ((is_array($_tmp=@DIR_INDEX_PATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"><span class="btn-prev">配信内容設定へ戻る</span></a></li>
            </ul>
        </div>
        <div class="btn-area-bottom"></div>
    </div>
<?php endif; ?>
</form>