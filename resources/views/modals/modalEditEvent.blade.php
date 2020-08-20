<!-- Modal -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form id="modalEdit" method="POST"> 
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Evento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- <div class="input-group mb-3"> --}}
                        <label>Titulo: </label>
                        <input id="tituloEvento" class="form-control" id="tituloEvento" type="text" placeholder="Titulo">
                        <hr/>
                        <label>Card:  </label>
                        <select id="idCard" class="form-control" class="custom-select">
                            
                        </select>
                        <input id="idEvento" type="hidden" name="idEvento">
                    {{-- </div> --}}
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>
    </div>
  </div>