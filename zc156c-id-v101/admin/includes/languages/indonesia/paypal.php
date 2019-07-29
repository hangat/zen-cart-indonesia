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
// |                                                                      |
// |   DevosC, Developing open source Code                                |
// |   Copyright (c) 2004 DevosC.com                                      |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: paypal.php 3016 2006-02-12 05:26:46Z ajeh $
//

  // sort orders
  define('TEXT_PAYPAL_IPN_SORT_ORDER_INFO', 'Urutan Tampilan: ');
  define('TEXT_SORT_PAYPAL_ID_DESC', 'Pesanan PayPal yang Diterima (baru - lama)');
  define('TEXT_SORT_PAYPAL_ID', 'Pesanan PayPal yang Diterima (lama - baru)');
  define('TEXT_SORT_ZEN_ORDER_ID_DESC', 'ID Pesanan (tinggi - rendah), Pesanan PayPal yang Diterima');
  define('TEXT_SORT_ZEN_ORDER_ID', 'ID Pesanan (rendah - tinggi), Pesanan PayPal yang Diterima');
  define('TEXT_PAYMENT_AMOUNT_DESC', 'Jumlah Pesanan (tinggi - rendah)');
  define('TEXT_PAYMENT_AMOUNT', 'Jumlah Pesanan (tinggi - rendah)');

  //begin ADMIN text
  define('HEADING_ADMIN_TITLE', 'Pemberitahuan Pembayaran Instan PayPal');
  define('HEADING_PAYMENT_STATUS', 'Status Pembayaran');
  define('TEXT_ALL_IPNS', 'Semua');

  define('TABLE_HEADING_ORDER_NUMBER', 'Pesanan #');
  define('TABLE_HEADING_PAYPAL_ID', 'PayPal #');
  define('TABLE_HEADING_TXN_TYPE', 'Tipe Transaksi');
  define('TABLE_HEADING_PAYMENT_STATUS', 'Status Pembayaran');
  define('TABLE_HEADING_PAYMENT_AMOUNT', 'Jumlah');
  define('TABLE_HEADING_ACTION', 'Tindakan');
  define('TABLE_HEADING_DATE_ADDED', 'Tanggal Ditambahkan');
  define('TABLE_HEADING_NUM_HISTORY_ENTRIES', 'Jumlah data dalam Riwayat Status');
  define('TABLE_HEADING_ENTRY_NUM', 'Jumlah Data');
  define('TABLE_HEADING_TRANS_ID', 'ID Transaksi');



  define('TEXT_INFO_PAYPAL_IPN_HEADING', 'PayPal IPN');
  define('TEXT_DISPLAY_NUMBER_OF_TRANSACTIONS', 'Menampilkan IPN <strong>%d</strong> sampai <strong>%d</strong> (dari <strong>%d</strong> IPN)');

  //Details section
  define('HEADING_DEATILS_CUSTOMER_REGISTRATION_TITLE', 'Detail Pendaftaran Pelanggan PayPal');
  define('HEADING_DETAILS_REGISTRATION_TITLE', 'Pemberitahuan Pembayaran Instan PayPal');
  define('TEXT_INFO_ENTRY_ADDRESS', 'Alamat');
  define('TEXT_INFO_ORDER_NUMBER', 'Nomor Pesanan');
  define('TEXT_INFO_TXN_TYPE', 'Tipe Transaksi');
  define('TEXT_INFO_PAYMENT_STATUS', 'Status Pembayaran');
  define('TEXT_INFO_PAYMENT_AMOUNT', 'Jumlah');
  define('ENTRY_FIRST_NAME', 'Nama Depan');
  define('ENTRY_LAST_NAME', 'Nama Belakang');
  define('ENTRY_BUSINESS_NAME', 'Nama Bisnis');
  define('ENTRY_ADDRESS', 'Alamat');
  //EMAIL ALREADY DEFINED IN ORDERS
  define('ENTRY_PAYER_ID', 'ID Pembayar');
  define('ENTRY_PAYER_STATUS', 'Status Pembayar');
  define('ENTRY_ADDRESS_STATUS', 'Status Alamat');
  define('ENTRY_PAYMENT_TYPE', 'Tipe Pembayaran');
  define('TABLE_HEADING_ENTRY_PAYMENT_STATUS', 'Status Pembayaran');
  define('TABLE_HEADING_PENDING_REASON', 'Alasan Penundaan');
  define('TABLE_HEADING_IPN_DATE', 'Tanggal IPN');
  define('ENTRY_INVOICE', 'Faktur');
  define('ENTRY_PAYPAL_IPN_TXN', 'ID Transaksi');
  define('ENTRY_PAYMENT_DATE', 'Tanggal Pembayaran');
  define('ENTRY_PAYMENT_LAST_MODIFIED', 'Terakhir Dimodifikasi');
  define('ENTRY_MC_CURRENCY', 'Mata Uang MC');
  define('ENTRY_MC_GROSS', 'Jumlah Kotor MC');
  define('ENTRY_MC_FEE', 'Biaya MC');
  define('ENTRY_PAYMENT_GROSS', 'Jumlah Kotor Pembayaran');
  define('ENTRY_PAYMENT_FEE', 'Biaya Pembayaran');
  define('ENTRY_SETTLE_AMOUNT', 'Jumlah Pelunasan');
  define('ENTRY_SETTLE_CURRENCY', 'Mata Uang Pelunasan');
  define('ENTRY_EXCHANGE_RATE', 'Kurs Nilai Tukar');
  define('ENTRY_CART_ITEMS', 'Jumlah Barang dalam Troli');
  define('ENTRY_CUSTOMER_COMMENTS', 'Komentar Pelanggan');
  define('TEXT_NO_IPN_HISTORY', 'Jumlah riwayat IPN yang tersedia');
  define('TEXT_TXN_SIGNATURE', 'Tanda Tangan Transaksi');
  //end ADMIN text
?>
