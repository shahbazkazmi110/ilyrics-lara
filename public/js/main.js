

$(document).on('ready', function() {


	$( ".navbar-toggler" ).click(function() {
	  $('body').toggleClass('menuopened');
	});

});

addthis.user.ready(function (data) {
	addthis.button('.share', [addthis_config], [{ ui_click: true, ui_disable: true }]);
}); 
