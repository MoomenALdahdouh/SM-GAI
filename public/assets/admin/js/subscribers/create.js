$(function () {
    const language = $('#language').val(),
        id = $('#customer_id').val(),
        app_url = $('#app_url').val(),
        submit_button = document.getElementById("kt_modal_add_customer_submit"),
        add_customer_form = $("#kt_ecommerce_add_customer_form"),
        a = document.getElementById("kt_ecommerce_add_customer_status_datepicker"),
        e = document.getElementById("kt_ecommerce_add_customer_status"),
        t = document.getElementById("kt_ecommerce_add_customer_status_select"),
        name_input = $("#name"),
        last_name_input = $("#last_name"),
        email_input  = $("#email"),
        mobile_input  = $("#mobile"),
        password_input  = $("#password"),
        password_confirmation_input  = $("#password_confirmation"),
        uploaded_image = $("#uploaded_image"),
        uploaded_image_view = $("#uploaded_image_view"),
        image_file_input = $("#image_file_input"),
        status_type = ["bg-success", "bg-warning", "bg-danger"];

    let customer_status = $("#kt_ecommerce_add_customer_status_select").val(),
        customer_image = "",
        image_updated = 0, r;

    $(document).ready(function () {
        status_customer();
        create_customer();
        image_update();
        modal_action();
    });

    function modal_action() {
        var KTModalUpdateCustomer = function () {
            var t, e, n, o, c;
            return {
                init: function () {
                    t = document.querySelector("#kt_modal_add_customer"), r = new bootstrap.Modal(t), c = t.querySelector("#kt_modal_add_customer_form"), e = c.querySelector("#kt_modal_add_customer_submit"), n = c.querySelector("#kt_modal_add_customer_cancel"), o = t.querySelector("#kt_modal_add_customer_close"), e.addEventListener("click", (function (t) {
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
                            t.value ? (r.hide() , $("input").val("")) : "cancel" === t.dismiss && Swal.fire({
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

    function create_customer() {
        submit_button.addEventListener('click', function () {
            let name = name_input.val(),
                last_name = last_name_input.val(),
                email = email_input.val(),
                mobile = mobile_input.val(),
                password = password_input.val(),
                password_confirm = password_confirmation_input.val(),
                customer_image = prepare_image_base64(uploaded_image.css('background-image'));
            if (customer_image == "none") {
                customer_image = "";
            }
            switch (customer_status) {
                case"published":
                    customer_status = 1;
                    break;
                case"unpublished":
                    customer_status = 0;
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: app_url + "/admin/customers/store",
                data: {
                    name: name,
                    last_name: last_name,
                    email: email,
                    mobile: mobile,
                    password: password,
                    password_confirmation: password_confirm,
                    customer_image: customer_image,
                    image_updated: image_updated,
                    status: customer_status,
                },
                success: function (response) {
                    if ($.isEmptyObject(response.error)) {
                        table.DataTable().ajax.reload();
                        success_submit(response.success);
                    } else {
                        failed_submit(response.error);
                    }
                }
            });
        });
    }

    function prepare_image_base64(image) {
        image = image.replace('url("data:image/jpeg;base64,', '');
        image = image.replace('url("data:image/jpeg;base64,', '');
        image = image.replace('url("data:image/png;base64,', '');
        image = image.replace('url("data:image/jpg;base64,', '');
        image = image.replace('")', '');
        if (image == "none") {
            return "";
        } else
            return image;
    }

    function print_error(errors) {
        $.each(errors, function (index, val) {
            $("#" + index + "_error").html(val);
            $("#" + index).focus();
        });
    }

    function status_customer() {
        const c = () => {
            a.parentNode.classList.remove("d-none")
        }, r = () => {
            a.parentNode.classList.add("d-none")
        }
        $(t).on("change", (function (t) {
            switch (t.target.value) {
                case"published":
                    customer_status = 1;
                    e.classList.remove(...status_type), e.classList.add("bg-success"), r();
                    break;
                case"scheduled":
                    e.classList.remove(...status_type), e.classList.add("bg-warning"), c();
                    break;
                case"unpublished":
                    customer_status = 0;
                    e.classList.remove(...status_type), e.classList.add("bg-danger"), r()
            }
        }));
    }

    function success_submit(id) {
        //Success Submit
        $(".errors").html("");
        add_customer_form.attr("data-kt-redirect", app_url + "/admin/categories");
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

    function image_update() {
        image_file_input.on('change', function (ev) {
            image_updated = 1;
        });
    }
});
