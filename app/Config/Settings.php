<?php namespace UnitSwitcher\Config;

use UnitSwitcher\Helpers;

/**
* Plugin Settings
*/
class Settings{

	public function __construct()
	{
		add_action( 'admin_menu', array( $this, 'registerSettingsPage' ) );
	}


	/**
	* Register the settings page
	*/
	public function registerSettingsPage()
	{
		add_options_page( 
			__('Unit Switcher Settings', 'unitswitcher'),
			__('Unit Switcher', 'unitswitcher'),
			'manage_options',
			'unit-switcher', 
			array( $this, 'settingsPage' ) 
		);
	}


	/**
	* Display the Settings Page
	* Callback for registerSettingsPage method
	*/
	public function settingsPage()
	{
		$tab = ( isset($_GET['tab']) ) ? $_GET['tab'] : 'general';
		include( Helpers::view('settings/settings') );
	}

}