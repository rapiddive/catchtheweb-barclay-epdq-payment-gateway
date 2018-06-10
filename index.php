<?php
/**
 * Plugin Name: RapidDive BARCLAY ePDQ Payment Gateway
 * Plugin URI: http://rapiddive.com/barclaycard-epdq-payment-gateway.html
 * Description: Barclay Card ePDQ payment gateway integration for woocommerce users.
 * Version: 2.2.0
 * Author: Vinay Shah
 * Author URI: http://vinayshah.in
 * Developer: Vinay Shah
 * Developer URI: http://vinayshah.in
 * Text Domain: rapiddive-barclay
 *
 * Copyright: © 2009-2015 WooCommerce.
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Check if WooCommerce is active
 **/
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    require 'classes/rapiddive_barclay_payment.php';

    global $rapiddive_barclay_payment;
    $rapiddive_barclay_payment = new RapidDive_Barclay_Payment(__FILE__);
}

