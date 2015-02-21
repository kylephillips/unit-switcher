<?php
use UnitSwitcher\Entities\Unit\Unit;
use UnitSwitcher\Entities\Unit\Dropdown;
use UnitSwitcher\Entities\Unit\JSON;

/**
* Get the unit switcher dropdown
*/
function get_unit_switcher($variable = '', $primaryunit = '', $round = 2)
{	
	$dropdown = new Dropdown($primaryunit, $variable, $round);
	return  ( $dropdown->hasAlternates() ) ? $dropdown->display() : $variable . ' ' . $primaryunit;
}

/**
* Echo the unit switcher dropdown
*/
function the_unit_switcher($variable = '', $primaryunit = '', $round = 2)
{
	echo get_unit_switcher($variable, $primaryunit, $round);
}

/**
* Convert a given value to a unit
*/
function unit_switcher_convert($variable = '', $primaryunit = '', $alternate = '')
{

}