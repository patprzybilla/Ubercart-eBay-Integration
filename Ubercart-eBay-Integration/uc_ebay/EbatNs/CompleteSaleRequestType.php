<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'ListingTypeCodeType.php';
require_once 'ShipmentType.php';
require_once 'FeedbackInfoType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Enables a seller to do various tasks after a transaction has been created.A 
 * seller can leave feedback for the buyer, change the paid status,or set shipment 
 * tracking information (or any combination of these).Only the seller who listed 
 * the item can perform these tasks.<br><br>Applies to Half.com. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CompleteSaleRequestType.html
 *
 */
class CompleteSaleRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var string
	 */
	protected $TransactionID;
	/**
	 * @var FeedbackInfoType
	 */
	protected $FeedbackInfo;
	/**
	 * @var boolean
	 */
	protected $Shipped;
	/**
	 * @var boolean
	 */
	protected $Paid;
	/**
	 * @var ListingTypeCodeType
	 */
	protected $ListingType;
	/**
	 * @var ShipmentType
	 */
	protected $Shipment;

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
	 * @return string
	 */
	function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}
	/**
	 * @return FeedbackInfoType
	 */
	function getFeedbackInfo()
	{
		return $this->FeedbackInfo;
	}
	/**
	 * @return void
	 * @param FeedbackInfoType $value 
	 */
	function setFeedbackInfo($value)
	{
		$this->FeedbackInfo = $value;
	}
	/**
	 * @return boolean
	 */
	function getShipped()
	{
		return $this->Shipped;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setShipped($value)
	{
		$this->Shipped = $value;
	}
	/**
	 * @return boolean
	 */
	function getPaid()
	{
		return $this->Paid;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setPaid($value)
	{
		$this->Paid = $value;
	}
	/**
	 * @return ListingTypeCodeType
	 */
	function getListingType()
	{
		return $this->ListingType;
	}
	/**
	 * @return void
	 * @param ListingTypeCodeType $value 
	 */
	function setListingType($value)
	{
		$this->ListingType = $value;
	}
	/**
	 * @return ShipmentType
	 */
	function getShipment()
	{
		return $this->Shipment;
	}
	/**
	 * @return void
	 * @param ShipmentType $value 
	 */
	function setShipment($value)
	{
		$this->Shipment = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CompleteSaleRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
				'TransactionID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackInfo' =>
				array(
					'required' => false,
					'type' => 'FeedbackInfoType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Shipped' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Paid' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListingType' =>
				array(
					'required' => false,
					'type' => 'ListingTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Shipment' =>
				array(
					'required' => false,
					'type' => 'ShipmentType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
