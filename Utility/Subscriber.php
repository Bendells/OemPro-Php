<?php

namespace KONEK\OemproBundle\Utility;

use KONEK\OemproBundle\Utility\SessionData;

class Subscriber
{

	/**
	 * login
	 *
	 * Logs in the subscriber
	 *
	 * @param integer $listID (required) List ID that stores the subscriber information 
	 * @param integer $mSubscriberID (required) ID of the subscriber (md5) 
	 * @param string $mEmailAddress (required) Email address of the subscriber (md5) 
	 * @param string $emailAddress (required) Email address to validate 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function login($listID, $mSubscriberID, $mEmailAddress, $emailAddress)
	{

		$command = "Command=Subscriber.Login";
		$listID = "ListID=".$listID;
		$mSubscriberID = "MSubscriberID=".$mSubscriberID;
		$mEmailAddress = "MEmailAddress=".$mEmailAddress;
		$emailAddress = "EmailAddress=".$emailAddress;
		
		$apiPath = $command
						.'&'.$listID
						.'&'.$mSubscriberID
						.'&'.$mEmailAddress
						.'&'.$emailAddress
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * getLists
	 *
	 * Returns subscriber lists of the user
	 *
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function getLists()
	{

		$command = "Command=Subscriber.GetLists";
		
		$apiPath = $command
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * get
	 *
	 * Retrieve subscriber information
	 *
	 * @param string $emailAddress (required) Email address of the target subscriber 
	 * @param integer $listID (required) ID of the list which email address is subscribed to 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function get($emailAddress, $listID)
	{

		$command = "Command=Subscriber.Get";
		$emailAddress = "EmailAddress=".$emailAddress;
		$listID = "ListID=".$listID;
		
		$apiPath = $command
						.'&'.$emailAddress
						.'&'.$listID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * getAll
	 *
	 * Retrieves subscribers of a subscriber list.
	 *
	 * @param string $orderField (required) Name of the field to order based on 
	 * @param ASC|DESC $orderType (required) Ascending or descending ordering 
	 * @param integer $recordsFrom (required) Start from (starts from zero) 
	 * @param integer $recordsPerRequest (required) How many rows to return per page 
	 * @param string $searchField (required) Subscriber list field to make the search. Leave empty to disable search 
	 * @param string $searchKeyword (required) The keyword to search in subscriber list database. Leave empty to disable search 
	 * @param integer $subscriberListID (required) List ID of the subscribers 
	 * @param mixed $subscriberSegment (required) Target segment ID or one of the following values:     Suppressed, Unsubscribed, Soft bounced, Hard bounced, Opt-in pending, Active. 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function getAll($orderField, $orderType, $recordsFrom, $recordsPerRequest, $searchField, $searchKeyword, $subscriberListID, $subscriberSegment)
	{

		$command = "Command=Subscribers.Get";
		$orderField = "OrderField=".$orderField;
		$orderType = "OrderType=".$orderType;
		$recordsFrom = "RecordsFrom=".$recordsFrom;
		$recordsPerRequest = "RecordsPerRequest=".$recordsPerRequest;
		$searchField = "SearchField=".$searchField;
		$searchKeyword = "SearchKeyword=".$searchKeyword;
		$subscriberListID = "SubscriberListID=".$subscriberListID;
		$subscriberSegment = "SubscriberSegment=".$subscriberSegment;
		
		$apiPath = $command
						.'&'.$orderField
						.'&'.$orderType
						.'&'.$recordsFrom
						.'&'.$recordsPerRequest
						.'&'.$searchField
						.'&'.$searchKeyword
						.'&'.$subscriberListID
						.'&'.$subscriberSegment
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * importAll
	 *
	 * Import the provided subscriber data into subscriber list
	 *
	 * @param integer $listID (required) Target subscriber list ID 
	 * @param integer $importStep (required) 1 for passing import data, 2 for field mapping 
	 * @param integer $importID (required) ID number of the import process (step 2) 
	 * @param Copy|File|MySQL $importType (required) Type of the import (step 1) 
	 * @param string $importData (required) CSV file contents (step 1) 
	 * @param string $importFileName (required) Uploaded file name (step 1) 
	 * @param string $fieldTerminator (optional, >= v4.1.0) Set the field terminator for CSV import. Example:     , 
	 * @param string $fieldEncloser (optional, >= v4.1.0) Set the field encloser for CSV import. Example:     ' 
	 * @param string $importMySQLHost (required) MySQL host (step 1) 
	 * @param string $importMySQLPort (required) MySQL port (step 1) 
	 * @param string $importMySQLUsername (required) MySQL username (step 1) 
	 * @param string $importMySQLPassword (required) MySQL password (step 1) 
	 * @param string $importMySQLDatabase (required) MySQL database (step 1) 
	 * @param string $importMySQLQuery (required) MySQL SQL query to execute (step 1) 
	 * @param true|false $addToGlobalSuppressionList (required) Defines whether import must done for global suppression list or not (step 1) 
	 * @param true|false $addToSuppressionList (required) Defines whether import must done for suppression list or not (step 1) 
	 * @param string $mappedFields (required) Mapped fields (step 2) 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function importAll($listID, $importStep, $importID, $importType, $importData, $importFileName, $fieldTerminator, $fieldEncloser, $importMySQLHost, $importMySQLPort, $importMySQLUsername, $importMySQLPassword, $importMySQLDatabase, $importMySQLQuery, $addToGlobalSuppressionList, $addToSuppressionList, $mappedFields)
	{

		$command = "Command=Subscribers.Import";
		$listID = "ListID=".$listID;
		$importStep = "ImportStep=".$importStep;
		$importID = "ImportID=".$importID;
		$importType = "ImportType=".$importType;
		$importData = "ImportData=".$importData;
		$importFileName = "ImportFileName=".$importFileName;
		$fieldTerminator = "FieldTerminator=".$fieldTerminator;
		$fieldEncloser = "FieldEncloser=".$fieldEncloser;
		$importMySQLHost = "ImportMySQLHost=".$importMySQLHost;
		$importMySQLPort = "ImportMySQLPort=".$importMySQLPort;
		$importMySQLUsername = "ImportMySQLUsername=".$importMySQLUsername;
		$importMySQLPassword = "ImportMySQLPassword=".$importMySQLPassword;
		$importMySQLDatabase = "ImportMySQLDatabase=".$importMySQLDatabase;
		$importMySQLQuery = "ImportMySQLQuery=".$importMySQLQuery;
		$addToGlobalSuppressionList = "AddToGlobalSuppressionList=".$addToGlobalSuppressionList;
		$addToSuppressionList = "AddToSuppressionList=".$addToSuppressionList;
		$mappedFields = "MappedFields=".$mappedFields;
		
		$apiPath = $command
						.'&'.$listID
						.'&'.$importStep
						.'&'.$importID
						.'&'.$importType
						.'&'.$importData
						.'&'.$importFileName
						.'&'.$fieldTerminator
						.'&'.$fieldEncloser
						.'&'.$importMySQLHost
						.'&'.$importMySQLPort
						.'&'.$importMySQLUsername
						.'&'.$importMySQLPassword
						.'&'.$importMySQLDatabase
						.'&'.$importMySQLQuery
						.'&'.$addToGlobalSuppressionList
						.'&'.$addToSuppressionList
						.'&'.$mappedFields
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * subscribe
	 *
	 * Subscribes an email address to provided subscriber list or lists
	 *
	 * @param integer $listID (required) Target List ID 
	 * @param string $emailAddress (required) Email address to subscribe 
	 * @param array $customFieldX (required) Additional information about the subscriber. Replace X with the ID number of the custom field. 
	 * @param string $iPAddress (required) IP address of subscriber 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function subscribe($listID, $emailAddress, $customFieldX, $iPAddress)
	{

		$command = "Command=Subscriber.Subscribe";
		$listID = "ListID=".$listID;
		$emailAddress = "EmailAddress=".$emailAddress;
		$customFieldX = "CustomFieldX=".$customFieldX;
		$iPAddress = "IPAddress=".$iPAddress;
		
		$apiPath = $command
						.'&'.$listID
						.'&'.$emailAddress
						.'&'.$customFieldX
						.'&'.$iPAddress
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * optIn
	 *
	 * Perform opt-in confirmation or reject
	 *
	 * @param integer $listID (required) Subscriber List ID 
	 * @param integer $subscriberID (required) Subscriber ID 
	 * @param Confirm|Reject $mode (required) Performs opt-in confirmation or reject 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function optIn($listID, $subscriberID, $mode)
	{

		$command = "Command=Subscriber.OptIn";
		$listID = "ListID=".$listID;
		$subscriberID = "SubscriberID=".$subscriberID;
		$mode = "Mode=".$mode;
		
		$apiPath = $command
						.'&'.$listID
						.'&'.$subscriberID
						.'&'.$mode
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * unsubscribe
	 *
	 * Unsubscribe the subscriber from the list
	 *
	 * @param integer $listID (required) Subscriber List ID 
	 * @param integer $campaignID (required) If link is generated for an email campaign, campaign ID should be provided for statistics 
	 * @param integer $emailID  If email ID is provided, the unsubscription statistics will be registered to that email and owner A/B split testing campaign 
	 * @param integer $subscriberID (required) Subscriber ID or email address must be provided 
	 * @param string $emailAddress (required) Subscriber ID or email address must be provided 
	 * @param string $iPAddress (required) IP address of the user who has requested to unsubscribe 
	 * @param 1|0 $preview (required) If set to 1, unsubscription process will be simulated 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function unsubscribe($listID, $campaignID, $emailID, $subscriberID, $emailAddress, $iPAddress, $preview)
	{

		$command = "Command=Subscriber.Unsubscribe";
		$listID = "ListID=".$listID;
		$campaignID = "CampaignID=".$campaignID;
		$emailID = "EmailID=".$emailID;
		$subscriberID = "SubscriberID=".$subscriberID;
		$emailAddress = "EmailAddress=".$emailAddress;
		$iPAddress = "IPAddress=".$iPAddress;
		$preview = "Preview=".$preview;
		
		$apiPath = $command
						.'&'.$listID
						.'&'.$campaignID
						.'&'.$emailID
						.'&'.$subscriberID
						.'&'.$emailAddress
						.'&'.$iPAddress
						.'&'.$preview
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * update
	 *
	 * Update subscriber information in the target list
	 *
	 * @param integer $subscriberID (required) Target subscriber ID 
	 * @param integer $subscriberListID (required) Owner subscription list ID 
	 * @param string $emailAddress (required) Email address 
	 * @param array $fields (required) Custom field IDs with prefix of 'CustomField'. Ex:     Fields[CustomField28] 
	 * @param subscriber|admin $access (required) User (or subscriber) authentication 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function update($subscriberID, $subscriberListID, $emailAddress, $fields, $access)
	{

		$command = "Command=Subscriber.Update";
		$subscriberID = "SubscriberID=".$subscriberID;
		$subscriberListID = "SubscriberListID=".$subscriberListID;
		$emailAddress = "EmailAddress=".$emailAddress;
		$fields = "Fields=".$fields;
		$access = "Access=".$access;
		
		$apiPath = $command
						.'&'.$subscriberID
						.'&'.$subscriberListID
						.'&'.$emailAddress
						.'&'.$fields
						.'&'.$access
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * deleteAll
	 *
	 * Deletes subscriber accounts
	 *
	 * @param integer $subscriberListID  ID number of the target subscriber list 
	 * @param string $subscribers  ID number of subscribers separated by comma (Ex:     1,3,10) 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function deleteAll($subscriberListID, $subscribers)
	{

		$command = "Command=Subscribers.Delete";
		$subscriberListID = "SubscriberListID=".$subscriberListID;
		$subscribers = "Subscribers=".$subscribers;
		
		$apiPath = $command
						.'&'.$subscriberListID
						.'&'.$subscribers
		;

		return SessionData::getSession()->getResponse($apiPath);

	}


}