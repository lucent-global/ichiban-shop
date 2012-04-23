<?php /* Smarty version 2.6.26, created on 2012-04-20 03:31:14
         compiled from entry/confirm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'entry/confirm.tpl', 25, false),array('modifier', 'h', 'entry/confirm.tpl', 25, false),array('modifier', 'escape', 'entry/confirm.tpl', 83, false),array('modifier', 'default', 'entry/confirm.tpl', 98, false),)), $this); ?>
<!--▼CONTENTS-->
<div id="undercolumn">
    <div id="undercolumn_entry">
        <h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>
        <p>下記の内容で送信してもよろしいでしょうか？<br />
            よろしければ、一番下の「会員登録をする」ボタンをクリックしてください。</p>
        <form name="form1" id="form1" method="post" action="?">
        <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <input type="hidden" name="mode" value="complete">
        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrForm'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
            <input type="hidden" name="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
        <?php endforeach; endif; unset($_from); ?>

        <table summary="入力内容確認">
            <col width="30%" />
            <col width="70%" />
            <tr>
                <th>お名前<span class="attention">※</span></th>
                <td>
                    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['name01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
&nbsp;
                    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['name02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

                </td>
            </tr>
            <tr>
                <th>お名前(フリガナ)<span class="attention">※</span></th>
                <td>
                    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['kana01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
&nbsp;
                    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['kana02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

                </td>
            </tr>
            <tr>
                <th>郵便番号<span class="attention">※</span></th>
                <td>
                    〒<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['zip01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 - <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['zip02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

                </td>
            </tr>
            <tr>
                <th>住所<span class="attention">※</span></th>
                <td>
                    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrPref'][$this->_tpl_vars['arrForm']['pref']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['addr01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['addr02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

                </td>
            </tr>
            <tr>
                <th>電話番号<span class="attention">※</span></th>
                <td>
                    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['tel01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 - <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['tel02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 - <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['tel03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

                </td>
            </tr>
            <tr>
                <th>FAX</th>
                <td>
                    <?php if (strlen ( ((is_array($_tmp=$this->_tpl_vars['arrForm']['fax01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0 && strlen ( ((is_array($_tmp=$this->_tpl_vars['arrForm']['fax02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0 && strlen ( ((is_array($_tmp=$this->_tpl_vars['arrForm']['fax03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?>
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['fax01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 - <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['fax02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 - <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['fax03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

                    <?php else: ?>
                        未登録
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <th>メールアドレス<span class="attention">※</span></th>
                <td>
                    <a href="mailto:<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['email'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'hex') : smarty_modifier_escape($_tmp, 'hex')); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['email'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'hexentity') : smarty_modifier_escape($_tmp, 'hexentity')); ?>
</a>
                </td>
            </tr>
            <tr>
                <th>性別<span class="attention">※</span></th>
                <td>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['sex'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>
                    男性
                    <?php else: ?>
                    女性
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <th>職業</th>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrJob'][$this->_tpl_vars['arrForm']['job']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "未登録") : smarty_modifier_default($_tmp, "未登録")))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
            </tr>
            <tr>
                <th>生年月日</th>
                <td>
                    <?php if (strlen ( ((is_array($_tmp=$this->_tpl_vars['arrForm']['year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0 && strlen ( ((is_array($_tmp=$this->_tpl_vars['arrForm']['month'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0 && strlen ( ((is_array($_tmp=$this->_tpl_vars['arrForm']['day'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?>
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
年<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['month'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
月<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['day'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
日
                    <?php else: ?>
                    未登録
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <th>希望するパスワード<span class="attention">※</span><br />
                </th>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['passlen'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
            </tr>
            <tr>
                <th>パスワードを忘れた時のヒント<span class="attention">※</span></th>
                <td>
                    質問：<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrReminder'][$this->_tpl_vars['arrForm']['reminder']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
<br />
                    答え：<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['reminder_answer'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

                </td>
            </tr>
            <tr>
                <th>メールマガジン送付について<span class="attention">※</span></th>
                <td>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['mailmaga_flg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>
                    HTMLメール＋テキストメールを受け取る
                    <?php elseif (((is_array($_tmp=$this->_tpl_vars['arrForm']['mailmaga_flg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 2): ?>
                    テキストメールを受け取る
                    <?php else: ?>
                    受け取らない
                    <?php endif; ?>
                </td>
            </tr>
        </table>

        <div class="btn_area">
            <ul>
                <li>
                    <a href="?" onclick="fnModeSubmit('return', '', ''); return false;" onmouseover="chgImg('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_back_on.jpg','back')" onmouseout="chgImg('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_back.jpg','back')"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_back.jpg" alt="戻る" border="0" name="back" id="back" /></a>
                </li>
                <li>
                    <input type="image" onmouseover="chgImgImageSubmit('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_entry_on.jpg',this)" onmouseout="chgImgImageSubmit('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_entry.jpg',this)" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_entry.jpg" alt="会員登録をする" border="0" name="send" id="send" />
                </li>
            </ul>
        </div>

        </form>
    </div>
</div>
<!--▲CONTENTS-->