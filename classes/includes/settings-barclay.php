<?php

declare( strict_types=1 );
defined( 'ABSPATH' ) || exit;
const AMERICAN_EXPRESS       = 'American Express';
const SELECT_PAYMENT_METHODS = 'Select Payment Methods';

if ( ! function_exists( 'generateRandomString' ) ) {
	function generateRandomString( $length = 10 ) {
		$characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$salt = random_bytes($length);

		return hash_pbkdf2("sha256", $characters, $salt, 20000);
	}
}

if ( ! function_exists( 'generateNewHash' ) ) {
	function generateNewHash() {
		return hash( 'sha512', generateRandomString( 5 ) );
	}
}


/**
 * Settings for Barclay Payment Gateway
 */
return apply_filters(
	'wc_barclay_epdq_settings',
	[
		'enabled'        => [
			'title'   => __( 'Enable/Disable', 'woocommerce' ),
			'type'    => 'checkbox',
			'label'   => __( 'Enable Barclay ePDQ Checkout', 'woocommerce' ),
			'default' => 'no',
		],
		'debug'          => [
			'title'       => __( 'Debug log', 'woocommerce' ),
			'type'        => 'checkbox',
			'label'       => __( 'Enable logging', 'woocommerce' ),
			'default'     => 'no',
			/* translators: %s: URL */
			'description' => sprintf( __( 'Log Barclay ePDQ events, such as IPN requests, inside %s Note: this may log personal information. We recommend using this for debugging purposes only and deleting the logs when finished.',
				'woocommerce' ),
				'<code>' . WC_Log_Handler_File::get_log_file_path( 'barclay' ) . '</code>' ),
		],
		'aavcheck'       => [
			'title'       => __( 'AAVCHECK.', 'woocommerce' ),
			'type'        => 'checkbox',
			'label'       => __( 'Set "NO" as the default value of AAVCHECK', 'woocommerce' ),
			'default'     => 'no',
			'description' => sprintf( __( 'Result of the automatic address verification. This verification is not supported by all credit card acquirers.<br>
        Possible values:<br>
        <strong>KO</strong>: The address has been sent but the acquirer has given a negative response for the address check, i.e. the address is wrong.<br>
        <strong>OK</strong>: The address has been sent and the acquirer has returned a positive response for the address check, i.e. the address is correct OR 
        The acquirer sent an authorisation code but did not return a specific response for the address check.<br>
        <strong>NO</strong>: All other cases. For instance, no address transmitted; the acquirer has replied that an address check was not possible; the acquirer declined the authorisation but did not provide a specific result for the address check.' ) ),
			'desc_tip'    => false,
		],
		'cvccheck'       => [
			'title'       => __( 'CVCCHECK', 'woocommerce' ),
			'type'        => 'checkbox',
			'label'       => __( 'Set "NO" as the default value of CVCCHECK', 'woocommerce' ),
			'default'     => 'no',
			'description' => 'Result of the card verification code check. Only a few acquirers return specific CVC check results. For most acquirers, the CVC is assumed to be correct if the transaction is succesfully authorised.<br>
        Possible values:<br>
        <strong>KO</strong>: The CVC has been sent but the acquirer has given a negative response to the CVC check, i.e. the CVC is wrong.<br>
        <strong>OK</strong>: The CVC has been sent and the acquirer has given a positive response to the CVC check, i.e. the CVC is correct OR 
        The acquirer sent an authorisation code, but did not return a specific result for the CVC check.<br>
        <strong>NO</strong>: All other cases. For instance, no CVC transmitted, the acquirer has replied that a CVC check was not possible, the acquirer declined the authorisation but did not provide a specific result for the CVC check.',
			'desc_tip'    => false,
		],
		'title'          => [
			'title'       => __( 'Title', 'woocommerce' ),
			'type'        => 'text',
			'description' => __( 'Title of the payment process. This name will be visible throughout the site and the payment page.',
				'woocommerce' ),
			'default'     => 'Barclay ePDQ Checkout',
			'desc_tip'    => true,
		],
		'description'    => [
			'title'       => __( 'Description', 'woocommerce' ),
			'type'        => 'textarea',
			'description' => __( 'The payment procedure is described in detail. This description will be visible throughout the site, as well as on the payment page.',
				'woocommerce' ),
			'default'     => 'Use Barclay Bank\'s payment platform and pay with your debit or credit card.',
			'desc_tip'    => true,
		],
		'access_key'     => [
			'title'       => __( 'PSPID', 'woocommerce' ),
			'type'        => 'text',
			'description' => __( 'Your Barclay account\'s PSPID. This is the id you use to access the Barclay Bank admin panel.',
				'woocommerce' ),
			'default'     => '',
			'desc_tip'    => true,
		],
		'status'         => [
			'title'       => __( 'Store Status', 'woocommerce' ),
			'type'        => 'select',
			'options'     => [ 'test' => 'Test Environment', 'live' => 'Live Store' ],
			'description' => __( 'The status of your store indicates whether you are ready to run your business or if it is still in testing mode. No payments will be processed if the test is selected. Please see the user guide provided by the Barclay EPDQ service for more information.',
				'woocommerce' ),
			'default'     => '',
			'desc_tip'    => true,
		],
		'sha_in'         => [
			'title'       => __( 'SHA-IN Passphrase', 'woocommerce' ),
			'type'        => 'text',
			'description' => __( 'To improve security, the SHA-IN signature will encode the parameter passed to the payment processor via the hidden fields.',
				'woocommerce' ),
			'default'     => generateNewHash(),
			'desc_tip'    => true,
		],
		'sha_out'        => [
			'title'       => __( 'SHA-OUT Passphrase', 'woocommerce' ),
			'type'        => 'text',
			'description' => __( 'To improve security, the SHA-OUT signature will encrypt the parameter supplied from the payment processor to the redirection url.',
				'woocommerce' ),
			'default'     => generateNewHash(),
			'desc_tip'    => true,
		],
		'sha_method'     => [
			'title'       => __( 'SHA encryption method', 'woocommerce' ),
			'type'        => 'select',
			'options'     => [ 0 => 'SHA-1', 1 => 'SHA-256', 2 => 'SHA-512' ],
			'description' => __( 'SHA encryption technique - this must be the same as what you have configured in the EPDQ backoffice.',
				'woocommerce' ),
			'default'     => 2,
			'desc_tip'    => true,
		],
		'error_notice'   => [
			'title'       => __( 'Error Notice', 'woocommerce' ),
			'type'        => 'textarea',
			'description' => __( 'In case if there something went wrong while checking out what message will be displayed to the customer.',
				'woocommerce' ),
			'default'     => '',
			'desc_tip'    => true,
		],
		'payment_method' => [
			'title'             => __( 'Payment Method', 'woocommerce' ),
			'type'              => 'multiselect',
			'class'             => 'wc-enhanced-select',
			'description'       => __( 'Payment method decided by the merchant', 'woocommerce' ),
			'default'           => '',
			'desc_tip'          => false,
			'options'           => [
				'PAYPAL'     => __( 'PAYPAL', 'woocommerce' ),
				'CreditCard' => __( 'CreditCard', 'woocommerce' ),
			],
			'custom_attributes' => [
				'data-placeholder' => __( SELECT_PAYMENT_METHODS, 'woocommerce' ),
			],

		],

		'brand_cards'    => [
			'title'             => __( 'Brand Cards', 'woocommerce' ),
			'type'              => 'select',
			'class'             => 'wc-enhanced-select',
			'css'               => 'width: 400px;',
			'description'       => __( 'Brand of Cards Selected by the Merchant eg. VISA, MAESTRO. If blank all cards accepted',
				'woocommerce' ),
			'default'           => '',
			'desc_tip'          => true,
			'options'           => [
				''               => 'all',
				'VISA'           => __( 'VISA', 'woocommerce' ),
				'Maestro'        => __( 'Maestro', 'woocommerce' ),
				'MasterCard'     => __( 'MasterCard', 'woocommerce' ),
				AMERICAN_EXPRESS => __( AMERICAN_EXPRESS, 'woocommerce' ),
				'JCB'            => __( 'JCB', 'woocommerce' ),
			],
			'custom_attributes' => [
				'data-placeholder' => __( SELECT_PAYMENT_METHODS, 'woocommerce' ),
			],
		],
		'secure_3d'      => [
			'title'       => __( 'Secured With 3D', 'woocommerce' ),
			'type'        => 'select',
			'options'     => [ 'MAINW' => 'Main Window (Default)', 'POPUP' => 'Popup window' ],
			'description' => __( 'Require Secure 3D Payments Main Windows is default as recommended as many card services do not support them',
				'woocommerce' ),
			'default'     => 'MAINW',
			'desc_tip'    => false,
		],
		'method_list'    => [
			'title'             => __( 'Payment Method List', 'woocommerce' ),
			'type'              => 'multiselect',
			'description'       => __( 'List of CARD services accepted for payments seperated by eg:VISA;iDEA',
				'woocommerce' ),
			'class'             => 'wc-enhanced-select',
			'css'               => 'width: 400px;',
			'default'           => '',
			'desc_tip'          => true,
			'options'           => [
				''               => 'all',
				'VISA'           => __( 'VISA', 'woocommerce' ),
				'Maestro'        => __( 'Maestro', 'woocommerce' ),
				'MasterCard'     => __( 'MasterCard', 'woocommerce' ),
				AMERICAN_EXPRESS => __( AMERICAN_EXPRESS, 'woocommerce' ),
				'JCB'            => __( 'JCB', 'woocommerce' ),
			],
			'custom_attributes' => [
				'data-placeholder' => __( SELECT_PAYMENT_METHODS, 'woocommerce' ),
			],
		],
		'com_plus'       => [
			'title'       => __( 'COM PLUS', 'woocommerce' ),
			'type'        => 'text',
			'description' => __( 'Field for submitting a value you would like to be returned in the feedback request.',
				'woocommerce' ),
			'default'     => '',//12345687891235456789
			'desc_tip'    => false,
		],
		'param_plus'     => [
			'title'       => __( 'PARAM PLUS', 'woocommerce' ),
			'type'        => 'text',
			'description' => __( 'Field for submitting some parameters and their values you would like to be returned in the feedback request. The field PARAMPLUS is not included in the feedback parameters as such; instead, the parameters/values you submit in this field will be parsed and the resulting parameters added to the http request.',
				'woocommerce' ),
			'default'     => '',//SessionID and Shopper ID
			'desc_tip'    => false,
		],
		'param_var'      => [
			'title'       => __( 'Variable Post Payment URL', 'woocommerce' ),
			'type'        => 'text',
			'description' => __( 'The variable part to include in the URLs used for feedback requests', 'woocommerce' ),
			'default'     => '',//VISA;iDEA
			'desc_tip'    => false,
		],
		'api_user_id'    => [
			'title'       => __( 'API Username for Direct Payments', 'woocommerce' ),
			'type'        => 'text',
			'description' => __( 'API Username for Direct Payments', 'woocommerce' ),
			'default'     => '',//VISA;iDEA
			'desc_tip'    => false,
		],
		'api_user_pswd'  => [
			'title'       => __( 'API Password for Direct Payments', 'woocommerce' ),
			'type'        => 'text',
			'description' => __( 'API Password for Direct Payments', 'woocommerce' ),
			'default'     => '',//VISA;iDEA
			'desc_tip'    => false,
		],
		'operation'      => [
			'title'       => __( 'Operation', 'woocommerce' ),
			'type'        => 'select',
			'options'     => [ 'RES' => 'Request for Authorisation', 'SAL' => 'Request for sale (payment)' ],
			'description' => __( 'Operation Code For Transaction ', 'woocommerce' ),
			'default'     => '',//VISA;iDEA
			'desc_tip'    => false,
		],
		'show_logo'      => [
			'title'   => __( 'Show Barclay Accepted Card on Payment Page', 'woocommerce' ),
			'type'    => 'checkbox',
			'label'   => __( 'Show Barclay Accepted Card on Payment Page', 'woocommerce' ),
			'default' => 'yes',
		],
		'pp_format'      => [
			'title'   => __( 'Payment Page', 'woocommerce' ),
			'type'    => 'checkbox',
			'label'   => __( 'Enable payment page formatting', 'woocommerce' ),
			'default' => 'no',
		],
		'TITLE'          => [
			'title'       => __( 'Payment Page Title', 'woocommerce' ),
			'type'        => 'text',
			'description' => __( 'Title of the payment page. This name will be visible in the title bar of the payment page.',
				'woocommerce' ),
			'default'     => '',
			'desc_tip'    => false,
		],
		'BGCOLOR'        => [
			'title'       => __( 'Background Color', 'woocommerce' ),
			'type'        => 'text',
			'description' => __( 'Background color of the payment page.', 'woocommerce' ),
			'default'     => '#000',
			'class'       => 'popup-colorpicker',
			'append'      => '<div id="woocommerce_Barclay_BGCOLORpicker" class="color-picker"></div>',
			'desc_tip'    => false,
		],
		'TXTCOLOR'       => [
			'title'       => __( 'Text Color', 'woocommerce' ),
			'type'        => 'text',
			'description' => __( 'Text color of the payment page.', 'woocommerce' ),
			'default'     => '#000',
			'class'       => 'popup-colorpicker',
			'append'      => '<div id="woocommerce_Barclay_TXTCOLORpicker" class="color-picker"></div>',
			'desc_tip'    => false,
		],
		'TBLBGCOLOR'     => [
			'title'       => __( 'Table Background Color', 'woocommerce' ),
			'type'        => 'text',
			'description' => __( 'Table background color of the payment page.', 'woocommerce' ),
			'default'     => '#000',
			'class'       => 'popup-colorpicker',
			'append'      => '<div id="woocommerce_Barclay_TBLBGCOLORpicker" class="color-picker"></div>',
			'desc_tip'    => false,
		],
		'TBLTXTCOLOR'    => [
			'title'       => __( 'Table Text Color', 'woocommerce' ),
			'type'        => 'text',
			'description' => __( 'Table text color of the payment page.', 'woocommerce' ),
			'default'     => '#000',
			'class'       => 'popup-colorpicker',
			'append'      => '<div id="woocommerce_Barclay_TBLTXTCOLORpicker" class="color-picker"></div>',
			'desc_tip'    => false,
		],
		'BUTTONBGCOLOR'  => [
			'title'       => __( 'Button Background Color', 'woocommerce' ),
			'type'        => 'text',
			'description' => __( 'Button background color of the payment page.', 'woocommerce' ),
			'default'     => '#000',
			'class'       => 'popup-colorpicker',
			'append'      => '<div id="woocommerce_Barclay_BUTTONBGCOLORpicker" class="color-picker"></div>',
			'desc_tip'    => false,
		],
		'BUTTONTXTCOLOR' => [
			'title'       => __( 'Button Text Color', 'woocommerce' ),
			'type'        => 'text',
			'description' => __( 'Button text color of the payment page.', 'woocommerce' ),
			'default'     => '#000',
			'class'       => 'popup-colorpicker',
			'append'      => '<div id="woocommerce_Barclay_BUTTONTXTCOLORpicker" class="color-picker"></div>',
			'desc_tip'    => false,
		],
		'FONTTYPE'       => [
			'title'       => __( 'Font Type', 'woocommerce' ),
			'type'        => 'text',
			'description' => __( 'Font type of the payment page.', 'woocommerce' ),
			'default'     => '',
			'desc_tip'    => false,
		],
		'LOGO'           => [
			'title'       => __( 'Logo', 'woocommerce' ),
			'type'        => 'text',
			'description' => __( 'Logo in the payment page. This logo url must be stored in a ssl enabled location or else it won\'t be shown.',
				'woocommerce' ),
			'default'     => '',
			'desc_tip'    => false,
		],
	]
);
