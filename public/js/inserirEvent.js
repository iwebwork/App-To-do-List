$('[id^="inserir."]').on('click', function() {
    idCard = this.id.slice(8);
    document.getElementById('idCardInsert').value = idCard;
});

$('#inserirEvento').on('submit', function(event) {
    event.preventDefault();
    $.ajax({
        url: "http://127.0.0.1:8000/api/tarefa/adicionarTarefa/",
        type: "post",
        dataType: "json",
        data: {
            titulo: document.getElementById('addTituloEvento').value,
            idCard: document.getElementById('idCardInsert').value,
        },
        success: function(e) {
            $('#modalInserirEvento').modal('hide');
            Swal.fire({
                icon: 'success',
                title: 'Sucesso',
                text: e.menssagem,
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
                text: e.menssagem,
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