<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves the tax table for a user on a given site or retrieves the 
 * validjurisdictions (if any) for a given site. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetTaxTableRequestType.html
 *
 */
class GetTaxTableRequestType extends AbstractRequestType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetTaxTableRequestType', 'urn:ebay:apis:eBLBaseComponents');

	}
}
?>
