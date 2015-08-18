$(document).ready(function () {

    $(window).resize(function() {
        setFullScreen();
    });

    setFullScreen();

    function setFullScreen() {
        var window_height = $(window).height();
        var menu_height = $('.gq-navbar').height();
        var_footer_height = $('.gq-footer').outerHeight();

        var container = $('.gq-bs-section');

        container.height(window_height - menu_height);
    }
});