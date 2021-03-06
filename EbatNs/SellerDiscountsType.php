<?php
// autogenerated file 29.12.2011 15:00
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'SellerDiscountType.php';
require_once 'AmountType.php';

/**
 * A container consisting of one or more SellerDiscount nodes, as well as the 
 * originalitem and shipping costs. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellerDiscountsType.html
 *
 */
class SellerDiscountsType extends EbatNs_ComplexType
{
	/**
	 * @var AmountType
	 */
	protected $OriginalItemPrice;
	/**
	 * @var AmountType
	 */
	protected $OriginalItemShippingCost;
	/**
	 * @var SellerDiscountType
	 */
	protected $SellerDiscount;

	/**
	 * @return AmountType
	 */
	function getOriginalItemPrice()
	{
		return $this->OriginalItemPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setOriginalItemPrice($value)
	{
		$this->OriginalItemPrice = $value;
	}
	/**
	 * @return AmountType
	 */
	function getOriginalItemShippingCost()
	{
		return $this->OriginalItemShippingCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setOriginalItemShippingCost($value)
	{
		$this->OriginalItemShippingCost = $value;
	}
	/**
	 * @return SellerDiscountType
	 * @param integer $index 
	 */
	function getSellerDiscount($index = null)
	{
		if ($index !== null) {
			return $this->SellerDiscount[$index];
		} else {
			return $this->SellerDiscount;
		}
	}
	/**
	 * @return void
	 * @param SellerDiscountType $value 
	 * @param  $index 
	 */
	function setSellerDiscount($value, $index = null)
	{
		if ($index !== null) {
			$this->SellerDiscount[$index] = $value;
		} else {
			$this->SellerDiscount = $value;
		}
	}
	/**
	 * @return void
	 * @param SellerDiscountType $value 
	 */
	function addSellerDiscount($value)
	{
		$this->SellerDiscount[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellerDiscountsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'OriginalItemPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'OriginalItemShippingCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerDiscount' =>
					array(
						'required' => false,
						'type' => 'SellerDiscountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
