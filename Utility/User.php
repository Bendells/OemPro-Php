<?php

namespace KONEK\OemproBundle\Utility;

use KONEK\OemproBundle\Utility\SessionData;

class User
{
    /**
     *
     * @var Session la session en cours 
     * 
     */
    private $_session;
    
    /**
     *
     * @var Session la session en cours 
     * 
     */
    private $_username;
    
    /**
     *
     * @var Session la session en cours 
     * 
     */
    private $_password;
    
    /**
     * 
     * @param String $username 
     * @param String $password
     * 
     */ 
   public function __construct($username, $password)
    {
       $this->_session = SessionData::getSession();
       $this->_username = $username;
       $this->_password = $password;
    }
    
    
    /**
     * addCredits
     *
     * Updates the user email credits
     *
     * @param integer $userID (required) Target user ID to update 
     * @param integer $credits (required) Number of credits you wish to add to user account 
     * @return Object A parsed json object containing the response parameters 
     */
    public function addCredits($userID, $credits)
    {

            $command = "Command=User.AddCredits";
            $userID = "UserID=".$userID;
            $credits = "Credits=".$credits;

            $apiPath = $command
                                            .'&'.$userID
                                            .'&'.$credits
            ;

            return SessionData::getSession()->getResponse($apiPath);

    }
    
    /**
     * get
     *
     * Returns the user information
     *
     * @param integer $userID (required) ID number of the target user account (or email address) 
     * @param string $emailAddress (required) Email address of the target user account (or user ID) 
     * @return Object A parsed json object containing the response parameters 
     */
    public function get($userID, $emailAddress) {

        $command = "Command=User.Get";
        $userID = "UserID=" . $userID;
        $emailAddress = "EmailAddress=" . $emailAddress;

        $apiPath = $command
                . '&' . $userID
                . '&' . $emailAddress
        ;

        return SessionData::getSession()->getResponse($apiPath);
    }

