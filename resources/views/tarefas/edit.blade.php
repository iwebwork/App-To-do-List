<h1>Edição de tarefas</h1>
<form method="POST" action="">
    @csrf

    <label>Titulo</label><br/>
    <input value="{{$data->titulo}}" type="text" name="titulo"/>
    <input type="submit" value="Salvar"/>
</form>

@if(session('aviso'))
   <x-alert>
        @slot('titulo')
            Aviso
        @endslot
        {{session('aviso')}}
   </x-alert>
@endif