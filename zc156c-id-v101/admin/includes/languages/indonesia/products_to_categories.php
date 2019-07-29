<?php
/**
 * @package admin
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Zen4All Wed Jan 17 12:01:19 2018 +0100 Modified in v1.5.6 $
 */

define('HEADING_TITLE','Produk ke Beberapa Kategori Link Manager ...');
define('HEADING_TITLE2','Kategori / Produk');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_AVAILABLE', 'Kategori dengan Produk yang Tersedia untuk Menautkan ...');

define('TABLE_HEADING_PRODUCTS_ID', 'ID Prod');
define('TABLE_HEADING_PRODUCT', 'Nama Produk');
define('TABLE_HEADING_MODEL', 'Model');
define('TABLE_HEADING_ACTION', 'Tindakan');

define('TEXT_INFO_HEADING_EDIT_PRODUCTS_TO_CATEGORIES', 'MENGEDIT PRODUK UNTUK INFORMASI KATEGORI');
define('TEXT_PRODUCTS_ID', 'ID# ProduK');
define('TEXT_PRODUCTS_NAME', 'ProduK: ');
define('TEXT_PRODUCTS_MODEL', 'Model: ');
define('TEXT_PRODUCTS_PRICE', 'Harga: ');
define('BUTTON_UPDATE_CATEGORY_LINKS', 'Perbarui Tautan Kategori');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', 'Pilih Produk untuk Ditautkan');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', 'Tetapkan Produk ke Kategori Tautan untuk: ');
define('TEXT_INFO_LINKED_TO_COUNT', '&nbsp;&nbsp;Jumlah Kategori Tertaut Saat Ini: ');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO',
'Produk ke Kategori Linker dirancang untuk dengan cepat menautkan Produk saat ini ke satu atau ke banyak Kategori.<br />Anda juga dapat menautkan semua Produk dalam Kategori ke Kategori lain atau Menghapus Produk Tertaut dari Kategori yang ada di Kategori lain. (Lihat di bawah untuk instruksi tambahan)');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER',
'Untuk tujuan penetapan harga, setiap Produk memerlukan Kategori Induk, terlepas dari berapa banyak Kategori yang mungkin ditautkan. Ini dapat diatur melalui Dropdown Kategori Utama.<br />
Produk saat ini tertaut ke Kategori atau Kategori yang dicentang di atas. Untuk menambahkan Kategori atau Kategori baru cukup centang kotak di sebelah Nama Kategori. Untuk menghapus Kategori atau Kategori tertaut yang ada, cukup hapus centang pada kotak centang di sebelah Nama Kategori.<br />
Setelah Anda memeriksa semua Kategori yang Anda inginkan untuk ditautkan dengan Produk ini, tekan tombol ' . BUTTON_UPDATE_CATEGORY_LINKS . '<br />'
);

define('HEADER_CATEGORIES_GLOBAL_CHANGES', 'Perubahan Tautan Kategori Global dan Reset ID Kategori Induk');

define('TEXT_SET_MASTER_CATEGORIES_ID', '<strong>PERINGATAN:</strong> Anda harus menetapkan ID MASTER CATEGORIES sebelum mengubah Kategori Tertaut');

// copy category to category linked
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Salin SEMUA Produk dalam Kategori sebagai Produk TERKAIT ke Kategori lain ...</strong><br />Contoh: Menggunakan 8 dan 22 akan Menghubungkan SEMUA Produk dalam Kategori 8 ke Kategori 22');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Pilih Semua Produk dalam Kategori: ');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Tautan ke Kategori: ');
define('BUTTON_COPY_CATEGORY_LINKED', 'Salin Produk sebagai Tertaut ');

define('WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED', 'PERINGATAN: Produk telah diatur ulang dan tidak lagi menjadi bagian dari Kategori ini ...');
define('WARNING_COPY_LINKED', 'PERINGATAN: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Kategori tidak valid untuk menautkan Produk Dari: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Kategori tidak valid untuk menautkan Produk Ke: ');
define('WARNING_NO_CATEGORIES_ID', 'Peringatan: tidak ada kategori yang dipilih ... tidak ada perubahan yang dilakukan');
define('SUCCESS_COPY_LINKED', 'Pembaruan Produk yang Berhasil ... ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Kategori yang valid untuk menautkan Produk Dari: ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Kategori yang valid untuk menautkan Produk Ke: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED_MISSING', 'PERINGATAN: Salin selesai ke Kategori Tidak Valid untuk Menautkan: ');

