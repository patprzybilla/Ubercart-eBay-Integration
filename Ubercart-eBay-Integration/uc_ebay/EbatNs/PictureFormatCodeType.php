<?php
// autogenerated file 30.06.2008 14:46
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * JPG or GIF format. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PictureFormatCodeType.html
 *
 * @property string JPG
 * @property string GIF
 * @property string CustomCode
 */
class PictureFormatCodeType extends EbatNs_FacetType
{
	const CodeType_JPG = 'JPG';
	const CodeType_GIF = 'GIF';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PictureFormatCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PictureFormatCodeType = new PictureFormatCodeType();

?>