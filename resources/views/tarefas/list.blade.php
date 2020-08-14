@extends('templates.templateOne')

@section('body')
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            @foreach ($card as $itens)
                <div class="card-group">
                    <x-cardOne>
                        @slot('id')
                            {{$itens->id}}
                        @endslot
                        @slot('titulo')
                            {{$itens->nome}}
                        @endslot
                        @slot('lista')
                            @if(count($list) > 0)
                                @foreach ($list as $lista)
                                    @if($lista->id_card === $itens->id)
                                        <x-listCardOne>
                                            @slot('id')
                                                {{$lista->id}}
                                            @endslot
                                            @slot('titulo')
                                                {{$lista->titulo}}
                                            @endslot
                                            @slot('routEvento')
                                                {{route('tarefas.done',['id' => $lista->id])}}
                                            @endslot
                                            @slot('rotaEditar')
                                                {{route('tarefas.edit',['id' => $lista->id])}}
                                            @endslot
                                            @slot('rotaExcluir')
                                                {{route('tarefas.del',['id' => $lista->id])}}
                                            @endslot
                                        </x-listCardOne>
                                    @endif
                                @endforeach
                            @else
                                <h2>Não a itens para ser listados</h2>
                            @endif
                        @endslot
                    </x-cardOne>
                </div>
            @endforeach
        </div>
    </div>
@endsection
