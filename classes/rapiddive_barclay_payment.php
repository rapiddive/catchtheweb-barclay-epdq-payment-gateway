<?php

declare( strict_types=1 );

/**
 * Class RapidDive_Barclay_Payment
 */
class RapidDive_Barclay_Payment {
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
	 *
	 * @param $file
	 *
	 * @since 1.0
	 */
	public function __construct( $file ) {
		$this->dir     = dirname( $file );
		$this->file    = $file;
		$this->version = '2.3.6';

		$this->token = 'rapiddive-barclay';

		$this->addHooks();
	}

	/**
	 * Register various hooks
	 */
	private function addHooks() {
		add_action( 'plugins_loaded', [ $this, 'initBarclayGateway' ] );
		add_filter( 'plugin_action_links', [ $this, 'getPluginActionLinks' ], 10, 6 );
		add_filter( 'woocommerce_payment_gateways', [ &$this, 'methodBarclayGateway' ] );
	}

	/**
	 * @return array|string[]
	 */
	public function getPluginActionLinks( $action_links, $plugin_file ) {
		static $plugin;
		if ( ! isset( $plugin ) ) {
			$plugin = 'catchtheweb-barclay-epdq-payment-gateway';
		}
		if ( strpos( $plugin_file, $plugin ) !== false ) {
			$otherLinks   = [
				'Issues' => '<a href="https://github.com/rapiddive/catchtheweb-barclay-epdq-payment-gateway/issues" target="_blank">Report Issues</a>',
			];
			$action_links = array_merge( $otherLinks, $action_links );
		}

		return $action_links;
	}

	/**
	 * Function to initiate Payment Gateway
	 */
	public function initBarclayGateway() {
		if ( ! class_exists( 'WC_Payment_Gateway' ) ) {
			return;
		}
		require 'includes/error-code-barclay.php';
		require 'includes/success-code-barclay.php';
		require 'rapiddive_wc_gateway_barclay.php';
	}

	/**
	 * Function to send require methods to woocommerce for initialization of gateway
	 *
	 * @param array $methods
	 *
	 * @return array
	 */
	public function methodBarclayGateway( array $methods ): array {
		$methods[] = 'RapidDive_WC_Gateway_Barclay';

		return $methods;
	}
}
