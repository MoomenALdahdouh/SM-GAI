$(function () {
    const submit_button = document.getElementById("add_address_submit"),
        add_address_form = $("#add_address_form"),
        a = document.getElementById("kt_ecommerce_add_customer_status_datepicker"),
        e = document.getElementById("kt_ecommerce_add_customer_status"),
        t = document.getElementById("kt_ecommerce_add_customer_status_select"),
        add_address_button = $(".add_address"),
        add_address_modal = $("#add_address #modal_content"),
        app_url = $("#app_url").val(),
        customer_id = $("#customer_id").val();
    let r; //this for modal dialog

    $(document).ready(function () {
        store_address();
        modal_action();
    });

    function modal_action() {
        var KTModalUpdateCustomer = function () {
            var t, e, n, o, c;
            return {
                init: function () {
                    t = document.querySelector("#add_address"), r = new bootstrap.Modal(t), c = t.querySelector("#add_address_form"), e = c.querySelector("#add_address_submit"), n = c.querySelector("#add_address_cancel"), o = t.querySelector("#add_address_close"), e.addEventListener("click", (function (t) {
                        /*t.preventDefault(), e.setAttribute("data-kt-indicator", "on"), setTimeout((function () {
                            e.removeAttribute("data-kt-indicator"), Swal.fire({
                                text: language === "en" ? "Form has been successfully submitted!" : "تم تقديم النموذج بنجاح!",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                                customClass: {confirmButton: "btn btn-primary"}
                            }).then((function (t) {
                                t.isConfirmed && r.hide()
                            }))
                        }), 2e3)*/
                    })), n.addEventListener("click", (function (t) {
                        t.preventDefault(), Swal.fire({
                            text: "Are you sure you would like to cancel?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Yes, cancel it!",
                            cancelButtonText: "No, return",
                            customClass: {confirmButton: "btn btn-primary", cancelButton: "btn btn-active-light"}
                        }).then((function (t) {
                            t.value ? (r.hide(), $("input").val("")) : "cancel" === t.dismiss && Swal.fire({
                                text: "Your form has not been cancelled!.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                                customClass: {confirmButton: "btn btn-primary"}
                            })
                        }))
                    })), o.addEventListener("click", (function (t) {
                        t.preventDefault(), Swal.fire({
                            text: "Are you sure you would like to cancel?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Yes, cancel it!",
                            cancelButtonText: "No, return",
                            customClass: {confirmButton: "btn btn-primary", cancelButton: "btn btn-active-light"}
                        }).then((function (t) {
                            t.value ? (r.hide(), $("input").val("")) : "cancel" === t.dismiss && Swal.fire({
                                text: "Your form has not been cancelled!.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                                customClass: {confirmButton: "btn btn-primary"}
                            })
                        }))
                    }))
                }
            }
        }();
        KTUtil.onDOMContentLoaded((function () {
            KTModalUpdateCustomer.init()
        }));

    }

    function success_submit() {
        //Success Submit
        $(".errors").html("");
        add_address_form.attr("data-kt-redirect", app_url + "/admin/categories");
        (submit_button.setAttribute("data-kt-indicator", "on"), submit_button.disabled = !0, setTimeout((function () {
            submit_button.removeAttribute("data-kt-indicator"), Swal.fire({
                text: language === "en" ? "Form has been successfully submitted!" : "تم تقديم النموذج بنجاح!",
                icon: "success",
                buttonsStyling: !1,
                confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                customClass: {confirmButton: "btn btn-primary"}
            }).then((function (e) {
                e.isConfirmed && r.hide() , $("input").val("")
            }))
            submit_button.disabled = !1
        }), 1000));//2e3 == 1000
    }

    function failed_submit(errors) {
        //Failed Submit
        $(".errors").html("");
        (submit_button.setAttribute("data-kt-indicator", "on"), submit_button.disabled = !0, setTimeout((function () {
            submit_button.removeAttribute("data-kt-indicator"), Swal.fire({
                text: language === "en" ? "Sorry, looks like there are some errors detected, please try again." : "معذرة ، يبدو أنه تم اكتشاف بعض الأخطاء ، يرجى المحاولة مرة أخرى.",
                icon: "error",
                buttonsStyling: !1,
                confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                customClass: {confirmButton: "btn btn-primary"}
            })
            submit_button.disabled = !1
            print_error(errors);
        }), 1000));
    }

    function store_address() {
        submit_button.addEventListener('click', function () {
            const full_name_input = $("#add_address #full_name"),
                mobile_input = $("#add_address #mobile"),
                address_type_input = $("#add_address #address_type"),
                area_input = $("#add_address #area"),
                city_input = $("#add_address #city"),
                block_input = $("#add_address #block"),
                street_input = $("#add_address #street"),
                avenue_input = $("#add_address #avenue"),
                house_input = $("#add_address #house"),
                floor_input = $("#add_address #floor"),
                apartment_input = $("#add_address #apartment"),
                note_input = $("#add_address #note");

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
                id = $("#address_id").val();
            $(".errors").html("");
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: app_url + "/admin/address/store/" + id,
                data: {
                    customer_id: customer_id,
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
                        success_submit();
                        $("#customer_address").html(response);
                    } else {
                        failed_submit();
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
            $("#" + index + "_add_error").html(val);
            $("#" + index).focus();
        });
    }
});
