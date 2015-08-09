$(document).ready(function () {
    getJson('/GOQUAL/API/designer/get_items', {},
        function (data) {
            $($('#gq-ds-content-container')[0]).html(data);
        }, function (arg) {

        }, "html");
});
