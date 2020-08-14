<li class="list-group-item list-group-item-action flex-column align-items-start bg-white"
draggable="true" ondragstart="drag(event)" id="drag{{$id}}">
    <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">{{$titulo}}</h5>
        <button type="button" class="btn btn-warning btn-md" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v" aria-hidden="false"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a href="{{$rotaEditar}}" class="card-link">Editar</a>
            <div class="dropdown-divider"></div>
            <a href="{{$rotaExcluir}}" class="card-link">Excluir</a>
        </div>
    </div>
</li>