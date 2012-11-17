<?php
// autogenerated file 29.12.2011 15:00
// $Id: $
// $Log: $
//
//
require_once 'UserIDType.php';
require_once 'PaginationType.php';
require_once 'MessageTypeCodeType.php';
require_once 'MessageStatusTypeCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Retrieves a list of the messages buyers have posted about youractive item 
 * listings. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetMemberMessagesRequestType.html
 *
 */
class GetMemberMessagesRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var MessageTypeCodeType
	 */
	protected $MailMessageType;
	/**
	 * @var MessageStatusTypeCodeType
	 */
	protected $MessageStatus;
	/**
	 * @var boolean
	 */
	protected $DisplayToPublic;
	/**
	 * @var dateTime
	 */
	protected $StartCreationTime;
	/**
	 * @var dateTime
	 */
	protected $EndCreationTime;
	/**
	 * @var PaginationType
	 */
	protected $Pagination;
	/**
	 * @var string
	 */
	protected $MemberMessageID;
	/**
	 * @var UserIDType
	 */
	protected $SenderID;

	/**
	 * @return ItemIDType
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
	/**
	 * @return MessageTypeCodeType
	 */
	function getMailMessageType()
	{
		return $this->MailMessageType;
	}
	/**
	 * @return void
	 * @param MessageTypeCodeType $value 
	 */
	function setMailMessageType($value)
	{
		$this->MailMessageType = $value;
	}
	/**
	 * @return MessageStatusTypeCodeType
	 */
	function getMessageStatus()
	{
		return $this->MessageStatus;
	}
	/**
	 * @return void
	 * @param MessageStatusTypeCodeType $value 
	 */
	function setMessageStatus($value)
	{
		$this->MessageStatus = $value;
	}
	/**
	 * @return boolean
	 */
	function getDisplayToPublic()
	{
		return $this->DisplayToPublic;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDisplayToPublic($value)
	{
		$this->DisplayToPublic = $value;
	}
	/**
	 * @return dateTime
	 */
	function getStartCreationTime()
	{
		return $this->StartCreationTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setStartCreationTime($value)
	{
		$this->StartCreationTime = $value;
	}
	/**
	 * @return dateTime
	 */
	function getEndCreationTime()
	{
		return $this->EndCreationTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setEndCreationTime($value)
	{
		$this->EndCreationTime = $value;
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
	 * @return string
	 */
	function getMemberMessageID()
	{
		return $this->MemberMessageID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMemberMessageID($value)
	{
		$this->MemberMessageID = $value;
	}
	/**
	 * @return UserIDType
	 */
	function getSenderID()
	{
		return $this->SenderID;
	}
	/**
	 * @return void
	 * @param UserIDType $value 
	 */
	function setSenderID($value)
	{
		$this->SenderID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetMemberMessagesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MailMessageType' =>
					array(
						'required' => false,
						'type' => 'MessageTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MessageStatus' =>
					array(
						'required' => false,
						'type' => 'MessageStatusTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DisplayToPublic' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StartCreationTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EndCreationTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
					),
					'MemberMessageID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SenderID' =>
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
