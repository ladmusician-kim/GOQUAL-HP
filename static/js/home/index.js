$(document).ready(function () {
    // full-screen
    var window_width = $(window).width();
    if (window_width > 760) {
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
    } else {
        $('.gq-navbar').addClass('navbar-fixed-top');
    }


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

    $("#gq-go-to-contact").bind("click", function () {
        var contact_height = $('.gq-contact').offset().top;
        $("body").animate({ scrollTop: contact_height }, 600);}
    );

    var fc_title_quality = $('.gq-fc-cp-we-go-for-quality');
    var fc_title_goqual = $('.gq-fc-cp-goqual');

    $("#gq-fc-cp-container").bind("click", function () {
            if (fc_title_goqual.is(":visible")) {
                fc_title_goqual.fadeOut(400, function() {
                    fc_title_quality.fadeIn(400);
                });
            } else {
                fc_title_quality.fadeOut(400, function() {
                    fc_title_goqual.fadeIn(400);
                });
            }
        }
    );

});
