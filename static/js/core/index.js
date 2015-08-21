$(document).ready(function () {
    var page = 1;
    var per_page = 9;
    var last_page = -1;
    var total_count = -1;
    var processing = false;
    var ajax_loader = $('.gq-ajax-loader');
    var category_id = $('#categoryid').val();

    var window_height = $(window).height();
    var footer_height = $('.gq-footer').outerHeight();
    $('.gq-body-container').css('min-height', window_height - footer_height);

    get_items(page, per_page);

    function get_items(page, perPage) {
        var api = '/GOQUAL/API/core/get_items?page=' + page + '&per_page=' + perPage;

        if (category_id != null && category_id !== "" && category_id.length >0) {
            api = api + '&categoryid=' + category_id;
        }

        processing = true;
        ajax_loader.show();
        getJson(api, {},
            function (data) {
                ajax_loader.hide();
                processing = false;

                if (data.total_count) {
                    handle_get_item(data);
                } else {
                    $("#gq-core-content-container").html(data);
                }
            }, function (arg) {
                console.log('error!!: ' + arg);
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

    function handle_get_item (data) {
        page = data.page;
        per_page = data.per_page;
        last_page = data.last_page;
        total_count = data.total_count;

        var first_column_count = data.first_count;
        var second_column_count = data.first_count + data.second_count;
        var third_column_count = data.first_count + data.second_count + data.third_count;
        var fourth_column_count = data.first_count + data.second_count + data.third_count + data.fourth_count;

        var items = data.data.split('</div>');
        var lists = $("#gq-core-content-container ul li");

        $(items).each(function (idx, item) {
            if (idx < first_column_count) {
                $(lists[0]).append(item + '</div>');

            } else if ( idx >= first_column_count && idx < second_column_count) {
                $(lists[1]).append(item + '</div>');

            } else if ( idx >= second_column_count && idx < third_column_count) {
                $(lists[2]).append(item + '</div>');

            } else if ( idx >= third_column_count && idx < fourth_column_count) {
                $(lists[3]).append(item + '</div>');
            }
        });
    }
});
