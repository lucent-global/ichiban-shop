<?php /* Smarty version 2.6.26, created on 2012-04-22 21:10:53
         compiled from customer/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'customer/edit.tpl', 28, false),array('modifier', 'h', 'customer/edit.tpl', 52, false),array('modifier', 'sfDispDBDate', 'customer/edit.tpl', 270, false),array('modifier', 'number_format', 'customer/edit.tpl', 272, false),array('function', 'sfSetErrorStyle', 'customer/edit.tpl', 91, false),array('function', 'html_radios', 'customer/edit.tpl', 92, false),array('function', 'html_options', 'customer/edit.tpl', 124, false),)), $this); ?>
<script type="text/javascript">
<!--

    function fnReturn() {
        document.search_form.action = './<?php echo ((is_array($_tmp=@DIR_INDEX_PATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
';
        document.search_form.submit();
        return false;
    }

    function fnOrderidSubmit(order_id, order_id_value) {
        if(order_id != "" && order_id_value != "") {
            document.form2[order_id].value = order_id_value;
        }
        document.form2.action = '../order/edit.php';
        document.form2.submit();
    }

//-->
</script>

<form name="search_form" method="post" action="">
    <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
    <input type="hidden" name="mode" value="search" />

    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrSearchData'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
        <?php if (((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'customer_id' && ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'mode' && ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'edit_customer_id' && ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
            <?php if (is_array ( ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) )): ?>
                <?php $_from = ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c_item']):
?>
                    <input type="hidden" name="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
[]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['c_item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                <?php endforeach; endif; unset($_from); ?>
            <?php else: ?>
                <input type="hidden" name="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
            <?php endif; ?>
        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
</form>

<form name="form1" id="form1" method="post" action="?" autocomplete="off">
    <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
    <input type="hidden" name="mode" value="confirm" />
    <input type="hidden" name="customer_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['customer_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />

    <!-- 検索条件の保持 -->
    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrSearchData'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
        <?php if (((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'customer_id' && ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'mode' && ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'edit_customer_id' && ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
            <?php if (is_array ( ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) )): ?>
                <?php $_from = ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c_item']):
?>
                    <input type="hidden" name="search_data[<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
][]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['c_item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                <?php endforeach; endif; unset($_from); ?>
            <?php else: ?>
                <input type="hidden" name="search_data[<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
            <?php endif; ?>
        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>

    <div id="customer" class="contents-main">
        <table class="form">
            <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['customer_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
            <tr>
                <th>顧客ID<span class="attention"> *</span></th>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['customer_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
            </tr>
            <?php endif; ?>
            <tr>
                <th>会員状態<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <span <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?>>
                        <?php echo smarty_function_html_radios(array('name' => 'status','options' => ((is_array($_tmp=$this->_tpl_vars['arrStatus'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'separator' => ' ','selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                    </span>
                </td>
            </tr>
            <tr>
                <th>お名前<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['name01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['name02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <input type="text" name="name01" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['name01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="30" class="box30" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['name01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> />&nbsp;&nbsp;<input type="text" name="name02" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['name02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="30" class="box30" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['name02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> />
                </td>
            </tr>
            <tr>
                <th>お名前(フリガナ)<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['kana01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['kana02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <input type="text" name="kana01" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['kana01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="30" class="box30" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['kana01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> />&nbsp;&nbsp;<input type="text" name="kana02" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['kana02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="30" class="box30" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['kana02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> />
                </td>
            </tr>
            <tr>
                <th>郵便番号<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['zip01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['zip02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    〒 <input type="text" name="zip01" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['zip01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@ZIP01_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="6" class="box6" maxlength="3" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['zip01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> /> - <input type="text" name="zip02" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['zip02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@ZIP02_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="6" class="box6" maxlength="4" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['zip02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> />
                    <a class="btn-normal" href="javascript:;" name="address_input" onclick="fnCallAddress('<?php echo ((is_array($_tmp=@INPUT_ZIP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
', 'zip01', 'zip02', 'pref', 'addr01'); return false;">住所入力</a>
                </td>
            </tr>
            <tr>
                <th>住所<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['pref'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['addr01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['addr02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <select class="top" name="pref" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['pref'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?>>
                        <option class="top" value="" selected="selected">都道府県を選択</option>
                        <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrPref'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['pref'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                    </select><br />
                    <input type="text" name="addr01" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['addr01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="60" class="box60" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['addr01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> /><br />
                    <?php echo ((is_array($_tmp=@SAMPLE_ADDRESS1)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<br />
                    <input type="text" name="addr02" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['addr02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="60" class="box60" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['addr02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> /><br />
                    <?php echo ((is_array($_tmp=@SAMPLE_ADDRESS2)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

                </td>
            </tr>
            <tr>
                <th>メールアドレス<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['email'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <input type="text" name="email" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['email'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="60" class="box60" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['email'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> />
                </td>
            </tr>
            <tr>
                <th>携帯メールアドレス</th>
                <td>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['email_mobile'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <input type="text" name="email_mobile" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['email_mobile'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="60" class="box60" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['email_mobile'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> />
                </td>
            </tr>
            <tr>
                <th>電話番号<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['tel01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['tel02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['tel03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <input type="text" name="tel01" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['tel01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@TEL_ITEM_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="6" class="box6" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['tel01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> /> - <input type="text" name="tel02" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['tel02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@TEL_ITEM_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="6" class="box6" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['tel01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != "" || ((is_array($_tmp=$this->_tpl_vars['arrErr']['tel02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> /> - <input type="text" name="tel03" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['tel03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@TEL_ITEM_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="6" class="box6" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['tel01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != "" || ((is_array($_tmp=$this->_tpl_vars['arrErr']['tel03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> />
                </td>
            </tr>
            <tr>
                <th>FAX</th>
                <td>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['fax01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['fax02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['fax03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <input type="text" name="fax01" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['fax01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@TEL_ITEM_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="6" class="box6" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['fax01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> /> - <input type="text" name="fax02" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['fax02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@TEL_ITEM_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="6" class="box6" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['fax01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != "" || ((is_array($_tmp=$this->_tpl_vars['arrErr']['fax02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> /> - <input type="text" name="fax03" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['fax03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@TEL_ITEM_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="6" class="box6" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['fax01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != "" || ((is_array($_tmp=$this->_tpl_vars['arrErr']['fax03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> />
                </td>
            </tr>
            <tr>
                <th>ご性別<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['sex'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <span <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['sex'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?>>
                        <?php echo smarty_function_html_radios(array('name' => 'sex','options' => ((is_array($_tmp=$this->_tpl_vars['arrSex'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'separator' => ' ','selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['sex'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                    </span>
                </td>
            </tr>
            <tr>
                <th>ご職業</th>
                <td>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['job'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <select name="job" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['job'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> >
                    <option value="" selected="selected">選択してください</option>
                    <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrJob'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['job'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                    </select>
                </td>
            </tr>
            <tr>
                <th>生年月日</th>
                <td>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <select name="year" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> >
                        <option value="" selected="selected">------</option>
                        <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrYear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                    </select>年
                    <select name="month" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> >
                        <option value="" selected="selected">----</option>
                        <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrMonth'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['month'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                    </select>月
                    <select name="day" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> >
                        <option value="" selected="selected">----</option>
                        <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrDay'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['day'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                    </select>日
                </td>
            </tr>
            <tr>
                <th>パスワード<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['password'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <input type="password" name="password" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['password'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="30" class="box30" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['password'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> />　半角英数小文字<?php echo ((is_array($_tmp=@PASSWORD_MIN_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
～<?php echo ((is_array($_tmp=@PASSWORD_MAX_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字（記号不可）
                </td>
            </tr>
            <tr>
                <th>パスワードを忘れたときのヒント<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['reminder'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['reminder_answer'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    質問：
                    <select class="top" name="reminder" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['reminder'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> >
                        <option value="" selected="selected">選択してください</option>
                        <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrReminder'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['reminder'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                    </select><br />
                    答え：
                    <input type="text" name="reminder_answer" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['reminder_answer'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="30" class="box30" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['reminder_answer'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> />
                </td>
            </tr>
            <tr>
                <th>メールマガジン<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['mailmaga_flg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <span <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['mailmaga_flg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?>>
                        <?php echo smarty_function_html_radios(array('name' => 'mailmaga_flg','options' => ((is_array($_tmp=$this->_tpl_vars['arrMailMagazineType'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'separator' => ' ','selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['mailmaga_flg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                    </span>
                </td>
            </tr>
            <tr>
                <th>SHOP用メモ</th>
                <td>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['note'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <textarea name="note" maxlength="<?php echo ((is_array($_tmp=@LTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['note'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> cols="60" rows="8" class="area60"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['note'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea>
                </td>
            </tr>
            <tr>
                <th>所持ポイント</th>
                <td>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['point'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <input type="text" name="point" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['point'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@TEL_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="6" class="box6" <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['point'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo SC_Utils_Ex::sfSetErrorStyle(array(), $this);?>
<?php endif; ?> /> pt
                </td>
            </tr>
        </table>

        <div class="btn-area">
            <ul>
                <li><a class="btn-action" href="javascript:;" onclick="return fnReturn();"><span class="btn-prev">検索画面に戻る</span></a></li>
                <li><a class="btn-action" href="javascript:;" onclick="fnSetFormSubmit('form1', 'mode', 'confirm'); return false;"><span class="btn-next">確認ページへ</span></a></li>
            </ul>
        </div>

        <input type="hidden" name="order_id" value="" />
        <input type="hidden" name="search_pageno" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_pageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">
        <input type="hidden" name="edit_customer_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['edit_customer_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" >

        <h2>購入履歴一覧</h2>
        <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_linemax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) > 0): ?>
        <p><span class="attention"><!--購入履歴一覧--><?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_linemax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
件</span>&nbsp;が該当しました。</p>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['tpl_pager'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                        <table class="list">
                <tr>
                    <th>日付</th>
                    <th>注文番号</th>
                    <th>購入金額</th>
                    <th>発送日</th>
                    <th>支払方法</th>
                </tr>
                <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrPurchaseHistory'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrPurchaseHistory'][$this->_sections['cnt']['index']]['create_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfDispDBDate', true, $_tmp) : SC_Utils_Ex::sfDispDBDate($_tmp)); ?>
</td>
                        <td class="center"><a href="../order/edit.php?order_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrPurchaseHistory'][$this->_sections['cnt']['index']]['order_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" ><?php echo ((is_array($_tmp=$this->_tpl_vars['arrPurchaseHistory'][$this->_sections['cnt']['index']]['order_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</a></td>
                        <td class="center"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrPurchaseHistory'][$this->_sections['cnt']['index']]['payment_total'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
円</td>
                        <td class="center"><?php if (((is_array($_tmp=$this->_tpl_vars['arrPurchaseHistory'][$this->_sections['cnt']['index']]['status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 5): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrPurchaseHistory'][$this->_sections['cnt']['index']]['commit_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfDispDBDate', true, $_tmp) : SC_Utils_Ex::sfDispDBDate($_tmp)); ?>
<?php else: ?>未発送<?php endif; ?></td>
                        <?php $this->assign('payment_id', ($this->_tpl_vars['arrPurchaseHistory'][$this->_sections['cnt']['index']]['payment_id'])); ?>
                        <td class="center"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrPayment'][$this->_tpl_vars['payment_id']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
                    </tr>
                <?php endfor; endif; ?>
            </table>
                    <?php else: ?>
            <div class="message">購入履歴はありません。</div>
        <?php endif; ?>

    </div>
</form>