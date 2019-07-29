<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: invoice.php 5961 2007-03-03 17:17:39Z ajeh $
//

define('TABLE_HEADING_COMMENTS', 'Komentar');
define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Pelanggan Diberitahu');
define('TABLE_HEADING_DATE_ADDED', 'Tanggal Ditambahkan');
define('TABLE_HEADING_STATUS', 'Status');

define('TABLE_HEADING_PRODUCTS_MODEL', 'Model');
define('TABLE_HEADING_PRODUCTS', 'Produk');
define('TABLE_HEADING_TAX', 'Pajak');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Harga (tidak termasuk)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Harga (termasuk)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Total (tidak termasuk)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Total (termasuk)');

define('ENTRY_CUSTOMER', 'PELANGGAN:');

define('ENTRY_SOLD_TO', 'DIJUAL KE:');
define('ENTRY_SHIP_TO', 'DIKIRIM KE:');
define('ENTRY_PAYMENT_METHOD', 'Cara Pembayaran:');
define('ENTRY_SUB_TOTAL', 'Sub-Total:');
define('ENTRY_TAX', 'Pajak:');
define('ENTRY_SHIPPING', 'Pengiriman:');
define('ENTRY_TOTAL', 'Total:');
define('ENTRY_DATE_PURCHASED', 'Tanggal Pesanan:');

define('ENTRY_ORDER_ID','No. Faktur ');
define('TEXT_INFO_ATTRIBUTE_FREE', '&nbsp;-&nbsp;GRATIS');
?>