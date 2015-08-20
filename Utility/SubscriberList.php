<?php

namespace KONEK\OemproBundle\Utility;

use KONEK\OemproBundle\Utility\SessionData;

class SubscriberList
{
        
    /**
     * 
     */ 
   public function __construct()
    {
            
    }
    
    /**
     * create
     *
     * Creates a new subscriber list
     *
     * @param string $subscriberListName (required) Name of the subscriber list to be created. 
     * @return Object A parsed json object containing the response parameters 
     */
    public function create($subscriberListName) {

        $command = "Command=List.Create";
        $subscriberListName = "SubscriberListName=" . $subscriberListName;

        $apiPath = $command
                . '&' . $subscriberListName
        ;

        return SessionData::getSession()->getResponse($apiPath);
    }

    /**
     * update
     *
     * Updates subscriber list information.
     *
     * @param integer $subscriberListID (required) ID of the subscriber list to be updated. 
     * @param string $name (required) name of the subscriber list. 
     * @param Single|Double $optInMode (required) Opt-in mode of the subscriber list. 
     * @param integer $optInConfirmationEmailID (required) ID number of the email which will be used for sending opt-in confirmation email (required if opt-in mode is set to double) 
     * @param Thislist|Alllists $optOutScope (required) Opt-out scope of the subscriber list. 
     * @param Yes|No $optOutAddToSuppressionList (required) Set 'Yes' to add unsubscribed email address into the suppression list 
     * @param true|false $sendServiceIntegrationFailedNotification (required) If set to true, a notification email will be sent to list owner when a web service integration fails. 
     * @param string $subscriptionConfirmationPendingPageURL (required) URL of the subscription confirmation pending page. This page is showed only in double opt-in lists. 
     * @param string $subscriptionConfirmedPageURL (required) URL of the subscription confirmed page. 
     * @param true|false $hideInSubscriberArea (required) If set to true, subscriber list will not be shown in subscriber area. 
     * @return Object A parsed json object containing the response parameters 
     */
    public function update($subscriberListID, $name, $optInMode, $optInConfirmationEmailID, $optOutScope, $optOutAddToSuppressionList, $sendServiceIntegrationFailedNotification, $subscriptionConfirmationPendingPageURL, $subscriptionConfirmedPageURL, $hideInSubscriberArea) {

        $command = "Command=List.Update";
        $subscriberListID = "SubscriberListID=" . $subscriberListID;
        $name = "Name=" . $name;
        $optInMode = "OptInMode=" . $optInMode;
        $optInConfirmationEmailID = "OptInConfirmationEmailID=" . $optInConfirmationEmailID;
        $optOutScope = "OptOutScope=" . $optOutScope;
        $optOutAddToSuppressionList = "OptOutAddToSuppressionList=" . $optOutAddToSuppressionList;
        $sendServiceIntegrationFailedNotification = "SendServiceIntegrationFailedNotification=" . $sendServiceIntegrationFailedNotification;
        $subscriptionConfirmationPendingPageURL = "SubscriptionConfirmationPendingPageURL=" . $subscriptionConfirmationPendingPageURL;
        $subscriptionConfirmedPageURL = "SubscriptionConfirmedPageURL=" . $subscriptionConfirmedPageURL;
        $hideInSubscriberArea = "HideInSubscriberArea=" . $hideInSubscriberArea;

        $apiPath = $command
                . '&' . $subscriberListID
                . '&' . $name
                . '&' . $optInMode
                . '&' . $optInConfirmationEmailID
                . '&' . $optOutScope
                . '&' . $optOutAddToSuppressionList
                . '&' . $sendServiceIntegrationFailedNotification
                . '&' . $subscriptionConfirmationPendingPageURL
                . '&' . $subscriptionConfirmedPageURL
                . '&' . $hideInSubscriberArea
        ;

        return SessionData::getSession()->getResponse($apiPath);
    }

    /**
     * getAll
     *
     * Retrieves subscriber lists of logged in user.
     *
     * @param fieldnameofsubscriberlist $orderField (required) Order field, default is "ListID" 
     * @param ASC|DESC $orderType (required) Order type, default is "DESC"  
     * @return Object A parsed json object containing the response parameters 
     */
    public function getAll($orderField = "ListID", $orderType = "DESC")
    {
        $command = "Command=Lists.Get";
        $orderField = "OrderField=".$orderField;
        $orderType = "OrderType=".$orderType;
        
        $apiPath = $command.'&'
                .$orderField.'&'
                .$orderType; 
        
        return SessionData::getSession()->getResponse($apiPath);
        
    }
    
    /**
     * delete
     *
     * Deletes given subscriber lists.
     *
     * @param string $ids (required) Comma delimeted subscriber list ids. 
     * @return Object A parsed json object containing the response parameters 
     */
    public function delete($ids){
        
        $command = "Command=Lists.Delete";
        $ids = "Lists=".$ids;
        
        $apiPath = $command.'&'
                .$ids
                ;
        
        return SessionData::getSession()->getResponse($apiPath);
        
    }
    
    /**
     * deleteAll
     *
     * Deletes given subscriber lists.
     * @todo Implement the behaviour without the parameters
     * @param string $lists (required) Comma delimeted subscriber list ids. 
     * @return Object A parsed json object containing the response parameters 
     */
    public function deleteAll($lists) {

        $command = "Command=Lists.Delete";
        $lists = "Lists=" . $lists;

        $apiPath = $command
                . '&' . $lists
        ;

        return SessionData::getSession()->getResponse($apiPath);
    }

}