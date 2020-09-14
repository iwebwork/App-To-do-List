function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    // console.log(ev.target.className);
    if (ev.target.id === "alterarEvent") {

        var id = data.replace("drag", "");
        var card = ev.path[1].id.replace("div", "");

        $.ajax({
            url: "http://127.0.0.1:8000/api/tarefa/alterarTarefa/" + id + "/" + card + "/",
            type: "patch",
            dataType: "json",
            success: function(response) {
                if (response.status == '220') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso',
                        text: response.mensagem,
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        },
                        showConfirmButton: false,
                        timer: 2000
                    });
                    setTimeout(function() {
                        // console.log(ev.target);
                        setTimeout(function() { location.reload(); }, 2000);
                    }, 3000);

                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Aviso',
                        text: response.mensagem,
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        },
                        showConfirmButton: true,
                        timer: 2000
                    })
                }

            },
            error: function(reponse) {
                Swal.fire({
                    icon: 'error',
                    title: 'Aviso',
                    text: reponse.mensagem,
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
            complete: function() {}
        });

    } else {
        Swal.fire({
            icon: 'error',
            title: 'Aviso',
            text: "Local incorreto",
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
}

function addClass(id, classe) {
    var elemento = document.getElementById(id);
    var classes = elemento.className.split(' ');
    var getIndex = classes.indexOf(classe);

    if (getIndex === -1) {
        classes.push(classe);
        elemento.className = classes.join(' ');
    }
}

function delClass(id, classe) {
    var elemento = document.getElementById(id);
    var classes = elemento.className.split(' ');
    var getIndex = classes.indexOf(classe);

    if (getIndex > -1) {
        classes.splice(getIndex, 1);
    }
    elemento.className = classes.join(' ');
}