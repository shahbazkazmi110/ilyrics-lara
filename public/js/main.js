$(document).on('ready', function() {

	$( ".navbar-toggler" ).click(function() {
	  $('body').toggleClass('menuopened');
	});

});
addthis.user.ready(function (data) {
	addthis.button('.share', [addthis_config], [{ ui_click: true, ui_disable: true }]);
}); 

$('.viewmore_link').click(function(){
	$('#tags .less').fadeToggle();
	$(this).text($(this).text() == 'Show More' ? 'Show Less' : 'Show More');
});
