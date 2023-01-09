$(function () {
    const add_cart_button = $("#add_cart_button");

    $(document).ready(function () {

    });

    function print_error(errors) {
        $.each(errors, function (index, val) {
            $("#" + index + "_error").html(val);
            $("#" + index).focus();
        });
    }
});
