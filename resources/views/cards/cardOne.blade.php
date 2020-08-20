<div class="card bg-light" style="width: 18rem; margin:10px;" id="div{{$id}}" ondrop="drop(event)" ondragover="allowDrop(event)">
    <div class="list-group-item list-group-item-action flex-column align-items-start bg-white">
        <div class="d-flex justify-content-center">
            <h5 style="margin-right: 2%;" class="mb-1 text-center">{{$titulo}}</h5>
            <button id="inserir.{{$id}}" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalInserirEvento">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
                    <path fill-rule="evenodd" d="M7.5 9.5A.5.5 0 0 1 8 9h2a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0v-2z"/>
                    <path fill-rule="evenodd" d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                    <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
                </svg>
            </button>
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group list-group-flush">
            {{$lista}}
        </ul>
    </div>
</div>    