<?php
// autogenerated file 29.12.2011 15:00
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'CharacteristicsSetType.php';
require_once 'AmountType.php';

/**
 * A prototype description of a well-known type of item, such as a popular 
 * book.Applicable when working with eBay's Pre-filled Item Information feature. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ProductType.html
 *
 */
class ProductType extends EbatNs_ComplexType
{
	/**
	 * @var CharacteristicsSetType
	 */
	protected $CharacteristicsSet;
	/**
	 * @var anyURI
	 */
	protected $DetailsURL;
	/**
	 * @var int
	 */
	protected $NumItems;
	/**
	 * @var AmountType
	 */
	protected $MinPrice;
	/**
	 * @var AmountType
	 */
	protected $MaxPrice;
	/**
	 * @var string
	 */
	protected $ProductReferenceID;

	/**
	 * @return CharacteristicsSetType
	 */
	function getCharacteristicsSet()
	{
		return $this->CharacteristicsSet;
	}
	/**
	 * @return void
	 * @param CharacteristicsSetType $value 
	 */
	function setCharacteristicsSet($value)
	{
		$this->CharacteristicsSet = $value;
	}
	/**
	 * @return anyURI
	 */
	function getDetailsURL()
	{
		return $this->DetailsURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setDetailsURL($value)
	{
		$this->DetailsURL = $value;
	}
	/**
	 * @return int
	 */
	function getNumItems()
	{
		return $this->NumItems;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setNumItems($value)
	{
		$this->NumItems = $value;
	}
	/**
	 * @return AmountType
	 */
	function getMinPrice()
	{
		return $this->MinPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setMinPrice($value)
	{
		$this->MinPrice = $value;
	}
	/**
	 * @return AmountType
	 */
	function getMaxPrice()
	{
		return $this->MaxPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setMaxPrice($value)
	{
		$this->MaxPrice = $value;
	}
	/**
	 * @return string
	 */
	function getProductReferenceID()
	{
		return $this->ProductReferenceID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setProductReferenceID($value)
	{
		$this->ProductReferenceID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ProductType', 'http://www.w3.org/2001/XMLSchema');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CharacteristicsSet' =>
					array(
						'required' => false,
						'type' => 'CharacteristicsSetType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DetailsURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'NumItems' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MinPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaxPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProductReferenceID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));	$this->_attributes = array_merge($this->_attributes,
		array(
			'productID' =>
			array(
				'name' => 'productID',
				'type' => 'string',
				'use' => 'required'
			),
			'stockPhotoURL' =>
			array(
				'name' => 'stockPhotoURL',
				'type' => 'anyURI',
				'use' => 'required'
			),
			'title' =>
			array(
				'name' => 'title',
				'type' => 'string',
				'use' => 'required'
			)
		));

	}
}
?>
