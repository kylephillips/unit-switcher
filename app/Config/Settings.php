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
		add_filter( 'pre_update_option_unitswitcher_units', array($this, 'validateUnits'), 10, 2 );
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
		register_setting( 'unit-switcher-general', 'unitswitcher_save' );
		register_setting( 'unit-switcher-units', 'unitswitcher_units' );
	}

	/**
	* Validate Units
	*/
	public function validateUnits($new_value, $old_value)
	{
		// add_settings_error( 'unit-switcher-units', 'unit-switcher', 'please include all fields', 'error' );
		// return $new_value;
		return $new_value;
	}

}