$('#InserirLista').on('submit', function(event) {
    event.preventDefault();
    $.ajax({
        url: "http://127.0.0.1:8000/api/lista/adicionarLista/",
        type: "post",
        dataType: "json",
        data: {
            nome: document.getElementById('tituloLista').value,
        },
        success: function(e) {
            $('#modalInserirLista').modal('hide');
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
        complete: function() {
            setTimeout(function() { location.reload(); }, 3000);
        }
    });
});