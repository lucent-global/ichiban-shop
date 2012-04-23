<?php /* Smarty version 2.6.26, created on 2012-04-20 02:24:29
         compiled from basis/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'basis/index.tpl', 24, false),array('modifier', 'h', 'basis/index.tpl', 123, false),array('modifier', 'sfGetErrorColor', 'basis/index.tpl', 249, false),array('function', 'html_options', 'basis/index.tpl', 175, false),array('function', 'html_checkboxes', 'basis/index.tpl', 270, false),array('function', 'html_radios', 'basis/index.tpl', 288, false),)), $this); ?>
<script type="text/javascript" src="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
js/jquery.fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
js/jquery.fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
js/jquery.fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<script type="text/javascript">//<![CDATA[
var map;
var marker;

$(function() {
    var geocoder = new google.maps.Geocoder();

    $("#codeAddress").click(function() {
        var result = true;
        var address = $("#addr01").val() + $("#addr02").val();
        if (geocoder && address) {
            geocoder.geocode({'address': address}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    latlng = results[0].geometry.location;
                    $("#latitude").val(latlng.lat());
                    $("#longitude").val(latlng.lng());
                } else {
                    alert('住所の場所が見つかりません');
                }
            });
        } else {
            alert('住所の場所が見つかりません');
        }
    });

    $("a#mapAddress").fancybox({onStart: function() {
        var lat = $("#latitude").val();
        var lng = $("#longitude").val();

        var latlng;
        if (lat && lng) {
            latlng = new google.maps.LatLng(lat, lng);
        } else {
            var address = $("#addr01").val() + $("#addr02").val();
            if (geocoder) {
                geocoder.geocode({'address': address}, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        latlng = results[0].geometry.location;
                    }
                });
            }
        }

        if (!latlng) {
            // 座標が取得できない場合は北緯35度東経135度から取得
            latlng = new google.maps.LatLng(35, 135);
        }

        var mapOptions = {
            zoom: 15,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        if (!map)
        {
            map = new google.maps.Map($("#maps").get(0), mapOptions);
        }
        else
        {
            map.panTo(latlng);
        }

        if (!marker)
        {
            marker = new google.maps.Marker({map: map, position: latlng});
            marker.setDraggable(true);
        }
        else
        {
            marker.setPosition(latlng);
        }

        // TODO Maker のダブルクリックにも対応したい
        $("#inputPoint").click(function() {
            latlng = marker.getPosition();
            $("#latitude").val(latlng.lat());
            $("#longitude").val(latlng.lng());
            $.fancybox.close();
        });
    }});
});
//]]>
</script>
<form name="form1" id="form1" method="post" action="?">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="mode" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<div id="basis" class="contents-main">

    <h2>基本情報</h2>
    <table summary="基本情報" id="basis-index-basis">
        <tr>
            <th>会社名</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['company_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="company_name" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['company_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['company_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" />
                <span class="attention"> (上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th>会社名(フリガナ)</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['company_kana'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="company_kana" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['company_kana'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['company_kana'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" />
                <span class="attention"> (上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th>店名<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['shop_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="shop_name" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['shop_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['shop_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" />
                <span class="attention"> (上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th>店名(フリガナ)</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['shop_kana'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="shop_kana" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['shop_kana'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['shop_kana'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" />
                <span class="attention"> (上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th>店名(英語表記)</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['shop_name_eng'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="shop_name_eng" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['shop_name_eng'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@MTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['shop_name_eng'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" />
                <span class="attention"> (上限<?php echo ((is_array($_tmp=@MTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th>郵便番号<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['zip01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['zip02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                〒 <input type="text" name="zip01" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['zip01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="3" size="6" class="box6" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['zip01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" /> - <input type="text" name="zip02" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['zip02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="4"    size="6" class="box6" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['zip02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" />
                <a class="btn-normal" href="javascript:;" name="address_input" onclick="fnCallAddress('<?php echo ((is_array($_tmp=@INPUT_ZIP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
', 'zip01', 'zip02', 'pref', 'addr01'); return false;">住所入力</a>
            </td>
        </tr>
        <tr>
            <th>SHOP住所<span class="attention"> *</span></th>
            <td>
                <p>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['pref'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <select class="top" name="pref" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['pref'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" >
                        <option value="" selected="selected">都道府県を選択</option>
                        <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrPref'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['pref'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                    </select>
                </p>
                <p>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['addr01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <input type="text" name="addr01" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['addr01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['addr01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" id="addr01" /><span class="attention"> (上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span><br />
                    <?php echo ((is_array($_tmp=@SAMPLE_ADDRESS1)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

                </p>
                <p>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['addr02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <input type="text" name="addr02" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['addr02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
"    maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['addr02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" id="addr02" /><span class="attention"> (上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span><br />
                    <?php echo ((is_array($_tmp=@SAMPLE_ADDRESS2)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

                </p>
            </td>
        </tr>
        <tr>
            <th>TEL</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['tel01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="tel01" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['tel01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="6" size="6" class="box6" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['tel01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" /> -
                <input type="text" name="tel02" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['tel02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="6" size="6" class="box6" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['tel01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" /> -
                <input type="text" name="tel03" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['tel03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="6" size="6" class="box6" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['tel01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" />
            </td>
        </tr>
        <tr>
            <th>FAX</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['fax01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="fax01" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['fax01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="6" size="6" class="box6" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['fax01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" /> -
                <input type="text" name="fax02" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['fax02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="6" size="6" class="box6" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['fax02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" /> -
                <input type="text" name="fax03" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['fax03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="6" size="6" class="box6" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['fax03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" />
            </td>
        </tr>
        <tr>
            <th>店舗営業時間</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['business_hour'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="business_hour" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['business_hour'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['business_hour'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" />
                <span class="attention"> (上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th>商品注文受付<br />メールアドレス<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['email01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="email01" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['email01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['email01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" />
            </td>
        </tr>
        <tr>
            <th>問い合わせ受付<br />メールアドレス<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['email02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="email02" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['email02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['email02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>"/>
            </td>
        </tr>
        <tr>
            <th>メール送信元<br />メールアドレス<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['email03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="email03" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['email03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['email03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>"/>
            </td>
        </tr>
        <tr>
            <th>送信エラー受付<br />メールアドレス<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['email04'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="email04" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['email04'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['email04'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>"/>
            </td>
        </tr>
        <tr>
            <th>取扱商品</th>
            <td>
                <?php $this->assign('key', 'good_traded'); ?>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <textarea name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" cols="60" rows="8" class="area60" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" ><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea>
                <span class="attention"> (上限<?php echo ((is_array($_tmp=@LLTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>
                <?php $this->assign('key', 'message'); ?>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <textarea name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" cols="60" rows="8" class="area60" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" ><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea>
                <span class="attention"> (上限<?php echo ((is_array($_tmp=@LLTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
            </td>
        </tr>
    </table>

    <h2>定休日設定</h2>
    <table id="basis-index-holiday">
        <tr>
            <th>定休日</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['regular_holiday_ids'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <?php echo smarty_function_html_checkboxes(array('name' => 'regular_holiday_ids','options' => ((is_array($_tmp=$this->_tpl_vars['arrRegularHoliday'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['regular_holiday_ids'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

            </td>
        </tr>
    </table>

    <h2>SHOP機能</h2>
    <table id="basis-index-func">
        <tr>
            <th>消費税率<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['tax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="tax" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['tax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@PERCENTAGE_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="6" class="box6" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['tax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" /> ％
            </td>
        </tr>
        <tr>
            <th>課税規則<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['tax_rule'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <?php echo smarty_function_html_radios(array('name' => 'tax_rule','options' => ((is_array($_tmp=$this->_tpl_vars['arrTAXRULE'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['tax_rule'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

            </td>
        </tr>
        <tr>
            <th>送料無料条件</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['free_rule'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="free_rule" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['free_rule'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@PRICE_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="6" class="box6" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['free_rule'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" /> 円以上購入時無料
            </td>
        </tr>
        <tr>
            <th>ダウンロード可能日数</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['downloadable_days'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <input type="text" name="downloadable_days" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['downloadable_days'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@DOWNLOAD_DAYS_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="6" class="box6" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['downloadable_days'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php endif; ?>" /> 日間有効
                <input type="checkbox" name="downloadable_days_unlimited" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['downloadable_days_unlimited'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == '1'): ?>checked<?php endif; ?> onclick="fnCheckLimit('downloadable_days', 'downloadable_days_unlimited', '<?php echo ((is_array($_tmp=@DISABLED_RGB)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
');"/>無制限
            </td>
        </tr>
    </table>

    <h2>地図設定</h2>
    <table id="basis-index-func">
        <tr>
            <th>緯度/経度情報</th>
            <td>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['latitude'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['longitude'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                緯度: <input type="text" name="latitude" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['latitude'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="30" class="box30" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['latitude'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" id="latitude" />
                経度: <input type="text" name="longitude" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['longitude'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="30" class="box30" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['longitude'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" id="longitude" />
                <a class="btn-normal" href="javascript:;" name="codeAddress" id="codeAddress" onclick="">住所より自動取得</a>
                <a href="#maparea" id="mapAddress">地図で設定</a>
            </td>
        </tr>
    </table>

    <div class="btn-area">
        <ul>
            <li><a class="btn-action" href="javascript:;" onclick="fnFormModeSubmit('form1', '<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
', '', ''); return false;"><span class="btn-next">この内容で登録する</span></a></li>
        </ul>
    </div>
</div>
<div style="display: none">
    <div id="maparea">
        <div id="maps" style="width: 300px; height: 300px"></div>
        <a class="btn-normal" href="javascript:;" id="inputPoint">この位置を入力</a>
    </div>
</div>
</form>