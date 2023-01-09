$(function () {
    const submit_button = $("#update_address"),
        remove_address = $(".remove_address"),
        edit_address_button = $(".edit_address"),
        edit_address_modal = $("#editAddress #modal_content"),
        edit_address_header_modal = $("#editAddress .modal-header-custom"),
        app_url = $("#app_url").val();

    let id = "";
    $(document).ready(function () {
        update_address();
        edit_address();
    });

    function edit_address() {
        edit_address_button.click(function () {
            edit_address_modal.html("");
            id = $(this).data("id");
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "GET",
                url: app_url + "/address/edit/" + id,
                success: function (response) {
                    edit_address_modal.html(response);
                    $("#editAddress .change_style").prop("style", "visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;");
                    //$("#editAddress #modal-header-custom").prop("style","visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;");
                }
            });
        })
    }

    function update_address() {
        submit_button.click(function () {
            const full_name_input = $("#modal_content #full_name"),
                mobile_input = $("#modal_content #mobile"),
                address_type_input = $("#modal_content #address_type"),
                area_input = $("#modal_content #area"),
                city_input = $("#modal_content #city"),
                block_input = $("#modal_content #block"),
                street_input = $("#modal_content #street"),
                avenue_input = $("#modal_content #avenue"),
                house_input = $("#modal_content #house"),
                floor_input = $("#modal_content #floor"),
                apartment_input = $("#modal_content #apartment"),
                note_input = $("#modal_content #note");

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
                note = note_input.val();

            $(".errors").html("");
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: app_url + "/address/update/" + id,
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
                },
                success: function (response) {
                    if ($.isEmptyObject(response.error)) {
                        $("#content_address").html(response);
                        $("#AddressUpdateSuccess").addClass("show");
                        $("#AddressUpdateSuccess").prop("role", "dialog");
                        $("#AddressUpdateSuccess").css("display", "block");
                        $("body").append("<div class=\"modal-backdrop fade show\"></div>")
                        $(".dissmiss_dialog").click(function () {
                            $("#AddressUpdateSuccess").removeClass("show");
                            $("#AddressUpdateSuccess").prop("role", "");
                            $("#AddressUpdateSuccess").css("display", "none");
                            $('.modal-backdrop').remove();
                        })
                    } else {
                        print_error(response.error);
                    }
                }
            });
        });
    }

    function get_selector_value(selector) {
        if (selector.val() === "Open this select menu" || selector.val() == "افتح قائمة التحديد هذه")
            return "";
        else
            return selector.val();
    }

    function print_error(errors) {
        $.each(errors, function (index, val) {
            $("#" + index + "_edit_error").html(val);
            $("#" + index).focus();
        });
    }
});
