<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'TransactionPlatformCodeType.php';
require_once 'PaginationType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Retrieves transaction information for a specified itemID. Depending onwhether 
 * the listing sells one or multiple items and on whether anythinghas been sold in 
 * that listing, this returns zero, one or multiple transactions.Often, it is more 
 * efficient to use GetSellerTransactions instead. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetItemTransactionsRequestType.html
 *
 */
class GetItemTransactionsRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var dateTime
	 */
	protected $ModTimeFrom;
	/**
	 * @var dateTime
	 */
	protected $ModTimeTo;
	/**
	 * @var string
	 */
	protected $TransactionID;
	/**
	 * @var PaginationType
	 */
	protected $Pagination;
	/**
	 * @var boolean
	 */
	protected $IncludeFinalValueFee;
	/**
	 * @var boolean
	 */
	protected $IncludeContainingOrder;
	/**
	 * @var TransactionPlatformCodeType
	 */
	protected $Platform;
	/**
	 * @var int
	 */
	protected $NumberOfDays;

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
	 * @return dateTime
	 */
	function getModTimeFrom()
	{
		return $this->ModTimeFrom;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setModTimeFrom($value)
	{
		$this->ModTimeFrom = $value;
	}
	/**
	 * @return dateTime
	 */
	function getModTimeTo()
	{
		return $this->ModTimeTo;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setModTimeTo($value)
	{
		$this->ModTimeTo = $value;
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
	 * @return PaginationType
	 */
	function getPagination()
	{
		return $this->Pagination;
	}
	/**
	 * @return void
	 * @param PaginationType $value 
	 */
	function setPagination($value)
	{
		$this->Pagination = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeFinalValueFee()
	{
		return $this->IncludeFinalValueFee;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeFinalValueFee($value)
	{
		$this->IncludeFinalValueFee = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeContainingOrder()
	{
		return $this->IncludeContainingOrder;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeContainingOrder($value)
	{
		$this->IncludeContainingOrder = $value;
	}
	/**
	 * @return TransactionPlatformCodeType
	 */
	function getPlatform()
	{
		return $this->Platform;
	}
	/**
	 * @return void
	 * @param TransactionPlatformCodeType $value 
	 */
	function setPlatform($value)
	{
		$this->Platform = $value;
	}
	/**
	 * @return int
	 */
	function getNumberOfDays()
	{
		return $this->NumberOfDays;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setNumberOfDays($value)
	{
		$this->NumberOfDays = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetItemTransactionsRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
				'ModTimeFrom' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ModTimeTo' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
				'Pagination' =>
				array(
					'required' => false,
					'type' => 'PaginationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeFinalValueFee' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeContainingOrder' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Platform' =>
				array(
					'required' => false,
					'type' => 'TransactionPlatformCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NumberOfDays' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
