<?php
// autogenerated file 29.12.2011 15:00
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BasicAmountType.html
 *
 */
class BasicAmountType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BasicAmountType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}	$this->_attributes = array_merge($this->_attributes,
		array(
			'currencyID' =>
			array(
				'name' => 'currencyID',
				'type' => 'CurrencyCodeType',
				'use' => 'required'
			)
		));

	}
}
?>
