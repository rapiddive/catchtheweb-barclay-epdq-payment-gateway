<?php
/**
 * Plugin Name: Catchtheweb BARCLAY ePDQ Payment Gateway
 * Plugin URI: http://catchtheweb.net/vc-barclay-payment-gateway.html
 * Description: Barclay Card ePDQ payment gateway integration for woocommerce users.
 * Version: 2.1.0
 * Author: Vinay Shah
 * Author URI: http://vinayshah.in
 * Developer: Vinay Shah
 * Developer URI: http://vinayshah.in
 * Text Domain: vc-barclay
 * 
 *
 * Copyright: © 2009-2015 WooCommerce.
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

if( ! defined( 'ABSPATH' ) ) exit;

/**
 * Check if WooCommerce is active
 **/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	require 'classes/vc_barclay_payment.php';

	global $vc_barclay_payment;
	$vc_barclay_payment = new VC_Barclay_Payment( __FILE__ );
}

