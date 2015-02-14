<?php namespace UnitSwitcher\Config;

class SettingsRepository {

	/**
	* Output Dependency
	* @return array
	* @since 0.1
	*/
	public function outputDependency($dependency = 'css')
	{
		$option = get_option('unitswitcher_dependencies');
		return ( isset($option[$dependency]) && $option[$dependency] == 'true' ) ? true : false;
	}

}