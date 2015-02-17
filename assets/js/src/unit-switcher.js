/**
* Scripts Required by Unit Switcher Plugin in Front End
*/
jQuery(function($){


/**
* --------------------------------------------------------------------
* Unit Switcher
* --------------------------------------------------------------------
*/
$(document).on('click', '*[data-unitswitcher]', function(e){
	e.preventDefault();
	switch_units($(this));
});

/**
* Process the switch
*/
function switch_units(item)
{
	var parent = $(item).attr('data-parentunit');
	var selected_unit = $(item).attr('data-alternate');
	var allunits = $('*[data-unit="' + parent + '"]');

	$.each(allunits, function(i, v){
		var newunit = $(this).siblings('ul').find('*[data-alternate="' + selected_unit + '"]');
		var newnumber = $(newunit).attr('data-unitvalue');
		$(this).find('.unit-switcher-value').text(newnumber + ' ' + selected_unit);
	});

	// Close the menu
	$('.unit-switcher-switch').removeClass('open');
}


}); // jQuery