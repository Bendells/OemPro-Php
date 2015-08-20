<?php

namespace KONEK\OemproBundle\Utility;

use KONEK\OemproBundle\Utility\SessionData;

class MediaLibrary
{

	/**
	 * upload
	 *
	 * Uploads media to the media library
	 *
	 * @param string $mediaData (required) Media file contents encoded with base64 
	 * @param string $mediaType (required) MIME type of the media. Ex:     image/gif 
	 * @param integer $mediaSize (required) File size of the media file in bytes 
	 * @param integer $mediaName (required) File name of the media file 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function upload($mediaData, $mediaType, $mediaSize, $mediaName)
	{

		$command = "Command=Media.Upload";
		$mediaData = "MediaData=".$mediaData;
		$mediaType = "MediaType=".$mediaType;
		$mediaSize = "MediaSize=".$mediaSize;
		$mediaName = "MediaName=".$mediaName;
		
		$apiPath = $command
						.'&'.$mediaData
						.'&'.$mediaType
						.'&'.$mediaSize
						.'&'.$mediaName
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * browse
	 *
	 * Returns the list of media available in the media library
	 *
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function browse()
	{

		$command = "Command=Media.Browse";
		
		$apiPath = $command
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * retrieve
	 *
	 * Retrieves details of a media item
	 *
	 * @param integer $mediaID (required) Media ID of the media item 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function retrieve($mediaID)
	{

		$command = "Command=Media.Retrieve";
		$mediaID = "MediaID=".$mediaID;
		
		$apiPath = $command
						.'&'.$mediaID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * delete
	 *
	 * Delete a media item
	 *
	 * @param integer $mediaID (required) Media ID of the media item 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function delete($mediaID)
	{

		$command = "Command=Media.Delete";
		$mediaID = "MediaID=".$mediaID;
		
		$apiPath = $command
						.'&'.$mediaID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}


}