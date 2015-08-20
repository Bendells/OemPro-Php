<?php

namespace KONEK\OemproBundle\Utility;

use KONEK\OemproBundle\Utility\SessionData;

class Campaign
{
    
    
    /**
     * 
     */ 
   public function __construct()
    {       
    }
    
    /**
     * 
     * @param string Nom de la campagne
     * @return type
     */
    public function create($name)
    {
        
        $command = "Command=Campaign.Create";
        
        $name = "CampaignName=".$name;
           
        $apiPath = $command.'&'.$name; 
        
        return SessionData::getSession()->getResponse($apiPath);
    }
    
    /**
     * update
     *
     * Update campaign details
     *
     * @param integer $campaignID (required) Campaign ID to update 
     * @param Draft|Ready|Sending|Paused|PendingApproval|Sent|Failed $campaignStatus (required) Set the cmapaign status 
     * @param string $campaignName (required) Name of the campaign 
     * @param integer $relEmailID (required) The email content of campaign (email ID) 
     * @param NotScheduled|Immediate|Future|Recursive $scheduleType (required) Type of the schedule 
     * @param YYYY-MM-DD $sendDate (required) Date to send campaign 
     * @param HH:MM:SS $sendTime (required) Time to send campaign 
     * @param string $sendTimeZone (required) Time zone of the schedule date 
     * @param 0|1|2|3|4|5|6|7 $scheduleRecDaysOfWeek (required) (Recursive scheduling) separate values with comma (,). Enter 0 for every day 
     * @param 0|1|2|3|4|5|...|31 $scheduleRecDaysOfMonth (required) (Recursive scheduling) separate with comma (,). Enter 0 for every day 
     * @param 0|1|2|...|12 $scheduleRecMonths (required) (Recursive scheduling) separate with comma (,). Enter 0 for every month 
     * @param 0|1|2|...|23 $scheduleRecHours (required) (Recursive scheduling) separate with comma (,) 
     * @param 0|1|2|...|59 $scheduleRecMinutes (required) (Recursive scheduling) separate with comma (,) 
     * @param integer $scheduleRecSendMaxInstance (required) (Recursive scheduling) number of times to repeat campaign sending (enter 0 for unlimited) 
     * @param string $approvalUserExplanation (required) User explanation for the campaign if campaign is pending for approval 
     * @param string $googleAnalyticsDomains (required) Domains to track with Google Analytics (seperate domains with line break (\n)) 
     * @param string $recipientListsAndSegments (required) Target subscriber lists and segments. Each segment and list is seperated by comma. Format:     ListID:    SegmentID,ListID:    SegmentID Ex:     3:    0,3:    2 
     * @return Object A parsed json object containing the response parameters 
     */
    public function update($campaignID, $campaignStatus, $campaignName, $relEmailID, $scheduleType, $sendDate, $sendTime, $sendTimeZone, $scheduleRecDaysOfWeek, $scheduleRecDaysOfMonth, $scheduleRecMonths, $scheduleRecHours, $scheduleRecMinutes, $scheduleRecSendMaxInstance, $approvalUserExplanation, $googleAnalyticsDomains, $recipientListsAndSegments) {

        $command = "Command=Campaign.Update";
        $campaignID = "CampaignID=" . $campaignID;
        $campaignStatus = "CampaignStatus=" . $campaignStatus;
        $campaignName = "CampaignName=" . $campaignName;
        $relEmailID = "RelEmailID=" . $relEmailID;
        $scheduleType = "ScheduleType=" . $scheduleType;
        $sendDate = "SendDate=" . $sendDate;
        $sendTime = "SendTime=" . $sendTime;
        $sendTimeZone = "SendTimeZone=" . $sendTimeZone;
        $scheduleRecDaysOfWeek = "ScheduleRecDaysOfWeek=" . $scheduleRecDaysOfWeek;
        $scheduleRecDaysOfMonth = "ScheduleRecDaysOfMonth=" . $scheduleRecDaysOfMonth;
        $scheduleRecMonths = "ScheduleRecMonths=" . $scheduleRecMonths;
        $scheduleRecHours = "ScheduleRecHours=" . $scheduleRecHours;
        $scheduleRecMinutes = "ScheduleRecMinutes=" . $scheduleRecMinutes;
        $scheduleRecSendMaxInstance = "ScheduleRecSendMaxInstance=" . $scheduleRecSendMaxInstance;
        $approvalUserExplanation = "ApprovalUserExplanation=" . $approvalUserExplanation;
        $googleAnalyticsDomains = "GoogleAnalyticsDomains=" . $googleAnalyticsDomains;
        $recipientListsAndSegments = "RecipientListsAndSegments=" . $recipientListsAndSegments;
 
        $apiPath = $command
                . '&' . $campaignID
                . '&' . $campaignStatus
                . '&' . $campaignName
                . '&' . $relEmailID
                . '&' . $scheduleType
                . '&' . $sendDate
                . '&' . $sendTime
                . '&' . $sendTimeZone
                . '&' . $scheduleRecDaysOfWeek
                . '&' . $scheduleRecDaysOfMonth
                . '&' . $scheduleRecMonths
                . '&' . $scheduleRecHours
                . '&' . $scheduleRecMinutes
                . '&' . $scheduleRecSendMaxInstance
                . '&' . $approvalUserExplanation
                . '&' . $googleAnalyticsDomains
                . '&' . $recipientListsAndSegments
        ;

        return SessionData::getSession()->getResponse($apiPath);
    }

