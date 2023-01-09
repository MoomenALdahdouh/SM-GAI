const app_url = $('#app_url').val(),
    errors_tags = $(".errors"),
    language = $('#language').val(),
    auth_type = $("#auth_type").val(),
    current_url = $("#current_url").val(),
    previous_url = $("#previous_url").val(),
    filter_class = $(".filter_data"),
    bg_status = $(".bg_status");

var hostUrl = "assets/";
$(function () {
    $(document).ready(function () {
        status_dote();
        button_status();
        parent_key();
    });
});

function button_status() {
    $(":button[type=submit]").click(function () {
        $(this).addClass("disabled");
    })
    $(":input").on('change', function () {
        $(":button[type=submit]").removeClass("disabled");
    })
    $(":input").on('input', function () {
        $(":button[type=submit]").removeClass("disabled");
    })
}

function disabled_button(status) {
    if (status) {
        $(":button[type=submit]").addClass("disabled");
    } else {
        $(":button[type=submit]").removeClass("disabled");
    }
}

function status_dote() {
    $(".status_selector").on("change", (function (t) {
        switch (t.target.value) {
            case "1":
                bg_status.removeClass("bg-danger"), bg_status.addClass("bg-success");
                break;
            case "2":
                bg_status.removeClass("bg-success"), bg_status.addClass("bg-danger");
                break;
            /*case"-1":
                $("#bg_status").classList.removeClass("bg-success"), e.classList.addClass("bg-warning"), c();
                break;*/
        }
    }));
}

function parent_key() {
    $(".parent_key").on("change", (function (t) {
        if (t.target.value != "0")
            $(".key_input").addClass("d-none");
        else
            $(".key_input").removeClass("d-none");
    }));
}

