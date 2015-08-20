<?php

namespace KONEK\OemproBundle\Utility;

use KONEK\OemproBundle\Utility\SessionData;

class Client
{

	/**
	 * login
	 *
	 * Verifies and logs in the client account
	 *
	 * @param string $username (required) Username of the client to be logged in 
	 * @param string $password (required) Password of the client to be logged in 
	 * @param string $rememberMe (required) Stores the login information in the cookie 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function login($username, $password, $rememberMe)
	{

		$command = "Command=Client.Login";
		$username = "Username=".$username;
		$password = "Password=".$password;
		$rememberMe = "RememberMe=".$rememberMe;
		
		$apiPath = $command
						.'&'.$username
						.'&'.$password
						.'&'.$rememberMe
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * passwordRemind
	 *
	 * Sends the password reset email.
	 *
	 * @param string $emailAddress (required) Email address of the client to be reminded 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function passwordRemind($emailAddress)
	{

		$command = "Command=Client.PasswordRemind";
		$emailAddress = "EmailAddress=".$emailAddress;
		
		$apiPath = $command
						.'&'.$emailAddress
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * passwordReset
	 *
	 * Resets clients password and sends the new password with email.
	 *
	 * @param integer $clientID (required) ID of the client whose password will be reset 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function passwordReset($clientID)
	{

		$command = "Command=Client.PasswordReset";
		$clientID = "ClientID=".$clientID;
		
		$apiPath = $command
						.'&'.$clientID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * create
	 *
	 * Create new client account
	 *
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function create()
	{

		$command = "Command=Client.Create";
		
		$apiPath = $command
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * update
	 *
	 * Update client account information
	 *
	 * @param user|client $access (required) Determines the user type of api command. Default is user. 
	 * @param integer $clientID (required) ID number of the client account 
	 * @param string $clientUsername (required) Username of the client account 
	 * @param string $clientPassword (required) Password of the client account 
	 * @param string $clientEmailAddress (required) Email address of the client account 
	 * @param string $clientName (required) Name of the client account 
	 * @param Enabled|Disabled $clientAccountStatus (required) Account status of the client 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function update($access, $clientID, $clientUsername, $clientPassword, $clientEmailAddress, $clientName, $clientAccountStatus)
	{

		$command = "Command=Client.Update";
		$access = "Access=".$access;
		$clientID = "ClientID=".$clientID;
		$clientUsername = "ClientUsername=".$clientUsername;
		$clientPassword = "ClientPassword=".$clientPassword;
		$clientEmailAddress = "ClientEmailAddress=".$clientEmailAddress;
		$clientName = "ClientName=".$clientName;
		$clientAccountStatus = "ClientAccountStatus=".$clientAccountStatus;
		
		$apiPath = $command
						.'&'.$access
						.'&'.$clientID
						.'&'.$clientUsername
						.'&'.$clientPassword
						.'&'.$clientEmailAddress
						.'&'.$clientName
						.'&'.$clientAccountStatus
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * getAll
	 *
	 * Retrieves clients of logged in user.
	 *
	 * @param anyclientfield $orderField (required) Order field 
	 * @param ASC|DESC $orderTYPE (required) Order type 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function getAll($orderField, $orderTYPE)
	{

		$command = "Command=Clients.Get";
		$orderField = "OrderField=".$orderField;
		$orderTYPE = "OrderTYPE=".$orderTYPE;
		
		$apiPath = $command
						.'&'.$orderField
						.'&'.$orderTYPE
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * deleteAll
	 *
	 * Deletes given clients.
	 *
	 * @param string $clients (required) Comma delimeted Client ids 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function deleteAll($clients)
	{

		$command = "Command=Clients.Delete";
		$clients = "Clients=".$clients;
		
		$apiPath = $command
						.'&'.$clients
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * assignCampaigns
	 *
	 * Assigns given campaigns to client.
	 *
	 * @param integer $clientID (required) ID of client 
	 * @param string $campaignIDs (required) Comma seperated campaign ids to be assigned 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function assignCampaigns($clientID, $campaignIDs)
	{

		$command = "Command=Client.AssignCampaigns";
		$clientID = "ClientID=".$clientID;
		$campaignIDs = "CampaignIDs=".$campaignIDs;
		
		$apiPath = $command
						.'&'.$clientID
						.'&'.$campaignIDs
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * assignSubscriberLists
	 *
	 * Assigns given subscriber lists to client.
	 *
	 * @param integer $clientID (required) ID of client 
	 * @param string $subscriberListIDs (required) Comma seperated subscriber list ids to be assigned 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function assignSubscriberLists($clientID, $subscriberListIDs)
	{

		$command = "Command=Client.AssignSubscriberLists";
		$clientID = "ClientID=".$clientID;
		$subscriberListIDs = "SubscriberListIDs=".$subscriberListIDs;
		
		$apiPath = $command
						.'&'.$clientID
						.'&'.$subscriberListIDs
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * lists_GetAll
	 *
	 * Retrieves assigned subscriber lists of logged in client.
	 *
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function lists_GetAll()
	{

		$command = "Command=Client.Lists.Get";
		
		$apiPath = $command
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * list_Get
	 *
	 * Retrieves subscriber list of logged in client.
	 *
	 * @param integer $listID (required) ID of subscriber list to retrieve 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function list_Get($listID)
	{

		$command = "Command=Client.List.Get";
		$listID = "ListID=".$listID;
		
		$apiPath = $command
						.'&'.$listID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}


}