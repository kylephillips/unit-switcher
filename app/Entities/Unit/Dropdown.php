<?php namespace UnitSwitcher\Entities\Unit;

use UnitSwitcher\Config\SettingsRepository;
use UnitSwitcher\Entities\Unit\Calculator;
use UnitSwitcher\Entities\User\UserPreference;

/**
* Builds a dropdown of available alternates for a given unit
*/
class Dropdown {

	/**
	* The Unit
	*/
	private $unit;

	/**
	* The default number
	*/
	private $number;

	/**
	* Calculator
	*/
	private $calculator;

	/**
	* Settings Repository
	*/
	private $settings_repo;

	/**
	* User Preference
	*/
	private $user_preference;


	public function __construct($unit, $number)
	{
		$this->settings_repo = new SettingsRepository;
		$this->calculator = new Calculator;
		$this->user_preference = new UserPreference;
		$this->number = $number;
		$this->unit = $unit;
	}

	/**
	* Get calculated alternate
	*/
	private function alternateNumber($alternate)
	{
		if ( $alternate == $this->unit ) return $this->number;
		return round($this->calculator->calculate($alternate, $this->number), 4);
	}

	/**
	* Display the Menu
	* @return html
	* @todo make first item the users saved preference
	*/
	public function display()
	{
		$alternates = $this->settings_repo->getAlternates($this->unit);
		$out = $this->selectedUnit($alternates);
		if ( empty($alternates) ) return;
		$out .= '<ul class="dropdown-menu">';
		foreach ( $alternates as $key => $alternate ){
			if ( $key == 0 ) {
				$out .= $this->defaultUnit(); 
				continue;
			}
			$out .= '<li><a href="#" data-alternate="' . $alternate . '" data-parentunit="' . $this->unit . '" data-unitswitcher data-unitvalue="' . $this->alternateNumber($alternate) . '">' . $alternate . '</a></li>';
		}
		$out .= '</ul>';
		return $out;
	}

	/**
	* Selected Unit
	*/
	private function selectedUnit($alternates)
	{
		$preference = $this->user_preference->get($this->unit);
		
		if ( !$preference ) return '<a href="#" data-unit-dropdown data-unit="' . $this->unit . '" class="unit-switcher-toggle" data-toggle="dropdown"><span class="unit-switcher-value">' . $this->number . ' ' . $this->unit . '</span><span class="unit-switcher-caret"></span></a>';
		
		foreach ( $alternates as $alternate ){
			if ( $alternate !== $preference ) continue;
			return '<a href="#" data-unit-dropdown data-unit="' . $this->unit . '" class="unit-switcher-toggle" data-toggle="dropdown"><span class="unit-switcher-value">' . $this->alternateNumber($alternate) . ' ' . $alternate . '</span><span class="unit-switcher-caret"></span></a>';
		}
	}

	/**
	* Displayed Unit
	* @param string $alternate
	*/
	private function defaultUnit()
	{
		$out = '<li><a href="#" data-alternate="' . $this->unit . '" data-parentunit="' . $this->unit . '" data-unitswitcher data-unitvalue="' . $this->number . '">' . $this->unit . '</a></li>';
		return $out;
	}

}