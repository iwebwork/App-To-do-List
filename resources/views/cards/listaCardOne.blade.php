<li style="margin:6px;" class="list-group-item list-group-item-action flex-column align-items-start bg-white"
draggable="true" ondragstart="drag(event)" id="drag{{$id}}">
    <div class="d-flex w-100 justify-content-between">
        <p class="mb-1">{{$titulo}}</p>
        <button type="button" class="btn btn-warning btn-md" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v" aria-hidden="false"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-right text-center" aria-labelledby="navbarDropdown">
            <button id="editar.{{$id}}" class="btn btn-light" data-toggle="modal" data-target="#modalEditar">Editar</button>
            <div class="dropdown-divider"></div>
            <button id="excluir.{{$id}}" class="btn btn-light">Excluir</button>
        </div>
    </div>
</li>