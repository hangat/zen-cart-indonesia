<?php
/**
 * Payeezy payment module language defines
 *
 * @package payeezy
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Thu Feb 11 13:35:53 2016 -0500 New in v1.5.5 $
 */

define('MODULE_PAYMENT_PAYEEZYJSZC_TEXT_DESCRIPTION', 'Modul Gerbang Payeezy JS.<br><br>Memberikan anda untuk menerima komplin pembayaran Kartu Kredit PCI tanpa membuat pelanggan meninggalkan toko anda!<br><a href="https://www.zen-cart.com/partners/firstdatapayeezy" target="_blank">Dapatkan informasi lebih lanjut, atau Daftar untuk akun</a><br><br><a href="https://globalgatewaye4.firstdata.com" target="_blank">Login ke Akun Payeezy anda</a>');

define('MODULE_PAYMENT_PAYEEZYJSZC_TEXT_ADMIN_TITLE', 'Payeezy JS'); // Payment option title as displayed in the admin
define('MODULE_PAYMENT_PAYEEZYJSZC_TEXT_CATALOG_TITLE', 'Kartu Kredit');  // Payment option title as displayed to the customer
define('MODULE_PAYMENT_PAYEEZYJSZC_TEXT_CREDIT_CARD_OWNER', 'Pemilik Kartu:');
define('MODULE_PAYMENT_PAYEEZYJSZC_TEXT_CREDIT_CARD_NUMBER', 'Nomer Kartu:');
define('MODULE_PAYMENT_PAYEEZYJSZC_TEXT_CREDIT_CARD_EXPIRES', 'Tanggal Kadaluarsa:');
define('MODULE_PAYMENT_PAYEEZYJSZC_TEXT_CVV', 'Nomer CVV:');
define('MODULE_PAYMENT_PAYEEZYJSZC_TEXT_CREDIT_CARD_TYPE', 'Tipe Kartu Kredit:');

define('MODULE_PAYMENT_PAYEEZYJSZC_TEXT_ERROR', "Transaksi Anda tidak dapat diselesaikan karena kesalahan: ");
define('MODULE_PAYMENT_PAYEEZYJSZC_TEXT_MISCONFIGURATION', "Transaksi Anda tidak dapat diselesaikan karena kesalahan konfigurasi di toko kami. Silakan laporkan kesalahan ini kepada Pemilik Toko: ");
define('MODULE_PAYMENT_PAYEEZYJSZC_TEXT_COMM_ERROR', 'Tidak dapat memproses pembayaran karena kesalahan komunikasi. Anda dapat mencoba lagi atau menghubungi kami untuk bantuan.');
define('MODULE_PAYMENT_PAYEEZYJSZC_ERROR_MISSING_FDTOKEN', "Kami tidak dapat memulai transaksi Anda karena kesalahan skrip sistem. Silakan laporkan kesalahan ini kepada Pemilik Toko: PAYEEZY-FDTOKEN-MISSING");
define('MODULE_PAYMENT_PAYEEZYJSZC_ERROR_DECLINED', 'Maaf, pembayaran Anda tidak dapat diotorisasi. Silakan pilih metode pembayaran alternatif.');

/* Test Cards for use in Sandbox only. Sandbox available at https://developer.payeezy.com:
  Expiry Date: Any future date.
  Cvv:Any 3 digit number for Visa, Mastercard, Diners Club, JCB & Discover and 4 digit number for American Express
  Visa  4012 0000 3333 0026
        4005 5192 0000 0004
  MasterCard  5424 1802 7979 1732
              5526 3990 0064 8568
              5405 0101 0000 0016
  American Express  3739 5319 2351 004
                    3411 1159 7241 002
  Discover  6510 0000 0000 1248
  JCB 3566 0020 2014 0006
  Diners Club 3643 8999 9600 16

  // TESTING RESPONSES: use transaction amount to trigger specific responses (ref: https://support.payeezy.com/hc/en-us/articles/204504175-How-to-generate-unsuccessful-transactions-during-testing)
  $5000.00 = approved
  $5000.22 = invalid card
  $5202.00 = Invalid amount, or amount too large
  $5303.00 = Processor Decline (ie: refused by bank)
  $5500.00 = Fraud - card has been flagged
  $5000.25 = Invalid Expiry Date
  $5000.26 = Invalid Amount
  $5234.00 = Duplicate Order Number
  $5238.00 = Invalid Currency Code
  $5353.00 = The FDToken was invalid or spoofed
  $5000.72 = Invalid data submitted
  $5000.12 = account configuration problem or timeout at gateway
  $5000.37 = payment type not accepted by merchant account
  $5000.43 = invalid merchant account login
  $5000.44 = Address not Verified
  $5245.00 = Missing 3D Secure data
  $5246.00 = Merchant doesn't support MasterCard SecureCode
*/
