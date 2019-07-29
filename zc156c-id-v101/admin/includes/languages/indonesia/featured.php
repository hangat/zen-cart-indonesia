<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 *  $Id: featured.php 18695 2011-05-04 05:24:19Z drbyte $
 */

define('HEADING_TITLE', 'Produk Unggulan');

define('TABLE_HEADING_PRODUCTS', 'Produk');
define('TABLE_HEADING_PRODUCTS_MODEL','Model');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Produk Harga/Spesial/Obral');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Persentase');
define('TABLE_HEADING_AVAILABLE_DATE', 'Tersedia');
define('TABLE_HEADING_EXPIRES_DATE','Kadaluarsa');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Tindakan');

define('TEXT_FEATURED_PRODUCT', 'Produk:');
define('TEXT_FEATURED_EXPIRES_DATE', 'Tanggal Kadaluarsa:');
define('TEXT_FEATURED_AVAILABLE_DATE', 'Tanggal Tersedia:');

define('TEXT_INFO_DATE_ADDED', 'Tanggal Ditambahkan:');
define('TEXT_INFO_LAST_MODIFIED', 'Terakhir Dimodifikasi:');
define('TEXT_INFO_NEW_PRICE', 'Harga Baru:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Harga Awal:');
define('TEXT_INFO_PERCENTAGE', 'Persentase:');
define('TEXT_INFO_AVAILABLE_DATE', 'Tersedia Pada:');
define('TEXT_INFO_EXPIRES_DATE', 'Kadaluarsa Pada:');
define('TEXT_INFO_STATUS_CHANGE', 'Perubahan Status:');
define('TEXT_IMAGE_NONEXISTENT', 'Tidak Ada Gambar');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'Hapus Produk Unggulan');
define('TEXT_INFO_DELETE_INTRO', 'Anda yakin ingin menghapus produk Unggulan?');

define('SUCCESS_FEATURED_PRE_ADD', 'Berhasil: Pra Penambahan (Pre-Add) Produk Unggulan ... silakan perbarui tanggalnya ...');
define('WARNING_FEATURED_PRE_ADD_EMPTY', 'Peringatan: Tidak ada ID Produk yang diberikan ... tidak ada yang ditambahkan ...');
define('WARNING_FEATURED_PRE_ADD_DUPLICATE', 'Peringatan: ID Produk telah ada pada Spesial ... tidak ada yang ditambahkan ...');
define('WARNING_FEATURED_PRE_ADD_BAD_PRODUCTS_ID', 'Peringatan: ID Produk tidak valid ... tidak ada yang ditambahkan ...');
define('TEXT_INFO_HEADING_PRE_ADD_FEATURED', 'Tambahkan Produk Unggulan baru secara manual berdasarkan ID Produk');
define('TEXT_INFO_PRE_ADD_INTRO', 'PAda database yang besar, Anda dapat secara manual menambahkan sebuah Produk Unggulan berdasarkan ID Produk<br /><br />Hal ini sangat baik digunakan apabila halaman membutuhkan waktu terlalu lama untuk ditampilkan dan memilih sebuah Produk dari kotak dropdown menjadi sulit karena terlalu banyak Produk yang ada.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Silakan ketikkan ID Produk untuk dilakukan Pra Penambahan (Pre-Add) terhadapnya: ');
define('TEXT_INFO_MANUAL', 'ID Produk yang Akan Ditambahkan Secara Manual sebagai Produk Unggulan');
?>