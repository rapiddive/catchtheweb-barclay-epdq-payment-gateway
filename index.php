<?php
/*
Plugin Name: Catchtheweb BARCLAY ePDQ Payment Gateway
Description: woocommerce epdq payment gateway
Plugin URI: http://catchtheweb.net/
Author: Vinay Shah
Author URI: http://vinayshah.in
Version: 2.1
License: GPL2
Text Domain: vc-barclay
*/

if( ! defined( 'ABSPATH' ) ) exit;

require 'classes/vc_barclay_payment.php';

global $vc_barclay_payment;
$vc_barclay_payment = new VC_Barclay_Payment( __FILE__ );
