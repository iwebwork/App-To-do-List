$('[id^="editar."]').on('click', function() {
    var nr = this.id.slice(7);
    document.getElementById('tituloEvento').value = nr;
    // alert(nr);
});