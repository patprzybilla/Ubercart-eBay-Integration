<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * If the field is present, the digital delivery feature applies to the category. 
 * If applicable, the field is returned as an empty element (i.e., a boolean value 
 * is not returned). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DigitalDeliveryEnabledDefinitionType.html
 *
 */
class DigitalDeliveryEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DigitalDeliveryEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');

	}
}
?>
