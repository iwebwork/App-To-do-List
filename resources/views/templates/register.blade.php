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

    <div class="container-fluid login-container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 login-form-1">
                <h3>Criar Usuario</h3>
                <form id="register" method="POST">
                    @csrf
                    <div class="form-group">
                        <input id="nome" type="text" class="form-control" placeholder="Digite seu nome..." value="" />
                    </div>
                    <div class="form-group">
                        <input id="email" type="email" class="form-control" placeholder="Email..." value="" />
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control" placeholder="Senha..." value="" />
                    </div>
                    <div class="form-group">
                        <input id="password_confirmation" type="password" class="form-control" placeholder="Confime sua senha..." value="" />
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <input type="submit" class="btnSubmit" value="Cadastrar" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <link href="css/login.css" rel="stylesheet">  

    <!-- Bootstrap core JavaScript -->
    <script src="/jquery/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>

    {{-- Meus Scripts --}}
    <script src="/js/register.js"></script>

</body>

</html>
