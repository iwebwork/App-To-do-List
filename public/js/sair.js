$('#sair').on('click', function(e) {
    e.preventDefault();
    $.ajax({
        url: "http://127.0.0.1:8000/api/login/sair/",
        type: "get",
        dataType: "",
        data: {},
        success: function(e) {
            Swal.fire({
                icon: 'success',
                title: 'Sucesso',
                text: 'Volte sempre',
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                },
                showConfirmButton: false,
                timer: 2000,
            });
            setTimeout(function() { window.location.replace("http://127.0.0.1:8000/"); }, 3000);
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