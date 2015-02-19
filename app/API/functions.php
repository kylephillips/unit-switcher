<?php
use UnitSwitcher\Entities\Unit\Unit;
use UnitSwitcher\Entities\Unit\Dropdown;

/**
* Display the unit switcher
*/
function unit_switcher($variable = '', $primaryunit = '')
{	
	$dropdown = new Dropdown($primaryunit, $variable);
	$out = '<div class="unit-switcher-switch dropdown">';
	$out .= $dropdown->display();
	$out .= '</div>';

	echo $out;
}