$(document).ready(function () {
    getJson('/GOQUAL/API/developer/get_items', {},
        function (data) {
            $($('#gq-dev-content-container')[0]).html(data);
        }, function (arg) {

        }, "html");
});
