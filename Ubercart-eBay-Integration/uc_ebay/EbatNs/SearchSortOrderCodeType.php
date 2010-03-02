<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Determines the order in which items are returned when you use the 
 * GetSearchResults call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SearchSortOrderCodeType.html
 *
 * @property string SortByEndDate
 * @property string SortByStartDate
 * @property string SortByCurrentBid
 * @property string SortByListingDate
 * @property string SortByCurrentBidAsc
 * @property string SortByCurrentBidDesc
 * @property string SortByPayPalAsc
 * @property string SortByPayPalDesc
 * @property string SortByEscrowAsc
 * @property string SortByEscrowDesc
 * @property string SortByCountryAsc
 * @property string SortByCountryDesc
 * @property string SortByDistanceAsc
 * @property string SortByBidCountAsc
 * @property string SortByBidCountDesc
 * @property string BestMatchSort
 * @property string CustomCode
 * @property string BestMatchCategoryGroup
 * @property string PricePlusShippingAsc
 * @property string PricePlusShippingDesc
 */
class SearchSortOrderCodeType extends EbatNs_FacetType
{
	const CodeType_SortByEndDate = 'SortByEndDate';
	const CodeType_SortByStartDate = 'SortByStartDate';
	const CodeType_SortByCurrentBid = 'SortByCurrentBid';
	const CodeType_SortByListingDate = 'SortByListingDate';
	const CodeType_SortByCurrentBidAsc = 'SortByCurrentBidAsc';
	const CodeType_SortByCurrentBidDesc = 'SortByCurrentBidDesc';
	const CodeType_SortByPayPalAsc = 'SortByPayPalAsc';
	const CodeType_SortByPayPalDesc = 'SortByPayPalDesc';
	const CodeType_SortByEscrowAsc = 'SortByEscrowAsc';
	const CodeType_SortByEscrowDesc = 'SortByEscrowDesc';
	const CodeType_SortByCountryAsc = 'SortByCountryAsc';
	const CodeType_SortByCountryDesc = 'SortByCountryDesc';
	const CodeType_SortByDistanceAsc = 'SortByDistanceAsc';
	const CodeType_SortByBidCountAsc = 'SortByBidCountAsc';
	const CodeType_SortByBidCountDesc = 'SortByBidCountDesc';
	const CodeType_BestMatchSort = 'BestMatchSort';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_BestMatchCategoryGroup = 'BestMatchCategoryGroup';
	const CodeType_PricePlusShippingAsc = 'PricePlusShippingAsc';
	const CodeType_PricePlusShippingDesc = 'PricePlusShippingDesc';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SearchSortOrderCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SearchSortOrderCodeType = new SearchSortOrderCodeType();

?>