$(document).ready(function () {
    // full-screen
    var window_height = $(window).height();
    var menu_height = $('.gq-navbar').height();
    var container = $('.gq-fc-container');
    container.height(window_height - menu_height);

    $(window).scroll(function () {
        var scroll_position = $(document).scrollTop();
        var navbar = $('.gq-navbar');
        if (scroll_position >= window_height - menu_height) {
            if (!navbar.hasClass('navbar-fixed-top')) {
                $('.gq-navbar').addClass('navbar-fixed-top');
            }
        } else {
            if (navbar.hasClass('navbar-fixed-top')) {
                $('.gq-navbar').removeClass('navbar-fixed-top');
            }
        }
    });

    function initialize() {
        var myLatlng = new google.maps.LatLng(35.873199,128.625025);
        var mapOptions = {
            zoom: 16,
            center: myLatlng
        }
        var map = new google.maps.Map(document.getElementById('goqual-map'), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'GOQUAL!'
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);

});
