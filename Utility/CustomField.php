<?php

namespace KONEK\OemproBundle\Utility;

use KONEK\OemproBundle\Utility\SessionData;

class CustomField
{

	/**
	 * create
	 *
	 * Creates a new custom field for given subscriber list.
	 *
	 * @param integer $subscriberListID (required) ID of subscriber list 
	 * @param Gender|Age|Employment|Income|Education|Daysoftheweek|Monthsoftheyear|U.S.states|Continents|Satisfaction|Importance|Agreement|Comparison $presetName  You can create a new custom field by selecting a preset. This way all options of the preset will be created by backend. 
	 * @param string $fieldName (required) Name of new custom field 
	 * @param Singleline|Paragraphtext|Multiplechoice|Dropdown|Checkboxes|Hiddenfield $fieldType (required) Type of new custom field 
	 * @param string $fieldDefaultValue (required) Default value of new custom field 
	 * @param string $optionLabel (required) label of nth option 
	 * @param string $optionValue (required) value of nth option 
	 * @param array $optionSelected (required) array of selected option ids (Option ids are n) 
	 * @param Disabled|Numbers|Letters|Numbersandletters|Emailaddress|URL|Date|Time|Custom $validationMethod (required) Validation method of custom field 
	 * @param string $validationRule (required) Validation rule of custom field 
	 * @param Public|UserOnly $visibility  Whether to show custom field in subscriber area or not 
	 * @param Yes|No $isRequired  Whether to make the custom field mandatory to fill in or not 
	 * @param Yes|No $isUnique  Whether to force custom field entry to be unique or not 
	 * @param Yes|No $isGlobal  If this parameter is set to 'Yes', custom field will be valid for all lists in the user account 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function create($subscriberListID, $presetName, $fieldName, $fieldType, $fieldDefaultValue, $optionLabel, $optionValue, $optionSelected, $validationMethod, $validationRule, $visibility, $isRequired, $isUnique, $isGlobal)
	{

		$command = "Command=CustomField.Create";
		$subscriberListID = "SubscriberListID=".$subscriberListID;
		$presetName = "PresetName=".$presetName;
		$fieldName = "FieldName=".$fieldName;
		$fieldType = "FieldType=".$fieldType;
		$fieldDefaultValue = "FieldDefaultValue=".$fieldDefaultValue;
		$optionLabel = "OptionLabel[n]=".$optionLabel;
		$optionValue = "OptionValue[n]=".$optionValue;
		$optionSelected = "OptionSelected=".$optionSelected;
		$validationMethod = "ValidationMethod=".$validationMethod;
		$validationRule = "ValidationRule=".$validationRule;
		$visibility = "Visibility=".$visibility;
		$isRequired = "IsRequired=".$isRequired;
		$isUnique = "IsUnique=".$isUnique;
		$isGlobal = "IsGlobal=".$isGlobal;
		
		$apiPath = $command
						.'&'.$subscriberListID
						.'&'.$presetName
						.'&'.$fieldName
						.'&'.$fieldType
						.'&'.$fieldDefaultValue
						.'&'.$optionLabel
						.'&'.$optionValue
						.'&'.$optionSelected
						.'&'.$validationMethod
						.'&'.$validationRule
						.'&'.$visibility
						.'&'.$isRequired
						.'&'.$isUnique
						.'&'.$isGlobal
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * update
	 *
	 * Updates custom field information.
	 *
	 * @param integer $customFieldID (required) ID of custom field to be updated 
	 * @param string $fieldName (required) Name of new custom field 
	 * @param Singleline|Paragraphtext|Multiplechoice|Dropdown|Checkboxes|Hiddenfield $fieldType (required) Type of new custom field 
	 * @param string $fieldDefaultValue (required) Default value of new custom field 
	 * @param string $optionLabel (required) label of nth option 
	 * @param string $optionValue (required) value of nth option 
	 * @param array $optionSelected (required) array of selected option ids (Option ids are n) 
	 * @param Disabled|Numbers|Letters|Numbersandletters|Emailaddress|URL|Date|Time|Custom $validationMethod (required) Validation method of custom field 
	 * @param string $validationRule (required) Validation rule of custom field 
	 * @param Public|UserOnly $visibility  Whether to show custom field in subscriber area or not 
	 * @param Yes|No $isRequired  Whether to make the custom field mandatory to fill in or not 
	 * @param Yes|No $isUnique  Whether to force custom field entry to be unique or not 
	 * @param Yes|No $isGlobal  If this parameter is set to 'Yes', custom field will be valid for all lists in the user account 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function update($customFieldID, $fieldName, $fieldType, $fieldDefaultValue, $optionLabel, $optionValue, $optionSelected, $validationMethod, $validationRule, $visibility, $isRequired, $isUnique, $isGlobal)
	{

		$command = "Command=CustomField.Update";
		$customFieldID = "CustomFieldID=".$customFieldID;
		$fieldName = "FieldName=".$fieldName;
		$fieldType = "FieldType=".$fieldType;
		$fieldDefaultValue = "FieldDefaultValue=".$fieldDefaultValue;
		$optionLabel = "OptionLabel[n]=".$optionLabel;
		$optionValue = "OptionValue[n]=".$optionValue;
		$optionSelected = "OptionSelected=".$optionSelected;
		$validationMethod = "ValidationMethod=".$validationMethod;
		$validationRule = "ValidationRule=".$validationRule;
		$visibility = "Visibility=".$visibility;
		$isRequired = "IsRequired=".$isRequired;
		$isUnique = "IsUnique=".$isUnique;
		$isGlobal = "IsGlobal=".$isGlobal;
		
		$apiPath = $command
						.'&'.$customFieldID
						.'&'.$fieldName
						.'&'.$fieldType
						.'&'.$fieldDefaultValue
						.'&'.$optionLabel
						.'&'.$optionValue
						.'&'.$optionSelected
						.'&'.$validationMethod
						.'&'.$validationRule
						.'&'.$visibility
						.'&'.$isRequired
						.'&'.$isUnique
						.'&'.$isGlobal
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * copyAll
	 *
	 * Copies custom fields of a subscriber list to another subscriber list.
	 *
	 * @param integer $sourceListID (required) ID of source subscriber list 
	 * @param integer $targetListID (required) ID of target subscriber list 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function copyAll($sourceListID, $targetListID)
	{

		$command = "Command=CustomFields.Copy";
		$sourceListID = "SourceListID=".$sourceListID;
		$targetListID = "TargetListID=".$targetListID;
		
		$apiPath = $command
						.'&'.$sourceListID
						.'&'.$targetListID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * getAll
	 *
	 * Retrieves custom fields of given subscriber list.
	 *
	 * @param fieldnameofcustomfield $orderField (required) Order field 
	 * @param ASC|DESC $orderType (required) Order type 
	 * @param integer $subscriberListID (required) Subscriber list id 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function getAll($orderField, $orderType, $subscriberListID)
	{

		$command = "Command=CustomFields.Get";
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
	 * Deletes given custom fields.
	 *
	 * @param string $customFields (required) Comma delimeted custom field ids. 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function deleteAll($customFields)
	{

		$command = "Command=CustomFields.Delete";
		$customFields = "CustomFields=".$customFields;
		
		$apiPath = $command
						.'&'.$customFields
		;

		return SessionData::getSession()->getResponse($apiPath);

	}


}