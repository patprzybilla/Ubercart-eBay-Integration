<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'UserIDType.php';
require_once 'AbstractRequestType.php';

/**
 * Returns a seller's Ask Seller a Question (ASQ) subjects, each inits own Subject 
 * node. If the seller has not customized the ASQsubjects using 
 * SetMessagePreferences, the call will return thecurrent default values. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetMessagePreferencesRequestType.html
 *
 */
class GetMessagePreferencesRequestType extends AbstractRequestType
{
	/**
	 * @var UserIDType
	 */
	protected $SellerID;
	/**
	 * @var boolean
	 */
	protected $IncludeASQPreferences;

	/**
	 * @return UserIDType
	 */
	function getSellerID()
	{
		return $this->SellerID;
	}
	/**
	 * @return void
	 * @param UserIDType $value 
	 */
	function setSellerID($value)
	{
		$this->SellerID = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeASQPreferences()
	{
		return $this->IncludeASQPreferences;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeASQPreferences($value)
	{
		$this->IncludeASQPreferences = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetMessagePreferencesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'SellerID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeASQPreferences' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
