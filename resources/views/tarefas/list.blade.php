@extends('templates.templateOne')

@section('body')
    <h1>Listagem de tarefas</h1>
    <a href="{{route('tarefas.add')}}">Adicionar nova tarefa</a>
    <div class="container">
        <div class="row">
            @if(count($list) > 0)
                    @foreach ($list as $item)
                        <div class="col-md-3">
                            <x-cardOne>
                                @if($item->resolvido === 1) 
                                    @slot('event')
                                        desmarcar
                                    @endslot
                                    
                                @else 
                                    @slot('event')
                                        marcar 
                                    @endslot
                                @endif
                                
                                @slot('titulo')
                                    {{$item->titulo}}
                                @endslot
                                @slot('rotaMarcarDesmarca')
                                    {{route('tarefas.done',['id' => $item->id])}}
                                @endslot
                                @slot('rotaEditar')
                                    {{route('tarefas.edit',['id' => $item->id])}}
                                @endslot
                                @slot('rotaExcluir')
                                    {{route('tarefas.del',['id' => $item->id])}}
                                @endslot
                            </x-cardOne>
                        </div>
                    @endforeach
            @else
                <h2>Não a itens para ser listados</h2>
            @endif
        </div>
    </div>
@endsection
