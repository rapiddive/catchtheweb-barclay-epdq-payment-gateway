<?php

/**
 * Class RapidDive_Barclay_Payment
 */
class RapidDive_Barclay_Payment
{
    private $dir;
    private $token;
    private $file;

    /**
     * RapidDive_Barclay_Payment constructor.
     * @access public
     * @since 1.0
     * @param $file
     */
    public function __construct($file)
    {
        $this->dir     = dirname($file);
        $this->file    = $file;
	    $this->version = '2.3.1';

        $this->token = 'rapiddive-barclay';

        $this->addHooks();
    }

    /**
     * Register various hooks
     */
    private function addHooks()
    {
        add_action('plugins_loaded', array($this, 'initBarclayGateway'));
        add_filter('woocommerce_payment_gateways', array(&$this, 'methodBarclayGateway'));
    }

    /**
     * Function to intiate Payment Gateway
     */
    public function initBarclayGateway()
    {

        if (!class_exists('WC_Payment_Gateway')) {
            return;
        }

        require 'rapiddive_wc_gateway_barclay.php';
    }

    /**
     * Function to send require methods to woocommerce for initailization of gateway
     * @param $methods
     * @return array
     */
    public function methodBarclayGateway($methods)
    {
        $methods[] = 'RapidDive_WC_Gateway_Barclay';
        return $methods;
    }

}
