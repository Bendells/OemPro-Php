<?php

namespace KONEK\OemproBundle\Utility;

use KONEK\OemproBundle\Utility\SessionData;

class UserGroup
{

	/**
	 * create
	 *
	 * Creates a new user group
	 *
	 * @param string $groupName (required) Name of the group 
	 * @param integer $relThemeID (required) Theme ID for the group 
	 * @param string $subscriberAreaLogoutURL (required) URL where subscriber will be redirected after logout 
	 * @param Enabled|Disabled $forceUnsubscriptionLink (required) Whether force user to include unsubscription link inside emails or not 
	 * @param Enabled|Disabled $forceRejectOptLink (required) Whether force user to include reject link inside opt-in confirmation emails 
	 * @param string $permissions (required) Permission list separated by comma 
	 * @param Enabled|Disabled $paymentSystem (required) Payment system status 
	 * @param string $paymentPricingRange (required) Payment pricing for per recipient and per auto responder pricing models. Data must be provided in following format:     until|price Example:     1000|0.00,5000|0.01,-1|0.07 
	 * @param Enabled|Disabled $paymentCampaignsPerRecipient (required) Whether to charge per campaign recipient or not 
	 * @param double $paymentCampaignsPerCampaignCost (required) Pricing per sent campaign 
	 * @param double $paymentAutoRespondersChargeAmount (required) Monthly auto responder pricing fee 
	 * @param Enabled|Disabled $paymentAutoRespondersPerRecipient (required) Whether to charge per sent auto responder or not 
	 * @param double $paymentDesignPrevChargeAmount (required) Monthly design preview pricing fee 
	 * @param double $paymentDesignPrevChargePerReq (required) Per design preview request fee 
	 * @param double $paymentSystemChargeAmount (required) Monthly system usage/subscription fee 
	 * @param integer $limitSubscribers (required) Maximum number of subscribers that user can store in the account 
	 * @param integer $limitLists (required) Maximum number of lists that user can store in the account 
	 * @param integer $limitCampaignSendPerPeriod (required) Maximum number of campaigns that user can send every month 
	 * @param integer $limitEmailSendPerPeriod (required) Maximum number of emails that user can send every month 
	 * @param integer $thresholdImport (required, 4.0.5+) The threshold value to trigger admin notification systems during the import 
	 * @param integer $thresholdEmailSend (required, 4.0.5+) The threshold value to trigger admin notification systems during the email delivery 
	 * @param string $plainEmailHeader (optional, 4.1.0+) The header content for text only email campaigns 
	 * @param string $plainEmailFooter (optional, 4.1.0+) The footer content for text only email campaigns 
	 * @param string $hTMLEmailHeader (optional, 4.1.0+) The header content for HTML email campaigns 
	 * @param string $hTMLEmailFooter (optional, 4.1.0+) The footer content for HTML email campaigns 
	 * @param Enabled|Disabled $trialGroup (required, 4.1.0+) Set the user group as trial or not 
	 * @param integer $trialExpireSeconds (optional, 4.1.0+) Number of seconds after the user sign-up to expire 
	 * @param System|SMTP|LocalMTA|PHPMail|PowerMTA|SaveToDisk $sendMethod (required, v4.1.0+) Set a different sending method for the user group 
	 * @param string $sendMethodSaveToDiskDir (optional, 4.1.0+) Path to save emails. It should be writable 
	 * @param string $sendMethodPowerMTAVMTA (optional, 4.1.0+) Virtual MTA name to send emails from through PowerMTA 
	 * @param string $sendMethodPowerMTADir (optional, 4.1.0+) PowerMTA pick-up directory. It should be writable 
	 * @param string $sendMethodLocalMTAPath (optional, 4.1.0+) Path of your local MTA. It should be executable via PHP and web server user 
	 * @param string $sendMethodSMTPHost (optional, 4.1.0+) Host or IP address of the SMTP server 
	 * @param integer $sendMethodSMTPPort (optional, 4.1.0+) Port number (usually 25) of the SMTP server 
	 * @param ssl|tls|<empty> $sendMethodSMTPSecure (optional, 4.1.0+) SMTP server security mode 
	 * @param integer $sendMethodSMTPTimeOut (optional, 4.1.0+) Set the number of seconds to time-out during inactivity 
	 * @param true|false $sendMethodSMTPAuth (optional, 4.1.0+) Set whether SMTP server requires authentication or not 
	 * @param string $sendMethodSMTPUsername (optional, 4.1.0+) The username to login to the SMTP server 
	 * @param string $sendMethodSMTPPassword (optional, 4.1.0+) The password to login to the SMTP server 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function create($groupName, $relThemeID, $subscriberAreaLogoutURL, $forceUnsubscriptionLink, $forceRejectOptLink, $permissions, $paymentSystem, $paymentPricingRange, $paymentCampaignsPerRecipient, $paymentCampaignsPerCampaignCost, $paymentAutoRespondersChargeAmount, $paymentAutoRespondersPerRecipient, $paymentDesignPrevChargeAmount, $paymentDesignPrevChargePerReq, $paymentSystemChargeAmount, $limitSubscribers, $limitLists, $limitCampaignSendPerPeriod, $limitEmailSendPerPeriod, $thresholdImport, $thresholdEmailSend, $plainEmailHeader, $plainEmailFooter, $hTMLEmailHeader, $hTMLEmailFooter, $trialGroup, $trialExpireSeconds, $sendMethod, $sendMethodSaveToDiskDir, $sendMethodPowerMTAVMTA, $sendMethodPowerMTADir, $sendMethodLocalMTAPath, $sendMethodSMTPHost, $sendMethodSMTPPort, $sendMethodSMTPSecure, $sendMethodSMTPTimeOut, $sendMethodSMTPAuth, $sendMethodSMTPUsername, $sendMethodSMTPPassword)
	{

		$command = "Command=UserGroup.Create";
		$groupName = "GroupName=".$groupName;
		$relThemeID = "RelThemeID=".$relThemeID;
		$subscriberAreaLogoutURL = "SubscriberAreaLogoutURL=".$subscriberAreaLogoutURL;
		$forceUnsubscriptionLink = "ForceUnsubscriptionLink=".$forceUnsubscriptionLink;
		$forceRejectOptLink = "ForceRejectOptLink=".$forceRejectOptLink;
		$permissions = "Permissions=".$permissions;
		$paymentSystem = "PaymentSystem=".$paymentSystem;
		$paymentPricingRange = "PaymentPricingRange=".$paymentPricingRange;
		$paymentCampaignsPerRecipient = "PaymentCampaignsPerRecipient=".$paymentCampaignsPerRecipient;
		$paymentCampaignsPerCampaignCost = "PaymentCampaignsPerCampaignCost=".$paymentCampaignsPerCampaignCost;
		$paymentAutoRespondersChargeAmount = "PaymentAutoRespondersChargeAmount=".$paymentAutoRespondersChargeAmount;
		$paymentAutoRespondersPerRecipient = "PaymentAutoRespondersPerRecipient=".$paymentAutoRespondersPerRecipient;
		$paymentDesignPrevChargeAmount = "PaymentDesignPrevChargeAmount=".$paymentDesignPrevChargeAmount;
		$paymentDesignPrevChargePerReq = "PaymentDesignPrevChargePerReq=".$paymentDesignPrevChargePerReq;
		$paymentSystemChargeAmount = "PaymentSystemChargeAmount=".$paymentSystemChargeAmount;
		$limitSubscribers = "LimitSubscribers=".$limitSubscribers;
		$limitLists = "LimitLists=".$limitLists;
		$limitCampaignSendPerPeriod = "LimitCampaignSendPerPeriod=".$limitCampaignSendPerPeriod;
		$limitEmailSendPerPeriod = "LimitEmailSendPerPeriod=".$limitEmailSendPerPeriod;
		$thresholdImport = "ThresholdImport=".$thresholdImport;
		$thresholdEmailSend = "ThresholdEmailSend=".$thresholdEmailSend;
		$plainEmailHeader = "PlainEmailHeader=".$plainEmailHeader;
		$plainEmailFooter = "PlainEmailFooter=".$plainEmailFooter;
		$hTMLEmailHeader = "HTMLEmailHeader=".$hTMLEmailHeader;
		$hTMLEmailFooter = "HTMLEmailFooter=".$hTMLEmailFooter;
		$trialGroup = "TrialGroup=".$trialGroup;
		$trialExpireSeconds = "TrialExpireSeconds=".$trialExpireSeconds;
		$sendMethod = "SendMethod=".$sendMethod;
		$sendMethodSaveToDiskDir = "SendMethodSaveToDiskDir=".$sendMethodSaveToDiskDir;
		$sendMethodPowerMTAVMTA = "SendMethodPowerMTAVMTA=".$sendMethodPowerMTAVMTA;
		$sendMethodPowerMTADir = "SendMethodPowerMTADir=".$sendMethodPowerMTADir;
		$sendMethodLocalMTAPath = "SendMethodLocalMTAPath=".$sendMethodLocalMTAPath;
		$sendMethodSMTPHost = "SendMethodSMTPHost=".$sendMethodSMTPHost;
		$sendMethodSMTPPort = "SendMethodSMTPPort=".$sendMethodSMTPPort;
		$sendMethodSMTPSecure = "SendMethodSMTPSecure=".$sendMethodSMTPSecure;
		$sendMethodSMTPTimeOut = "SendMethodSMTPTimeOut=".$sendMethodSMTPTimeOut;
		$sendMethodSMTPAuth = "SendMethodSMTPAuth=".$sendMethodSMTPAuth;
		$sendMethodSMTPUsername = "SendMethodSMTPUsername=".$sendMethodSMTPUsername;
		$sendMethodSMTPPassword = "SendMethodSMTPPassword=".$sendMethodSMTPPassword;
		
		$apiPath = $command
						.'&'.$groupName
						.'&'.$relThemeID
						.'&'.$subscriberAreaLogoutURL
						.'&'.$forceUnsubscriptionLink
						.'&'.$forceRejectOptLink
						.'&'.$permissions
						.'&'.$paymentSystem
						.'&'.$paymentPricingRange
						.'&'.$paymentCampaignsPerRecipient
						.'&'.$paymentCampaignsPerCampaignCost
						.'&'.$paymentAutoRespondersChargeAmount
						.'&'.$paymentAutoRespondersPerRecipient
						.'&'.$paymentDesignPrevChargeAmount
						.'&'.$paymentDesignPrevChargePerReq
						.'&'.$paymentSystemChargeAmount
						.'&'.$limitSubscribers
						.'&'.$limitLists
						.'&'.$limitCampaignSendPerPeriod
						.'&'.$limitEmailSendPerPeriod
						.'&'.$thresholdImport
						.'&'.$thresholdEmailSend
						.'&'.$plainEmailHeader
						.'&'.$plainEmailFooter
						.'&'.$hTMLEmailHeader
						.'&'.$hTMLEmailFooter
						.'&'.$trialGroup
						.'&'.$trialExpireSeconds
						.'&'.$sendMethod
						.'&'.$sendMethodSaveToDiskDir
						.'&'.$sendMethodPowerMTAVMTA
						.'&'.$sendMethodPowerMTADir
						.'&'.$sendMethodLocalMTAPath
						.'&'.$sendMethodSMTPHost
						.'&'.$sendMethodSMTPPort
						.'&'.$sendMethodSMTPSecure
						.'&'.$sendMethodSMTPTimeOut
						.'&'.$sendMethodSMTPAuth
						.'&'.$sendMethodSMTPUsername
						.'&'.$sendMethodSMTPPassword
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * update
	 *
	 * Updates user group
	 *
	 * @param integer $userGroupID (required) ID number of the target user group 
	 * @param string $groupName (required) Name of the group 
	 * @param integer $relThemeID (required) Theme ID for the group 
	 * @param string $subscriberAreaLogoutURL (required) URL where subscriber will be redirected after logout 
	 * @param Enabled|Disabled $forceUnsubscriptionLink (required) Whether force user to include unsubscription link inside emails or not 
	 * @param Enabled|Disabled $forceRejectOptLink (required) Whether force user to include reject link inside opt-in confirmation emails 
	 * @param string $permissions (required) Permission list separated by comma 
	 * @param Enabled|Disabled $paymentSystem (required) Payment system status 
	 * @param string $paymentPricingRange (required) Payment pricing for per recipient and per auto responder pricing models. Data must be provided in following format:     until|price Example:     1000|0.00,5000|0.01,-1|0.07 
	 * @param Enabled|Disabled $paymentCampaignsPerRecipient (required) Whether to charge per campaign recipient or not 
	 * @param double $paymentCampaignsPerCampaignCost (required) Pricing per sent campaign 
	 * @param double $paymentAutoRespondersChargeAmount (required) Monthly auto responder pricing fee 
	 * @param Enabled|Disabled $paymentAutoRespondersPerRecipient (required) Whether to charge per sent auto responder or not 
	 * @param double $paymentDesignPrevChargeAmount (required) Monthly design preview pricing fee 
	 * @param double $paymentDesignPrevChargePerReq (required) Per design preview request fee 
	 * @param double $paymentSystemChargeAmount (required) Monthly system usage/subscription fee 
	 * @param integer $limitSubscribers (required) Maximum number of subscribers that user can store in the account 
	 * @param integer $limitLists (required) Maximum number of lists that user can store in the account 
	 * @param integer $limitCampaignSendPerPeriod (required) Maximum number of campaigns that user can send every month 
	 * @param integer $limitEmailSendPerPeriod (required) Maximum number of emails that user can send every month 
	 * @param string $plainEmailHeader (optional, 4.1.0+) The header content for text only email campaigns 
	 * @param string $plainEmailFooter (optional, 4.1.0+) The footer content for text only email campaigns 
	 * @param string $hTMLEmailHeader (optional, 4.1.0+) The header content for HTML email campaigns 
	 * @param string $hTMLEmailFooter (optional, 4.1.0+) The footer content for HTML email campaigns 
	 * @param Enabled|Disabled $trialGroup (required, 4.1.0+) Set the user group as trial or not 
	 * @param integer $trialExpireSeconds (optional, 4.1.0+) Number of seconds after the user sign-up to expire 
	 * @param System|SMTP|LocalMTA|PHPMail|PowerMTA|SaveToDisk $sendMethod (required, v4.1.0+) Set a different sending method for the user group 
	 * @param string $sendMethodSaveToDiskDir (optional, 4.1.0+) Path to save emails. It should be writable 
	 * @param string $sendMethodPowerMTAVMTA (optional, 4.1.0+) Virtual MTA name to send emails from through PowerMTA 
	 * @param string $sendMethodPowerMTADir (optional, 4.1.0+) PowerMTA pick-up directory. It should be writable 
	 * @param string $sendMethodLocalMTAPath (optional, 4.1.0+) Path of your local MTA. It should be executable via PHP and web server user 
	 * @param string $sendMethodSMTPHost (optional, 4.1.0+) Host or IP address of the SMTP server 
	 * @param integer $sendMethodSMTPPort (optional, 4.1.0+) Port number (usually 25) of the SMTP server 
	 * @param ssl|tls|<empty> $sendMethodSMTPSecure (optional, 4.1.0+) SMTP server security mode 
	 * @param integer $sendMethodSMTPTimeOut (optional, 4.1.0+) Set the number of seconds to time-out during inactivity 
	 * @param true|false $sendMethodSMTPAuth (optional, 4.1.0+) Set whether SMTP server requires authentication or not 
	 * @param string $sendMethodSMTPUsername (optional, 4.1.0+) The username to login to the SMTP server 
	 * @param string $sendMethodSMTPPassword (optional, 4.1.0+) The password to login to the SMTP server 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function update($userGroupID, $groupName, $relThemeID, $subscriberAreaLogoutURL, $forceUnsubscriptionLink, $forceRejectOptLink, $permissions, $paymentSystem, $paymentPricingRange, $paymentCampaignsPerRecipient, $paymentCampaignsPerCampaignCost, $paymentAutoRespondersChargeAmount, $paymentAutoRespondersPerRecipient, $paymentDesignPrevChargeAmount, $paymentDesignPrevChargePerReq, $paymentSystemChargeAmount, $limitSubscribers, $limitLists, $limitCampaignSendPerPeriod, $limitEmailSendPerPeriod, $plainEmailHeader, $plainEmailFooter, $hTMLEmailHeader, $hTMLEmailFooter, $trialGroup, $trialExpireSeconds, $sendMethod, $sendMethodSaveToDiskDir, $sendMethodPowerMTAVMTA, $sendMethodPowerMTADir, $sendMethodLocalMTAPath, $sendMethodSMTPHost, $sendMethodSMTPPort, $sendMethodSMTPSecure, $sendMethodSMTPTimeOut, $sendMethodSMTPAuth, $sendMethodSMTPUsername, $sendMethodSMTPPassword)
	{

		$command = "Command=UserGroup.Update";
		$userGroupID = "UserGroupID=".$userGroupID;
		$groupName = "GroupName=".$groupName;
		$relThemeID = "RelThemeID=".$relThemeID;
		$subscriberAreaLogoutURL = "SubscriberAreaLogoutURL=".$subscriberAreaLogoutURL;
		$forceUnsubscriptionLink = "ForceUnsubscriptionLink=".$forceUnsubscriptionLink;
		$forceRejectOptLink = "ForceRejectOptLink=".$forceRejectOptLink;
		$permissions = "Permissions=".$permissions;
		$paymentSystem = "PaymentSystem=".$paymentSystem;
		$paymentPricingRange = "PaymentPricingRange=".$paymentPricingRange;
		$paymentCampaignsPerRecipient = "PaymentCampaignsPerRecipient=".$paymentCampaignsPerRecipient;
		$paymentCampaignsPerCampaignCost = "PaymentCampaignsPerCampaignCost=".$paymentCampaignsPerCampaignCost;
		$paymentAutoRespondersChargeAmount = "PaymentAutoRespondersChargeAmount=".$paymentAutoRespondersChargeAmount;
		$paymentAutoRespondersPerRecipient = "PaymentAutoRespondersPerRecipient=".$paymentAutoRespondersPerRecipient;
		$paymentDesignPrevChargeAmount = "PaymentDesignPrevChargeAmount=".$paymentDesignPrevChargeAmount;
		$paymentDesignPrevChargePerReq = "PaymentDesignPrevChargePerReq=".$paymentDesignPrevChargePerReq;
		$paymentSystemChargeAmount = "PaymentSystemChargeAmount=".$paymentSystemChargeAmount;
		$limitSubscribers = "LimitSubscribers=".$limitSubscribers;
		$limitLists = "LimitLists=".$limitLists;
		$limitCampaignSendPerPeriod = "LimitCampaignSendPerPeriod=".$limitCampaignSendPerPeriod;
		$limitEmailSendPerPeriod = "LimitEmailSendPerPeriod=".$limitEmailSendPerPeriod;
		$plainEmailHeader = "PlainEmailHeader=".$plainEmailHeader;
		$plainEmailFooter = "PlainEmailFooter=".$plainEmailFooter;
		$hTMLEmailHeader = "HTMLEmailHeader=".$hTMLEmailHeader;
		$hTMLEmailFooter = "HTMLEmailFooter=".$hTMLEmailFooter;
		$trialGroup = "TrialGroup=".$trialGroup;
		$trialExpireSeconds = "TrialExpireSeconds=".$trialExpireSeconds;
		$sendMethod = "SendMethod=".$sendMethod;
		$sendMethodSaveToDiskDir = "SendMethodSaveToDiskDir=".$sendMethodSaveToDiskDir;
		$sendMethodPowerMTAVMTA = "SendMethodPowerMTAVMTA=".$sendMethodPowerMTAVMTA;
		$sendMethodPowerMTADir = "SendMethodPowerMTADir=".$sendMethodPowerMTADir;
		$sendMethodLocalMTAPath = "SendMethodLocalMTAPath=".$sendMethodLocalMTAPath;
		$sendMethodSMTPHost = "SendMethodSMTPHost=".$sendMethodSMTPHost;
		$sendMethodSMTPPort = "SendMethodSMTPPort=".$sendMethodSMTPPort;
		$sendMethodSMTPSecure = "SendMethodSMTPSecure=".$sendMethodSMTPSecure;
		$sendMethodSMTPTimeOut = "SendMethodSMTPTimeOut=".$sendMethodSMTPTimeOut;
		$sendMethodSMTPAuth = "SendMethodSMTPAuth=".$sendMethodSMTPAuth;
		$sendMethodSMTPUsername = "SendMethodSMTPUsername=".$sendMethodSMTPUsername;
		$sendMethodSMTPPassword = "SendMethodSMTPPassword=".$sendMethodSMTPPassword;
		
		$apiPath = $command
						.'&'.$userGroupID
						.'&'.$groupName
						.'&'.$relThemeID
						.'&'.$subscriberAreaLogoutURL
						.'&'.$forceUnsubscriptionLink
						.'&'.$forceRejectOptLink
						.'&'.$permissions
						.'&'.$paymentSystem
						.'&'.$paymentPricingRange
						.'&'.$paymentCampaignsPerRecipient
						.'&'.$paymentCampaignsPerCampaignCost
						.'&'.$paymentAutoRespondersChargeAmount
						.'&'.$paymentAutoRespondersPerRecipient
						.'&'.$paymentDesignPrevChargeAmount
						.'&'.$paymentDesignPrevChargePerReq
						.'&'.$paymentSystemChargeAmount
						.'&'.$limitSubscribers
						.'&'.$limitLists
						.'&'.$limitCampaignSendPerPeriod
						.'&'.$limitEmailSendPerPeriod
						.'&'.$plainEmailHeader
						.'&'.$plainEmailFooter
						.'&'.$hTMLEmailHeader
						.'&'.$hTMLEmailFooter
						.'&'.$trialGroup
						.'&'.$trialExpireSeconds
						.'&'.$sendMethod
						.'&'.$sendMethodSaveToDiskDir
						.'&'.$sendMethodPowerMTAVMTA
						.'&'.$sendMethodPowerMTADir
						.'&'.$sendMethodLocalMTAPath
						.'&'.$sendMethodSMTPHost
						.'&'.$sendMethodSMTPPort
						.'&'.$sendMethodSMTPSecure
						.'&'.$sendMethodSMTPTimeOut
						.'&'.$sendMethodSMTPAuth
						.'&'.$sendMethodSMTPUsername
						.'&'.$sendMethodSMTPPassword
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * get
	 *
	 * Retrieves user group
	 *
	 * @param integer $userGroupID (required) ID number of the target user group 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function get($userGroupID)
	{

		$command = "Command=UserGroup.Get";
		$userGroupID = "UserGroupID=".$userGroupID;
		
		$apiPath = $command
						.'&'.$userGroupID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * duplicate
	 *
	 * Duplicates user group
	 *
	 * @param string $userGroupID (required) ID numbers separated with comma 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function duplicate($userGroupID)
	{

		$command = "Command=UserGroup.Duplicate";
		$userGroupID = "UserGroupID=".$userGroupID;
		
		$apiPath = $command
						.'&'.$userGroupID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * delete
	 *
	 * Deletes user groups
	 *
	 * @param string $userGroupID (required) ID numbers separated with comma 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function delete($userGroupID)
	{

		$command = "Command=UserGroup.Delete";
		$userGroupID = "UserGroupID=".$userGroupID;
		
		$apiPath = $command
						.'&'.$userGroupID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * getAll
	 *
	 * Retrieves the list of user groups
	 *
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function getAll()
	{

		$command = "Command=UserGroups.Get";
		
		$apiPath = $command
		;

		return SessionData::getSession()->getResponse($apiPath);

	}


}