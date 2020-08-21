$('[id^="editar."]').on('click', function() {
    var nr = this.id.slice(7);

    $.ajax({
        url: "http://127.0.0.1:8000/api/tarefa/selecionarTarefa/" + nr + "/",
        type: "get",
        dataType: "json",
        success: function(e) {
            document.getElementById('tituloEvento').value = e.dados.tarefa.titulo;
            $('html').find('#idCard').empty();
            $.each(e.dados.cards, function(key, item) {
                //console.log(item);
                if (e.dados.tarefa.id_card === item.id) {
                    $('#idCard').append('<option selected id="' + item.id + '" value="' + item.id + '">' + item.nome + '</option>');
                } else {
                    $('#idCard').append('<option id"' + item.id + '" value="' + item.id + '">' + item.nome + '</option>');
                }
            });
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
        }
    });
    document.getElementById('idEvento').value = nr;
});

$("#modalEdit").on('submit', function(event) {
    event.preventDefault();

    $.ajax({
        url: "http://127.0.0.1:8000/api/tarefa/editarTarefa/",
        type: "post",
        dataType: "json",
        data: { idEvento: document.getElementById('idEvento').value, idCard: document.getElementById('idCard').value, tituloEvento: document.getElementById('tituloEvento').value },
        success: function(e) {
            $('#modalEditar').modal('hide');
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