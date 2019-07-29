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
// $Id: checkout_process.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('EMAIL_TEXT_SUBJECT', 'Konfirmasi Pesanan');
define('EMAIL_TEXT_HEADER', 'Konfirmasi Pesanan');
define('EMAIL_TEXT_FROM',' from ');  //added to the EMAIL_TEXT_HEADER, above on text-only emails
define('EMAIL_THANKS_FOR_SHOPPING','Terima kasih telah berbelanja dengan kami hari ini!');
define('EMAIL_DETAILS_FOLLOW','Berikut ini adalah detial pesanan Anda.');
define('EMAIL_TEXT_ORDER_NUMBER', 'Nomor Pesanan:');
define('EMAIL_TEXT_INVOICE_URL', 'Detail Faktur:');
define('EMAIL_TEXT_INVOICE_URL_CLICK', 'klik Disini untuk Detail Faktur');
define('EMAIL_TEXT_DATE_ORDERED', 'Tanggal Pesanan:');
define('EMAIL_TEXT_PRODUCTS', 'Produk');
define('EMAIL_TEXT_SUBTOTAL', 'Sub-Total:');
define('EMAIL_TEXT_TAX', 'Pajak:        ');
define('EMAIL_TEXT_SHIPPING', 'pengiriman: ');
define('EMAIL_TEXT_TOTAL', 'Total:    ');
define('EMAIL_TEXT_DELIVERY_ADDRESS', 'Alamat Pengiriman');
define('EMAIL_TEXT_BILLING_ADDRESS', 'Alamat Penagihan');
define('EMAIL_TEXT_PAYMENT_METHOD', 'Cara Pembayaran');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('TEXT_EMAIL_VIA', 'lewat');

// suggest not using # vs No as some spamm protection block emails with these subjects
define('EMAIL_ORDER_NUMBER_SUBJECT', ' No: ');
define('HEADING_ADDRESS_INFORMATION','Informasi Alamat');
define('HEADING_SHIPPING_METHOD','Cara Pengiriman');
?>