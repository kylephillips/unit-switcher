/**
* Scripts Required by Unit Switcher Plugin in Admin Area
* @author Kyle Phillips
*/
jQuery(function($){


/**
* Toggle dependency content under general settings
*/
$(document).ready(function(){
	var items = $('.unitswitcher-dependency');
	$.each(items, function(i, v){
		toggle_dependency_content($(this));
	});
});

$('.unitswitcher-dependency-cb').on('change', function(){
	var item = $(this).parents('.unitswitcher-dependency');
	toggle_dependency_content(item);
});

/**
* Toggle an individual dependency content
*/
function toggle_dependency_content(item)
{
	if ( $(item).find('.unitswitcher-dependency-cb').is(':checked') ){
		$(item).find('.unitswitcher-dependency-content').hide();
	} else {
		$(item).find('.unitswitcher-dependency-content').show();
	}
}


}); // jQuery