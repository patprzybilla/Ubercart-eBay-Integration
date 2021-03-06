<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the PayPalBuyerProtection feature.If the field is present, the 
 * corresponding feature applies to the category.The field is returned as an empty 
 * element (i.e., a boolean value is not returned). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PayPalBuyerProtectionEnabledDefinitionType.html
 *
 */
class PayPalBuyerProtectionEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PayPalBuyerProtectionEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');

	}
}
?>