    /**
     * update
     *
     * Update the user information
     *
     * @param integer $userID (required) Target user ID to update 
     * @param integer $relUserGroupID (required) ID number of the user group which is assigned to the user 
     * @param string $emailAddress (required) Email address of the user 
     * @param string $username (required) Username of the user 
     * @param string $password (required) Password of the user 
     * @param Trusted|Untrusted $reputationLevel (required) Reputation level of the user 
     * @param YYYY-MM-DDHH:MM:SS $userSince (required) Sign-up date of the user 
     * @param string $firstName (required) First name of the user 
     * @param string $lastName (required) Last name of the user 
     * @param string $companyname (required) Company name of the user 
     * @param string $website (required) Website of the user 
     * @param string $street (required) Street of the user 
     * @param string $city (required) City of the user 
     * @param string $state (required) State of the user 
     * @param string $zip (required) Zip of the user 
     * @param string $country (required) Country of the user 
     * @param string $phone (required) Phone of the user 
     * @param string $fax (required) Fax of the user 
     * @param string $timeZone (required) TimeZone of the user 
     * @param string $signUpIPAddress (required) IP address of the user during sign-up process 
     * @param string $aPIKey (required) API key of the user 
     * @param string $language (required) Language of the user 
     * @param YYYY-MM-DDHH:MM:SS $lastActivityDateTime (required) Last activity time of the user 
     * @param string $previewMyEmailAccount (required) If user is subscribed to PreviewMyEmail.com service, subdomain of the account 
     * @param string $previewMyEmailAPIKey (required) If user is subscribed to PreviewMyEmail.com service, API key of the account 
     * @param Enabled|Disabled $accountStatus  Set to "Disabled" if you wish to disable user account, else set it to "Enabled" 
     * @param Integer $availableCredits (>=v4.1.0) Set the available credits for the user 
     * @return Object A parsed json object containing the response parameters 
     */
    public function update($userID, $relUserGroupID, $emailAddress, $username, $password, $reputationLevel, $userSince, $firstName, $lastName, $companyname, $website, $street, $city, $state, $zip, $country, $phone, $fax, $timeZone, $signUpIPAddress, $aPIKey, $language, $lastActivityDateTime, $previewMyEmailAccount, $previewMyEmailAPIKey, $accountStatus, $availableCredits) {

        $command = "Command=User.Update";
        $userID = "UserID=" . $userID;
        $relUserGroupID = "RelUserGroupID=" . $relUserGroupID;
        $emailAddress = "EmailAddress=" . $emailAddress;
        $username = "Username=" . $username;
        $password = "Password=" . $password;
        $reputationLevel = "ReputationLevel=" . $reputationLevel;
        $userSince = "UserSince=" . $userSince;
        $firstName = "FirstName=" . $firstName;
        $lastName = "LastName=" . $lastName;
        $companyname = "Companyname=" . $companyname;
        $website = "Website=" . $website;
        $street = "Street=" . $street;
        $city = "City=" . $city;
        $state = "State=" . $state;
        $zip = "Zip=" . $zip;
        $country = "Country=" . $country;
        $phone = "Phone=" . $phone;
        $fax = "Fax=" . $fax;
        $timeZone = "TimeZone=" . $timeZone;
        $signUpIPAddress = "SignUpIPAddress=" . $signUpIPAddress;
        $aPIKey = "APIKey=" . $aPIKey;
        $language = "Language=" . $language;
        $lastActivityDateTime = "LastActivityDateTime=" . $lastActivityDateTime;
        $previewMyEmailAccount = "PreviewMyEmailAccount=" . $previewMyEmailAccount;
        $previewMyEmailAPIKey = "PreviewMyEmailAPIKey=" . $previewMyEmailAPIKey;
        $accountStatus = "AccountStatus=" . $accountStatus;
        $availableCredits = "AvailableCredits=" . $availableCredits;

        $apiPath = $command
                . '&' . $userID
                . '&' . $relUserGroupID
                . '&' . $emailAddress
                . '&' . $username
                . '&' . $password
                . '&' . $reputationLevel
                . '&' . $userSince
                . '&' . $firstName
                . '&' . $lastName
                . '&' . $companyname
                . '&' . $website
                . '&' . $street
                . '&' . $city
                . '&' . $state
                . '&' . $zip
                . '&' . $country
                . '&' . $phone
                . '&' . $fax
                . '&' . $timeZone
                . '&' . $signUpIPAddress
                . '&' . $aPIKey
                . '&' . $language
                . '&' . $lastActivityDateTime
                . '&' . $previewMyEmailAccount
                . '&' . $previewMyEmailAPIKey
                . '&' . $accountStatus
                . '&' . $availableCredits
        ;

        return SessionData::getSession()->getResponse($apiPath);
    }
    
    /**
     * 
     * @uses it uses the usernamne and password passed on the contructor
     * 
     */
    public function login() {
        // Préparation des arguments
        $command = "Command=User.Login";
        $username = "Username=" . $this->_username;
        $password = "Password=" . $this->_password;
        $this->_session->setLogged();

        $apiPath = $command . '&' . $username . '&' . $password;

        $response = $this->_session->getResponse($apiPath);
        SessionData::getSession()->setSsId($response->SessionID);
        return $response;
    }

