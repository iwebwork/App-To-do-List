<h1>Adição de tarefas</h1>

<form method="POST">
    @csrf

    <label>Titulo</label><br/>
    <input type="text" name="titulo"/>
    <input type="submit" value="Enviar"/>
</form>

@if(session('aviso'))
   <x-alert>
        @slot('titulo')
            Aviso
        @endslot
        {{session('aviso')}}
   </x-alert>
@endif