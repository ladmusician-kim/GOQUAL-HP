$(document).ready(function(){
    var window_height = $(window).height();
    $('.gq-body-container').css('min-height', window_height - 160 + 'px');
    $(window).load(function() {
        $(".gq-page-loader").fadeOut("slow");;
    });

    $('body').append('<div id="gq-to-top"><i class="gq-aot-icon glyphicon glyphicon-arrow-up"></i></div>');
    $("#gq-to-top").bind("click", function () {$("body").animate({ scrollTop: 0 }, 200);});
    $(window).scroll(function () {
        if ($(this).scrollTop() != 0) {
            $('#gq-to-top').fadeIn();
        } else {
            $('#gq-to-top').fadeOut();
        }
    });
});