    /**
     * create
     *
     * Creates new user account.
     *
     * @param integer $relUserGroupID (required) ID number of the user group which is assigned to the user 
     * @param string $emailAddress (required) Email address of the new user 
     * @param string $username (required) Username of the user account 
     * @param string $password (required) Password of the user account 
     * @param string $firstName (required) First name of the user account 
     * @param string $lastName (required) Last name of the user account 
     * @param string $timeZone (required) Time zone of the user location 
     * @param string $language (required) Language code (Ex:     en) 
     * @param Trusted|Untrusted $reputationLevel (required) Reputation level of the user (currently disabled) 
     * @param string $companyName (required) Company name of the user 
     * @param string $website (required) Website URL 
     * @param string $street (required) Street of the user address 
     * @param string $city (required) City of the user address 
     * @param string $state (required) State of the user address 
     * @param string $zip (required) Zip of the user address 
     * @param string $country (required) Country of the user address 
     * @param string $phone (required) Phone of the user address 
     * @param string $fax (required) Fax of the user address 
     * @param string $previewMyEmailAccount (required) If user has a PreviewMyEmail.com account with API enabled, subdomain of the previewmyemail.com account 
     * @param string $previewMyEmailAPIKey (required) If user has a PreviewMyEmail.com account with API enabled, API key of the account 
     * @param Integer $availableCredits (>=v4.1.0) Set the available credits for the user 
     * @return Object A parsed json object containing the response parameters 
     */
    public function create($relUserGroupID, $emailAddress, $username, $password, $firstName, $lastName, $timeZone, $language, $reputationLevel, $companyName, $website, $street, $city, $state, $zip, $country, $phone, $fax, $previewMyEmailAccount, $previewMyEmailAPIKey, $availableCredits) {

        $command = "Command=User.Create";
        $relUserGroupID = "RelUserGroupID=" . $relUserGroupID;
        $emailAddress = "EmailAddress=" . $emailAddress;
        $username = "Username=" . $username;
        $password = "Password=" . $password;
        $firstName = "FirstName=" . $firstName;
        $lastName = "LastName=" . $lastName;
        $timeZone = "TimeZone=" . $timeZone;
        $language = "Language=" . $language;
        $reputationLevel = "ReputationLevel=" . $reputationLevel;
        $companyName = "CompanyName=" . $companyName;
        $website = "Website=" . $website;
        $street = "Street=" . $street;
        $city = "City=" . $city;
        $state = "State=" . $state;
        $zip = "Zip=" . $zip;
        $country = "Country=" . $country;
        $phone = "Phone=" . $phone;
        $fax = "Fax=" . $fax;
        $previewMyEmailAccount = "PreviewMyEmailAccount=" . $previewMyEmailAccount;
        $previewMyEmailAPIKey = "PreviewMyEmailAPIKey=" . $previewMyEmailAPIKey;
        $availableCredits = "AvailableCredits=" . $availableCredits;

        $apiPath = $command
                . '&' . $relUserGroupID
                . '&' . $emailAddress
                . '&' . $username
                . '&' . $password
                . '&' . $firstName
                . '&' . $lastName
                . '&' . $timeZone
                . '&' . $language
                . '&' . $reputationLevel
                . '&' . $companyName
                . '&' . $website
                . '&' . $street
                . '&' . $city
                . '&' . $state
                . '&' . $zip
                . '&' . $country
                . '&' . $phone
                . '&' . $fax
                . '&' . $previewMyEmailAccount
                . '&' . $previewMyEmailAPIKey
                . '&' . $availableCredits
        ;

        return SessionData::getSession()->getResponse($apiPath);
    }
    
    /**
     * passwordRemind
     *
     * Sends the password reset email.
     *
     * @param string $emailAddress (required) Email address of the user to be reminded 
     * @return Object A parsed json object containing the response parameters 
     */
    public function passwordRemind($emailAddress) {

        $command = "Command=User.PasswordRemind";
        $emailAddress = "EmailAddress=" . $emailAddress;

        $apiPath = $command
                . '&' . $emailAddress
        ;

        return SessionData::getSession()->getResponse($apiPath);
    }    
    
    
    /**
     * passwordReset
     *
     * Resets user's password and sends the new password with email.
     *
     * @param integer $userID (required) ID of the user whose password will be reset (encrypted with md5) 
     * @return Object A parsed json object containing the response parameters 
     */
    public function passwordReset($userID) {

        $command = "Command=User.PasswordReset";
        $userID = "UserID=" . $userID;

        $apiPath = $command
                . '&' . $userID
        ;

        return SessionData::getSession()->getResponse($apiPath);
    }
    
    /**
     * switch
     *
     * Switches to the requested user and administrator will be able to login to that user with full or default privileges
     *
     * @param integer $userID (required) User to switch 
     * @param Default|Full $privilegeType (required) How to navigate in user area 
     * @return Object A parsed json object containing the response parameters 
     */
    public function switchUser($userID, $privilegeType) {

        $command = "Command=User.Switch";
        $userID = "UserID=" . $userID;
        $privilegeType = "PrivilegeType=" . $privilegeType;

        $apiPath = $command
                . '&' . $userID
                . '&' . $privilegeType
        ;

        return SessionData::getSession()->getResponse($apiPath);
    }
    
