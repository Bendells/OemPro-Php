<?php

namespace KONEK\OemproBundle\Utility;

use KONEK\OemproBundle\Utility\SessionData;

class Segment
{

	/**
	 * create
	 *
	 * Create a new segment under a subscriber list
	 *
	 * @param integer $subscriberListID (required) Subscriber list ID to create segment under 
	 * @param string $segmentName (required) Name of the new segment 
	 * @param and|or $segmentOperator (required) Match all or any rules 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function create($subscriberListID, $segmentName, $segmentOperator)
	{

		$command = "Command=Segment.Create";
		$subscriberListID = "SubscriberListID=".$subscriberListID;
		$segmentName = "SegmentName=".$segmentName;
		$segmentOperator = "SegmentOperator=".$segmentOperator;
		
		$apiPath = $command
						.'&'.$subscriberListID
						.'&'.$segmentName
						.'&'.$segmentOperator
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * update
	 *
	 * Updates Segment.
	 *
	 * @param integer $segmentID (required) Subscriber list ID to create segment under 
	 * @param string $segmentName (required) Name of the new segment 
	 * @param AND|OR $segmentOperator (required) Match all or any rules 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function update($segmentID, $segmentName, $segmentOperator)
	{

		$command = "Command=Segment.Update";
		$segmentID = "SegmentID=".$segmentID;
		$segmentName = "SegmentName=".$segmentName;
		$segmentOperator = "SegmentOperator=".$segmentOperator;
		
		$apiPath = $command
						.'&'.$segmentID
						.'&'.$segmentName
						.'&'.$segmentOperator
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * get
	 *
	 * Retrieves segments of a subscriber list.
	 *
	 * @param string $orderField (required) Field name to order rows 
	 * @param ASC|DESC $orderType (required) Ascending or descending sorting 
	 * @param integer $subscriberListID (required) Subscriber list ID to return segments 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function get($orderField, $orderType, $subscriberListID)
	{

		$command = "Command=Segment.Get";
		$orderField = "OrderField=".$orderField;
		$orderType = "OrderType=".$orderType;
		$subscriberListID = "SubscriberListID=".$subscriberListID;
		
		$apiPath = $command
						.'&'.$orderField
						.'&'.$orderType
						.'&'.$subscriberListID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * deleteAll
	 *
	 * Deletes given segments.
	 *
	 * @param string $segments (required) Comma delimeted Segment ids 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function deleteAll($segments)
	{

		$command = "Command=Segments.Delete";
		$segments = "Segments=".$segments;
		
		$apiPath = $command
						.'&'.$segments
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * copyAll
	 *
	 * Copies segments from a selected subscriber list.
	 *
	 * @param integer $sourceListID (required) Copy segments from subscriber list ID 
	 * @param integer $targetListID (required) Copy segments to subscriber list ID 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function copyAll($sourceListID, $targetListID)
	{

		$command = "Command=Segments.Copy";
		$sourceListID = "SourceListID=".$sourceListID;
		$targetListID = "TargetListID=".$targetListID;
		
		$apiPath = $command
						.'&'.$sourceListID
						.'&'.$targetListID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}


}