var table = $('#kt_table');
$(function () {
    $(document).ready(function () {
        "use strict";
        get_data();
        /*Table Actions*/
        table_function();
    });

    function table_function() {
        item_status();
        item_delete();
        item_edit();
    }

    function item_status() {
        $(document).on('click', '#message_status', function () {
            let id = $(this).data('id');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: app_url + "/admin/options/status/" + id,
                success: function (response) {
                    if (response['success']) {
                        Swal.fire({
                            text: language === "en" ? "You have change order status!.":"لقد قمت بتغيير الحالة !.",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                            customClass: {confirmButton: "btn fw-bold btn-primary"}
                        });
                        id = "";
                        table.DataTable().ajax.reload();
                    } else if (response['error']) {
                        Swal.fire({
                            text: language === "en" ? "The order status was not change.":"لم تتغير حالة الطلب.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                            customClass: {confirmButton: "btn fw-bold btn-primary"}
                        });
                        id = "";
                    }
                }
            });
        });
    }

    function item_delete() {
        $(document).on('click', '#delete', function () {
            let id = $(this).data('id');
            confirm_delete(id);
        });
    }

    function item_edit() {
        $(document).on('click', '#edit', function () {
            let id = $(this).data('id');
            let name = $(this).data('name');
            $("#id").val(id);
            $("#name_update").val(name);
        });
    }

    function confirm_delete(id) {
        Swal.fire({
            text: language === "en" ? "Are you sure you want to delete this item?" : "هل أنت متأكد أنك تريد حذف هذا البند؟",
            icon: "warning",
            showCancelButton: !0,
            buttonsStyling: !1,
            confirmButtonText: language === "en" ? "Yes, delete!" : "نعم ، احذف!",
            cancelButtonText: language === "en" ? "No, cancel" : "لا ، إلغاء",
            customClass: {
                confirmButton: "btn fw-bold btn-danger",
                cancelButton: "btn fw-bold btn-active-light-primary"
            }
        });
        var confirm_delete = document.getElementsByClassName("swal2-confirm");
        confirm_delete[0].addEventListener('click', function () {
            delete_permission(id);
        });
    }

    function delete_permission(id) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "DELETE",
            url: app_url + "/admin/options/delete/" + id,
            success: function (response) {
                if (response['success']) {
                    Swal.fire({
                        text: "You have deleted the item!.",
                        icon: "success",
                        buttonsStyling: !1,
                        confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                        customClass: {confirmButton: "btn fw-bold btn-primary"}
                    });
                    table.DataTable().ajax.reload();
                } else if (response['error']) {
                    Swal.fire({
                        text: "The item was not deleted.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                        customClass: {confirmButton: "btn fw-bold btn-primary"}
                    });
                }
            }
        });
    }

    function get_data() {
        var KTPermissionsList = function () {
            var t, e, n = () => {
                t.querySelectorAll('[data-kt-table-filter="delete_row"]').forEach((t => {
                    t.addEventListener("click", (function (t) {
                        t.preventDefault();
                        const n = t.target.closest("tr"),
                            o = n.querySelector('[data-kt-table-filter="permiosson_name"]').innerText;
                        Swal.fire({
                            text: "Are you sure you want to delete " + o + "?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: language === "en" ? "Yes, delete!" : "نعم ، احذف!",
                            cancelButtonText: language === "en" ? "No, cancel" : "لا ، إلغاء",
                            customClass: {
                                confirmButton: "btn fw-bold btn-danger",
                                cancelButton: "btn fw-bold btn-active-light-primary"
                            }
                        }).then((function (t) {
                            t.value ? Swal.fire({
                                text: "You have deleted " + o + "!.",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                                customClass: {confirmButton: "btn fw-bold btn-primary"}
                            }).then((function () {
                                e.row($(n)).remove().draw()
                            })) : "cancel" === t.dismiss && Swal.fire({
                                text: o + " was not deleted.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",
                                customClass: {confirmButton: "btn fw-bold btn-primary"}
                            })
                        }))
                    }))
                }))
            };
            return {
                init: function () {
                    (t = document.querySelector("#kt_table")) && ((e = $(t).DataTable({
                        searchable: true,
                        order: [[0, "asc"]],
                        ajax: {
                            "url": app_url + "/admin/options",
                            "type": 'GET',
                        },
                        columns: [
                            {
                                data: 'id',
                                name: 'id',
                            },
                            {
                                data: 'value',
                                name: 'value',
                            },
                            {
                                data: 'created_at',
                                name: 'created_at',
                            },
                            {
                                data: 'status',
                                name: 'status',
                            }, {
                                data: 'action',
                                name: 'action',
                                orderable: false,
                                searchable: false
                            },
                        ], "columnDefs": [{
                            "render": function (data, type, full, meta) {
                                return meta.row + 1; // adds id to serial no
                            },
                            "targets": 0
                        }],
                    })).on("draw", (function () {
                        n()
                    })), document.querySelector('[data-kt-filter="search"]').addEventListener("keyup", (function (t) {
                        e.search(t.target.value).draw()
                    })),
                        $("#reset").click(function () {
                            $("#search").val("");
                            $("<option></option>").insertBefore($('.filter_data option:first-child'));
                            filter_class.val("")
                            e.search("").draw()
                            $("option:selected").prop("selected", false)
                        }), filter_class.on("change", function () {
                        let filter = "";
                        $("option:selected").each(function () {
                            let val = $(this).val().trim();
                            console.log(val)
                            if (val && !$.isNumeric(val)) {

                                filter = filter + " " + $(this).val().trim();
                            }
                        });
                        e.search(filter).draw()
                    }), n())
                }
            }
        }();
        KTUtil.onDOMContentLoaded((function () {
            KTPermissionsList.init()
        }));
    }
});
