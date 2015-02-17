/**
* Scripts Required by Unit Switcher Plugin in Front End
* @author Kyle Phillips
*/
jQuery(function($){

/**
* --------------------------------------------------------------------
* Unit Dropdown
* --------------------------------------------------------------------
*/

$('*[data-unit-dropdown]').on('click', function(e){
	e.preventDefault();
	var list = $(this).parent('.unit-switcher-switch').find('ul');
	var caret = $(this).find('.unit-switcher-caret');
	if ( $(list).is(':visible') ){
		console.log('hide it');
		$(list).hide();
		$(caret).removeClass('open');
	} else {
		$(list).show();
		$(caret).addClass('open');
	}
});

$(document).mouseup(function(e){

	var container = $('.unit-switcher-switch ul');
	var target = $(e.target);

	// if ( $(e.target).parent('.unit-switcher-switch').find('ul:visible').length > 0 ){
	// 	console.log('hide');
	// 	$(e.target).parent('.unit-switcher-switch').find('ul').hide();
	// 	$('.unit-switcher-caret').removeClass('open');
	// 	return false;
	// }

	// if ( $(e.target).hasClass('unit-switcher-toggle') 
	// 	&& $(e.target).parent('.unit-switcher-switch').find('ul:visible').length == 0 ) return;
	
	if ( !container.is(e.target)
		&& container.has(e.target).length === 0 ){
		container.hide();
		$('.unit-switcher-caret').removeClass('open');
	}

});

}); // jQuery