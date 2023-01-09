$(function () {
    const submit_button = $("#add_address"),
        full_name_input = $("#full_name"),
        mobile_input = $("#mobile"),
        address_type_input = $("#address_type"),
        area_input = $("#area"),
        city_input = $("#city"),
        block_input = $("#block"),
        street_input = $("#street"),
        avenue_input = $("#avenue"),
        house_input = $("#house"),
        floor_input = $("#floor"),
        apartment_input = $("#apartment"),
        note_input = $("#note"),
        guest = $("#guest").val(),
        is_check_out = $("#is_check_out"),
        app_url = $("#app_url").val();

    $(document).ready(function () {
        create_address();
    });

    function create_address() {
        submit_button.click(function () {
            let full_name = full_name_input.val(),
                mobile = mobile_input.val(),
                address_type = get_selector_value(address_type_input),
                area = get_selector_value(area_input),
                city = get_selector_value(city_input),
                block = block_input.val(),
                street = street_input.val(),
                avenue = avenue_input.val(),
                house = house_input.val(),
                floor = floor_input.val(),
                apartment = apartment_input.val(),
                note = note_input.val(),
                check_out = is_check_out.val();
            $(".errors").html("");
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: app_url + "/address/store",
                data: {
                    full_name: full_name,
                    mobile: mobile,
                    address_type: address_type,
                    area: area,
                    city: city,
                    block: block,
                    street: street,
                    avenue: avenue,
                    house: house,
                    floor: floor,
                    apartment: apartment,
                    note: note,
                    guest: 0,
                    is_check_out: check_out,
                },
                success: function (response) {
                    if ($.isEmptyObject(response.error)) {
                        //window.location.reload();
                        $("#content_address").html(response);
                        $("#AddressCreatedSuccess").addClass("show");
                        $("#AddressCreatedSuccess").prop("role", "dialog");
                        $("#AddressCreatedSuccess").css("display", "block");
                        $("body").append("<div class=\"modal-backdrop fade show\"></div>")
                        $(".dissmiss_dialog").click(function () {
                            $("#AddressCreatedSuccess").removeClass("show");
                            $("#AddressCreatedSuccess").prop("role", "");
                            $("#AddressCreatedSuccess").css("display", "none");
                            $('.modal-backdrop').remove();
                        })
                    } else {
                        print_error(response.error);
                    }
                }
            });
        });
    }

    function is_number(str) {
        var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
        return numberRegex.test(str);
    }
    function get_selector_value(selector) {
        if (selector.val() == "Open this select menu" || selector.val() == "افتح قائمة التحديد هذه")
            return "";
        else
            return selector.val();
    }

    function print_error(errors) {
        $.each(errors, function (index, val) {
            $("#" + index + "_error").html(val);
            $("#" + index).focus();
        });
    }
});
