$(function () {
    const remove_address = $(".remove_address"),app_url = $("#app_url").val();

    $(document).ready(function () {
        delete_address();
    });

    function delete_address(){
        remove_address.click(function (){
            console.log("sss")
            let id = $(this).data("id");
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "DELETE",
                url: app_url + "/address/delete/" + id,
                success: function (response) {
                    //$("#content_address").html(response);
                    if ($.isEmptyObject(response.error)) {
                        $("#content_address").html(response);
                    } else {
                        print_error(response.error);
                    }
                }
            });
        });
    }

});
