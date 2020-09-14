<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>App - To Do List</title>

  <!-- Bootstrap core CSS -->
  <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

  {{-- Animate --}}
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
  {{-- Ajax --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  {{-- SweetAlert --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    {{-- <x-sideBarOne>
            
    </x-sideBarOne> --}}
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <x-navBarOne>
          @slot('name')
            {{$user}}
          @endslot
        </x-navBarOne>

        <div class="container-fluid">
          <div class="row d-flex justify-content-end">
            <ul class="list-group" style="width: 18rem; margin:10px;">
              <li class="list-group-item text-center">
                  <button class="btn btn-light" id="inserirListaDeEvento" data-toggle="modal" data-target="#modalInserirLista">
                      Adicionar Lista
                  </button>
              </li>
          </ul>
  
          </div>
        </div>

        <br>
        @yield('body')

        <div class="container-fluid">
            <footer>
                
            </footer> 
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    <x-modalEditEvent>
      
    </x-modalEditEvent>

    <x-modalInsertEvent>
      
    </x-modalInsertEvent>

    <x-modalInsertList>
      
    </x-modalInsertList>
  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="/jquery/jquery.min.js"></script>
  <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>

  {{-- Meus Scripts --}}
  <script src="/js/card.js"></script>
  <script src="/js/menu.js"></script>
  <script src="/js/modalEdit.js"></script>
  <script src="/js/inserirEvent.js"></script>
  <script src="/js/deleteEvent.js"></script>
  <script src="/js/inserirLista.js"></script>
  <script src="/js/deleteLista.js"></script>
  <script src="/js/sair.js"></script>

</body>

</html>
