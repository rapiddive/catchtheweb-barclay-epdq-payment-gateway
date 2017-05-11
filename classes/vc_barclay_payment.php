<?php

class VC_Barclay_Payment {
	private $dir;
	private $token;
	private $file;

	/**
	 * Constructor function.
	 * 
	 * @access public
	 * @since 1.0
	 * @return void
	 */
	public function __construct( $file ) {
		$this->dir = dirname( $file );
		$this->file = $file;
		$this->version = '2.0';

		$this->token = 'vc_barclay';

		$this->addHooks();

	}

	/**
	 * Register various hooks
	 * 
	 * @access private
	 * @return void
	 *
	 */
	private function addHooks(){
		add_action( 'plugins_loaded', array( $this, 'initBarclayGateway' ) );
		add_filter( 'woocommerce_payment_gateways', array( &$this, 'methodBarclayGateway' ) );
		
	}

	/**
	 * Function to intiate Payment Gateway
	 *
	 * @access public
	 * @return void
	 *
	 */

	public function initBarclayGateway() {
		
		if ( !class_exists( 'WC_Payment_Gateway' ) ) return;
		
		require 'vc_wc_gateway_barclay.php';
	}

	/**
	 * Function to send require methods to woocommerce for initailization of gateway
	 * @access public
	 * @return void
	 *
	 */

	public function methodBarclayGateway( $methods ) {
		$methods[] = 'VC_WC_Gateway_Barclay'; 
		return $methods;
	}

}
?>