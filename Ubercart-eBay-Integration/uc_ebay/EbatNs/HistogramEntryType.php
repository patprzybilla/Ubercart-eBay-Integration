<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * A generic histogram entry type. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/HistogramEntryType.html
 *
 */
class HistogramEntryType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $Count;

	/**
	 * @return int
	 */
	function getCount()
	{
		return $this->Count;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setCount($value)
	{
		$this->Count = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('HistogramEntryType', 'http://www.w3.org/2001/XMLSchema');
		$this->_elements = array_merge($this->_elements,
			array(
				'Count' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));
	$this->_attributes = array_merge($this->_attributes,
		array(
			'id' =>
			array(
				'name' => 'id',
				'type' => 'string',
				'use' => 'required'
			),
			'name' =>
			array(
				'name' => 'name',
				'type' => 'string',
				'use' => 'required'
			)
		));

	}
}
?>