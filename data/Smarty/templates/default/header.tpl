<!--{*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2011 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.    See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA    02111-1307, USA.
 *}-->
<!--▼HEADER-->
<div id="header_wrap">
    <div id="header" class="clearfix">
        <div id="logo_area">
            <p>
                <a href="<!--{$smarty.const.TOP_URLPATH}-->"><img src="<!--{$TPL_URLPATH}-->img/common/header-h1.png" alt="1ban-shop 超お得タイムセールサイト" /><span><!--{$arrSiteInfo.shop_name|h}-->/<!--{$tpl_title|h}--></span></a>
            </p>
        </div>
            
        <div id="countDown">
         	<object width="440" height="128" data="<!--{$TPL_URLPATH}-->img/flash/timer.swf" type="application/x-shockwave-flash">
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
                <li id="nav_mypage"><a href="<!--{$smarty.const.ROOT_URLPATH}-->mypage/login.php">Myページ</a></li>
                <li id="nav_guide"><a href="<!--{$smarty.const.ROOT_URLPATH}-->guide/privacy.php">ご利用ガイド</a></li>
                <li id="nav_contact"><a href="<!--{$smarty.const.ROOT_URLPATH}-->contact/">お問い合わせ</a></li>
             </ul>
             <div id="custmerRegist"><a href="<!--{$smarty.const.ROOT_URLPATH}-->entry/">無料会員登録</a></div>
        </div>
    </div>
</div>
<!--▲HEADER-->
