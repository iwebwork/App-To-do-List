<div class="card bg-light" style="width: 18rem;" id="div{{$id}}" ondrop="drop(event)" ondragover="allowDrop(event)">
    <div class="card-body">
        <div class="list-group-item list-group-item-action flex-column align-items-start bg-white">
            <h5 class="mb-1 text-center">{{$titulo}}</h5>
        </div>
        <ul class="list-group list-group-flush">
            {{$lista}}
        </ul>
    </div>
</div>    