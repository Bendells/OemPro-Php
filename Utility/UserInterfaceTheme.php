<?php

namespace KONEK\OemproBundle\Utility;

use KONEK\OemproBundle\Utility\SessionData;

class UserInterfaceTheme
{

	/**
	 * create
	 *
	 * Creates a new theme
	 *
	 * @param string $template (required) Template code 
	 * @param string $themeName (required) Name of the new theme 
	 * @param string $productName (required) Branding the product, name of the product 
	 * @param string $themeSettings (required) CSS theme settings. 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function create($template, $themeName, $productName, $themeSettings)
	{

		$command = "Command=Theme.Create";
		$template = "Template=".$template;
		$themeName = "ThemeName=".$themeName;
		$productName = "ProductName=".$productName;
		$themeSettings = "ThemeSettings=".$themeSettings;
		
		$apiPath = $command
						.'&'.$template
						.'&'.$themeName
						.'&'.$productName
						.'&'.$themeSettings
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * get
	 *
	 * Gets the details of a theme
	 *
	 * @param integer $themeID (required) Theme ID to get 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function get($themeID)
	{

		$command = "Command=Theme.Get";
		$themeID = "ThemeID=".$themeID;
		
		$apiPath = $command
						.'&'.$themeID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * update
	 *
	 * Updates a theme
	 *
	 * @param integer $themeID (required) Theme ID to get 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function update($themeID)
	{

		$command = "Command=Theme.Update";
		$themeID = "ThemeID=".$themeID;
		
		$apiPath = $command
						.'&'.$themeID
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * delete
	 *
	 * Deletes a theme
	 *
	 * @param string $themes (required) ID numbers of themes separated by comma 
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function delete($themes)
	{

		$command = "Command=Theme.Delete";
		$themes = "Themes=".$themes;
		
		$apiPath = $command
						.'&'.$themes
		;

		return SessionData::getSession()->getResponse($apiPath);

	}

	/**
	 * getAll
	 *
	 * Returns the list of themes
	 *
	 * @return Object A parsed json object containing the response parameters 
	 */
	public function getAll()
	{

		$command = "Command=Themes.Get";
		
		$apiPath = $command
		;

		return SessionData::getSession()->getResponse($apiPath);

	}


}