<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Contains the generated runame (unique identifier for an authentication data 
 * entry). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetRuNameResponseType.html
 *
 */
class GetRuNameResponseType extends AbstractResponseType
{
	/**
	 * @var string
	 */
	protected $RuName;

	/**
	 * @return string
	 */
	function getRuName()
	{
		return $this->RuName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setRuName($value)
	{
		$this->RuName = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetRuNameResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'RuName' =>
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