$(document).ready(function () {
    getJson('/GOQUAL/API/core/get_items', {},
        function (data) {
            $($('#gq-core-content-container')[0]).html(data);
        }, function (arg) {

        }, "html");
});
