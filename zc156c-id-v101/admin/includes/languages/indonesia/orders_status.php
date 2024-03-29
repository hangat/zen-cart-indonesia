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
//  $Id: orders_status.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Status Pesanan');

define('TABLE_HEADING_ORDERS_STATUS', 'Status Pesanan');
define('TABLE_HEADING_ACTION', 'Tindakan');

define('TEXT_INFO_EDIT_INTRO', 'Silakan lakukan perubahan yang diinginkan');
define('TEXT_INFO_ORDERS_STATUS_NAME', 'Status Pesanan:');
define('TEXT_INFO_INSERT_INTRO', 'Silakan ketikkan status pesanan yang baru beserta data-datanya');
define('TEXT_INFO_DELETE_INTRO', 'Anda yakin ingin menghapus status pesanan ini?');
define('TEXT_INFO_HEADING_NEW_ORDERS_STATUS', 'Status Pesanan Baru');
define('TEXT_INFO_HEADING_EDIT_ORDERS_STATUS', 'Edit Status Pesanan');
define('TEXT_INFO_HEADING_DELETE_ORDERS_STATUS', 'Hapus Status Pesanan');

define('ERROR_REMOVE_DEFAULT_ORDER_STATUS', 'Kesalahan: Status pesanan standar tidak dapat dihapus. Silakan buat status pesanan yang lain sebagai standar dan coba sekali lagi.');
define('ERROR_STATUS_USED_IN_ORDERS', 'Kesalahan: Status pesanan ini saat ini sedang digunakan dalam pesanan.');
define('ERROR_STATUS_USED_IN_HISTORY', 'Kesalahan: Status pesanan ini saat ini sedang digunakan dalam riwayat status pesanan.');
?>