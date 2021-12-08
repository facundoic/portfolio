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
            url: "/contacto",
            data: data,
            processData: false, // tell jQuery not to process the data
            contentType: false, // tell jQuery not to set contentType
            success: function (response) {
                console.log(response);
            },
            error: function (response) {
                console.log("error");
            },
        });
    });
});
