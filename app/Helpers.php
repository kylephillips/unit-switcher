<?php namespace UnitSwitcher;
/**
* Static Helper Methods
*/
class Helpers {

	/**
	* Verify URL Format
	* @param string - URL to check
	* @return string - formatted URL
	*/
	public static function check_url($url)
	{
		return esc_url($url);
	}

	/**
	* Plugin Root Directory
	*/
	public static function plugin_url()
	{
		return plugins_url() . '/unit-switcher';
	}

	/**
	* Views
	*/
	public static function view($file)
	{
		return dirname(__FILE__) . '/Views/' . $file . '.php';
	}

}