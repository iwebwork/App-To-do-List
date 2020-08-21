$('[id^="excluir."]').on('click', function() {
    var nr = this.id.slice(8);

    $.ajax({
        url: "http://127.0.0.1:8000/api/tarefa/deletarTarefa/" + nr + "/",
        type: "delete",
        dataType: "json",
        success: function(e) {

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
                timer: 3000
            })
        },
        success: function(e) {
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
            setTimeout(function() { location.reload(); }, 3000);
        }
    });

});