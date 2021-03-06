<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Allows you to group Best Match search results by category. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GroupType.html
 *
 */
class GroupType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $MaxGroups;
	/**
	 * @var int
	 */
	protected $MaxEntriesPerGroup;

	/**
	 * @return int
	 */
	function getMaxGroups()
	{
		return $this->MaxGroups;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxGroups($value)
	{
		$this->MaxGroups = $value;
	}
	/**
	 * @return int
	 */
	function getMaxEntriesPerGroup()
	{
		return $this->MaxEntriesPerGroup;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxEntriesPerGroup($value)
	{
		$this->MaxEntriesPerGroup = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GroupType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'MaxGroups' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxEntriesPerGroup' =>
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
