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
//  $Id: options_name_manager.php 2181 2005-10-20 18:37:16Z ajeh $
//

define('HEADING_TITLE_OPT', 'Pilihan Produk');
define('HEADING_TITLE_VAL', 'Nilai Pilihan');
define('HEADING_TITLE_ATRIB', 'Atribut Produk');


define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Nama Produk');
define('TABLE_HEADING_OPT_NAME', 'Nama Pilihan');
define('TABLE_HEADING_OPT_VALUE', 'Nilai pilihan');
define('TABLE_HEADING_OPT_PRICE', 'Harga');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Awalan');
define('TABLE_HEADING_ACTION', 'Tindakan');
define('TABLE_HEADING_DOWNLOAD', 'Produk yang dapat diunduh:');
define('TABLE_TEXT_FILENAME', 'Nama berkas:');
define('TABLE_TEXT_MAX_DAYS', 'Jumlah Hari Kadaluarsa:');
define('TABLE_TEXT_MAX_COUNT', 'Maksimal jumlah pengunduhan:');

define('TEXT_WARNING_OF_DELETE', 'Pilihan ini memiliki produk-produk dan nilai-nilai yang tertaut kepadanya - Anda tidak aman untuk menghapusnya.');
define('TEXT_OK_TO_DELETE', 'Pilihan ini tidak memiliki produk yang tertaut kepadanya - Anda aman untuk menghapusnya.<br />Peringatan: Semua Nilai Pilihan akan dihapus untuk Nama Pilihan ini.');
define('TEXT_OPTION_ID', 'ID PIlihan');
define('TEXT_OPTION_NAME', 'Nama Pilihan');
define('TABLE_HEADING_OPT_DISCOUNTED','Didiskon');

define('ATTRIBUTE_WARNING_DUPLICATE','Duplikat Atribut - atribut tidak ditambahkan'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Duplikat Atribut sudah ada - Atribut tidak diubah'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','Pilihan Atribut dan Nilai Pilihan TIDAK Sama - Atribut tidak ditambahkan'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Pilihan Atribut dan Nilai Pilihan TIDAK Sama - Atribut tidak diubah'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Mungkin Duplikat Nama Pilihan Ditambahkan'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Mungkin Duplikat Nilai Pilihan Ditambahkan'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','MENGEDIT'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','MENGHAPUS'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','MENAMBAHKAN ATRIBUT BARU'); // title
define('TEXT_DOWNLOADS_DISABLED','CATATAN: Pengunduhan dinon-aktifkan');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Hari:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Maks:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Urutan');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Urutan Standar');
  define('TEXT_SORT',' Urutan: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Awalan');
  define('TABLE_HEADING_OPT_WEIGHT','Berat');
  define('TABLE_HEADING_OPT_SORT_ORDER','Urutan');
  define('TABLE_HEADING_OPT_DEFAULT','Standar');

  define('TABLE_HEADING_YES','Ya');
  define('TABLE_HEADING_NO','Tidak');

  define('TABLE_HEADING_OPT_TYPE', 'Tipe Pilihan'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Ukuran');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Maks');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','Baris');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Komentar');

  define('TEXT_OPTION_VALUE_COMMENTS','Komentar: ');
  define('TEXT_OPTION_VALUE_ROWS', 'Baris: ');
  define('TEXT_OPTION_VALUE_SIZE','Ukuran Tampilan: ');
  define('TEXT_OPTION_VALUE_MAX','Panjang Maksimum: ');

  define('TEXT_ATTRIBUTES_IMAGE','Contoh Gambar Atribut:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Direktori Gambar Atribut:');

  define('TEXT_ATTRIBUTES_FLAGS','Penanda<br />Atribut:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Digunakan Untuk<br />Tujuan Penampilan Saja:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'Atribut Gratis<br />Apabila Produk Gratis:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Atribut Standar<br />Ditandai Dipilih:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Gunakan Diskon yang Sama<br />yang Digunakan oleh Produk:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Sertakan dalam Harga Dasar<br />Jika Penentuan Harga Berdasarkan Atribut');

  define('TEXT_PRODUCT_OPTIONS_INFO','<strong>CATATAN: Edit Nama Pilihan Produk untuk pengaturan tambahan</strong>');

// updates
define('ERROR_PRODUCTS_OPTIONS_VALUES', 'PERINGATAN: Tidak ada Produk yang ditemukan ... Tidak Ada yang Diperbarui');

define('TEXT_SELECT_PRODUCT', ' Pilih Produk');
define('TEXT_SELECT_CATEGORY', ' Pilih Kategori');
define('TEXT_SELECT_OPTION', 'Pilih Nama Pilihan');

// add
define('TEXT_OPTION_VALUE_ADD_ALL', '<br /><strong>Tambahkan SEMUA Nilai Pilihan ke SEMUA Produk untuk Nama Pilihan</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', 'Perbarui SEMUA produk yang sudah ada yang memiliki setidaknya SATU Nilai Pilihan dan Tambahkan SEMUA Nilai Pilihan dalam Sebuah Nama Pilihan');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', 'Berhasil Memperbarui Pilihan ');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', '<br /><strong>Tambahkan SEMUA Nilai Pilihan ke SATU produk untuk Nama Pilihan</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', 'Perbarui SATU produk yang memiliki setidaknya SATU Nilai Pilihan dan Tambahkan SEMUA Nilai Pilihan dalam Sebuah Nama Pilihan');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', '<br /><strong>Tambahkan SEMUA Nilai Pilihan ke SATU Kategori produk untuk Nama Pilihan</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', 'Perbarui SATU Kategori produk, jika produk tersebut memiliki setidaknya SATU Nilai Pilihan dan Tambahkan SEMUA Nilai Pilihan dalam sebuah Nama Pilihan');

