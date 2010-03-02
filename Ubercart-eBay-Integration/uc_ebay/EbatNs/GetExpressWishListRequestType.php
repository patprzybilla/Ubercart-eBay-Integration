<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'WishListSortCodeType.php';
require_once 'PaginationType.php';
require_once 'AbstractRequestType.php';

/**
 * Enables users to retrieve and view eBay Express wish lists. Wish list is a 
 * featurecurrently available on the eBay Express web site. This call does not 
 * enable creation,modification, or removal of wish lists. Wish lists may be public 
 * or private. Private wishlists are available for viewing only by their owners. 
 * User ID is not returned in theresponse. Only one of the search input fields, 
 * (FirstName, LastName, UserID, and WishListID)is recognized in a request. When 
 * all search input fields are included in a request, WishListIDtakes precedence, 
 * followed by UserID, which is followed by FirstName and/or LastName. If noneof 
 * the search input fields are used, the call returns the wish list of the 
 * requesting user. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetExpressWishListRequestType.html
 *
 */
class GetExpressWishListRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $UserID;
	/**
	 * @var string
	 */
	protected $FirstName;
	/**
	 * @var string
	 */
	protected $LastName;
	/**
	 * @var string
	 */
	protected $WishListID;
	/**
	 * @var WishListSortCodeType
	 */
	protected $SortOrder;
	/**
	 * @var PaginationType
	 */
	protected $Pagination;

	/**
	 * @return string
	 */
	function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setUserID($value)
	{
		$this->UserID = $value;
	}
	/**
	 * @return string
	 */
	function getFirstName()
	{
		return $this->FirstName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setFirstName($value)
	{
		$this->FirstName = $value;
	}
	/**
	 * @return string
	 */
	function getLastName()
	{
		return $this->LastName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setLastName($value)
	{
		$this->LastName = $value;
	}
	/**
	 * @return string
	 */
	function getWishListID()
	{
		return $this->WishListID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setWishListID($value)
	{
		$this->WishListID = $value;
	}
	/**
	 * @return WishListSortCodeType
	 */
	function getSortOrder()
	{
		return $this->SortOrder;
	}
	/**
	 * @return void
	 * @param WishListSortCodeType $value 
	 */
	function setSortOrder($value)
	{
		$this->SortOrder = $value;
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
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetExpressWishListRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'UserID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FirstName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LastName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WishListID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SortOrder' =>
				array(
					'required' => false,
					'type' => 'WishListSortCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
				)
			));

	}
}
?>