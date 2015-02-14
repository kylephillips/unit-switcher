<?php namespace UnitSwitcher;
/**
* Plugin Bootstrap
*/
class Bootstrap {

	public function __construct()
	{
		$this->init();
		add_filter( 'plugin_action_links_' . 'unit-switcher/unit-switcher.php', array($this, 'settingsLink' ) );
		add_action( 'plugins_loaded', array($this, 'addLocalization') );
	}

	/**
	* Initialize
	*/
	public function init()
	{
		new Config\Settings;
	}


	/**
	* Add a link to the settings on the plugin page
	*/
	public function settingsLink($links)
	{ 
		$settings_link = '<a href="options-general.php?page=unit-switcher">' . __('Settings','unitswitcher') . '</a>'; 
		$help_link = '<a href="http://unitswitcher.com">' . __('FAQ','unitswitcher') . '</a>'; 
		array_unshift($links, $help_link); 
		array_unshift($links, $settings_link);
		return $links; 
	}


	/**
	* Localization Domain
	*/
	public function addLocalization()
	{
		load_plugin_textdomain(
			'unitswitcher', 
			false, 
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages' );
	}



}