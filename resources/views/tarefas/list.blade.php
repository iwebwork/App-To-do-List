@extends('templates.templateOne')

@section('body')
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            @foreach ($cards as $card)
                <div class="card-group">
                    <x-cardOne>
                        @slot('id')
                            {{$card['id']}}
                        @endslot
                        @slot('titulo')
                            {{$card['nome']}}
                        @endslot
                        @slot('lista')
                            @if(!empty($tarefas))
                                @foreach ($tarefas as $lista)
                                    @foreach ($lista as $item)
                                        <?php //print_r($item[]); ?>
                                        @if($item['id_card'] == $card['id'])
                                            <x-listCardOne>
                                                @slot('id')
                                                    {{$item['id']}}
                                                @endslot
                                                @slot('titulo')
                                                    {{$item['titulo']}}
                                                @endslot
                                            </x-listCardOne>
                                        @endif
                                    @endforeach                                    
                                    
                                @endforeach
                            @else
                                <h6>Não a itens para ser listados</h6>
                            @endif         
                            
                        @endslot
                    </x-cardOne>
                </div>
            @endforeach
        </div>
    </div>
@endsection
