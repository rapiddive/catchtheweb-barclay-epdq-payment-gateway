<?php
/*
Plugin Name: CB BARCLAY EPDQ
Description: woocommerce epdq
Plugin URI: http://#
Author: Vinay Shah
Author URI: http://vinayshah.in
Version: 2.1
License: GPL2
Text Domain: cb-barclay
*/

if( ! defined( 'ABSPATH' ) ) exit;

require 'classes/cb_barclay_payment.php';

global $cb_barclay_payment;
$cb_barclay_payment = new CB_Barclay_Payment( __FILE__ );