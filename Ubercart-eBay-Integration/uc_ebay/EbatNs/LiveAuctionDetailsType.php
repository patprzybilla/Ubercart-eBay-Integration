<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
 * Describes the live auction-specific details of a lot item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/LiveAuctionDetailsType.html
 *
 */
class LiveAuctionDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $UserCatalogID;
	/**
	 * @var int
	 */
	protected $ScheduleID;
	/**
	 * @var string
	 */
	protected $LotNumber;
	/**
	 * @var AmountType
	 */
	protected $HighEstimate;
	/**
	 * @var AmountType
	 */
	protected $LowEstimate;

	/**
	 * @return int
	 */
	function getUserCatalogID()
	{
		return $this->UserCatalogID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setUserCatalogID($value)
	{
		$this->UserCatalogID = $value;
	}
	/**
	 * @return int
	 */
	function getScheduleID()
	{
		return $this->ScheduleID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setScheduleID($value)
	{
		$this->ScheduleID = $value;
	}
	/**
	 * @return string
	 */
	function getLotNumber()
	{
		return $this->LotNumber;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setLotNumber($value)
	{
		$this->LotNumber = $value;
	}
	/**
	 * @return AmountType
	 */
	function getHighEstimate()
	{
		return $this->HighEstimate;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setHighEstimate($value)
	{
		$this->HighEstimate = $value;
	}
	/**
	 * @return AmountType
	 */
	function getLowEstimate()
	{
		return $this->LowEstimate;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setLowEstimate($value)
	{
		$this->LowEstimate = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('LiveAuctionDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'UserCatalogID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ScheduleID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LotNumber' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HighEstimate' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LowEstimate' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
