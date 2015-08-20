<?php

namespace KONEK\OemproBundle\Utility;

use KONEK\OemproBundle\Utility\SessionData;

class Email
{

	/**
	 * create
	 *
	 * Creates a blank email record for user.
	 *
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function create()
	{

		$command = "Command=Email.Create";
		
		$apiPath = $command
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * delete
	 *
	 * Deletes given email.
	 *
	 * @param integer $emailID (required) Id of email to be deleted. 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function delete($emailID)
	{

		$command = "Command=Email.Delete";
		$emailID = "EmailID=".$emailID;
		
		$apiPath = $command
						.'&'.$emailID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * get
	 *
	 * Retrieves all information of given email.
	 *
	 * @param integer $emailID (required) Email id 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function get($emailID)
	{

		$command = "Command=Email.Get";
		$emailID = "EmailID=".$emailID;
		
		$apiPath = $command
						.'&'.$emailID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * getAll
	 *
	 * Returns the list of email contents created so far
	 *
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function getAll()
	{

		$command = "Command=Emails.Get";
		
		$apiPath = $command
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * update
	 *
	 * Updates custom field information.
	 *
	 * @param OptIn|Campaign|AutoResponder $validateScope (required) Defines the validation scope of the email (required fields, links, etc.) 
	 * @param integer $emailID (required) Id of the email to be updated 
	 * @param string $emailName (required) Name of the email 
	 * @param string $fromName (required) From name of the email 
	 * @param string $fromEmail (required) From email address of the email 
	 * @param string $replyToName (required) Reply to name of the email 
	 * @param string $replyToEmail (required) Reply to email address of the email 
	 * @param Empty|Template|Import $mode (required) Email's content mode 
	 * @param string $fetchURL (required) Email's remote content url 
	 * @param string $subject (required) Email's subject 
	 * @param string $plainContent (required) Email's plain content 
	 * @param string $hTMLContent (required) Email's html content 
	 * @param Enabled|Disabled $imageEmbedding (required) Email's image embedding 
	 * @param integer $relTemplateID (required) Email's template id 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function update($validateScope, $emailID, $emailName, $fromName, $fromEmail, $replyToName, $replyToEmail, $mode, $fetchURL, $subject, $plainContent, $hTMLContent, $imageEmbedding, $relTemplateID)
	{

		$command = "Command=Email.Update";
		$validateScope = "ValidateScope=".$validateScope;
		$emailID = "EmailID=".$emailID;
		$emailName = "EmailName=".$emailName;
		$fromName = "FromName=".$fromName;
		$fromEmail = "FromEmail=".$fromEmail;
		$replyToName = "ReplyToName=".$replyToName;
		$replyToEmail = "ReplyToEmail=".$replyToEmail;
		$mode = "Mode=".$mode;
		$fetchURL = "FetchURL=".$fetchURL;
		$subject = "Subject=".$subject;
		$plainContent = "PlainContent=".$plainContent;
		$hTMLContent = "HTMLContent=".$hTMLContent;
		$imageEmbedding = "ImageEmbedding=".$imageEmbedding;
		$relTemplateID = "RelTemplateID=".$relTemplateID;
		
		$apiPath = $command
						.'&'.$validateScope
						.'&'.$emailID
						.'&'.$emailName
						.'&'.$fromName
						.'&'.$fromEmail
						.'&'.$replyToName
						.'&'.$replyToEmail
						.'&'.$mode
						.'&'.$fetchURL
						.'&'.$subject
						.'&'.$plainContent
						.'&'.$hTMLContent
						.'&'.$imageEmbedding
						.'&'.$relTemplateID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * duplicate
	 *
	 * Creates a new email content based on existing one
	 *
	 * @param integer $emailID (required) The ID number of email content which is going to be duplicated 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function duplicate($emailID)
	{

		$command = "Command=Email.Duplicate";
		$emailID = "EmailID=".$emailID;
		
		$apiPath = $command
						.'&'.$emailID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * personalizationTags
	 *
	 * Returns the list of personalization tags
	 *
	 * @param integer|array $listID (required) If the Scope is 'Subscriber', list ID must be provided. It can be an integer single list ID or multiple list IDs in array 
	 * @param array $scope (required) Types of tags to return. Possible array values:     'Subscriber', 'CampaignLinks', 'OptLinks', 'ListLinks', 'AllLinks', 'User' 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function personalizationTags($listID, $scope)
	{

		$command = "Command=Email.PersonalizationTags";
		$listID = "ListID=".$listID;
		$scope = "Scope=".$scope;
		
		$apiPath = $command
						.'&'.$listID
						.'&'.$scope
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * emailPreview
	 *
	 * Sends a preview email to the provided email address
	 *
	 * @param integer $emailID (required) Email ID number 
	 * @param string $emailAddress (required) Email address to send preview of the email 
	 * @param integer $listID (required) List ID number 
	 * @param integer $campaignID (required) Campaign ID number 
	 * @param true|false $addUserGroupHeaderFooter (default: true, required, v4.1.18+) If set to false, user group header and footer is not inserted into email. This is only required for opt-in confirmation emails. 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function emailPreview($emailID, $emailAddress, $listID, $campaignID, $addUserGroupHeaderFooter)
	{

		$command = "Command=Email.EmailPreview";
		$emailID = "EmailID=".$emailID;
		$emailAddress = "EmailAddress=".$emailAddress;
		$listID = "ListID=".$listID;
		$campaignID = "CampaignID=".$campaignID;
		$addUserGroupHeaderFooter = "AddUserGroupHeaderFooter=".$addUserGroupHeaderFooter;
		
		$apiPath = $command
						.'&'.$emailID
						.'&'.$emailAddress
						.'&'.$listID
						.'&'.$campaignID
						.'&'.$addUserGroupHeaderFooter
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * spamTest
	 *
	 * Returns SpamAssassin spam filter test results of your email
	 *
	 * @param integer $emailID (required) Email ID number 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function spamTest($emailID)
	{

		$command = "Command=Email.SpamTest";
		$emailID = "EmailID=".$emailID;
		
		$apiPath = $command
						.'&'.$emailID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * designPreview_Create
	 *
	 * Submits the email to design preview service. This service will show you how your email design looks like in various email clients such as Outlook, Outlook Express, Thunderbird, Gmail, Yahoo!, AOL, Lotus Notes, etc.
	 *
	 * @param integer $emailID (required) Email ID number 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function designPreview_Create($emailID)
	{

		$command = "Command=Email.DesignPreview.Create";
		$emailID = "EmailID=".$emailID;
		
		$apiPath = $command
						.'&'.$emailID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * designPreview_Delete
	 *
	 * Deletes the request from design preview service.
	 *
	 * @param integer $emailID (required) Email ID number 
	 * @param integer $jobID (required) Job ID number 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function designPreview_Delete($emailID, $jobID)
	{

		$command = "Command=Email.DesignPreview.Delete";
		$emailID = "EmailID=".$emailID;
		$jobID = "JobID=".$jobID;
		
		$apiPath = $command
						.'&'.$emailID
						.'&'.$jobID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * designPreview_GetList
	 *
	 * Returns the list of previously created preview requests
	 *
	 * @param JSON|XML $emailID (required) Owner email ID number 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function designPreview_GetList($emailID)
	{

		$command = "Command=Email.DesignPreview.GetList";
		$emailID = "EmailID=".$emailID;
		
		$apiPath = $command
						.'&'.$emailID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * designPreview_Details
	 *
	 * Returns the details of the design preview request
	 *
	 * @param integer $emailID (required) Owner email ID number 
	 * @param integer $jobID (required) Design preview job ID number 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function designPreview_Details($emailID, $jobID)
	{

		$command = "Command=Email.DesignPreview.Details";
		$emailID = "EmailID=".$emailID;
		$jobID = "JobID=".$jobID;
		
		$apiPath = $command
						.'&'.$emailID
						.'&'.$jobID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * designPreview_GetCredits
	 *
	 * Returns the available credits in your account
	 *
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function designPreview_GetCredits()
	{

		$command = "Command=Email.DesignPreview.GetCredits";
		
		$apiPath = $command
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * template_Create
	 *
	 * Creates a new email template
	 *
	 * @param integer $relOwnerUserID (required) Assigned user (set to 0 to make visible to anyone) 
	 * @param string $templateName (required) Name of the email template 
	 * @param string $templateDescription (required) Description of the email template 
	 * @param string $templateSubject (required) Subject of the email template 
	 * @param string $templateHTMLContent (required) HTML content of the email template 
	 * @param string $templatePlainContent (required) Plain content of the email template 
	 * @param string $templateThumbnailPath (required) Thumbnail path of the template on the server 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function template_Create($relOwnerUserID, $templateName, $templateDescription, $templateSubject, $templateHTMLContent, $templatePlainContent, $templateThumbnailPath)
	{

		$command = "Command=Email.Template.Create";
		$relOwnerUserID = "RelOwnerUserID=".$relOwnerUserID;
		$templateName = "TemplateName=".$templateName;
		$templateDescription = "TemplateDescription=".$templateDescription;
		$templateSubject = "TemplateSubject=".$templateSubject;
		$templateHTMLContent = "TemplateHTMLContent=".$templateHTMLContent;
		$templatePlainContent = "TemplatePlainContent=".$templatePlainContent;
		$templateThumbnailPath = "TemplateThumbnailPath=".$templateThumbnailPath;
		
		$apiPath = $command
						.'&'.$relOwnerUserID
						.'&'.$templateName
						.'&'.$templateDescription
						.'&'.$templateSubject
						.'&'.$templateHTMLContent
						.'&'.$templatePlainContent
						.'&'.$templateThumbnailPath
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * template_Get
	 *
	 * Retrieves email template requested by the user
	 *
	 * @param integer $templateID (required) ID of the requested template 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function template_Get($templateID)
	{

		$command = "Command=Email.Template.Get";
		$templateID = "TemplateID=".$templateID;
		
		$apiPath = $command
						.'&'.$templateID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * templates_GetAll
	 *
	 * Retrieves email templates defined in the system
	 *
	 * @param integer $userID (required) Templates of a specific user (administrator only) 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function templates_GetAll($userID)
	{

		$command = "Command=Email.Templates.Get";
		$userID = "UserID=".$userID;
		
		$apiPath = $command
						.'&'.$userID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * template_Update
	 *
	 * Updates email template
	 *
	 * @param string $templateID (required) Template ID to update 
	 * @param string $templateName (required) Name of the email template 
	 * @param string $templateDescription (required) Description of the email template 
	 * @param string $templateSubject (required) Subject of the email template 
	 * @param string $templateHTMLContent (required) HTML content of the email template 
	 * @param string $templatePlainContent (required) Plain content of the email template 
	 * @param string $templateThumbnailPath (required) Thumbnail path of the template on the server 
	 * @param string $relOwnerUserID (required) Owner user ID of the template 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function template_Update($templateID, $templateName, $templateDescription, $templateSubject, $templateHTMLContent, $templatePlainContent, $templateThumbnailPath, $relOwnerUserID)
	{

		$command = "Command=Email.Template.Update";
		$templateID = "TemplateID=".$templateID;
		$templateName = "TemplateName=".$templateName;
		$templateDescription = "TemplateDescription=".$templateDescription;
		$templateSubject = "TemplateSubject=".$templateSubject;
		$templateHTMLContent = "TemplateHTMLContent=".$templateHTMLContent;
		$templatePlainContent = "TemplatePlainContent=".$templatePlainContent;
		$templateThumbnailPath = "TemplateThumbnailPath=".$templateThumbnailPath;
		$relOwnerUserID = "RelOwnerUserID=".$relOwnerUserID;
		
		$apiPath = $command
						.'&'.$templateID
						.'&'.$templateName
						.'&'.$templateDescription
						.'&'.$templateSubject
						.'&'.$templateHTMLContent
						.'&'.$templatePlainContent
						.'&'.$templateThumbnailPath
						.'&'.$relOwnerUserID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * template_Delete
	 *
	 * Delete email templates
	 *
	 * @param string $templates (required) Template IDs separated by comma for deleting 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function template_Delete($templates)
	{

		$command = "Command=Email.Template.Delete";
		$templates = "Templates=".$templates;
		
		$apiPath = $command
						.'&'.$templates
		;

		return SessionData::getSession()->getResponse($apiPath);

	}


}