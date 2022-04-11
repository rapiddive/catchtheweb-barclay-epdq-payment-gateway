[![Lines of Code](https://sonarcloud.io/api/project_badges/measure?project=rapiddive_catchtheweb-barclay-epdq-payment-gateway&metric=ncloc)](https://sonarcloud.io/summary/new_code?id=rapiddive_catchtheweb-barclay-epdq-payment-gateway)
[![Maintainability Rating](https://sonarcloud.io/api/project_badges/measure?project=rapiddive_catchtheweb-barclay-epdq-payment-gateway&metric=sqale_rating)](https://sonarcloud.io/summary/new_code?id=rapiddive_catchtheweb-barclay-epdq-payment-gateway)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=rapiddive_catchtheweb-barclay-epdq-payment-gateway&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=rapiddive_catchtheweb-barclay-epdq-payment-gateway)
[![Reliability Rating](https://sonarcloud.io/api/project_badges/measure?project=rapiddive_catchtheweb-barclay-epdq-payment-gateway&metric=reliability_rating)](https://sonarcloud.io/summary/new_code?id=rapiddive_catchtheweb-barclay-epdq-payment-gateway)
[![Security Rating](https://sonarcloud.io/api/project_badges/measure?project=rapiddive_catchtheweb-barclay-epdq-payment-gateway&metric=security_rating)](https://sonarcloud.io/summary/new_code?id=rapiddive_catchtheweb-barclay-epdq-payment-gateway)

[![SonarCloud](https://sonarcloud.io/images/project_badges/sonarcloud-white.svg)](https://sonarcloud.io/summary/new_code?id=rapiddive_catchtheweb-barclay-epdq-payment-gateway)

# **RapidDive** BARCLAY ePDQ Payment Gateway

Barclay ePDQ Payment Gateway has the ability to interface with WooCommerce using Barclay CARD ePDQ Payment Gateway.

## Description
The Barclay card ePDQ Payment Gateway is a simple method to connect Barclay's ePDQ payment gateway. It has been put through its paces using a test framework.

__Note on use of plugin__
> This Plugin works with woo commerce store only.

## License & Legal

RapidDive will not be liable for any direct or indirect loss or damages you may experience as a result of or in connection with your use of the service or a connected service, including but not limited to:
* Inability or delay in using the service or a Linked service
* Reliance upon Third Party Content 
* Loss of confidentiality 
* Termination of your access 
* Virus transmitted 
* Failure of communication media 
* Unauthorised access to your server/computer 
* Theft 
* Loss or damage to any data or other information or property

## Testing

We would strongly recommend implementing this extension in a development environment before putting it live. For this, to function you need to setup the Woocommerce store to use the test account details as supplied by the Barclaycard ePDQ team. 

We would also recommend that you set up the "test" Barclays back office and enable the test mode within Woocommerce. The Barclays test environment looks like this:
[ePDQ Testing](https://mdepayments.epdq.co.uk/ncol/test/backoffice/) 

### Installation

1. Upload the plugin files to the `/wp-content/plugins/catchtheweb-barclay-epdq-payment-gateway` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Use the Woocommerce->Settings->Checkout->Barclay ePDQ screen to configure the plugin
1. If testing credentials enter those and start using.

### Screenshots
1. Settings Page

### Changelog

= 2.0 =
1. Initial Stable Release of Plugin.

= 2.2 =
1. Fixed Issue For latest woo commerce version.

= 2.3 =
1. Show Accepted Cards in Description based on config

= 2.3.2 = 
1. Fix

= 2.3.3 =
1. Fix

= 2.3.4 =
1. Generic Fix

= 2.3.5 =
1. Easy access to git issues URL to report issues.
2. Filter ePDQ setting for easy extensibility.

= 2.3.6 =
1. Resolve code level issues.

= 2.3.7 =
1. Auto Generate SHA secret.
2. Description Changes.
3. Minor Updates

= 2.3.8 =
1. Bugfix

### ePDQ Documentation
[ePDQ Back Office Guide](https://mdepayments.epdq.co.uk/ncol/ePDQ_Back-Office_EN.pdf)
[ePDQ User Manager User Guide](https://mdepayments.epdq.co.uk/Ncol/ePDQ_USR_EN.pdf)
[ePDQ Integration Guide](https://mdepayments.epdq.co.uk/ncol/ePDQ_e-COM-ADV_EN.pdf)

