// full-screen
var window_height = $(window).height();
var container = $('.gq-fullscreen-container');
container.height(window_height);

$( window ).scroll(function() {
    var scroll_position = $(document).scrollTop();
    var navbar = $('.gq-navbar');
    if (scroll_position >= window_height) {
        if (!navbar.hasClass('navbar-fixed-top')) {
            $('.gq-navbar').addClass('navbar-fixed-top');
        }
    } else {
        if (navbar.hasClass('navbar-fixed-top')) {
            $('.gq-navbar').removeClass('navbar-fixed-top');
        }
    }
});
