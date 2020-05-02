<div class="card" style="width: 18rem;">
    <div class="card-body">
        {{-- <h5 class="card-title">{{$item->titulo}}</h5> --}}
        {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
        <p class="card-text text-center">{{$titulo}}</p>
        <div class="text-center">
            <a href="{{$rotaMarcarDesmarca}}" class="card-link">
                {{$event}}
            </a>
            <a href="{{$rotaEditar}}" class="card-link">Editar</a>
            <a href="{{$rotaExcluir}}" class="card-link">Excluir</a>
        </div>
        
    </div>
</div>