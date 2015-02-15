<?php
/**
* Public Functions
*/
function unit_switcher($variable = '', $unit = '')
{
	$out = '<div class="unit-switcher-switch">';
	$out .= '<a href="#" data-unit-dropdown class="unit-switcher-toggle">' . $variable . ' ' . $unit . '<span class="unit-switcher-caret"></span></a>';
	$out .= '<ul>';
	$out .= '<li><a href="#" data-unitswitch="testone">Test One</a></li><li><a href="#" data-unitswitch="testtwo">Test One</a></li>';
	$out .= '</ul></div>';
	echo $out;
}