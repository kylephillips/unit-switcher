<?php
use UnitSwitcher\Entities\Unit\Unit;
use UnitSwitcher\Entities\Unit\Dropdown;

/**
* Get the unit switcher dropdown
*/
function get_unit_switcher($variable = '', $primaryunit = '')
{	
	$dropdown = new Dropdown($primaryunit, $variable);
	return  ( $dropdown->hasAlternates() ) ? $dropdown->display() : $variable . ' ' . $primaryunit;
}

/**
* Echo the unit switcher dropdown
*/
function the_unit_switcher($variable = '', $primaryunit = '')
{
	echo get_unit_switcher($variable, $primaryunit);
}

/**
* Get a JSON formatted list of units
*/
function unit_switcher_json($variable = '', $primaryunit = '')
{

}

/**
* Convert a given value to a unit
*/
function unit_switcher_convert($variable = '', $primaryunit = '', $alternate = '')
{

}