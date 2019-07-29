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
// $Id: ssl_check.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('NAVBAR_TITLE', 'Pemeriksaan Keamanan');
define('HEADING_TITLE', 'Pemeriksaan Keamanan');

define('TEXT_INFORMATION', 'Kami telah menemukan bahwa perambah Anda telah membuat sebuah ID Sesi SSL yang berbeda dari yang digunakan secara menyeluruh oleh halaman-halaman aman (secure pages) kami.');
define('TEXT_INFORMATION_2', 'Untuk alasan keamanan, Anda harus login ke akun Anda kembali untuk melanjutkan berbelanja secara online.');
define('TEXT_INFORMATION_3','Sejumlah perambah, seperti Konqueror 3.1, tidak memiliki kemampuan untuk membuat ID Sesi SSL aman yang diperlukan secara otomatis. Jika Anda menggunakan perambah ini, kami menganjurkan untuk berpindah menggunakan perambah lain untuk melanjutkan belanja online Anda bersama kami. Jika Anda tidak memiliki perambah lain diinstal pada komputer Anda, Anda dapat mengunduh salah satu perambah yang kompatibel dengan sistem Anda berikut ini: <a href="http://www.microsoft.com/ie/" target="_blank">Microsoft Internet Explorer</a>, <a href="http://channels.netscape.com/ns/browsers/download_other.jsp" target="_blank">Netscape</a>, or <a href="http://www.mozilla.org/releases/" target="_blank">Mozilla</a>.');
define('TEXT_INFORMATION_4','Kami telah menggunakan langkah keamanan ini untuk keuntungan Anda, dan kami mohon maaf untuk setiap ketidaknyamanan yang ditimbulkannya.');
define('TEXT_INFORMATION_5','Silakan hubungi pemilik toko jika Anda memiliki pertanyaan-pertanyaan yang berkaitan dengan persyaratan ini, atau untuk melanjutkan membeli produk-produk secara offline.');

define('BOX_INFORMATION_HEADING', 'Privasi dan Keamanan');
define('BOX_INFORMATION', 'Kami memvalidasi ID Sesi SSL yang dibuat secara otomatis oleh perambah Anda pada setiap permintaan halaman aman (secure page) yang dibuat ke server ini.<br /><br />Validasi ini memastikan bahwa memang benar Anda yang menjelajah situs ini dengan akun Anda dan bukan orang lain.');
?>
