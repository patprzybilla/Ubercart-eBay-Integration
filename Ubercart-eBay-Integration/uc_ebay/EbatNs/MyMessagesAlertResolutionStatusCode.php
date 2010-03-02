<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * MyMessagesAlertResolutionStatusCode - Whether or not an alert was resolved, and 
 * how. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MyMessagesAlertResolutionStatusCode.html
 *
 * @property string Unresolved
 * @property string ResolvedByAutoResolution
 * @property string ResolvedByUser
 * @property string CustomCode
 */
class MyMessagesAlertResolutionStatusCode extends EbatNs_FacetType
{
	const CodeType_Unresolved = 'Unresolved';
	const CodeType_ResolvedByAutoResolution = 'ResolvedByAutoResolution';
	const CodeType_ResolvedByUser = 'ResolvedByUser';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MyMessagesAlertResolutionStatusCode', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_MyMessagesAlertResolutionStatusCode = new MyMessagesAlertResolutionStatusCode();

?>