<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Mon Oct 19 01:43:02 2015 -0400 Modified in v1.5.5 $
 */

define('HEADING_TITLE', 'Siapa yang Online');
define('TABLE_HEADING_ONLINE', 'Online');
define('TABLE_HEADING_CUSTOMER_ID', 'ID');
define('TABLE_HEADING_FULL_NAME', 'Nama Lengkap');
define('TABLE_HEADING_IP_ADDRESS', 'ALamat IP');
define('TABLE_HEADING_SESSION_ID', 'Sesi');
define('TABLE_HEADING_ENTRY_TIME', 'Waktu Datang');
define('TABLE_HEADING_LAST_CLICK', 'Waktu Pengklikan Terakhir');
define('TIME_PASSED_LAST_CLICKED', '<strong>Waktu Semenjak Pengklikan:</strong> ');
define('TABLE_HEADING_LAST_PAGE_URL', 'URL Terakhir yang Dilihat');
define('TABLE_HEADING_ACTION', 'Tindakan');
define('TABLE_HEADING_SHOPPING_CART', 'Troli Pengguna');
define('TEXT_SHOPPING_CART_SUBTOTAL', 'Subtotal');
define('TEXT_NUMBER_OF_CUSTOMERS', 'Saat ini terdapat %s pelanggan yang online');

define('WHOS_ONLINE_REFRESH_LIST_TEXT', 'SEGARKAN DAFTAR');
define('WHOS_ONLINE_LEGEND_TEXT', 'Legenda:');
define('WHOS_ONLINE_ACTIVE_TEXT', 'Troli aktif');
define('WHOS_ONLINE_INACTIVE_TEXT', 'Troli tidak aktif');
define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT', 'Aktif tanpa Troli');
define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT', 'Tidak aktif tanpa Troli');
define('WHOS_ONLINE_INACTIVE_LAST_CLICK_TEXT', 'Tidak aktif adalah apabila Pengklikan Tterakhir >=');
define('WHOS_ONLINE_INACTIVE_ARRIVAL_TEXT', 'Tidak aktif semenjak kedatangan >');
define('WHOS_ONLINE_REMOVED_TEXT', 'akan dihapus');

define('TEXT_SESSION_ID', '<strong>ID Sesi:</strong> ');
define('TEXT_HOST', '<strong>Host:</strong> ');
define('TEXT_USER_AGENT', '<strong>Agen Pengguna:</strong> ');
define('TEXT_EMPTY_CART', '<strong>Troli Kosong</strong>');
define('TEXT_WHOS_ONLINE_FILTER_SPIDERS', 'Tidak Termasuk Spiders?');
define('TEXT_WHOS_ONLINE_FILTER_ADMINS', 'Tidak Termasuk Alamat IP Admin?');

define('WHOIS_TIMER_REMOVE', 1200); // seconds when removed from whos_online table - 1200 default = 20 minutes
define('WHOIS_TIMER_INACTIVE', 180); // seconds when considered inactive - 180 default = 3 minutes
define('WHOIS_TIMER_DEAD', 540); // seconds when considered dead - 540 default = 9 minutes
define('WHOIS_SHOW_HOST', '1'); // show Last Clicked time and host name - 1 default
define('WHOIS_REPEAT_LEGEND_BOTTOM', '12'); // show legend on bottom when more than how many entries - 12 default

define('TEXT_DUPLICATE_IPS', 'IP Address Duplikat: ');
define('TEXT_TOTAL_UNIQUE_USERS', 'Total Pengguna Unik: ');

define('TEXT_WHOS_ONLINE_TIMER_UPDATING', 'Memperbarui ');
define('TEXT_WHOS_ONLINE_TIMER_EVERY', 'setiap %s detik.&nbsp;&nbsp;');
define('TEXT_WHOS_ONLINE_TIMER_DISABLED', 'Secara Manual');
define('TEXT_WHOS_ONLINE_TIMER_FREQ0', 'OFF');
define('TEXT_WHOS_ONLINE_TIMER_FREQ1', '5 detik');
define('TEXT_WHOS_ONLINE_TIMER_FREQ2', '15 detik');
define('TEXT_WHOS_ONLINE_TIMER_FREQ3', '30 detik');
define('TEXT_WHOS_ONLINE_TIMER_FREQ4', '1 menit');
define('TEXT_WHOS_ONLINE_TIMER_FREQ5', '5m');
define('TEXT_WHOS_ONLINE_TIMER_FREQ6', '10m');
define('TEXT_WHOS_ONLINE_TIMER_FREQ7', '14m');
