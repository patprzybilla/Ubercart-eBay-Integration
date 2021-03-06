<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemSpecificDetailsType.html
 *
 */
class ItemSpecificDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $MaxItemSpecificsPerItem;
	/**
	 * @var int
	 */
	protected $MaxValuesPerName;
	/**
	 * @var int
	 */
	protected $MaxCharactersPerValue;
	/**
	 * @var int
	 */
	protected $MaxCharactersPerName;

	/**
	 * @return int
	 */
	function getMaxItemSpecificsPerItem()
	{
		return $this->MaxItemSpecificsPerItem;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxItemSpecificsPerItem($value)
	{
		$this->MaxItemSpecificsPerItem = $value;
	}
	/**
	 * @return int
	 */
	function getMaxValuesPerName()
	{
		return $this->MaxValuesPerName;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxValuesPerName($value)
	{
		$this->MaxValuesPerName = $value;
	}
	/**
	 * @return int
	 */
	function getMaxCharactersPerValue()
	{
		return $this->MaxCharactersPerValue;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxCharactersPerValue($value)
	{
		$this->MaxCharactersPerValue = $value;
	}
	/**
	 * @return int
	 */
	function getMaxCharactersPerName()
	{
		return $this->MaxCharactersPerName;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxCharactersPerName($value)
	{
		$this->MaxCharactersPerName = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemSpecificDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'MaxItemSpecificsPerItem' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxValuesPerName' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxCharactersPerValue' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxCharactersPerName' =>
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
