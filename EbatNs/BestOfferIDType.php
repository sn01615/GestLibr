<?php
// autogenerated file 29.12.2011 15:00
// $Id: $
// $Log: $
//
require_once 'EbatNs_SimpleType.php';

/**
 * Unique identifier for a best offer (to differentiate fromother best offers for 
 * the same item). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BestOfferIDType.html
 *
 */
class BestOfferIDType extends EbatNs_SimpleType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BestOfferIDType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_BestOfferIDType = new BestOfferIDType();

?>
