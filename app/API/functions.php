<?php
use UnitSwitcher\Entities\Unit\Unit;
use UnitSwitcher\Entities\Unit\Dropdown;

/**
* Display the unit switcher
*/
function unit_switcher($variable = '', $unit = '', $alternate = '')
{	
	$dropdown = new Dropdown($unit, $variable);
	$out = '<div class="unit-switcher-switch">';
	$out .= '<a href="#" data-unit-dropdown class="unit-switcher-toggle">' . $variable . ' ' . $unit . '<span class="unit-switcher-caret"></span></a>';
	$out .= $dropdown->display();
	$out .= '</div>';
	echo $out;
}