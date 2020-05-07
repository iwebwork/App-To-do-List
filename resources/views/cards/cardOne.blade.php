<div class="card bg-light" style="width: 18rem;">
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$titulo}}</h5>
                <button type="button" class="btn btn-warning btn-md" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v" aria-hidden="false"></i>
                </button>
            </div>
        </ul>
    </div>
    <ul class="list-group list-group-flush">
        {{$lista}}
    </ul>
</div>