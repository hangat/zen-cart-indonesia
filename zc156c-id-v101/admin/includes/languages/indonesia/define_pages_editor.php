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
// $Id: define_pages_editor.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('HEADING_TITLE', 'Defenisi Halaman Editor untuk: ');
define('NAVBAR_TITLE', 'Defenisi Halaman Editor');

define('TEXT_INFO_EDIT_PAGE', 'Pilih sebuah halaman untuk diedit:');

define('TEXT_INFO_MAIN_PAGE', 'Halaman Utama');

define('TEXT_INFO_SHIPPINGINFO', 'Pengiriman dan Pengembalian');
define('TEXT_INFO_PRIVACY', 'Privasi');
define('TEXT_INFO_CONDITIONS', 'Kondisi Penggunaan');
define('TEXT_INFO_CONTACT_US', 'Hubungi Kami');
define('TEXT_INFO_CHECKOUT_SUCCESS', 'Berhasil Selesai Berbelanja');

define('TEXT_INFO_PAGE_2', 'Halaman 2');
define('TEXT_INFO_PAGE_3', 'Halaman 3');
define('TEXT_INFO_PAGE_4', 'Halaman 4');

define('TEXT_FILE_DOES_NOT_EXIST', 'Berkas tidak ada: %s');

define('ERROR_FILE_NOT_WRITEABLE', 'Kesalahan: Tidak dapat menulis ke berkas ini. Silakan atur hak akses pengguna yang benar pada: %s');

define('TEXT_INFO_SELECT_FILE', 'Pilih sebuah berkas untuk diedit ...');
define('TEXT_INFO_EDITING', 'Mengedit berkas:');

define('TEXT_INFO_CAUTION','Catatan: Anda seharusnya selalu mengedit berkas-berkas yang terletak dalam direktori template Anda yang sedang aktif. Misalnya, Example: /languages/' . $_SESSION['language'] . '/html_includes/' . $template_dir . '<br />Pastikan Anda membuat berkas cadangan setelah Anda mengubah berkas Anda.');
?>