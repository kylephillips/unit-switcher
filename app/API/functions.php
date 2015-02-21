<?php
use UnitSwitcher\Entities\Unit\Unit;
use UnitSwitcher\Entities\Unit\Dropdown;

/**
* Display the unit switcher
*/
function unit_switcher($variable = '', $primaryunit = '')
{	
	$dropdown = new Dropdown($primaryunit, $variable);
	echo  ( $dropdown->hasAlternates() ) ? $dropdown->display() : $variable . ' ' . $primaryunit;
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