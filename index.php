<?php
/*
Plugin Name: CB Barclay EPDQ Payment Gateway
Plugin URI:
Author : Vinay Shah
Version: 2.1
Description: EPDQ PAYMENT GATEWAY FOR WOOCOMMERCE
License: GPL2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.

require 'classes/cb_barclay_payment.php';

global $cb_barclay_payment;
$cb_barclay_payment = new CB_Barclay_Payment( __FILE__ );

?>