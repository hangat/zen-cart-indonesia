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
//  $Id: manufacturers.php 4808 2006-10-22 18:48:53Z ajeh $
//

define('HEADING_TITLE', 'Produsen');

define('TABLE_HEADING_MANUFACTURERS', 'Produsen');
define('TABLE_HEADING_ACTION', 'Tindakan');

define('TEXT_HEADING_NEW_MANUFACTURER', 'Produsen Baru');
define('TEXT_HEADING_EDIT_MANUFACTURER', 'Edit Produsen');
define('TEXT_HEADING_DELETE_MANUFACTURER', 'Hapus Produsen');

define('TEXT_MANUFACTURERS', 'Produsen:');
define('TEXT_DATE_ADDED', 'Tanggal Ditambahkan:');
define('TEXT_LAST_MODIFIED', 'Terakhir Dimodifikasi:');
define('TEXT_PRODUCTS', 'Produk:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Upload ke direktori:');
define('TEXT_IMAGE_NONEXISTENT', 'GAMBAR TIDAK ADA');
define('TEXT_MANUFACTURERS_IMAGE_MANUAL', '<strong>Atau, pilih sebuah berkas gambar yang sudah ada dari server, nama berkas:</strong>');

define('TEXT_NEW_INTRO', 'Silakan ketikkan informasi untuk produsen yang baru');
define('TEXT_EDIT_INTRO', 'Silakan lakukan perubahan yang diinginkan');

define('TEXT_MANUFACTURERS_NAME', 'Nama Produsen:');
define('TEXT_MANUFACTURERS_IMAGE', 'Gambar Produsen:');
define('TEXT_MANUFACTURERS_URL', 'URL Produsen:');

define('TEXT_DELETE_INTRO', 'Anda yakin inginmenghapus produsen ini?');
define('TEXT_DELETE_IMAGE', 'Hapus gambar produsen?');
define('TEXT_DELETE_PRODUCTS', 'Hapus produk dari produsen ini? (termasuk ulasan produk, produk spesial, produk yang akan datang)');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>PERINGATAN:</b> Terdapat %s produk yang masih terkait ke produsen ini!');

define('ERROR_DIRECTORY_NOT_WRITEABLE', 'Kesalahan: Saya tidak dapat menulis ke direktori ini. Silakan atur hak akses pengguna yang benar pada: %s');
define('ERROR_DIRECTORY_DOES_NOT_EXIST', 'Kesalahan: Direktori tidak ada: %s');
?>