<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EndReasonCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Ends the specified item listing before the date and time at whichit would 
 * normally end (per the listing duration).<br><br>For competitive-bidding listings 
 * that have bids on them, you must specify anEndingReason value. If you specify 
 * SellToHighBidder, the listing ends as asuccessful auction with winning 
 * bidder(s). Otherwise, all bids are cancelledbefore the item is 
 * ended.<br><br>There are two restrictions for ending items early in the last 12 
 * hours of alisting. If there is a qualified bid (i.e., current high bid that, 
 * whenapplicable, meets the minimum reserve price) in the last 12 hours of a 
 * listing,the seller cannot end the item early. If the seller has cancelled a bid 
 * in thelast 12 hours of the listing, the seller cannot end the item 
 * early.<br><br>Only the item's seller can use EndItem to end an item 
 * listing.Applicable to items listed on eBay.com and Half.com.For eBay Live 
 * Auctions, you cannot delete items that have been closed or thatare part of a 
 * Live Auction event that has started. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/EndItemRequestType.html
 *
 */
class EndItemRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var EndReasonCodeType
	 */
	protected $EndingReason;
	/**
	 * @var string
	 */
	protected $SellerInventoryID;

	/**
	 * @return ItemIDType
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
	/**
	 * @return EndReasonCodeType
	 */
	function getEndingReason()
	{
		return $this->EndingReason;
	}
	/**
	 * @return void
	 * @param EndReasonCodeType $value 
	 */
	function setEndingReason($value)
	{
		$this->EndingReason = $value;
	}
	/**
	 * @return string
	 */
	function getSellerInventoryID()
	{
		return $this->SellerInventoryID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSellerInventoryID($value)
	{
		$this->SellerInventoryID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('EndItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndingReason' =>
				array(
					'required' => false,
					'type' => 'EndReasonCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerInventoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>