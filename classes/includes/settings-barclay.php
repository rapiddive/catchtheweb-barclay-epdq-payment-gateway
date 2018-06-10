<?php
/**
 * Settings for PayPal Gateway.
 *
 * @package WooCommerce/Classes/Payment
 */

defined('ABSPATH') || exit;

/**
 * Settings for Barclay Payment Gateway
 */
return array(
    'enabled' => array(
        'title' => __('Enable/Disable', 'woocommerce'),
        'type' => 'checkbox',
        'label' => __('Enable Barclay ePDQ Checkout', 'woocommerce'),
        'default' => 'no'
    ),
    'aavcheck' => array(
        'title' => __('AAVCHECK.', 'woocommerce'),
        'type' => 'checkbox',
        'label' => __('Set "NO" as the default value of AAVCHECK', 'woocommerce'),
        'default' => 'no',
        'description' => sprintf(__('Result of the automatic address verification. This verification is not supported by all credit card acquirers.<br>
        Possible values:<br>
        <strong>KO</strong>: The address has been sent but the acquirer has given a negative response for the address check, i.e. the address is wrong.<br>
        <strong>OK</strong>: The address has been sent and the acquirer has returned a positive response for the address check, i.e. the address is correct OR 
        The acquirer sent an authorisation code but did not return a specific response for the address check.<br>
        <strong>NO</strong>: All other cases. For instance, no address transmitted; the acquirer has replied that an address check was not possible; the acquirer declined the authorisation but did not provide a specific result for the address check.')),
        'desc_tip' => false
    ),
    'cvccheck' => array(
        'title' => __('CVCCHECK', 'woocommerce'),
        'type' => 'checkbox',
        'label' => __('Set "NO" as the default value of CVCCHECK', 'woocommerce'),
        'default' => 'no',
        'description' => 'Result of the card verification code check. Only a few acquirers return specific CVC check results. For most acquirers, the CVC is assumed to be correct if the transaction is succesfully authorised.<br>
        Possible values:<br>
        <strong>KO</strong>: The CVC has been sent but the acquirer has given a negative response to the CVC check, i.e. the CVC is wrong.<br>
        <strong>OK</strong>: The CVC has been sent and the acquirer has given a positive response to the CVC check, i.e. the CVC is correct OR 
        The acquirer sent an authorisation code, but did not return a specific result for the CVC check.<br>
        <strong>NO</strong>: All other cases. For instance, no CVC transmitted, the acquirer has replied that a CVC check was not possible, the acquirer declined the authorisation but did not provide a specific result for the CVC check.',
        'desc_tip' => false
    ),
    'title' => array(
        'title' => __('Title', 'woocommerce'),
        'type' => 'text',
        'description' => __('Title of the payment process. This name will be visible throughout the site and the payment page.',
            'woocommerce'),
        'default' => 'Barclay ePDQ Checkout',
        'desc_tip' => true
    ),
    'description' => array(
        'title' => __('Description', 'woocommerce'),
        'type' => 'textarea',
        'description' => __('Description of the payment process. This description will be visible throuhout the site and the payment page.',
            'woocommerce'),
        'default' => 'Use the payment processor of barclay bank and checkout with your debit/credit card.',
        'desc_tip' => true
    ),
    'access_key' => array(
        'title' => __('PSPID', 'woocommerce'),
        'type' => 'text',
        'description' => __('The PSPID for your barkley account. This is the id which you use to login the admin panel of the barkley bank.',
            'woocommerce'),
        'default' => '',
        'desc_tip' => true
    ),
    'status' => array(
        'title' => __('Store Status', 'woocommerce'),
        'type' => 'select',
        'options' => array('test' => 'Test Environment', 'live' => 'Live Store'),
        'description' => __('The status of your store tells that are you actually ready to run your shop or its still a test environment. If the test is selected then no payments will be processed. For details please refer to the user guide provided by the Barkley EPDQ servise.',
            'woocommerce'),
        'default' => '',
        'desc_tip' => true,
    ),
    'sha_in' => array(
        'title' => __('SHA-IN Passphrase', 'woocommerce'),
        'type' => 'text',
        'description' => __('The SHA-IN signature will encode the parameter passed to the payment processor via the hidden fields to ensure better security.',
            'woocommerce'),
        'default' => '',
        'desc_tip' => true
    ),
    'sha_out' => array(
        'title' => __('SHA-OUT Passphrase', 'woocommerce'),
        'type' => 'text',
        'description' => __('The SHA-OUT signature will encode the parameter passed to the redirection url from the payment processor to ensure better security.',
            'woocommerce'),
        'default' => 0,
        'desc_tip' => true
    ),
    'sha_method' => array(
        'title' => __('SHA encription method', 'woocommerce'),
        'type' => 'select',
        'options' => array(0 => 'SHA-1', 1 => 'SHA-256', 2 => 'SHA-512'),
        'description' => __('Sha encryption method - this needs to be similar waht you have set in the epdq backoffice.',
            'woocommerce'),
        'default' => '',
        'desc_tip' => true,
    ),
    'error_notice' => array(
        'title' => __('Error Notice', 'woocommerce'),
        'type' => 'textarea',
        'description' => __('In case if there something went wrong while checking out what message will be displayed to the customer.',
            'woocommerce'),
        'default' => '',
        'desc_tip' => true
    ),
    'payment_method' => array(
        'title' => __('Payment Method', 'woocommerce'),
        'type' => 'multiselect',
        'class' => 'wc-enhanced-select',
        'description' => __('Payment method decided by the merchant', 'woocommerce'),
        'default' => '',
        'desc_tip' => false,
        'options' => array(
            'PAYPAL' => __('PAYPAL', 'woocommerce'),
            'CreditCard' => __('CreditCard', 'woocommerce')
        ),
        'custom_attributes' => array(
            'data-placeholder' => __('Select Payment Methods', 'woocommerce'),
        ),

    ),

    'brand_cards' => array(
        'title' => __('Brand Cards', 'woocommerce'),
        'type' => 'multiselect',
        'class' => 'wc-enhanced-select',
        'css' => 'width: 400px;',
        'description' => __('Brand of Cards Selected by the Merchant eg. VISA, MESTRO. If blank all cards accepted',
            'woocommerce'),
        'default' => '',
        'desc_tip' => true,
        'options' => array(
            '' => 'all',
            'VISA' => __('VISA', 'woocommerce'),
            'Maestro' => __('Maestro', 'woocommerce'),
            'MasterCard' => __('MasterCard', 'woocommerce'),
            'American Express' => __('American Express', 'woocommerce'),
            'JCB' => __('JCB', 'woocommerce')
        ),
        'custom_attributes' => array(
            'data-placeholder' => __('Select Payment Methods', 'woocommerce'),
        ),
    ),
    'secure_3d' => array(
        'title' => __('Secured With 3D', 'woocommerce'),
        'type' => 'select',
        'options' => array('MAINW' => 'Main Window (Default)', 'POPUP' => 'Popup window'),
        'description' => __('Require Secure 3D Payments Main Windows is default as recommened as many card services donot support them',
            'woocommerce'),
        'default' => 'MAINW',
        'desc_tip' => false,
    ),
    'method_list' => array(
        'title' => __('Payment Method List', 'woocommerce'),
        'type' => 'multiselect',
        'description' => __('List of CARD services accepted for paymentss seperated by eg:VISA;iDEA', 'woocommerce'),
        'class' => 'wc-enhanced-select',
        'css' => 'width: 400px;',
        'default' => '',
        'desc_tip' => true,
        'options' => array(
            '' => 'all',
            'VISA' => __('VISA', 'woocommerce'),
            'Maestro' => __('Maestro', 'woocommerce'),
            'MasterCard' => __('MasterCard', 'woocommerce'),
            'American Express' => __('American Express', 'woocommerce'),
            'JCB' => __('JCB', 'woocommerce')
        ),
        'custom_attributes' => array(
            'data-placeholder' => __('Select Payment Methods', 'woocommerce'),
        ),
    ),
    'com_plus' => array(
        'title' => __('COM PLUS', 'woocommerce'),
        'type' => 'text',
        'description' => __('Field for submitting a value you would like to be returned in the feedback request.',
            'woocommerce'),
        'default' => '',//12345687891235456789
        'desc_tip' => false,
    ),
    'param_plus' => array(
        'title' => __('PARAM PLUS', 'woocommerce'),
        'type' => 'text',
        'description' => __('Field for submitting some parameters and their values you would like to be returned in the feedback request. The field PARAMPLUS is not included in the feedback parameters as such; instead, the parameters/values you submit in this field will be parsed and the resulting parameters added to the http request.',
            'woocommerce'),
        'default' => '',//SessionID and Shopper ID
        'desc_tip' => false,
    ),
    'param_var' => array(
        'title' => __('Variable Post Payment URL', 'woocommerce'),
        'type' => 'text',
        'description' => __('The variable part to include in the URLs used for feedback requests', 'woocommerce'),
        'default' => '',//VISA;iDEA
        'desc_tip' => false,
    ),
    'api_user_id' => array(
        'title' => __('API Username for Direct Payments', 'woocommerce'),
        'type' => 'text',
        'description' => __('API Username for Direct Payments', 'woocommerce'),
        'default' => '',//VISA;iDEA
        'desc_tip' => false,
    ),
    'api_user_pswd' => array(
        'title' => __('API Password for Direct Payments', 'woocommerce'),
        'type' => 'text',
        'description' => __('API Password for Direct Payments', 'woocommerce'),
        'default' => '',//VISA;iDEA
        'desc_tip' => false,
    ),
    'operation' => array(
        'title' => __('Operation', 'woocommerce'),
        'type' => 'select',
        'options' => array('RES' => 'Request for Authorisation', 'SAL' => 'Request for sale (payment)'),
        'description' => __('Operation Code For Transaction ', 'woocommerce'),
        'default' => '',//VISA;iDEA
        'desc_tip' => false,
    ),
    'pp_format' => array(
        'title' => __('Payment Page', 'woocommerce'),
        'type' => 'checkbox',
        'label' => __('Enable payment page formatting', 'woocommerce'),
        'default' => 'no'
    ),
    'TITLE' => array(
        'title' => __('Payment Page Title', 'woocommerce'),
        'type' => 'text',
        'description' => __('Title of the payment page. This name will be visible in the title bar of the payment page.',
            'woocommerce'),
        'default' => '',
        'desc_tip' => false
    ),
    'BGCOLOR' => array(
        'title' => __('Background Color', 'woocommerce'),
        'type' => 'text',
        'description' => __('Background color of the payment page.', 'woocommerce'),
        'default' => '#000',
        'class' => 'popup-colorpicker',
        'append' => '<div id="woocommerce_Barclay_BGCOLORpicker" class="color-picker"></div>',
        'desc_tip' => false
    ),
    'TXTCOLOR' => array(
        'title' => __('Text Color', 'woocommerce'),
        'type' => 'text',
        'description' => __('Text color of the payment page.', 'woocommerce'),
        'default' => '#000',
        'class' => 'popup-colorpicker',
        'append' => '<div id="woocommerce_Barclay_TXTCOLORpicker" class="color-picker"></div>',
        'desc_tip' => false
    ),
    'TBLBGCOLOR' => array(
        'title' => __('Table Background Color', 'woocommerce'),
        'type' => 'text',
        'description' => __('Table background color of the payment page.', 'woocommerce'),
        'default' => '#000',
        'class' => 'popup-colorpicker',
        'append' => '<div id="woocommerce_Barclay_TBLBGCOLORpicker" class="color-picker"></div>',
        'desc_tip' => false
    ),
    'TBLTXTCOLOR' => array(
        'title' => __('Table Text Color', 'woocommerce'),
        'type' => 'text',
        'description' => __('Table text color of the payment page.', 'woocommerce'),
        'default' => '#000',
        'class' => 'popup-colorpicker',
        'append' => '<div id="woocommerce_Barclay_TBLTXTCOLORpicker" class="color-picker"></div>',
        'desc_tip' => false
    ),
    'BUTTONBGCOLOR' => array(
        'title' => __('Button Background Color', 'woocommerce'),
        'type' => 'text',
        'description' => __('Button background color of the payment page.', 'woocommerce'),
        'default' => '#000',
        'class' => 'popup-colorpicker',
        'append' => '<div id="woocommerce_Barclay_BUTTONBGCOLORpicker" class="color-picker"></div>',
        'desc_tip' => false
    ),
    'BUTTONTXTCOLOR' => array(
        'title' => __('Button Text Color', 'woocommerce'),
        'type' => 'text',
        'description' => __('Button text color of the payment page.', 'woocommerce'),
        'default' => '#000',
        'class' => 'popup-colorpicker',
        'append' => '<div id="woocommerce_Barclay_BUTTONTXTCOLORpicker" class="color-picker"></div>',
        'desc_tip' => false
    ),
    'FONTTYPE' => array(
        'title' => __('Font Type', 'woocommerce'),
        'type' => 'text',
        'description' => __('Font type of the payment page.', 'woocommerce'),
        'default' => '',
        'desc_tip' => false
    ),
    'LOGO' => array(
        'title' => __('Logo', 'woocommerce'),
        'type' => 'text',
        'description' => __('Logo in the payment page. This logo url must be stored in a ssl enabled location or else it won\'t be shown.',
            'woocommerce'),
        'default' => '',
        'desc_tip' => false
    )
);