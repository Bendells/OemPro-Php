<?php

namespace KONEK\OemproBundle\Utility;

use KONEK\OemproBundle\Utility\SessionData;

class Setting
{

	/**
	 * updateAll
	 *
	 * Update system settings. This API command can be called by administrative privileges
	 *
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function updateAll()
	{

		$command = "Command=Settings.Update";
		
		$apiPath = $command
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * emailSendingTestAll
	 *
	 * Tests provided email sending settings
	 *
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function emailSendingTestAll()
	{

		$command = "Command=Settings.EmailSendingTest";
		
		$apiPath = $command
		;

		return SessionData::getSession()->getResponse($apiPath);

	}


}