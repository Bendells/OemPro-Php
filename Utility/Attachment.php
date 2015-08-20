<?php

namespace KONEK\OemproBundle\Utility;

use KONEK\OemproBundle\Utility\SessionData;

class Attachment
{

	/**
	 * delete
	 *
	 * Delete attachments.
	 *
	 * @param integer $attachmentID (required) ID of the attachment that will be deleted. 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function delete($attachmentID)
	{

		$command = "Command=Attachment.Delete";
		$attachmentID = "AttachmentID=".$attachmentID;
		
		$apiPath = $command
						.'&'.$attachmentID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}


}