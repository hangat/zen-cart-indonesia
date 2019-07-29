<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: sqlpatch.php 19537 2011-09-20 17:14:44Z drbyte $
 */

  define('HEADING_TITLE','Pelaksana Query SQL');
  define('HEADING_WARNING','PASTIKAN UNTUK MEMBUAT CADANGAN DATABASE YANG LENGKAP SEBELUM MENJALANKAN KODE-KODE PROGRAM DISINI');
  define('HEADING_WARNING2','Jika Anda memasang kode-kode program yang merupakan kontribusi dari pihak ketiga, harap dicatat bahwa Anda melakukannya dengan segala resiko Anda yang menanggung sendiri.<br />Zen Cart&trade; tidak membuat jaminan terhadap keamanan dari kode-kode program yang disediakan oleh kontributor pihak ketiga. Lakukan pengujian sebelum Anda menggunakannya pada database Anda yang sudah berjalan ini!');
  define('HEADING_WARNING_INSTALLSCRIPTS', 'CATATAN: JANGAN menjalankan kode-kode program peningkatan (upgrade) database Zen Cart&trade; dari halaman ini.<br />Silakan upload direktori <strong>zc_install</strong> yang baru dan laksanakan peningkatan (upgrade) dari sana untuk realibilitas yang lebih baik.');
  define('TEXT_QUERY_RESULTS','Hasil Query:');
  define('TEXT_ENTER_QUERY_STRING','Ketikkan query <br />untuk dilaksanakan:&nbsp;&nbsp;<br /><br />Pastikan untuk<br />mengakhirinya dengan tanda ;');
  define('TEXT_QUERY_FILENAME','Upload berkas:');
  define('ERROR_NOTHING_TO_DO','Kesalahan: Tidak ada sesuatu untuk dilakukan - tidak ada query atau berkas query yang ditentukan.');
  define('TEXT_CLOSE_WINDOW', '[ tutup jendela ]');
  define('SQLPATCH_HELP_TEXT','Alat Perbaikan SQL (SQLPATCH) memperkenankan Anda untuk memasang perbaikan-perbaikan (patch) sistem dengan menempelkan kode SQL secara langsung ke dalam kotak textarea '.
                              'disini, atau dengan mengupload, sebuah berkas kode-kode program yang disediakan (.SQL).<br />' .
                              'Ketika mempersiapkan kode-kode program untuk digunakan oleh alat ini, JANGAN menyertakan sebuah awalan tabel, karena alat ini ' .
                              'secara otomatis akan menambahkan awalan yang dibutuhkan untuk database yang aktif, berdasarkan pada pengaturan dalam berkas ' .
                              'admin/includes/configure.php (definisi DB_PREFIX).<br /><br />' .
                              'Perintah yang diketikkan atau di-upload hanya dapat dimulai dengan pernyataan berikut ini, dan HARUS dalam HURUF BESAR:'.
                              '<br /><ul><li>DROP TABLE IF EXISTS</li><li>CREATE TABLE</li><li>INSERT INTO</li><li>INSERT IGNORE INTO</li><li>ALTER TABLE</li>' .
                              '<li>UPDATE (hanya sebuah tabel tunggal)</li><li>UPDATE IGNORE (hanya sebuah tabel tunggal)</li><li>DELETE FROM</li><li>DROP INDEX</li><li>CREATE INDEX</li>' .
                              '<br /><li>SELECT </li></ul>' . 
'<h2>Cara Mahir</h2>Cara berikut ini dapat digunakan untuk menuliskan pernyataan yang lebih rumit apabila dibutuhkan:<br />
Untuk menjalankan sejumlah blok kode bersama-sama sehingga mereka diperlakukan sebagai satu perintah saja oleh MySQL, Anda perlu untuk menentukan nilai "<code>#NEXT_X_ROWS_AS_ONE_COMMAND:xxx</code>." Pengurai nanti akan  memperlakukan sejumlah X buah perintah sebagai satu saja.<br />
Jika Anda menjalankan berkas ini melalui phpMyAdmin atau sejenis, komentar "#NEXT..." akan diabaikan, dan kode-kode program akan diproses dengan baik.<br />
<br /><strong>CATATAN: </strong>Pernyataan SELECT.... FROM... dan LEFT JOIN membutuhkan "FROM" atau "LEFT JOIN" untuk berada pada barisnya sendiri dengan tujuan agar kode-kode program pengurai menambahkan awalan tabel.<br /><br />
<em><strong>Contoh:</strong></em>
<ul><li><code>#NEXT_X_ROWS_AS_ONE_COMMAND:4<br />
SET @t1=0;<br />
SELECT (@t1:=configuration_value) as t1 <br />
FROM configuration <br />
WHERE configuration_key = \'KEY_NAME_HERE\';<br />
UPDATE product_type_layout SET configuration_value = @t1 WHERE configuration_key = \'KEY_NAME_TO_CHECK_HERE\';<br />
DELETE FROM configuration WHERE configuration_key = \'KEY_NAME_HERE\';<br />&nbsp;</li>

<li>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br />
INSERT INTO tablename <br />
(col1, col2, col3, col4)<br />
SELECT col_a, col_b, col_3, col_4<br />
FROM table2;<br />&nbsp;</li>

<li>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br />
INSERT INTO table1 <br />
(col1, col2, col3, col4 )<br />
SELECT p.othercol_a, p.othercol_b, po.othercol_c, pm.othercol_d<br />
FROM table2 p, table3 pm<br />
LEFT JOIN othercol_f po<br />
ON p.othercol_f = po.othercol_f<br />
WHERE p.othercol_f = pm.othercol_f;</li>
</ul></code>' );
  define('REASON_TABLE_ALREADY_EXISTS','Tidak dapat membuat tabel %s karena tabel tersebut sudah ada');
  define('REASON_TABLE_DOESNT_EXIST','Tidak dapat menghapus tabel %s karena tabel tersebut sudah ada.');
  define('REASON_TABLE_NOT_FOUND','Tidak dapat menjalankan karena tabel %s tidak ada.');
  define('REASON_CONFIG_KEY_ALREADY_EXISTS','Tidak dapat menambahkan configuration_key "%s" karena ia sudah ada');
  define('REASON_COLUMN_ALREADY_EXISTS','Tidak dapat menambahkan (ADD) kolom %s karena kolom tersebut sudah ada.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_DROP','Tidak dapat menghapus (DROP) kolom %s karena kolom tersebut tidak ada.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE','Tidak dapat mengubah (CHANGE) kolom %s karena kolom tersebut tidak ada.');
  define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS','Tidak dapat menambahkan prod-type-layout configuration_key "%s" karena ia sudah ada');
  define('REASON_INDEX_DOESNT_EXIST_TO_DROP','Tidak dapat menghapus indeks %s pada tabel %s karena ia tidak ada.');
  define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP','Tidak dapat menghapus kunci utama (primary key) pada tabel %s karena ia tidak ada.');
  define('REASON_INDEX_ALREADY_EXISTS','Tidak dapat menambahkan indeks %s ke tabel %s karena ia sudah ada.');
  define('REASON_PRIMARY_KEY_ALREADY_EXISTS','Tidak dapat menambahkan kunci utama (primary key) ke tabel %s karena sebuah kunci utama sudah ada.');
  define('REASON_NO_PRIVILEGES','Pengguna '.DB_SERVER_USERNAME.'@'.DB_SERVER.' tidak memiliki hak akses %s ke database '.DB_DATABASE.'.');

