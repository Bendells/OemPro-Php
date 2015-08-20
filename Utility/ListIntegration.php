<?php

namespace KONEK\OemproBundle\Utility;

use KONEK\OemproBundle\Utility\SessionData;

class ListIntegration
{

	/**
	 * addURL
	 *
	 * Adds a web service url for list subscription or unsubscription events.
	 *
	 * @param integer $subscriberListID (required) ID of subscriber list 
	 * @param subscription|unsubscription $event (required) Event of the integration 
	 * @param string $uRL (required) URL of the web service 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function addURL($subscriberListID, $event, $uRL)
	{

		$command = "Command=ListIntegration.AddURL";
		$subscriberListID = "SubscriberListID=".$subscriberListID;
		$event = "Event=".$event;
		$uRL = "URL=".$uRL;
		
		$apiPath = $command
						.'&'.$subscriberListID
						.'&'.$event
						.'&'.$uRL
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * getURLs
	 *
	 * Retrieves web service integration URLs of a subscriber list.
	 *
	 * @param integer $subscriberListID (required) ID of subscriber list 
	 * @param subscription|unsubscription $event (required) Event of the integration 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function getURLs($subscriberListID, $event)
	{

		$command = "Command=ListIntegration.GetURLs";
		$subscriberListID = "SubscriberListID=".$subscriberListID;
		$event = "Event=".$event;
		
		$apiPath = $command
						.'&'.$subscriberListID
						.'&'.$event
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * testURL
	 *
	 * Tests an URL.
	 *
	 * @param integer $uRL (required) URL address to be tested 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function testURL($uRL)
	{

		$command = "Command=ListIntegration.TestURL";
		$uRL = "URL=".$uRL;
		
		$apiPath = $command
						.'&'.$uRL
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * deleteURLs
	 *
	 * Deletes given web service urls.
	 *
	 * @param integer $uRLs (required) Comma delimeted url ids. 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function deleteURLs($uRLs)
	{

		$command = "Command=ListIntegration.DeleteURLs";
		$uRLs = "URLs=".$uRLs;
		
		$apiPath = $command
						.'&'.$uRLs
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * generateSubscriptionFormHTMLCode
	 *
	 * Generates subscription form html code.
	 *
	 * @param integer $subscriberListID (required) Subscriber list id. 
	 * @param string $customFields (required) Comma delimeted custom field ids. 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function generateSubscriptionFormHTMLCode($subscriberListID, $customFields)
	{

		$command = "Command=ListIntegration.GenerateSubscriptionFormHTMLCode";
		$subscriberListID = "SubscriberListID=".$subscriberListID;
		$customFields = "CustomFields=".$customFields;
		
		$apiPath = $command
						.'&'.$subscriberListID
						.'&'.$customFields
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * generateUnsubscriptionFormHTMLCode
	 *
	 * Generates unsubscription form html code.
	 *
	 * @param integer $subscriberListID (required) Subscriber list id. 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function generateUnsubscriptionFormHTMLCode($subscriberListID)
	{

		$command = "Command=ListIntegration.GenerateUnsubscriptionFormHTMLCode";
		$subscriberListID = "SubscriberListID=".$subscriberListID;
		
		$apiPath = $command
						.'&'.$subscriberListID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}


}