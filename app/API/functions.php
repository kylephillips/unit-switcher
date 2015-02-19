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
	$out .= $dropdown->display();
	$out .= '</div>';

	echo $out;
}