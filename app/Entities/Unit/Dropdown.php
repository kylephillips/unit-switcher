<?php namespace UnitSwitcher\Entities\Unit;

use UnitSwitcher\Config\SettingsRepository;
use UnitSwitcher\Entities\Unit\Calculator;

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


	public function __construct($unit, $number)
	{
		$this->settings_repo = new SettingsRepository;
		$this->calculator = new Calculator;
		$this->number = $number;
		$this->unit = $unit;
	}

	/**
	* Get calculated alternate
	*/
	private function alternateNumber($alternate)
	{
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
		if ( empty($alternates) ) return;
		$out = '<ul class="dropdown-menu">';
		foreach ( $alternates as $key => $alternate ){
			if ( $key == 0 ) {
				$out .= $this->defaultUnit($alternate); 
				continue;
			}
			$out .= '<li><a href="#" data-alternate="' . $alternate . '" data-parentunit="' . $this->unit . '" data-unitswitcher data-unitvalue="' . $this->alternateNumber($alternate) . '">' . $alternate . '</a></li>';
		}
		$out .= '</ul>';
		return $out;
	}

	/**
	* Displayed Unit
	* @param string $alternate
	*/
	private function defaultUnit($alternate)
	{
		$out = '<li><a href="#" data-alternate="' . $alternate . '" data-parentunit="' . $this->unit . '" data-unitswitcher data-unitvalue="' . $this->number . '">' . $alternate . '</a></li>';
		return $out;
	}

}