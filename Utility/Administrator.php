<?php

namespace KONEK\OemproBundle\Utility;

use KONEK\OemproBundle\Utility\SessionData;

class Administrator
{

	/**
	 * login
	 *
	 * Verifies and logs in the admin account.
	 *
	 * @param string $username (required) Username of the client to be logged in 
	 * @param string $password (required) Password of the client to be logged in 
	 * @param string $rememberMe (required) Stores the login information in the cookie 
	 * @param string $captcha (required) If captcha image verification is enabled, direct API login will be disabled 
	 * @param true|false $disableCaptcha (optional) If this parameter is passed in, it will by-pass the captcha validation 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function login($username, $password, $rememberMe, $captcha, $disableCaptcha)
	{

		$command = "Command=Admin.Login";
		$username = "Username=".$username;
		$password = "Password=".$password;
		$rememberMe = "RememberMe=".$rememberMe;
		$captcha = "Captcha=".$captcha;
		$disableCaptcha = "DisableCaptcha=".$disableCaptcha;
		
		$apiPath = $command
						.'&'.$username
						.'&'.$password
						.'&'.$rememberMe
						.'&'.$captcha
						.'&'.$disableCaptcha
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * passwordRemind
	 *
	 * Sends the password reset email.
	 *
	 * @param string $emailAddress (required) Email address of the admin to be reminded 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function passwordRemind($emailAddress)
	{

		$command = "Command=Admin.PasswordRemind";
		$emailAddress = "EmailAddress=".$emailAddress;
		
		$apiPath = $command
						.'&'.$emailAddress
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * passwordReset
	 *
	 * Resets admin password and sends the new password with email.
	 *
	 * @param integer $adminID (required) ID of the admin whose password will be reset 
	 * @param string $customResetLink  If you want to display a custom password reset link inside the sent email, enter it here with base64_encoded and then rawurlencoded. PHP Example: rawurlencode(base64_encode($Link)) 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function passwordReset($adminID, $customResetLink)
	{

		$command = "Command=Admin.PasswordReset";
		$adminID = "AdminID=".$adminID;
		$customResetLink = "CustomResetLink=".$customResetLink;
		
		$apiPath = $command
						.'&'.$adminID
						.'&'.$customResetLink
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * update
	 *
	 * Update admin account information
	 *
	 * @param integer $adminID (required) ID number of the admin account 
	 * @param string $username (required) Username of the admin account 
	 * @param string $password (required) Password of the admin account 
	 * @param string $emailAddress (required) Email address of the admin account 
	 * @param string $name (required) Name of the admin account 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function update($adminID, $username, $password, $emailAddress, $name)
	{

		$command = "Command=Admin.Update";
		$adminID = "AdminID=".$adminID;
		$username = "Username=".$username;
		$password = "Password=".$password;
		$emailAddress = "EmailAddress=".$emailAddress;
		$name = "Name=".$name;
		
		$apiPath = $command
						.'&'.$adminID
						.'&'.$username
						.'&'.$password
						.'&'.$emailAddress
						.'&'.$name
		;

		return SessionData::getSession()->getResponse($apiPath);

	}


}