$("#formForgotPassword").on('submit', function(event) {
    event.preventDefault();

    $.ajax({
        url: "http://127.0.0.1:8000/api/forgot/verify/",
        type: "post",
        dataType: "json",
        Accept: 'application/json',
        data: {
            name: document.getElementById('name').value,
        },
        success: function(e) {
            if (e.status == 200) {
                $('#modalForgotPassword').modal('show');
                document.getElementById('id').value = e.user.id;
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: e.message,
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    },
                    showConfirmButton: true,
                    timer: 2000,
                });
            }

        },
        error: function(e) {
            Swal.fire({
                icon: 'error',
                title: 'Aviso',
                text: e.mensagem,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                },
                showConfirmButton: true,
                timer: 2000
            })
        },
        complete: function() {}
    });
});

$("#modalEditPassword").on('submit', function(event) {
    event.preventDefault();
    password = document.getElementById('password').value;
    confirme_password = document.getElementById('confirme_password').value;

    if (password === confirme_password) {
        $.ajax({
            url: "http://127.0.0.1:8000/api/forgot/updateUser/" + document.getElementById('id').value,
            type: "post",
            dataType: "json",
            Accept: 'application/json',
            data: {
                password: document.getElementById('password').value,
            },
            success: function(e) {
                if (e.status == 200) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso',
                        text: e.message,
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        },
                        showConfirmButton: true,
                        timer: 2000,
                    });
                    setInterval(() => {
                        window.location.replace("http://127.0.0.1:8000/");
                    }, 3000);


                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: e.message,
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        },
                        showConfirmButton: true,
                        timer: 2000,
                    });
                }

                // setInterval(4000, );
            },
            error: function(e) {
                Swal.fire({
                    icon: 'error',
                    title: 'Aviso',
                    text: e.mensagem,
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    },
                    showConfirmButton: true,
                    timer: 2000
                })
            },
            complete: function() {}
        });
    } else {

        $('#confirme').addClass('show');
        setInterval(() => {
            $('#confirme').removeClass('show');
        }, 3000);
    }

});