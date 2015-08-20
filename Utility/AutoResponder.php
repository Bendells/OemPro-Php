<?php

namespace KONEK\OemproBundle\Utility;

use KONEK\OemproBundle\Utility\SessionData;

class AutoResponder
{

	/**
	 * create
	 *
	 * Creates a new auto responder for given subscriber list.
	 *
	 * @param integer $subscriberListID (required) ID of the subscriber list that auto responder will be created for. 
	 * @param integer $emailID (required) Email ID 
	 * @param string $autoResponderName (required) Name of auto responder. 
	 * @param OnSubscription|OnSubscriberLinkClick|OnSubscriberForwardToFriend $autoResponderTriggerType (required) Type of auto responder trigger. 
	 * @param string $autoResponderTriggerValue (required) Value of auto responder trigger. 
	 * @param Immediateky|Secondslater|Minuteslater|Hourslater|Dayslater|Weekslater|Monthslater $triggerTimeType (required) Trigger time type. 
	 * @param integer $triggerTime (required) Trigger time. 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function create($subscriberListID, $emailID, $autoResponderName, $autoResponderTriggerType, $autoResponderTriggerValue, $triggerTimeType, $triggerTime)
	{

		$command = "Command=AutoResponder.Create";
		$subscriberListID = "SubscriberListID=".$subscriberListID;
		$emailID = "EmailID=".$emailID;
		$autoResponderName = "AutoResponderName=".$autoResponderName;
		$autoResponderTriggerType = "AutoResponderTriggerType=".$autoResponderTriggerType;
		$autoResponderTriggerValue = "AutoResponderTriggerValue=".$autoResponderTriggerValue;
		$triggerTimeType = "TriggerTimeType=".$triggerTimeType;
		$triggerTime = "TriggerTime=".$triggerTime;
		
		$apiPath = $command
						.'&'.$subscriberListID
						.'&'.$emailID
						.'&'.$autoResponderName
						.'&'.$autoResponderTriggerType
						.'&'.$autoResponderTriggerValue
						.'&'.$triggerTimeType
						.'&'.$triggerTime
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * getAll
	 *
	 * Retrieves auto responders of given subscriber list.
	 *
	 * @param fieldnameofautoresponder $orderField (required) Order field 
	 * @param ASC|DESC $orderType (required) Order type 
	 * @param integer $subscriberListID (required) Subscriber list ID 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function getAll($orderField, $orderType, $subscriberListID)
	{

		$command = "Command=AutoResponders.Get";
		$orderField = "OrderField=".$orderField;
		$orderType = "OrderType=".$orderType;
		$subscriberListID = "SubscriberListID=".$subscriberListID;
		
		$apiPath = $command
						.'&'.$orderField
						.'&'.$orderType
						.'&'.$subscriberListID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * deleteAll
	 *
	 * Deletes given auto responders.
	 *
	 * @param string $autoResponders (required) Comma delimeted auto responder ids. 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function deleteAll($autoResponders)
	{

		$command = "Command=AutoResponders.Delete";
		$autoResponders = "AutoResponders=".$autoResponders;
		
		$apiPath = $command
						.'&'.$autoResponders
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * copyAll
	 *
	 * Copies auto responders of a subscriber list to another subscriber list.
	 *
	 * @param integer $sourceListID (required) ID of source subscriber list 
	 * @param integer $targetListID (required) ID of target subscriber list 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function copyAll($sourceListID, $targetListID)
	{

		$command = "Command=AutoResponders.Copy";
		$sourceListID = "SourceListID=".$sourceListID;
		$targetListID = "TargetListID=".$targetListID;
		
		$apiPath = $command
						.'&'.$sourceListID
						.'&'.$targetListID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}


}