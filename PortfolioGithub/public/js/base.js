$(document).ready(function () {
    $("#button-form").click(function (e) {
        e.preventDefault(e);
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr(
                    "content"
                ),
            },
        });
        var formElement = document.getElementById("formContacto");
        let data = new FormData(formElement);
        $.ajax({
            type: "POST",
            url: "/validate-form",
            data: data,
            dataType: "json",
            processData: false, // tell jQuery not to process the data
            contentType: false, // tell jQuery not to set contentType
            success: function (response) {
                if (response.status == "error") {
                    $.each(response.error, function (prefix, value) {
                        let clase = "error-text " + prefix + "-error";
                        let span = (document.getElementsByClassName(
                            clase
                        )[0].innerText = value);
                    });
                }
            },
            error: function (response) {
                console.log(response);
            },
        });
    });
});
