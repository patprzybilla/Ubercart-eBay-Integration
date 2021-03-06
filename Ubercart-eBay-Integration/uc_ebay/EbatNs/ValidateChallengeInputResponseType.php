<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Validate the user response to botblock challenge. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ValidateChallengeInputResponseType.html
 *
 */
class ValidateChallengeInputResponseType extends AbstractResponseType
{
	/**
	 * @var boolean
	 */
	protected $ValidToken;

	/**
	 * @return boolean
	 */
	function getValidToken()
	{
		return $this->ValidToken;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setValidToken($value)
	{
		$this->ValidToken = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ValidateChallengeInputResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ValidToken' =>
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
