<!--{include file="`$smarty.const.TEMPLATE_ADMIN_REALDIR`admin_popup_header.tpl"}-->
<script type="text/javascript">//<![CDATA[
self.moveTo(20,20);
self.resizeTo(620, 650);
self.focus();
//]]>
</script>
<h2><!--{$tpl_subtitle}--></h2>
<form name="form1" id="form1" method="post" action="<!--{$smarty.server.REQUEST_URI|escape}-->" enctype="multipart/form-data"">
<input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
<input type="hidden" name="mode" value="shift" />
<p class="remark">
    shift_data.tar.gzのファイルを選択した上で「データ移行開始」ボタンを押してください。<br><br>
    ※AUTH_MAGIC書き換え後は、現在の管理者アカウントパスワードが使用できなくなります。<br>
    必ずログアウト前に管理画面で変更後ログアウトをするようにしてください。
</p>

<!--{if $arrErr.err != ""}-->
    <div class="attention"><!--{$arrErr.err}--></div>
<!--{/if}-->

<table class="form">
  <colgroup width="20%"></colgroup>
  <colgroup width="40%"></colgroup>
        <tr>
            <th>移行データ<br>shift_data.tar.gz</th>
            <td>
                <!--{if $arrErr.tar_file}-->
                    <span class="attention"><!--{$arrErr.tar_file}--></span>
                <!--{/if}-->
                <input type="file" name="tar_file" size="40" /><span class="attention"></span>
            </td>
        </tr>
</table>
<div class="btn-area">
  <ul>
  <li><a class="btn-action" href="javascript:;" onclick="fnFormModeSubmit('form1', 'shift', '', ''); return false;"><span class="btn-next"><!--{if $tpl_submit != ""}--><!--{$tpl_submit}--><!--{else}-->データ移行開始<!--{/if}--></span></a></li>
  </ul>
</div>
</form>
<!--{include file="`$smarty.const.TEMPLATE_ADMIN_REALDIR`admin_popup_footer.tpl"}-->