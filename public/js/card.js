function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    if (ev.target.className === "card-body") {
        ev.target.appendChild(document.getElementById(data));

        var id = data.replace("drag", "");
        var card = ev.path[1].id.replace("div", "");

        console.log("destino: " + card);
        console.log("Evento: " + id);

        $.ajax({
            url: "http://127.0.0.1:8000/api/tarefa/alterarTarefa/" + id + "/" + card + "/",
            type: "patch",
            dataType: "json",
            success: function(reponse) {
                console.log(reponse.mensagem);
            },
            error: function() {
                alert("Deu algo errado");
            },
            complete: function() {
                console.log("Feito");
            }
        });

    } else {
        //console.log(ev.path);
        //$(ev.drop.data).addClass("no-drop");
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