<?php
/*
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
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

// {{{ requires
require_once CLASS_EX_REALDIR . 'SC_Product_Ex.php';
require_once CLASS_EX_REALDIR . 'SC_Query_Ex.php';
require_once CLASS_REALDIR . 'pages/LC_Page_Index.php';

/**
 * Index のページクラス(拡張).
 *
 * LC_Page_Index をカスタマイズする場合はこのクラスを編集する.
 *
 * @package Page
 * @author LOCKON CO.,LTD.
 * @version $Id: LC_Page_Index_Ex.php 20764 2011-03-22 06:26:40Z nanasess $
 */
class LC_Page_Index_Ex extends LC_Page_Index {

    // }}}
    // {{{ functions

    /**
     * Page を初期化する.
     *
     * @return void
     */
    function init() {
        parent::init();
        //$this->tpl_mainpage = 'index.tpl';
    }

    /**
     * Page のプロセス.
     *
     * @return void
     */
    function process() {
        parent::process();
        //$this->action();
    }
    
    function action () {
	    //商品取得処理
	    $objQuery = new SC_Query_Ex();
	    $this->arrProduct = array();
	    
	    $table = 'dtb_products INNER JOIN dtb_products_class ON dtb_products.product_id = dtb_products_class.product_id';
	    
	    $where = 'status=1'; 
	    
	    $order = 'dtb_products.product_id DESC';
	    
	    $objQuery->setOrder($order);
	    $arrProduct = $objQuery->select('*', $table, $where);
	    if ( isset($arrProduct) ) {
		    $this->arrProduct = $arrProduct;
	    }
    }

    /**
     * デストラクタ.
     *
     * @return void
     */
    function destroy() {
        parent::destroy();
    }
}
?>
