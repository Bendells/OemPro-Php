<?php

namespace KONEK\OemproBundle\Utility;

use KONEK\OemproBundle\Utility\SessionData;

class Tag
{

	/**
	 * create
	 *
	 * Create a tag to be used in campaign filtering
	 *
	 * @param string $tag (required) Name of the tag which is going to be created 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function create($tag)
	{

		$command = "Command=Tag.Create";
		$tag = "Tag=".$tag;
		
		$apiPath = $command
						.'&'.$tag
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * getAll
	 *
	 * Returns the list of tags in the user account
	 *
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function getAll()
	{

		$command = "Command=Tags.Get";
		
		$apiPath = $command
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * update
	 *
	 * Update an existing tag
	 *
	 * @param integer $tagID (required) ID number of the target tag 
	 * @param string $tag (required) New name of the tag 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function update($tagID, $tag)
	{

		$command = "Command=Tag.Update";
		$tagID = "TagID=".$tagID;
		$tag = "Tag=".$tag;
		
		$apiPath = $command
						.'&'.$tagID
						.'&'.$tag
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * deleteAll
	 *
	 * Delete tags
	 *
	 * @param string $tags (required) Tag ID numbers separated with comma 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function deleteAll($tags)
	{

		$command = "Command=Tags.Delete";
		$tags = "Tags=".$tags;
		
		$apiPath = $command
						.'&'.$tags
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * assignToCampaigns
	 *
	 * Assigns tag to target campaigns
	 *
	 * @param integer $tagID (required) ID number of the tag which is going to be assigned 
	 * @param string $campaignIDs (required) ID number of campaigns for the tag assignment 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function assignToCampaigns($tagID, $campaignIDs)
	{

		$command = "Command=Tag.AssignToCampaigns";
		$tagID = "TagID=".$tagID;
		$campaignIDs = "CampaignIDs=".$campaignIDs;
		
		$apiPath = $command
						.'&'.$tagID
						.'&'.$campaignIDs
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * unassignFromCampaigns
	 *
	 * Unassign tag from campaigns
	 *
	 * @param integer $tagID (required) ID number of the tag which is going to be unassigned from campaigns 
	 * @param string $campaignIDs (required) ID number of campaigns for the tag removal 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function unassignFromCampaigns($tagID, $campaignIDs)
	{

		$command = "Command=Tag.UnassignFromCampaigns";
		$tagID = "TagID=".$tagID;
		$campaignIDs = "CampaignIDs=".$campaignIDs;
		
		$apiPath = $command
						.'&'.$tagID
						.'&'.$campaignIDs
		;

		return SessionData::getSession()->getResponse($apiPath);

	}


}