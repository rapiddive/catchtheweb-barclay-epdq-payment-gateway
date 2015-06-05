<?php

class CB_WC_Gateway_Barclay extends WC_Payment_Gateway{
	function __construct(){
		$this->id 			= 'barclay';
		$this->method_title = __('Barclay ePDQ','woocommerce');

		// Load the settings.
		$this->init_form_fields();
		$this->init_settings();
	}

	private function add_payment_hooks(){

	}
}