    /**
     * getAll
     *
     * Retrieves campaigns of a user.
     *
     * @param string $orderField (required) Name of the field to order based on 
     * @param ASC|DESC $orderType (required) Ascending or descending ordering 
     * @param All|Draft|Ready|Sending|Paused|PendingApproval|Sent|Failed $campaignStatus (required) Status of campaigns to retrieve 
     * @param string $searchKeyowrd (required) Keyword to look for in CampaignName field 
     * @param integer $recordsPerRequest (required) How many rows to return per page 
     * @param integer $recordsFrom (required) Start from (starts from zero) 
     * @param true|false $retrieveTags (v4.0.4+) Set to true if you are going to filter campaign list based on specific filters 
     * @param string $tags (v4.0.4+) Tag ID numbers separated with comma if you are going to filter campaign list based on tags 
     * @return Object A parsed json object containing the response parameters 
     */
    public function getAll($nbRecords = 10, $orderfield = "CampaignID", $ordertype = "ASC", $status = "All", $startpoint = 0, $keyword = ''  ){
        $command = "Command=Campaigns.Get";
        $orderfield = "OrderField=".$orderfield;
        $ordertype = "OrderType=".$ordertype;
        $status = "CampaignStatus=".$status;
        $keyword = "SearchKeyowrd=".$keyword;
        $startpoint = "RecordsFrom=".$startpoint;
        $nbRecords = "RecordsPerRequest=".$nbRecords;
        
        $apiPath = $command.'&'
                .$orderfield.'&'
                .$ordertype.'&'
                .$status.'&'
                .$keyword.'&'
                .$startpoint.'&'
                .$nbRecords
                ; 
        
        return SessionData::getSession()->getResponse($apiPath);
        
        
    }
    
    /**
     * get
     *
     * Retrieve a speicifc campaign of a user.
     *
     * @param integer $campaignID (required) Campaign id 
     * @param true|false $retrieveStatistics (required) If set to true, returns campaign statistics (with detailed information) 
     * @return Object A parsed json object containing the response parameters 
     */
    public function get($campaignID, $retrieveStatistics) {

        $command = "Command=Campaign.Get";
        $campaignID = "CampaignID=" . $campaignID;
        $retrieveStatistics = "RetrieveStatistics=" . $retrieveStatistics;

        $apiPath = $command
                . '&' . $campaignID
                . '&' . $retrieveStatistics
        ;

        return SessionData::getSession()->getResponse($apiPath);
    }

    /**
     * 
     * @param string $ids: les ids, délémité par une virgle si plusieurs
     */
    public function delete($ids){
        
        $command = "Command=Campaigns.Delete";
        $ids = "Campaigns=".$ids;
        
        $apiPath = $command.'&'
                .$ids
                ;
        
        
        return SessionData::getSession()->getResponse($apiPath);
        
    }
    
    /**
     * deleteAll
     *
     * Deletes given campaigns.
     *
     * @param string $campaigns (required) Comma delimeted Campaign ids 
     * @return Object A parsed json object containing the response parameters 
     */
    public function deleteAll($campaigns) {

        $command = "Command=Campaigns.Delete";
        $campaigns = "Campaigns=" . $campaigns;

        $apiPath = $command
                . '&' . $campaigns
        ;

        return SessionData::getSession()->getResponse($apiPath);
    }

    /**
     * archive_GetURLAll
     *
     * Returns the URL for the public archive page of campaigns
     *
     * @param integer $tagID (required) Target tag ID to retrieve campaigns 
     * @param string $templateURL  URL of the public archive page template (optional) 
     * @return Object A parsed json object containing the response parameters 
     */
    public function archive_GetURLAll($tagID, $templateURL) {

        $command = "Command=Campaigns.Archive.GetURL";
        $tagID = "TagID=" . $tagID;
        $templateURL = "TemplateURL=" . $templateURL;

        $apiPath = $command
                . '&' . $tagID
                . '&' . $templateURL
        ;

        return SessionData::getSession()->getResponse($apiPath);
    }

}