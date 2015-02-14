<?php namespace UnitSwitcher\Config;

use UnitSwitcher\Helpers;
use UnitSwitcher\Config\SettingsRepository;

/**
* Plugin Settings
*/
class Settings {

	/**
	* Settings Repository
	*/
	private $settings_repo;

	public function __construct()
	{
		$this->settings_repo = new SettingsRepository;
		add_action( 'admin_init', array( $this, 'registerSettings' ) );
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


	/**
	* Register the settings
	*/
	public function registerSettings()
	{
		register_setting( 'unit-switcher-general', 'unitswitcher_dependencies' );
	}

}