define('WARNING_COPY_FROM_IN_TO_LINKED', '<strong>PERINGATAN: Tidak ada perubahan yang dibuat produk sudah ditautkan ... </strong>');

// remove category to category linked
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Hapus SEMUA Produk dalam Kategori yang merupakan Produk TERKAIT dengan Kategori lain ...</strong><br />Contoh: Menggunakan 8 dan 22 akan memutuskan tautan SEMUA Produk di Kategori 8 dari Kategori 22');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Pilih Semua Produk dalam Kategori: ');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Hapus dari Ditautkan ke Kategori: ');
define('BUTTON_REMOVE_CATEGORY_LINKED', 'Hapus Produk sebagai Tertaut ');

define('WARNING_REMOVE_LINKED', 'PERINGATAN: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Kategori tidak valid untuk menghapus tautan Produk Dari: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Kategori tidak valid untuk menghapus tautan Produk Ke: ');
define('SUCCESS_REMOVE_LINKED', 'Penghapusan Produk yang Berhubungan ... ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Kategori yang valid untuk menghapus Produk yang ditautkan Dari: ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Kategori yang valid untuk menghapus Produk yang ditautkan ke: ');

define('WARNING_REMOVE_FROM_IN_TO_LINKED', '<strong>PERINGATAN: Tidak ada perubahan yang dibuat tidak ada produk yang ditautkan ... </strong>');

define('WARNING_MASTER_CATEGORIES_ID_CONFLICT', '<strong>PERINGATAN: ID INDUK KATAGORI KONFLIK!! </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_CONFLICT', '<strong>ID Kategori Induk adalah: </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_PURPOSE', 'CATATAN: Kategori Induk digunakan untuk tujuan penetapan harga di mana kategori produk mempengaruhi penetapan harga pada produk-produk tertaut, misalnya: Penjualan<br />');
define('WARNING_MASTER_CATEGORIES_ID_CONFLICT_FIX', 'Untuk memperbaiki masalah ini, Anda telah diarahkan ke produk konflik pertama. Tetapkan ulang ID Kategori Induk sehingga tidak lagi ID Kategori Induk Produk untuk Kategori yang Anda coba hapus dan coba lagi. Ketika semua konflik telah diperbaiki, Anda kemudian dapat menyelesaikan penghapusan yang Anda minta.');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_FROM', ' Berkonflik dari Kategori: ');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_TO', ' Berkonflik dengan Kategori: ');
define('SUCCESS_MASTER_CATEGORIES_ID', 'Pembaruan Tautan Produk ke Kategori yang berhasil ...');
define('WARNING_MASTER_CATEGORIES_ID', 'PERINGATAN: Tidak ada Kategori Induk yang ditetapkan!');

define('TEXT_PRODUCTS_ID_INVALID', 'PERINGATAN: ID Produk Tidak Valid ATAU TIDAK ADA PILIHAN PRODUK');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', 'Catatan: ID Produk tidak perlu diatur untuk menggunakan Tautkan Semua Produk dari satu Kategori ke Kategori lain.<br />Namun, pengaturan ID Produk yang valid akan menampilkan semua Kategori yang tersedia dan nomor ID mereka.');

// reset all products to new master_categories_id
// copy category to category linked
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', '<strong>Reset SEMUA Produk dalam Kategori yang dipilih untuk menggunakan Kategori yang dipilih sebagai ID Kategori Induk yang baru ...</strong><br />Contoh: Mengatur Ulang Kategori 22 akan menetapkan SEMUA Produk di Kategori 22 untuk menggunakan Kategori 22 sebagai ID Kategori Utama');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Atur ulang ID Kategori Induk untuk Semua Produk dalam Kategori: ');
define('BUTTON_RESET_CATEGORY_MASTER', 'Atur ulang ID Kategori Induk');

define('WARNING_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'PERINGATAN: Kategori Tidak Valid dipilih ...');
define('SUCCESS_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Pembaruan yang berhasil dari semua Produk ke ID Kategori Master baru untuk Kategori: ');

define('TEXT_CATEGORIES_NAME', 'Nama Kategori');