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
//  $Id: specials.php 4533 2006-09-17 17:21:10Z ajeh $
//

define('HEADING_TITLE', 'Spesial');

define('TABLE_HEADING_PRODUCTS', 'Produk');
define('TABLE_HEADING_PRODUCTS_MODEL','Model');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Produk Harga/Spesial/Obral');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Persentase');
define('TABLE_HEADING_AVAILABLE_DATE', 'Tersedia');
define('TABLE_HEADING_EXPIRES_DATE','Kadaluarsa');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Tindakan');

define('TEXT_SPECIALS_PRODUCT', 'Produk:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Harga Spesial:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Tanggal Kadaluarsa:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Tanggal Tersedia:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Catatan Khusus:</b><ul><li>Anda dapat mengetikkan sebuah nilai persentase untuk pemotongan harga dalam kotak Harga Spesial, misalnya: <b>20%</b></li><li>Jika Anda mengetikkan sebuah harga yang baru, pemisah desimal harus sebuah \'.\' (tanda titik), contoh: <b>49.99</b></li><li>Biarkan tanggal kadaluarsa kosong untuk tanpa kadaluarsa</li></ul>');

define('TEXT_INFO_DATE_ADDED', 'Tanggal Ditambahkan:');
define('TEXT_INFO_LAST_MODIFIED', 'Terakhir Dimdofikasi:');
define('TEXT_INFO_NEW_PRICE', 'Harga Baru:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Harga Awal:');
define('TEXT_INFO_DISPLAY_PRICE', 'Harga yang Ditampilkan:<br />');
define('TEXT_INFO_AVAILABLE_DATE', 'Tersedia Pada:');
define('TEXT_INFO_EXPIRES_DATE', 'Kadaluarsa Pada:');
define('TEXT_INFO_STATUS_CHANGE', 'Pengubahan Status:');
define('TEXT_IMAGE_NONEXISTENT', 'Tidak Ada Gambar');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Hapus Spesial');
define('TEXT_INFO_DELETE_INTRO', 'Anda yakin ingin menghapus harga produk spesial?');

define('SUCCESS_SPECIALS_PRE_ADD', 'Berhasil: Pra Penambahan (pre-add) Spesial ... silakan perbarui harga dan tanggal ...');
define('WARNING_SPECIALS_PRE_ADD_EMPTY', 'Peringatan: Tidak ada ID produk yang ditentukan ... tidak ada yang ditambahkan ...');
define('WARNING_SPECIALS_PRE_ADD_DUPLICATE', 'Peringatan: ID Produk telah Spesial ... tidak ada yang ditambahkan ...');
define('WARNING_SPECIALS_PRE_ADD_BAD_PRODUCTS_ID', 'Peringatan: ID produk tidak valid ... tidak ada yang ditambahkan ...');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS', 'Menambahkan Produk Spesial baru secara manual menggunakan ID Produk');
define('TEXT_INFO_PRE_ADD_INTRO', 'Pada database yang besar, Anda dapt secara manual menambahkan sebuah Produk Spesial menggunakan ID Produknya<br /><br />Hal ini sangat baik sekali digunakan apabila halaman membutuhkan waktu terlalu lama untuk ditampilkan dan apabila memilih sebuah Produk menjadi sulit karena terlalu banyak produk yang ada.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Silakan ketikkan ID Produk untuk dilakukan Pra Penambahan (pre-add): ');
define('TEXT_INFO_MANUAL', 'ID Produk untuk Ditambahkan sebagai produk Spesial secara Manual');
?>