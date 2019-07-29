<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2019 Jan 19 Modified in v1.5.6b $
 */

require 'gv_name.php';
define('HEADING_TITLE', 'Kirim ' . TEXT_GV_NAME . ' Ke Pelanggan');

define('TEXT_CUSTOMER', 'Pelanggan:');
define('TEXT_SUBJECT', 'Subyek:');
define('TEXT_FROM', 'Dari:');
define('TEXT_TO', 'Email Ke:');
define('TEXT_AMOUNT', 'Jumlah');
define('TEXT_MESSAGE', 'Pesan <br />Teks-Saja:');
define('TEXT_RICH_TEXT_MESSAGE', 'Teks Kaya <br />Pesan:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">Gunakan ini untuk mengirimkan e-mail tunggal, jika tidak gunakan kotak dropdown di atas</span>');
define('TEXT_SELECT_CUSTOMER', 'Pilih Pelanggan');
define('TEXT_ALL_CUSTOMERS', 'Semua Pelanggan');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Ke Semua yang Berlangganan Buletin');

define('NOTICE_EMAIL_SENT_TO', 'Pemberitahuan: E-mail telah dikirimkan ke: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Kesalahan: Tidak ada pelanggan yang dipilih.');
define('ERROR_NO_AMOUNT_SELECTED', 'Kesalahan: Tidak ada jumlah yang dipilih.');
define('ERROR_NO_SUBJECT', 'Kesalahan: Tidak ada judul yang diberikan.');
define('ERROR_GV_AMOUNT', 'Silakan tentukan Jumlah sebagai sebuah Nilai tanpa simbol. Misal: 25.00');

define('TEXT_GV_ANNOUNCE','<font color="#0000ff">Melalui e-mail ini kami ingin menawarkan kepada Anda sebuah ' . TEXT_GV_NAME . '</font>');
define('TEXT_GV_WORTH', TEXT_GV_NAME . ' ini bernilai ');
define('TEXT_TO_REDEEM', 'Untuk menebus ' . TEXT_GV_NAME . ' ini, silakan klik pada tautan dibawah. Mohon tuliskan juga ' . TEXT_GV_REDEEM . ' pada selembar kertas');
define('TEXT_WHICH_IS', ' yang mana');
define('TEXT_IN_CASE', ' dalam kasus ada masalah.');
define('TEXT_OR_VISIT', 'atau kunjungi ');
define('TEXT_ENTER_CODE', ' dan ketikkan kode ini selama proses selesai berbelanja');
define('TEXT_CLICK_TO_REDEEM','Klik disini untuk menebus');

define ('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'Baru-baru ini Anda telah membeli sebuah ' . TEXT_GV_NAME . ' dari situs kami, untuk alasan keamanan, jumlah  ' . TEXT_GV_NAME . ' tersebut tidak segera dikreditkan kepada Anda. Pemilik toko sekarang telah melepas jumlah ini.');
define ('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . 'Nilai dari ' . TEXT_GV_NAME . ' adalah %s');
define ('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . 'Anda sekarang dapat mengunjungi situs kami, login dan kirimkan jumlah ' . TEXT_GV_NAME . ' tersebut kepada siapa saja yang Anda inginkan.');
define ('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");
