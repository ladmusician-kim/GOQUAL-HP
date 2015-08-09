$(document).ready(function () {
    var page = 1;
    var per_page = 9;
    var last_page = -1;
    var total_count = -1;
    var processing = false;
    get_items(page, per_page);

    function get_items(page, perPage) {
        processing = true;
        getJson('/GOQUAL/API/designer/get_items?page=' + page + '&per_page=' + perPage, {},
            function (data) {
                processing = false;
                $('#gq-ds-content-container:last').after(data.data);
                page = data.page;
                per_page = data.per_page;
                last_page = data.last_page;
                total_count = data.total_count;
            }, function (arg) {
                console.log(arg);
            }, 'json');
    }

    $( window ).scroll(function() {
        var scroll_position = $(document).scrollTop();
        if ($(window).scrollTop() >= ($(document).height() - $(window).height())* 0.8){
            if (!processing && page <= last_page) {
                get_items(++page, per_page);
            }

        }
    });

});