define('TEXT_COMMENT_OPTION_VALUE_ADD_ALL', '<strong>CATATAN:</strong> Urutan akan diatur ke Urutan Nilai Pilihan Standar untuk produk ini');

// delete
define('TEXT_OPTION_VALUE_DELETE_ALL', '<br /><strong>Hapus SEMUA Nilai Pilihan untuk SEMUA Produk untuk Nama Pilihan</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Perbarui SEMUA produk yang sudah ada yang memiliki setidaknya SATU Nilai Pilihan dan Hapus SEMUA Nilai Pilihan dalam sebuah Nama Pilihan');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', '<br /><strong>Hapus SEMUA Nilai Pilihan ke SATU produk untuk Nama Pilihan</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', 'Perbarui SATU produk yang memiliki setidaknya SATU Nilai Pilihan dan Hapus SEMUA Nilai Pilihan dalam sebuah Nama Pilihan');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', '<br /><strong>Hapus SEMUA Nilai Pilihan ke SATU Kategori produk untuk Nama Pilihan</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', 'Perbarui SATU Kategori produk, jika produk tersebut memiliki setidaknya SATU Nilai Pilihan dan Hapus SEMUA Nilai Pilihan dalam sebuah Nama Pilihan');

define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>CATATAN:</strong> Semua Nilai Pilihan untuk Nama Pilihan akan dihapus untuk produk(-produk) yang telah dipilih. Ini tidak akan menghapus pengaturan Nilai Pilihan.');

define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Salin SEMUA Nilai Pilihan ke Nama Pilihan yang lain</strong>');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Semua Nilai Pilihan akan disalin dari satu Nama Pilihan ke Nama Pilihan yang lain');
define('TEXT_SELECT_OPTION_FROM', 'Salin dari Nama Pilihan: ');
define('TEXT_SELECT_OPTION_TO', 'Salin Semua Nilai Pilihan ke Nama Pilihan: ');
define('SUCCESS_OPTION_VALUES_COPIED', 'Berhasil menyalin! ');
define('ERROR_OPTION_VALUES_COPIED', 'Kesalahan - Tidak dapat menyalin Nili Pilihan ke Nama Pilihan yang sama! ');
define('ERROR_OPTION_VALUES_NONE', 'Kesalahan - Menyalin dari Nama Pilihan yang tidak memiliki Nilai Pilihan. Tidak ada yang disalin! ');
define('TEXT_WARNING_BACKUP', 'Peringatan: Buatlah selalu cadangan yang sesuai dari database Anda sebelum membuat perubahan menyeluruh');

define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', 'Gambar Atribut per Baris: ');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', 'gaya Atribut untuk Tombol Radio/ Kotak Cek: ');
define('TEXT_OPTION_ATTIBUTE_MAX_LENGTH', '<strong>CATATAN: Baris, Ukuran Tampilan dan Panjang Maksimum hanya untuk Atribut Teks Saja:</strong><br />');
define('TEXT_OPTION_IMAGE_STYLE', '<strong>Gaya Gambar:</strong>');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0= Gambar Dibawah Nama Pilihan');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1= Elemen, Gambar dan Nilai Pilihan');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2= Elemen, Gambar dan Nama Pilihan Dibawah');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3= Nama Pilihan Dibawah Elemen dan Gambar');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4= Elemen Dibawah Gambar dan Nama Pilihan');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5= Elemen Diatas GAmbar dan Nama Pilihan');
?>