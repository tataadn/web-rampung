$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function main_content(cont){
    $('#content_list').hide();
    $('#content_input').hide();
    $('#content_detail').hide();
    $('#' + cont).show();
}

function load_list(page){
    $.get('?page=' + page, $('#content_filter').serialize(), function(result){
        $('#list_result').html(result);
        main_content('content_list');
    }, "html");
}

function load_input(url){
    $.get(url, {}, function(result) {
        $('#content_input').html(result);
        main_content('content_input');
    }, "html");
}

function handle_save(tombol, form, url, method, title){
    $(tombol).submit(function () {
        return false;
    });
    let data = $(form).serialize();
    $(tombol).prop("disabled", true);
    $(tombol).html("Please wait");
    $.ajax({
        type: method,
        url: url,
        data: data,
        dataType: 'json',
        beforeSend: function() {
            
        },
        success: function (response) {
            if (response.alert=="success") {
                Swal.fire(
                    "Berhasil!",
                    response.message,
                    "success"
                );
                $(form)[0].reset();
                setTimeout(function () {
                    $(tombol).prop("disabled", false);
                        $(tombol).html(title);
                        main_content('content_list');
                        load_list(1);
                }, 2000);
            } else {
                Swal.fire({ text: response.message, icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, Mengerti!", customClass: { confirmButton: "btn btn-primary" } });
                setTimeout(function () {
                    $(tombol).prop("disabled", false);
                    $(tombol).html(title);
                }, 2000);
            }
        },
    });
}