<?php
// autogenerated file 29.12.2011 15:00
// $Id: $
// $Log: $
//
//
require_once 'TransactionType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Contains an array of Transaction objects, withe each Transaction object 
 * containing data on an order line item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/TransactionArrayType.html
 *
 */
class TransactionArrayType extends EbatNs_ComplexType
{
	/**
	 * @var TransactionType
	 */
	protected $Transaction;

	/**
	 * @return TransactionType
	 * @param integer $index 
	 */
	function getTransaction($index = null)
	{
		if ($index !== null) {
			return $this->Transaction[$index];
		} else {
			return $this->Transaction;
		}
	}
	/**
	 * @return void
	 * @param TransactionType $value 
	 * @param  $index 
	 */
	function setTransaction($value, $index = null)
	{
		if ($index !== null) {
			$this->Transaction[$index] = $value;
		} else {
			$this->Transaction = $value;
		}
	}
	/**
	 * @return void
	 * @param TransactionType $value 
	 */
	function addTransaction($value)
	{
		$this->Transaction[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('TransactionArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Transaction' =>
					array(
						'required' => false,
						'type' => 'TransactionType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>