    /**
     * paymentPeriods
     *
     * Returns the list of payments periods for a user (includes totals)
     *
     * @param integer $userID (required) User to switch 
     * @param NA|Unpaid|Waiting|Paid|Waived $paymentStatus (required) Enter one of the options to filter the list 
     * @param Yes|No $returnFormatted (required) Returns numbers formatted or not 
     * @return Object A parsed json object containing the response parameters 
     */
    public function paymentPeriods($userID, $paymentStatus, $returnFormatted) {

        $command = "Command=User.PaymentPeriods";
        $userID = "UserID=" . $userID;
        $paymentStatus = "PaymentStatus=" . $paymentStatus;
        $returnFormatted = "ReturnFormatted=" . $returnFormatted;

        $apiPath = $command
                . '&' . $userID
                . '&' . $paymentStatus
                . '&' . $returnFormatted
        ;

        return SessionData::getSession()->getResponse($apiPath);
    }
    
    /**
     * paymentPeriods_UpdateAll
     *
     * Updates the payments period of a user
     *
     * @param integer $userID (required) User to switch 
     * @param integer $logID (required) Payment period to update 
     * @param double $discount (required) Discount amount 
     * @param Include|Exclude $includeTax (required) To apply discount or not 
     * @param NA|Unpaid|Waiting|Paid|Waived $paymentStatus (required) Payment status of the period 
     * @param Yes|No $returnFormatted (required) Returns numbers formatted or not 
     * @param Yes|No $sendReceipt (required) Sends receipt email to the user if set to 'Yes' 
     * @return Object A parsed json object containing the response parameters 
     */
    public function paymentPeriods_UpdateAll($userID, $logID, $discount, $includeTax, $paymentStatus, $returnFormatted, $sendReceipt) {

        $command = "Command=User.PaymentPeriods.Update";
        $userID = "UserID=" . $userID;
        $logID = "LogID=" . $logID;
        $discount = "Discount=" . $discount;
        $includeTax = "IncludeTax=" . $includeTax;
        $paymentStatus = "PaymentStatus=" . $paymentStatus;
        $returnFormatted = "ReturnFormatted=" . $returnFormatted;
        $sendReceipt = "SendReceipt=" . $sendReceipt;

        $apiPath = $command
                . '&' . $userID
                . '&' . $logID
                . '&' . $discount
                . '&' . $includeTax
                . '&' . $paymentStatus
                . '&' . $returnFormatted
                . '&' . $sendReceipt
        ;

        return SessionData::getSession()->getResponse($apiPath);
    }
    
    /**
     * deleteAll
     *
     * Deletes given users.
     *
     * @param string $users (required) Comma delimeted User ids 
     * @return Object A parsed json object containing the response parameters 
     */
    public function deleteAll($users) {

        $command = "Command=Users.Delete";
        $users = "Users=" . $users;

        $apiPath = $command
                . '&' . $users
        ;

        return SessionData::getSession()->getResponse($apiPath);
    }
    
    /**
     * getAll
     *
     * Retrieves users
     *
     * @param string $orderField (required) Name of the field to order based on. For multiple ordering, separate fields with pipe '|' 
     * @param ASC|DESC $orderType (required) Ascending or descending ordering. For multiple ordering, separate fields with pipe '|' 
     * @param mixed(required)</dt><dd>UsergroupIDofusers(integer)oraccountstatus("Enabled","Disabled")oronlinestatus('Online')</dd><dt>RecordsPerRequest={integer $relUserGroupID (required) How many rows to return per page 
     * @param integer $recordsFrom (required) Start from (starts from zero) 
     * @param string $searchField  Name of the field 
     * @param string $searchKeyword  Keyword for searching 
     * @return Object A parsed json object containing the response parameters 
     */
    public function getAll($orderField, $orderType, $relUserGroupID, $recordsFrom, $searchField, $searchKeyword) {

        $command = "Command=Users.Get";
        $orderField = "OrderField=" . $orderField;
        $orderType = "OrderType=" . $orderType;
        $relUserGroupID = "RelUserGroupID=" . $relUserGroupID;
        $recordsFrom = "RecordsFrom=" . $recordsFrom;
        $searchField = "SearchField=" . $searchField;
        $searchKeyword = "SearchKeyword=" . $searchKeyword;

        $apiPath = $command
                . '&' . $orderField
                . '&' . $orderType
                . '&' . $relUserGroupID
                . '&' . $recordsFrom
                . '&' . $searchField
                . '&' . $searchKeyword
        ;

        return SessionData::getSession()->getResponse($apiPath);
    }    
    
    
}

