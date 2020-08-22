<div class="card bg-light" style="width: 18rem; margin:10px;" id="div{{$id}}" ondrop="drop(event)" ondragover="allowDrop(event)">
    <!-- Default dropright button -->
    <div class="dropright text-center">
        <button class="btn text-center dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{$titulo}}
        </button>
        <div class="dropdown-menu">
            <button class="dropdown-item" type="button" id="inserir.{{$id}}" data-toggle="modal" data-target="#modalInserirEvento" >
                Adicionar card
            </button>
            <button class="dropdown-item" type="button" id="{{$id}}" data-toggle="modal" data-target="#modalInserirEvento" >
                Remover Lista
            </button>
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group list-group-flush">
            {{$lista}}
        </ul>
    </div>
</div> 