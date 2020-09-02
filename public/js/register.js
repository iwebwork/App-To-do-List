$('#register').on('submit', function(e) {
    e.preventDefault();

    $.ajax({
        url: "http://127.0.0.1:8000/api/register/insert",
        type: "post",
        dataType: "json",
        data: {
            name: document.getElementById('nome').value,
            email: document.getElementById('email').value,
            password: document.getElementById('password').value,
            password_confirmation: document.getElementById('password_confirmation').value
        },
        success: function(e) {
            var icone = '';
            var titulo = '';
            var mensagem = '';
            $.each(e.mensagem, function(key, value) {
                /// do stuff
                if (value == 'The name has already been taken.') {
                    mensagem += 'Este nome de usuario já existe' + '\n';
                } else {
                    mensagem += value;
                }
            });
            if (e.status == 404) {
                icone = 'error';
                titulo = 'Erro';
            } else {
                icone = 'success';
                titulo = 'Sucesso';
            }
            Swal.fire({
                icon: icone,
                title: titulo,
                text: mensagem,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                },
                showConfirmButton: true,
                timer: 2000,
            });
            // setTimeout(function() { location.reload(); }, 3000);
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