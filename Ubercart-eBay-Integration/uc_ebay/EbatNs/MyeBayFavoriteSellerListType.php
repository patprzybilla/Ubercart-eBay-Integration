<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'MyeBayFavoriteSellerType.php';

/**
 * A list of favorite sellers the user has saved on the My eBay page. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MyeBayFavoriteSellerListType.html
 *
 */
class MyeBayFavoriteSellerListType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $TotalAvailable;
	/**
	 * @var MyeBayFavoriteSellerType
	 */
	protected $FavoriteSeller;

	/**
	 * @return int
	 */
	function getTotalAvailable()
	{
		return $this->TotalAvailable;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalAvailable($value)
	{
		$this->TotalAvailable = $value;
	}
	/**
	 * @return MyeBayFavoriteSellerType
	 * @param integer $index 
	 */
	function getFavoriteSeller($index = null)
	{
		if ($index !== null) {
			return $this->FavoriteSeller[$index];
		} else {
			return $this->FavoriteSeller;
		}
	}
	/**
	 * @return void
	 * @param MyeBayFavoriteSellerType $value 
	 * @param  $index 
	 */
	function setFavoriteSeller($value, $index = null)
	{
		if ($index !== null) {
			$this->FavoriteSeller[$index] = $value;
		} else {
			$this->FavoriteSeller = $value;
		}
	}
	/**
	 * @return void
	 * @param MyeBayFavoriteSellerType $value 
	 */
	function addFavoriteSeller($value)
	{
		$this->FavoriteSeller[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MyeBayFavoriteSellerListType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'TotalAvailable' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FavoriteSeller' =>
				array(
					'required' => false,
					'type' => 'MyeBayFavoriteSellerType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>