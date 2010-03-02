<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Identifies a domain and provides statistics for items andcatalog products found 
 * in that domain. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ExpressHistogramDomainDetailsType.html
 *
 */
class ExpressHistogramDomainDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $Name;
	/**
	 * @var string
	 */
	protected $BreadCrumb;
	/**
	 * @var int
	 */
	protected $ItemCount;
	/**
	 * @var int
	 */
	protected $ProductCount;
	/**
	 * @var anyURI
	 */
	protected $ImageURL;

	/**
	 * @return string
	 */
	function getName()
	{
		return $this->Name;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setName($value)
	{
		$this->Name = $value;
	}
	/**
	 * @return string
	 */
	function getBreadCrumb()
	{
		return $this->BreadCrumb;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setBreadCrumb($value)
	{
		$this->BreadCrumb = $value;
	}
	/**
	 * @return int
	 */
	function getItemCount()
	{
		return $this->ItemCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setItemCount($value)
	{
		$this->ItemCount = $value;
	}
	/**
	 * @return int
	 */
	function getProductCount()
	{
		return $this->ProductCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setProductCount($value)
	{
		$this->ProductCount = $value;
	}
	/**
	 * @return anyURI
	 */
	function getImageURL()
	{
		return $this->ImageURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setImageURL($value)
	{
		$this->ImageURL = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ExpressHistogramDomainDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Name' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BreadCrumb' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ImageURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>