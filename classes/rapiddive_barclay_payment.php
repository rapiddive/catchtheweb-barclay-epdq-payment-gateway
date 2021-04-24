<?php

declare(strict_types=1);

/**
 * Class RapidDive_Barclay_Payment
 */
class RapidDive_Barclay_Payment
{
    /**
     * @var string
     */
    private $dir;

    /**
     * @var string
     */
    private $token;

    /**
     * @var string
     */
    private $file;

    /**
     * @var string
     */
    private $version;

    /**
     * RapidDive_Barclay_Payment constructor.
     * @access public
     * @param $file
     * @since 1.0
     */
    public function __construct($file)
    {
        $this->dir = dirname($file);
        $this->file = $file;
        $this->version = '2.3.3';

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
     * Function to initiate Payment Gateway
     */
    public function initBarclayGateway()
    {
        if (!class_exists('WC_Payment_Gateway')) {
            return;
        }

        require 'rapiddive_wc_gateway_barclay.php';
    }

    /**
     * Function to send require methods to woocommerce for initialization of gateway
     * @param array $methods
     * @return array
     */
    public function methodBarclayGateway(array $methods): array
    {
        $methods[] = 'RapidDive_WC_Gateway_Barclay';
        return $methods;
    }
}
