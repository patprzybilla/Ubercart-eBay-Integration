<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies which disputes are returned. Filtering is done for disputesthat are 
 * awaiting a certain party's response or are closed. The returned listcan contain 
 * both Unpaid Item and Item Not Received disputes.All disputes returned involve 
 * the requester as buyer or seller. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DisputeFilterTypeCodeType.html
 *
 * @property string AllInvolvedDisputes
 * @property string DisputesAwaitingMyResponse
 * @property string DisputesAwaitingOtherPartyResponse
 * @property string AllInvolvedClosedDisputes
 * @property string EligibleForCredit
 * @property string UnpaidItemDisputes
 * @property string ItemNotReceivedDisputes
 * @property string CustomCode
 */
class DisputeFilterTypeCodeType extends EbatNs_FacetType
{
	const CodeType_AllInvolvedDisputes = 'AllInvolvedDisputes';
	const CodeType_DisputesAwaitingMyResponse = 'DisputesAwaitingMyResponse';
	const CodeType_DisputesAwaitingOtherPartyResponse = 'DisputesAwaitingOtherPartyResponse';
	const CodeType_AllInvolvedClosedDisputes = 'AllInvolvedClosedDisputes';
	const CodeType_EligibleForCredit = 'EligibleForCredit';
	const CodeType_UnpaidItemDisputes = 'UnpaidItemDisputes';
	const CodeType_ItemNotReceivedDisputes = 'ItemNotReceivedDisputes';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DisputeFilterTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DisputeFilterTypeCodeType = new DisputeFilterTypeCodeType();

?>
