<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies the site on which the purchase was made. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/TransactionPlatformType.html
 *
 * @property string eBay
 * @property string Express
 */
class TransactionPlatformType extends EbatNs_FacetType
{
	const CodeType_eBay = 'eBay';
	const CodeType_Express = 'Express';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('TransactionPlatformType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_TransactionPlatformType = new TransactionPlatformType();

?>
