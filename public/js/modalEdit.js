$('[id^="editar."]').on('click', function() {
    var nr = this.id.slice(7);

    $.ajax({
        url: "http://127.0.0.1:8000/api/tarefa/selecionarTarefa/" + nr + "/",
        type: "get",
        dataType: "json",
        success: function(e) {
            document.getElementById('tituloEvento').value = e.dados.tarefa.titulo;
            $.each(e.dados.cards, function(key, item) {
                //console.log(item);
                if (e.dados.tarefa.id_card === item.id) {
                    $('#inputGroupSelect01').append('<option selected value="' + item.id + '">' + item.nome + '</option>');
                } else {
                    $('#inputGroupSelect01').append('<option value="' + item.id + '">' + item.nome + '</option>');
                }
            });
            // <option value="1">One</option>

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
                timer: 3000
            })
        }
    });
    document.getElementById('idEvento').value = nr;

});