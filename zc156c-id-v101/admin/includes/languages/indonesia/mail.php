<?php
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: mail.php 7197 2007-10-06 20:35:52Z drbyte $
 */


define('HEADING_TITLE', 'Kirim Email ke Pelanggan');

define('TEXT_CUSTOMER', 'Pelanggan:');
define('TEXT_SUBJECT', 'Judul:');
define('TEXT_FROM', 'Dari:');
define('TEXT_MESSAGE', 'Pesan<br />Teks-Saja:');
define('TEXT_MESSAGE_HTML','Pesan<br />Teks Kaya:');
define('TEXT_SELECT_CUSTOMER', 'Pilih Pelanggan');
define('TEXT_ALL_CUSTOMERS', 'Semua Pelanggan');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Ke Semua yang Berlangganan Buletin');
define('TEXT_ATTACHMENTS_LIST','Lampiran yang Dipilih: ');
define('TEXT_SELECT_ATTACHMENT','Lampiran<br />pada server: ');
define('TEXT_SELECT_ATTACHMENT_TO_UPLOAD','Lampiran<br />untuk di-upload<br />&amp; lampirkan: ');
define('TEXT_ATTACHMENTS_DIR','Direktori untuk di-upload: ');

define('NOTICE_EMAIL_SENT_TO', 'Pemberitahuan: E-mail telah dikirimkan ke: %s');
define('NOTICE_EMAIL_FAILED_SEND', 'Pemberitahuan: GAGAL mengirim Email ke semua penerima: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Kesalahan: Tidak ada pelanggan yang dipilih.');
define('ERROR_NO_SUBJECT', 'Kesalahan: Tidak ada judul yang diberikan.');
define('ERROR_ATTACHMENTS', 'Kesalahan: Anda tidak dapat memilih lampiran UPLOAD dan TAMBAH sekaligus. Silakan pilih salah satu saja.');
?>