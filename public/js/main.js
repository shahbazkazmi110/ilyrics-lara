$(document).on('ready', function () {
    $(".navbar-toggler").click(function () {
        $('body').toggleClass('menuopened');
    });

});
$('.viewmore_link').click(function () {
    $('#tags .less').fadeToggle();
    $(this).text($(this).text() == 'Show More' ? 'Show Less' : 'Show More');
});