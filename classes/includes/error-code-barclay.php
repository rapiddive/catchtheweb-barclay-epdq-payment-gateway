<?php

declare( strict_types=1 );

/**
 * Class RapidDive_Epdq_ErrorCodes
 */
class RapidDive_Epdq_ErrorCodes {
	public const AUTHORISATION_FAILED_PLEASE_RETRY = 'Authorisation failed. Please retry.';
	public const EXPIRY_DATE_ERROR = 'Expiry date error.';

	/**
	 * @var string[]
	 */
	public static $errorCodes = [
		20001001 => self::AUTHORISATION_FAILED_PLEASE_RETRY,
		20001002 => self::AUTHORISATION_FAILED_PLEASE_RETRY,
		20001003 => self::AUTHORISATION_FAILED_PLEASE_RETRY,
		20001004 => self::AUTHORISATION_FAILED_PLEASE_RETRY,
		20001005 => self::AUTHORISATION_FAILED_PLEASE_RETRY,
		20001006 => self::AUTHORISATION_FAILED_PLEASE_RETRY,
		20001007 => self::AUTHORISATION_FAILED_PLEASE_RETRY,
		20001008 => self::AUTHORISATION_FAILED_PLEASE_RETRY,
		20001009 => self::AUTHORISATION_FAILED_PLEASE_RETRY,
		20001010 => self::AUTHORISATION_FAILED_PLEASE_RETRY,
		30001999 => 'Our payment system is currently under maintenance, please try later.',
		50001005 => self::EXPIRY_DATE_ERROR,
		50001007 => 'Requested operation code not permitted.',
		50001008 => 'Invalid time limit value.',
		50001010 => 'Invalid input date format.',
		50001013 => 'Unable to parse socket input stream.',
		50001014 => 'Error in parsing stream content.',
		50001015 => 'Currency error.',
		50001016 => 'Transaction still posted at end of wait.',
		50001017 => 'Sync value not compatible with delay value.',
		50001019 => 'Duplicate of a pre-existing transaction.',
		50001020 => 'Acceptance code required for transaction.',
		50001024 => 'Maintenance acquirer differs from original transaction acquirer.',
		50001025 => 'Maintenance merchant differs from original transaction merchant.',
		50001028 => 'Maintenance operation not appropriate for original transaction.',
		50001031 => 'Host application unknown for the transaction.',
		50001032 => 'Unable to perform requested operation with requested currency.',
		50001033 => 'Maintenance card number differs from original transaction card number.',
		50001034 => 'Operation code not permitted.',
		50001035 => 'Exception occurred in socket input stream processing.',
		50001036 => 'Card length does not correspond to an acceptable value for the brand.',
		50001036 => 'Card length does not correspond to an acceptable value for the brand.',
		50001068 => 'A technical problem has occurred. Please contact the helpdesk.',
		50001069 => 'Invalid check for CardID and Brand.',
		50001070 => 'A technical problem has occurred. Please contact the helpdesk.',
		50001116 => 'Unknown origin IP.',
		50001117 => 'No origin IP detected.',
		50001118 => 'Merchant configuration problem. Please contact support.',
		10001001 => 'Communication failure.',
		10001002 => 'Communication failure.',
		10001003 => 'Communication failure.',
		10001004 => 'Communication failure.',
		10001005 => 'Communication failure.',
		10001016 => 'Waiting for acquirer feedback.',
		10001018 => '3XCB pending transaction awaiting for Final status.',
		20001001 => 'We have received an unknown status for the transaction. We shall contact your acquirer and update the transaction status within one working day. Please check the status later.',
		20001002 => 'We have received an unknown status for the transaction. We shall contact your acquirer and update the status of the transaction within one working day. Please check the status later.',
		20001003 => 'We received an unknown status for the transaction. We will contact your acquirer and update the status of the transaction. Please check the status later.',
		20001004 => 'We have received an unknown status for the transaction. We shall contact your acquirer and update the transaction status within one working day. Please check the status later.',
		20001005 => 'We have received an unknown status for the transaction. We shall contact your acquirer and update the transaction status within one working day. Please check the status later.',
		20001006 => 'We have received an unknown status for the transaction. We shall contact your acquirer and update the transaction status within one working day. Please check the status later.',
		20001007 => 'We have received an unknown status for the transaction. We shall contact your acquirer and update the transaction status within one working day. Please check the status later.',
		20001008 => 'We have received an unknown status for the transaction. We shall contact your acquirer and update the transaction status within one working day. Please check the status later.',
		20001009 => 'We have received an unknown status for the transaction. We shall contact your acquirer and update the transaction status within one working day. Please check the status later.',
		20001010 => 'We have received an unknown status for the transaction. We shall contact your acquirer and update the transaction status within one working day. Please check the status later.',
		20001101 => 'A technical problem has occurred. Please contact the helpdesk.',
		20001104 => 'We received an unknown status for the transaction. We will contact your acquirer and update the status of the transaction. Please check the status later.',
		20001105 => 'We have received an unknown status for the transaction. We shall contact your acquirer and update the transaction status within one working day. Please check the status later.',
		20001111 => 'A technical problem has occurred. Please contact the helpdesk.',
		20001998 => 'We received an unknown status for the transaction. We will contact your acquirer and update the status of the transaction. Please check the status later.',
		20002001 => 'Bank response origin cannot be checked.',
		20002002 => 'Beneficiary account number has been modified during processing.',
		20002003 => 'Amount has been modified during processing.',
		20002004 => 'Currency has been modified during processing.',
		20002005 => 'No feedback detected from the bank server.',
		30001001 => 'Payment refused by the financial institution.',
		30001002 => 'Duplicate request.',
		30001010 => 'A technical problem has occurred. Please contact the helpdesk.',
		30001011 => 'A technical problem has occurred. Please contact the helpdesk.',
		30001012 => 'Card blacklisted - Contact acquirer.',
		30001015 => 'There has been a connection error to the receiving bank. Please try later or choose another payment method.',
		30001016 => 'Transmission failure and/or Database error. The transaction could not be properly initialised in the send process (db access failures, etc.).',
		30001051 => 'A technical problem has occurred. Please contact the helpdesk.',
		30001054 => 'A technical problem has occurred. Please contact the helpdesk.',
		30001056 => 'Your merchant\'s acquirer is temporarily unavailable, please try later or choose another payment method.',
		30001057 => 'There has been a connection error to the receiving bank. Please try later or choose another payment method.',
		30001058 => 'There has been a connection error to the receiving bank. Please try later or choose another payment method.',
		30001060 => 'Acquirer has i`ndicated a failure during payment processing.',
		30001070 => 'RATEPAY Invalid Response Type (Failure).',
		30001071 => 'RATEPAY Missing Mandatory status code field (failure).',
		30001072 => 'RATEPAY Missing Mandatory Result code field (failure).',
		30001073 => 'RATEPAY Response parsing Failed.',
		30001090 => 'CVC check required by front end and returned invalid by acquirer.',
		30001091 => 'Postcode check required by front end and returned invalid by acquirer.',
		30001092 => 'Address check required by frontend and returned as invalid by acquirer.',
		30001100 => 'Unauthorised customer country.',
		30001101 => 'IP country differs from card country.',
		30001102 => 'Number of different countries too high.',
		30001103 => 'unauthorised card country.',
		30001104 => 'unauthorised IP address country.',
		30001105 => 'Anonymous proxy.',
		30001110 => 'If the problem persists, please contact Support or go to paysafecard\'s card balance page (https://customer.cc.at.paysafecard.com/psccustomer/GetWelcomePanelServlet?language=en), to see when the amount reserved on your card will be available again.',
		30001120 => 'IP address on merchant\'s blacklist.',
		30001130 => 'BIN on merchant\'s blacklist.',
		30001131 => 'Wrong BIN for 3xCB.',
		30001140 => 'Card on merchant\'s blacklist.',
		30001141 => 'E-mail blacklisted.',
		30001142 => 'Passenger name blacklisted.',
		30001143 => 'Cardholder name blacklisted.',
		30001144 => 'Passenger name different from owner name.',
		30001145 => 'Time to departure too short.',
		30001149 => 'Card Configured in Card Supplier Limit for another relation (CSL).',
		30001150 => 'Card not configured in the system for this customer (CSL).',
		30001151 => 'REF1 not allowed for this relationship (Contract number).',
		30001152 => 'Card/Supplier Amount limit reached (CSL).',
		30001153 => 'Card not permitted for this supplier (Date out of contractual limits).',
		30001154 => 'You have reached the permitted usage limit.',
		30001155 => 'You have reached the permitted usage limit.',
		30001156 => 'You have reached the permitted usage limit.',
		30001157 => 'Unauthorised IP country for itinerary.',
		30001158 => 'e-mail usage limit reached.',
		30001159 => 'Unauthorised card country/IP country combination.',
		30001160 => 'Postcode in high-risk group.',
		30001161 => 'generic blacklist match.',
		30001162 => 'Invoicing Address is a PO Box.',
		30001163 => 'Airport in high-risk group.',
		30001164 => 'Shipping Method in high-risk group.',
		30001165 => 'Shipping Method Details in high-risk group.',
		30001166 => 'Product Category in high-risk group.',
		30001167 => 'Subbrand in high-risk group.',
		30001168 => 'Issuer Number in high-risk group.',
		30001169 => 'Time to delivery too short.',
		30001180 => 'maximum scoring reached.',
		30001997 => 'Authorisation cancelled by simulator.',
		30001998 => 'A technical problem has occurred. Please try again.',
		30001999 => 'There has been a connection error with the receiving bank. Please try later or choose another payment method.',
		30002001 => 'Payment refused by the financial institution.',
		30002001 => 'Payment refused by the financial institution.',
		30021001 => 'Please call the acquirer support call number.',
		30022001 => 'Payment must be approved by the acquirer prior to execution.',
		30031001 => 'Invalid merchant number.',
		30041001 => 'Retain card.',
		30051001 => 'Authorisation declined.',
		30051002 => 'Voor vragen over uw afwijzing kunt u contact opnemen met de @STARTURL@http://www.afterpay.nl/consument-contact@TXTURL@Klantenservice van AfterPay@ENDURL@.',
		30051009 => 'It is possible that you may not have completed all the required information (correctly) during the order process.',
		30051010 => 'because your age is under 18. For more information please visit @STARTURL@http://www.afterpay.nl/rej.php?LAN=$LANGUAGE$&TEMPLATE=2@TXTURL@website of AfterPay@ENDURL@.',
		30051011 => 'because your address could not be validated. For more information please visit @STARTURL@http://www.afterpay.nl/rej.php?LAN=$LANGUAGE$&TEMPLATE=3@TXTURL@website of AfterPay@ENDURL@.',
		30051012 => 'because your emailadres is invalid. For more information please visit @STARTURL@http://www.afterpay.nl/rej.php?LAN=$LANGUAGE$&TEMPLATE=4@TXTURL@website van AfterPay@ENDURL@.',
		30051013 => 'because the order amount extends the limit for first time AfterPay users. For more information please visit @STARTURL@http://www.afterpay.nl/rej.php?LAN=$LANGUAGE$&TEMPLATE=5@TXTURL@website of AfterPay@ENDURL@.',
		30051014 => 'because there are currently too many outstanding payments at AfterPay. For more information please visit @STARTURL@http://www.afterpay.nl/rej.php?LAN=$LANGUAGE$&TEMPLATE=6@TXTURL@website of AfterPay@ENDURL@.',
		30051015 => 'because your chamber of commerce number could not be validated. For more information please visit @STARTURL@http://www.afterpay.nl/rej.php?LAN=$LANGUAGE$&TEMPLATE=7@TXTURL@website of AfterPay@ENDURL@.',
		30051016 => 'because the order amount is too low. For more information please visit @STARTURL@http://www.afterpay.nl/rej.php?LAN=$LANGUAGE$&TEMPLATE=8@TXTURL@website of AfterPay@ENDURL@.',
		30051017 => 'For more information please visit @STARTURL@http://www.afterpay.nl/rej.php?LAN=$LANGUAGE$&TEMPLATE=1@TXTURL@website of AfterPay@ENDURL@.',
		30071001 => 'Retain card - special conditions.',
		30121001 => 'Invalid transaction.',
		30131001 => 'Invalid amount.',
		30131002 => 'You have reached the permitted limit.',
		30141001 => 'Invalid card number.',
		30151001 => 'Unknown acquiring institution.',
		30171001 => 'Payment method cancelled by the customer.',
		30171002 => 'The maximum time allowed has elapsed.',
		30191001 => 'Please try again later.',
		30201001 => 'A technical problem has occurred. Please contact the helpdesk.',
		30301001 => 'Invalid format.',
		30311001 => 'Unknown acquirer ID.',
		30331001 => 'Card expired.',
		30341001 => 'Suspicion of fraud.',
		30341001 => 'Suspicion of fraud.',
		30341002 => 'Suspicion of fraud (3rdMan).',
		30341003 => 'Suspicion of fraud (Perseuss).',
		30341004 => 'Suspicion of fraud (ETHOCA).',
		30341005 => 'Suspicion of fraud (Expert).',
		30381001 => 'A technical problem has occurred. Please contact the helpdesk.',
		30401001 => 'Invalid function.',
		30411001 => 'Lost card.',
		30431001 => 'Stolen card. Pick up.',
		30511001 => 'Insufficient funds.',
		30521001 => 'No Authorisation. Please contact your card issuer.',
		30541001 => 'Card expired.',
		30551001 => 'Invalid PIN.',
		30561001 => 'Card not in authoriser\'s database.',
		30571001 => 'Transaction not permitted on card.',
		30581001 => 'Transaction not permitted on this terminal.',
		30591001 => 'Suspicion of fraud.',
		30601001 => 'The merchant should contact the acquirer.',
		30611001 => 'Amount exceeds card limit.',
		30621001 => 'Restricted card.',
		30631001 => 'Security policy not respected.',
		30641001 => 'Amount changed from ref. transaction.',
		30681001 => 'The maximum allowed time has elapsed.',
		30751001 => 'Incorrect PIN entered too many times.',
		30761001 => 'Already disputed by cardholder.',
		30771001 => 'PIN entry required.',
		30811001 => 'Message flow error.',
		30821001 => 'Authorisation centre unavailable.',
		30831001 => 'Authorisation centre unavailable.',
		30901001 => 'Temporary system shutdown.',
		30911001 => 'Acquirer unavailable.',
		30921001 => 'Invalid card type for acquirer.',
		30941001 => 'Duplicate transaction.',
		30961001 => 'Processing temporarily not possible.',
		30971001 => 'A technical problem has occurred. Please contact the helpdesk.',
		30981001 => 'A technical problem has occurred. Please contact the helpdesk.',
		31011001 => 'Unknown acceptance code.',
		31021001 => 'Invalid currency.',
		31031001 => 'Acceptance code missing.',
		31041001 => 'Inactive card.',
		31051001 => 'Merchant not active.',
		31061001 => 'Invalid expiry date.',
		31071001 => 'Interrupted host communication.',
		31081001 => 'Card refused.',
		31091001 => 'Invalid password.',
		31101001 => 'Plafond transaction (majoré du bonus) dépassé.',
		31111001 => 'Plafond mensuel (majoré du bonus) dépassé.',
		31121001 => 'Plafond centre de facturation dépassé.',
		31131001 => 'Plafond entreprise dépassé.',
		31141001 => 'Code MCC du fournisseur non autorisé pour la carte.',
		31151001 => 'Numéro SIRET du fournisseur non autorisé pour la carte.',
		31161001 => 'This is not a valid online bank account.',
		32001004 => 'A technical problem has occurred. Please try again.',
		32001105 => 'A technical problem has occurred. Please contact the helpdesk.',
		34011001 => 'Bezahlung mit RatePAY nicht möglich.',
		39991001 => 'A technical problem has occurred. Please contact your acquirer\'s helpdesk.',
		40001001 => 'A technical problem has occurred. Please try again.',
		40001002 => 'A technical problem has occurred. Please try again.',
		40001003 => 'A technical problem has occurred. Please try again.',
		40001004 => 'A technical problem has occurred. Please try again.',
		40001005 => 'A technical problem has occurred. Please try again.',
		40001006 => 'A technical problem has occurred. Please try again.',
		40001007 => 'A technical problem has occurred. Please try again.',
		40001008 => 'A technical problem has occurred. Please try again.',
		40001009 => 'A technical problem has occurred. Please try again.',
		40001010 => 'A technical problem has occurred. Please try again.',
		40001011 => 'A technical problem has occurred. Please contact the helpdesk.',
		40001012 => 'There has been a connection error with the receiving bank. Please try later or choose another payment method.',
		40001013 => 'A technical problem has occurred. Please contact the helpdesk.',
		40001016 => 'A technical problem has occurred. Please contact the helpdesk.',
		40001018 => 'A technical problem has occurred. Please try again.',
		40001019 => 'Sorry, an error has occurred during processing. Please retry the transaction (using the Back button of the browser). If the problem persists, contact your merchant\'s helpdesk.',
		40001020 => ' Sorry, an error occurred during processing. Please retry the operation (using the Back button of the browser). If the problem persists, please contact your merchant\'s helpdesk.',
		40001050 => 'A technical problem has occurred. Please contact the helpdesk.',
		40001133 => 'Authentication failed. Incorrect signature for your bank\'s access control server.',
		40001134 => 'Authentication failed. Please retry or cancel.',
		40001135 => 'Authentication temporarily unavailable. Please retry or cancel.',
		40001136 => 'Technical problem with your browser. Please retry or cancel.',
		40001137 => 'Your bank is temporarily unavailable. Please try again later or choose another payment method.',
		40001998 => 'Temporary technical problem. Please retry later.',
		50001001 => 'Unknown card type.',
		50001002 => 'Card number format check failed for given card number.',
		50001003 => 'Merchant data error.',
		50001004 => 'Merchant identification missing.',
		50001005 => self::EXPIRY_DATE_ERROR,
		50001006 => 'Amount is not a number.',
		50001007 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001008 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001009 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001010 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001011 => 'Brand not supported for that merchant.',
		50001012 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001013 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001014 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001015 => 'Invalid currency code.',
		50001016 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001017 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001018 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001019 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001020 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001021 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001022 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001023 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001024 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001025 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001026 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001027 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001028 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001029 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001030 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001031 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001032 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001033 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001034 => 'A technical has problem occurred. Please contact the helpdesk.',
		50001035 => 'A technical problem has occurred. Please contact the helpdesk.',
		50001036 => 'Incorrect card length for the brand.',
		50001037 => 'Purchasing card number for a standard merchant.',
		50001038 => 'You should use a purchasing card for this transaction.',
		50001039 => 'Details sent for a non-purchasing card merchant. Please contact the helpdesk.',
		50001040 => 'Details not sent for a purchasing card transaction. Please contact the helpdesk.',
		50001041 => 'Payment detail validation failed.',
		50001042 => 'Sum of given transaction amounts (tax, discount, delivery, net, etc.) does not match total.',
		50001043 => 'A technical problem has occurred. Please contact the helpdesk.',
		50001044 => 'No acquirer configured for this operation.',
		50001045 => 'No UID configured for this operation.',
		50001046 => 'Operation not permitted for the merchant.',
		50001047 => 'A technical problem has occurred. Please contact the helpdesk.',
		50001048 => 'A technical problem has occurred. Please contact the helpdesk.',
		50001049 => 'A technical problem has occurred. Please contact the helpdesk.',
		50001050 => 'A technical problem has occurred. Please contact the helpdesk.',
		50001051 => 'A technical problem has occurred. Please contact the helpdesk.',
		50001052 => 'A technical problem has occurred. Please contact the helpdesk.',
		50001053 => 'A technical problem has occurred. Please contact the helpdesk.',
		50001054 => 'Card number incorrect or incompatible.',
		50001055 => 'A technical problem has occurred. Please contact the helpdesk.',
		50001056 => 'A technical problem has occurred. Please contact the helpdesk.',
		50001057 => 'A technical problem has occurred. Please contact the helpdesk.',
		50001058 => 'A technical problem has occurred. Please contact the helpdesk.',
		50001059 => 'A technical problem has occurred. Please contact the helpdesk.',
		50001060 => 'A technical problem has occurred. Please contact the helpdesk.',
		50001061 => 'A technical problem has occurred. Please contact the helpdesk.',
		50001062 => 'A technical problem has occurred. Please contact the helpdesk.',
		50001063 => 'Card Issue Number does not correspond to range or is not present.',
		50001064 => 'Start Date invalid or not present.',
		50001066 => 'Invalid CVC code format.',
		50001067 => 'The merchant is not registered for 3D-Secure.',
		50001068 => 'Invalid card number or account number (PAN).',
		50001069 => 'Invalid CardID and Brand match.',
		50001070 => 'The ECI value is either not supported or conflicts with other transaction data.',
		50001071 => 'Incomplete TRN demat.',
		50001072 => 'Incomplete PAY demat.',
		50001073 => 'No demat APP.',
		50001074 => 'Authorisation period expired.',
		50001075 => 'VERRes was an error message.',
		50001076 => 'DCP amount greater than authorisation amount.',
		50001077 => 'Details negative amount.',
		50001078 => 'Details negative quantity.',
		50001079 => 'Could not decode/decompress received PARes (3D-Secure).',
		50001080 => 'Received PARes was an error message from ACS (3D-Secure).',
		50001081 => 'Received PARes format was invalid according to the 3DS specifications (3D-Secure).',
		50001082 => 'PAReq/PARes reconciliation failure (3D-Secure).',
		50001084 => 'Maximum amount reached.',
		50001087 => 'This transaction requires authentication. Please check with your bank.',
		50001090 => 'CVC missing at input, but CVC check requested.',
		50001091 => 'Postcode missing at input, but postcode check requested.',
		50001092 => 'Address missing at input, but Address check requested.',
		50001093 => 'Partial capture not allowed.',
		50001095 => 'Invalid date of birth.',
		50001096 => 'Invalid commodity code.',
		50001097 => 'The requested currency and brand are incompatible.',
		50001111 => 'Data validation error.',
		50001113 => 'This order has already been processed.',
		50001114 => 'Error in accessing the pre-payment check page.',
		50001115 => 'Request not received in secure mode.',
		50001116 => 'Unknown IP address origin.',
		50001117 => 'No IP address origin.',
		50001118 => 'PSPID not found or incorrect.',
		50001119 => 'Password incorrect or disabled due to number of errors.',
		50001120 => 'Invalid currency.',
		50001121 => 'Invalid number of decimals for the currency.',
		50001122 => 'Currency not accepted by the merchant.',
		50001123 => 'Card type not active.',
		50001124 => 'Number of lines doesn\'t match the number of payments.',
		50001125 => 'Format validation error.',
		50001126 => 'Overflow in data capture requests for the original order.',
		50001127 => 'Incorrect original order status.',
		50001128 => 'missing authorisation code for unauthorised order.',
		50001129 => 'Overflow in refunds requests.',
		50001130 => 'Original order access error.',
		50001131 => 'Original history item access error.',
		50001132 => 'The selected Catalogue is empty.',
		50001133 => 'Duplicate request.',
		50001134 => 'Authentication failed. Please retry or cancel.',
		50001135 => 'Authentication temporarily unavailable. Please retry or cancel.',
		50001136 => 'Technical problem with your browser. Please retry or cancel.',
		50001137 => 'Your bank is temporarily unavailable. Please try again later or choose another payment method.',
		50001150 => 'Fraud Detection: technical error (invalid IP).',
		50001151 => 'Fraud detection: technical error (IPCTY unknown or error).',
		50001152 => 'Fraud detection: technical error (CCCTY unknown or error).',
		50001153 => 'Overflow in redo-authorisation requests.',
		50001170 => 'Dynamic BIN check failed.',
		50001171 => 'Dynamic country check failed.',
		50001172 => 'Amadeus signature error.',
		50001174 => 'Cardholder Name is too long.',
		50001175 => 'Name contains invalid characters.',
		50001176 => 'Card number is too long.',
		50001177 => 'Card number contains non-numeric info.',
		50001178 => 'Card Number Empty.',
		50001179 => 'CVC too long.',
		50001180 => 'CVC contains non-numeric info.',
		50001181 => 'Expiry date contains non-numeric info.',
		50001182 => 'Invalid expiry month.',
		50001183 => 'Expiry date must be in the future.',
		50001184 => 'SHA Mismatch.',
		50001186 => 'Operation not permitted.',
		50001187 => 'Operation not permitted.',
		50001205 => 'Missing mandatory fields in invoicing address.',
		50001206 => 'Missing mandatory date of birth field.',
		50001207 => 'Missing required shopping basket details.',
		50001208 => 'Missing social security number.',
		50001209 => 'Invalid country code.',
		50001210 => 'Missing annual salary.',
		50001211 => 'Missing gender.',
		50001212 => 'Missing e-mail.',
		50001213 => 'Missing IP address.',
		50001214 => 'Missing part-payment campaign ID.',
		50001215 => 'Missing invoice number.',
		50001216 => 'The alias must be different to the card number.',
		50001217 => 'Invalid details for shopping basket calculation.',
		50001218 => 'No Refunds allowed.',
		50001220 => 'Invalid format of phone number.',
		50001221 => 'Invalid ZIP format.',
		50001222 => 'Firstname or/and lastname missing.',
		50001223 => 'Firstname and/or lastname format invalid.',
		50001224 => 'The phone number is missing.',
		50001225 => 'Invalid email format.',
		50001300 => 'Wrong brand/payment method.',
		50001301 => 'Wrong account number format.',
		50001302 => 'RFP operation code is only permitted with scheduled payments.',
		50001303 => 'RFP operation code not permitted for a Disputed payment.',
		50001304 => 'RFP operation code not permitted - Unpaid amounts.',
		55555555 => 'An error occurred.',
		60000001 => 'account number unknown.',
		60000003 => 'not credited dd-mm-yy.',
		60000005 => 'name/number do not match.',
		60000007 => 'account number blocked.',
		60000008 => 'specific direct debit block.',
		60000009 => 'account number WKA.',
		60000010 => 'administrative reason.',
		60000011 => 'account number expired.',
		60000012 => 'no direct debit authorisation.',
		60000013 => 'debit not approved.',
		60000014 => 'double payment.',
		60000018 => 'name/address/city not entered.',
		60001001 => 'no original direct debit for revocation.',
		60001002 => 'payer\'s account number format error.',
		60001004 => 'payer\'s account at different bank.',
		60001005 => 'payee\'s account at different bank.',
		60001006 => 'payee\'s account number format error.',
		60001007 => 'payer\'s account number blocked.',
		60001008 => 'payer\'s account number expired.',
		60001009 => 'payee\'s account number expired.',
		60001010 => 'direct debit not possible.',
		60001011 => 'creditor payment not possible.',
		60001012 => 'payer\'s account number unknown WKA-number.',
		60001013 => 'payee\'s account number unknown WKA-number.',
		60001014 => 'WKA transaction not permitted.',
		60001015 => 'revocation period expired.',
		60001017 => 'incorrect revocation reason.',
		60001018 => 'original run number not numeric.',
		60001019 => 'payment ID incorrect.',
		60001020 => 'amount not numeric.',
		60001021 => 'zero amount not permitted.',
		60001022 => 'negative amount not permitted.',
		60001023 => 'payer and payee giro account number.',
		60001025 => 'processing code (verwerkingscode) incorrect.',
		60001028 => 'revocation not permitted.',
		60001029 => 'guaranteed direct debit on giro account number.',
		60001030 => 'NBC transaction type incorrect.',
		60001031 => 'description too long.',
		60001032 => 'book account number not issued.',
		60001034 => 'book account number incorrect.',
		60001035 => 'payer\'s account number not numeric.',
		60001036 => 'payer\'s account number not eleven-proof.',
		60001037 => 'payer\'s account number not issued.',
		60001039 => 'payer\'s account number of DNB/BGC/BLA.',
		60001040 => 'payee\'s account number not numeric.',
		60001041 => 'payee\'s account number not eleven-proof.',
		60001042 => 'payee\'s account number not issued.',
		60001044 => 'payee\'s account number unknown.',
		60001050 => 'payee\'s name missing.',
		60001051 => 'indicate payee\'s bank account number instead of 3102.',
		60001052 => 'no direct debit contract.',
		60001053 => 'amount beyond limits.',
		60001054 => 'selective direct debit block.',
		60001055 => 'original run number unknown.',
		60001057 => 'payer\'s name missing.',
		60001058 => 'payee\'s account number missing.',
		60001059 => 'restore not permitted.',
		60001060 => 'bank\'s reference (navraaggegeven) missing.',
		60001061 => 'BEC/GBK number incorrect.',
		60001062 => 'BEC/GBK code incorrect.',
		60001087 => 'book account number not numeric.',
		60001090 => 'cancelled on request.',
		60001091 => 'cancellation order executed.',
		60001092 => 'cancelled instead of ended.',
		60001093 => 'book account number is a shortened account number.',
		60001094 => 'instructing party and payer account numbers do not match.',
		60001095 => 'payee unknown GBK acceptor.',
		60001097 => 'instructing party and payee account numbers do not match.',
		60001099 => 'clearing not permitted.',
		60001101 => 'payer\'s account number has no spaces.',
		60001102 => 'PAN length not numeric.',
		60001103 => 'PAN length outside limits.',
		60001104 => 'track number not numeric.',
		60001105 => 'track number not valid.',
		60001106 => 'PAN sequence number not numeric.',
		60001107 => 'domestic PAN not numeric.',
		60001108 => 'domestic PAN not eleven-proof.',
		60001109 => 'domestic PAN not issued.',
		60001110 => 'foreign PAN not numeric.',
		60001111 => 'card validity date not numeric.',
		60001112 => 'book period number (boekperiodenr) not numeric.',
		60001113 => 'transaction number not numeric.',
		60001114 => 'transaction time not numeric.',
		60001115 => 'invalid transaction time.',
		60001116 => 'transaction date not numeric.',
		60001117 => 'invalid transaction date.',
		60001118 => 'STAN not numeric.',
		60001119 => 'instructing party\'s name missing.',
		60001120 => 'foreign amount (bedrag-vv) not numeric.',
		60001122 => 'rate (verrekenkoers) not numeric.',
		60001125 => 'number of decimals (aantaldecimalen) incorrect.',
		60001126 => 'tariff (tarifering) not B/O/S.',
		60001127 => 'domestic costs (kostenbinnenland) not numeric.',
		60001128 => 'domestic costs (kostenbinnenland) not higher than zero.',
		60001129 => 'foreign costs (kostenbuitenland) not numeric.',
		60001130 => 'foreign costs (kostenbuitenland) not higher than zero.',
		60001131 => 'domestic costs (kostenbinnenland) not zero.',
		60001132 => 'foreign costs (kostenbuitenland) not zero.',
		60001134 => 'Euro record not completed.',
		60001135 => 'Customer currency incorrect.',
		60001136 => 'NLG amount not numeric.',
		60001137 => 'NLG amount not higher than zero.',
		60001138 => 'NLG amount not equal to Amount.',
		60001139 => 'NLG amount incorrectly converted.',
		60001140 => 'EUR amount not numeric.',
		60001141 => 'EUR amount not greater than zero.',
		60001142 => 'EUR amount not equal to Amount.',
		60001143 => 'EUR amount incorrectly converted.',
		60001144 => 'Customer currency not NLG.',
		60001145 => 'rate euro-vv (Koerseuro-vv) not numeric.',
		60001146 => 'comma rate euro-vv (Kommakoerseuro-vv) incorrect.',
		60001147 => 'invalid acceptgiro distributor.',
		60001148 => 'Original run number and/or BRN missing.',
		60001149 => 'Amount/Account number/ BRN different.',
		60001150 => 'Direct debit already revoked/restored.',
		60001151 => 'Direct debit already reversed/revoked/restored.',
		60001153 => 'Payer\'s account number not know.',
	];

	/**
	 * @param $code
	 *
	 * @return string
	 */
	public static function getErrorMessage( $code ): ?string {
		if ( $code == '' ) {
			return null;
		}

		return self::$errorCodes[ $code ] ?? 'Unknown Error Code';
	}
}