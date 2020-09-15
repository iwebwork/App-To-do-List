$('#login').on('submit', function(e) {
    e.preventDefault();
    $("login").css("disable");
    $.ajax({
        url: "http://127.0.0.1:8000/api/login/autheticate/",
        type: "post",
        dataType: "json",
        data: {
            email: document.getElementById('email').value,
            password: document.getElementById('senha').value,
            password_confirmation: document.getElementById('senha').value
        },
        success: function(e) {
            if (e.status == 404) {
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
                    timer: 2000,
                });

            } else if (e.status == 200) {
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso',
                    text: e.mensagem,
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    },
                    showConfirmButton: true,
                    timer: 2000,
                });
                setTimeout(function() { window.location.replace("http://127.0.0.1:8000/"); }, 3000);
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

});