<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'BidGroupType.php';

/**
 * Contains a list of items that are part of a bid group. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BidGroupArrayType.html
 *
 */
class BidGroupArrayType extends EbatNs_ComplexType
{
	/**
	 * @var BidGroupType
	 */
	protected $BidGroup;

	/**
	 * @return BidGroupType
	 * @param integer $index 
	 */
	function getBidGroup($index = null)
	{
		if ($index !== null) {
			return $this->BidGroup[$index];
		} else {
			return $this->BidGroup;
		}
	}
	/**
	 * @return void
	 * @param BidGroupType $value 
	 * @param  $index 
	 */
	function setBidGroup($value, $index = null)
	{
		if ($index !== null) {
			$this->BidGroup[$index] = $value;
		} else {
			$this->BidGroup = $value;
		}
	}
	/**
	 * @return void
	 * @param BidGroupType $value 
	 */
	function addBidGroup($value)
	{
		$this->BidGroup[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BidGroupArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'BidGroup' =>
				array(
					'required' => false,
					'type' => 'BidGroupType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
