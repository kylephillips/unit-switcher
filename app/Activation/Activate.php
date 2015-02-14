<?php namespace UnitSwitcher\Activation;
/**
* Plugin Activation
*/
class Activate {

	public function __construct()
	{
		$this->setOptions();
	}

	/**
	* Default Plugin Options
	*/
	private function setOptions()
	{
		if ( !get_option('unitswitcher_dependencies') ){
			update_option('unitswitcher_dependencies', array(
				'css' => 'true',
				'js' => 'true'
			));
		}
		if ( !get_option('unitswitcher_save') ){
			update_option('unitswitcher_save', 'none');
		}
	}

}