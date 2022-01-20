$("body").on("contextmenu", "img", function (e) {
    return false;
});
$('img').attr('draggable', false);
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function auth_content(cont) {
    $('#login_page').hide();
    $('#register_page').hide();
    $('#' + cont).show();
}

function auth(button,form,uri,title)
{
    $(button).submit(function () {
        return false;
    });
    let data = $(form).serialize();
    $(button).prop("disabled", true);
    $(button).html("Mohon tunggu");
    $.ajax({
        type: "POST",
        url: uri,
        data: data,
        dataType: 'json',
        success: function (response) {
            if (response.alert=="success") {
                Swal.fire(
                    "Berhasil!",
                    response.message,
                    "success"
                );
                $(form)[0].reset();
                setTimeout(function () {
                    $(button).prop("disabled", false);
                    $(button).html(title);
                    if(title == "Login"){
                        location.reload();
                    }else{
                        auth_content('login_page')
                        $("#username_login").focus();
                    }
                }, 2000);
            } else if (response.alert=="info") {
                    info_message(response.message);
                    $(form)[0].reset();
                    setTimeout(function () {
                        $(button).prop("disabled", false);
                        $(button).html(title);
                        if(title == "Login"){
                            location.reload();
                        }else{
                            container.classList.remove("sign-up-mode");
                            $("#username_login").focus();
                        }
                    }, 2000);
            } else if (response.alert=="warning") {
                warning_message(response.message);
                setTimeout(function () {
                    $(button).prop("disabled", false);
                    $(button).html(title);
                }, 2000);
            } else if (response.alert=="error"){
                Swal.fire({ text: response.message, icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, Mengerti!", customClass: { confirmButton: "btn btn-primary" } });
                setTimeout(function () {
                    $(button).prop("disabled", false);
                    $(button).html(title);
                }, 2000);
            }
        },
    });
}