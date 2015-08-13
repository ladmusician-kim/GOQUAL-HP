$(document).ready(function () {
    var window_height = $(window).height();
    var footer_height = $('.gq-footer').outerHeight();
    $('.gq-body-container').css('min-height', window_height - footer_height);

    var page = 1;
    var per_page = 9;
    var last_page = -1;
    var total_count = -1;
    var processing = false;
    var ajax_loader = $('.gq-ajax-loader');

    get_items(page, per_page);

    function get_items(page, perPage) {
        processing = true;
        ajax_loader.show();
        getJson('/GOQUAL/API/report/get_items?page=' + page + '&per_page=' + perPage, {},
            function (data) {
                ajax_loader.hide();
                processing = false;
                $('#gq-report-content-container:last').after(data.data);

                page = data.page;
                per_page = data.per_page;
                last_page = data.last_page;
                total_count = data.total_count;

            }, function (arg) {
                console.log(arg);
            }, 'json');
    }

    $(window).scroll(function () {
        var scroll_position = $(document).scrollTop();
        if ($(window).scrollTop() >= ($(document).height() - $(window).height()) * 0.8) {
            if (!processing && page < last_page) {
                get_items(++page, per_page);
            }

        }
    });

});
