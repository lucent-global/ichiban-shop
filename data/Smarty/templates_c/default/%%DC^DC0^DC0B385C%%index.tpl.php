<?php /* Smarty version 2.6.26, created on 2012-04-20 03:14:21
         compiled from /home/s-kadowaki/s-kadowaki.dev.1ban-shop.com/html/../data/Smarty/templates/default/abouts/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/home/s-kadowaki/s-kadowaki.dev.1ban-shop.com/html/../data/Smarty/templates/default/abouts/index.tpl', 25, false),)), $this); ?>
<!--▼CONTENTS-->
<?php if (((is_array($_tmp=$this->_tpl_vars['objSiteInfo']->data['latitude'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) && ((is_array($_tmp=$this->_tpl_vars['objSiteInfo']->data['longitude'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
<script type="text/javascript">//<![CDATA[
$(function() {
    $("#maps").css({
        'margin-top': '15px',
        'margin-left': 'auto',
        'margin-right': 'auto',
        'width': '98%',
        'height': '300px'
    });
    var lat = <?php echo ((is_array($_tmp=$this->_tpl_vars['objSiteInfo']->data['latitude'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

    var lng = <?php echo ((is_array($_tmp=$this->_tpl_vars['objSiteInfo']->data['longitude'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

    if (lat && lng) {
        var latlng = new google.maps.LatLng(lat, lng);
        var mapOptions = {
            zoom: 15,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map($("#maps").get(0), mapOptions);
        var marker = new google.maps.Marker({map: map, position: latlng});
    } else {
        $("#maps").remove();
    }
});
//]]>
</script>
<?php endif; ?>
<div id="undercolumn">

    <div id="undercolumn_aboutus">
        <h2 class="title">特定商取引法に基づく表示</h2>
        <dl>
        	<dt>販売業者</dt>
        	<dd>1ban-shop.com</dd>
        	<dt>責任者</dt>
        	<dd>阪口　真代</dd>
        	<dt>所在地</dt>
        	<dd>〒542-0082<br />大阪府大阪市中央区島之内1-3-11</dd>
        	<dt>連絡先</dt>
        	<dd>（電話番号）06-6213-8989<br />（Eメール）shop@1ban-shop.com</dd>
        	<dt>商品代金以外の代金</dt>
        	<dd>送料、消費税</dd>
        	<dt>販売数量</dt>
        	<dd>各商品に記載</dd>
        	<dt>引き渡し時期</dt>
        	<dd>在庫があれば電話又はメールによる確認後４日内</dd>
        	<dt>お支払い方法</dt>
        	<dd>ヤマト運輸コレクト便による代金引換・銀行振込・各種クレジットカード</dd>
        	<dt>お支払い時期</dt>
        	<dd>
        		<dl>
        			<dt>（代金引換）</dt>
        			<dd>商品と交換のお支払い</dd>
        			<dt>（銀行振込）</dt>
        			<dd>前払い（お支払い後の商品発送）</dd>
        			<dt>（クレジットカード）</dt>
        			<dd>決済処理後の商品発送</dd>
          		</dl>
        	</dd>
        	<dt>保証規約</dt>
        	<dd>商品の不良によるもの以外の返品・返金はお受けできません</dd>
        	<dt>返金送料</dt>
        	<dd>お客様のご負担となります</dd>
        	<dt>運営</dt>
        	<dd>株式会社ゲット・ワン</dd>
        	<dt>返品について</dt>
        	<dd>
        	返品の際は、商品到着後８日以内にお願いします。<br />
        	また必ず、事前にお電話連絡（06-6213-8989)を頂いた上でご返送ください。<br /><br />
        	◎お客様のご都合による返品・交換は、お客様のご負担でお願いします。<br />
        	※未開封のものに限らせていただきます。<br />
        	※着払いでご返送された場合には、後日送料のご請求をさせて頂きます。<br /><br />
        	商品の性質上、返品をお受けしかねる場合がございます。<br />
        	その場合は商品紹介ページに明記してありますので、確認の上御注文ください。
        	</dd>
        	<dt>返金時期について</dt>
        	<dd>返品商品到着確認後３営業日以内にご指定口座にお振込致します。</dd>
        	<dt>返品連絡先</dt>
        	<dd>
        		<dl id="repeat_contact">
        			<dt>電話番号</dt>
        			<dd>06-6213-8989</dd>
        			<dt>返送先住所</dt>
        			<dd>〒542-0082 大阪府大阪市中央区島之内1-3-11-901 株式会社ゲット・ワン</dd>
        			<dt>E-Mail</dt>
        			<dd>shop@get-one.jp</dd>
        			<dt>担当者</dt>
        			<dd>阪口　真代</dd>
        	    </dl>
        	</dd>
        	<dt>商品発送のタイミング</dt>
        	<dd>
        	特にご指定がない場合、<br />
        	銀行振込 => ご入金確認後２営業日以内に発送いたします。<br />
        	クレジットカード、代金引換 => ご注文確認後２営業日以内に発送します。
        	</dd>
        	<dt>配送希望時間帯の指定について</dt>
        	<dd>
        	午前中 12時〜14時・14時〜16時・16時〜18時・18時〜20時・20時〜21時<br />
        	※時間を指定された場合でも、事情により指定時間内に配達ができない事もございます。
        	</dd>
        </dl>

    </div>
</div>
<!--▲CONTENTS-->