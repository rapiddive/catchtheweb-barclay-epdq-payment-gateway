<?php

/**
* CB Barclay Payment Gateway Extension
*/
class CB_Barclay_Payment {

	/**
	 * Constructor function
	 * @access public
	 * @since 1.0
	 * @return void
	 */
	public function __construct( $file ){
		$this->dir = dirname( $file );
		$this->file = $file;
		$this->version = '2.0';

		$this->token = 'cb_barclay';

		$this->addHooks();
	}

	/**
	 * Register Various Hooks
	 *
	 * @return void
	 * @access private
	 **/
	private function addHooks(){
		add_action( 'plugin_loaded', array( $this, 'initBarclayGateway' ) );
		add_filter( 'woocommerce_payment_gateways', array( &$this, 'methodBarclayGateway') )
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

		require 'cb_wc_gateway_barclay.php';
	}

	/**
	 * Function to send require methods to woocommerce for initailization of gateway
	 * @access public
	 * @return void
	 *
	 */

	public function methodBarclayGateway( $methods ) {
		$methods[] = 'CB_WC_Gateway_Barclay';
		return $methods;
	}
}