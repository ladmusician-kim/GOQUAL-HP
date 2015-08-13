$(document).ready(function(){
    $('body').append('<div id="gq-to-top"><i class="gq-aot-icon glyphicon glyphicon-arrow-up"></i></div>');

    $("#gq-to-top").bind("click", function () {
        $("body").animate({ scrollTop: 0 }, 600);}
    );

    $(window).scroll(function () {
        if ($(this).scrollTop() != 0) {
            $('#gq-to-top').fadeIn();
        } else {
            $('#gq-to-top').fadeOut();
        }
    });
});