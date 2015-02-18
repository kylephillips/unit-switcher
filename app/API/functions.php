<?php
use UnitSwitcher\Entities\Unit\Unit;
use UnitSwitcher\Entities\Unit\Dropdown;

/**
* Display the unit switcher
*/
function unit_switcher($variable = '', $unit = '', $alternate = '')
{	
	$dropdown = new Dropdown($unit, $variable);
	$out = '<div class="unit-switcher-switch dropdown">';
	$out .= '<a href="#" data-unit-dropdown data-unit="' . $unit . '" class="unit-switcher-toggle" data-toggle="dropdown"><span class="unit-switcher-value">' . $variable . ' ' . $unit . '</span><span class="unit-switcher-caret"></span></a>';
	$out .= $dropdown->display();
	$out .= '</div>';

	echo $out;
}