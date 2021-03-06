<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'UserIDType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'CommentTypeCodeType.php';

/**
 * Information used to add a feedback note for a user. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FeedbackInfoType.html
 *
 */
class FeedbackInfoType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $CommentText;
	/**
	 * @var CommentTypeCodeType
	 */
	protected $CommentType;
	/**
	 * @var UserIDType
	 */
	protected $TargetUser;

	/**
	 * @return string
	 */
	function getCommentText()
	{
		return $this->CommentText;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCommentText($value)
	{
		$this->CommentText = $value;
	}
	/**
	 * @return CommentTypeCodeType
	 */
	function getCommentType()
	{
		return $this->CommentType;
	}
	/**
	 * @return void
	 * @param CommentTypeCodeType $value 
	 */
	function setCommentType($value)
	{
		$this->CommentType = $value;
	}
	/**
	 * @return UserIDType
	 */
	function getTargetUser()
	{
		return $this->TargetUser;
	}
	/**
	 * @return void
	 * @param UserIDType $value 
	 */
	function setTargetUser($value)
	{
		$this->TargetUser = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FeedbackInfoType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'CommentText' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CommentType' =>
				array(
					'required' => false,
					'type' => 'CommentTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TargetUser' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
