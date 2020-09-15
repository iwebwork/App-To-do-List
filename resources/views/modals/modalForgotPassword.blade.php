<!-- Modal -->
<div class="modal fade" id="modalForgotPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form id="modalEditPassword" method="POST"> 
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">                    
                        
                        <div class="form-group">
                            <label>Nova senha:</label>
                            <input id="password" class="form-control" type="password" placeholder="Senha...">
                        </div>
                        <div class="form-group">
                            <label>Confirme sua senha:</label>
                            <input id="confirme_password" class="form-control" type="password" placeholder="confirme sua senha...">
                        </div>
                        <div class="form-group">
                            <input id="id" type="hidden" class="form-control"/>
                        </div>
                        <hr/>
                        <div id="confirme" role="alert" class="alert alert-warning alert-dismissible fade">
                            As Senhas não conferem
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <input id="idEvento" type="hidden" name="idEvento">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>
    </div>
  </div>