<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>App - To Do List</title>
  <link rel="icon" href="https://image.flaticon.com/icons/png/512/1/1560.png">

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
    <div class="container-fluid login-container" style="margin-top: 1%; padding:0;">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 login-form-1">
                <h3 class="text-dark">Esqueceu a senha?</h3>
                <form method="POST" id="formForgotPassword">
                    @csrf
                    <div class="form-group">
                        <label>Nome:</label>
                        <input id="name" type="text" class="form-control" placeholder="Seu nome..." value="" />
                    </div>
                    
                    <div class="form-group d-flex justify-content-center">
                        <button id="btnForgotPassword" type="submit" class="btnSubmit btn-success" value="Verificar">Verificar</button>
                    </div>
                    <div class="form-group d-flex justify-content-center btn-success shadow p-3 mb-5 rounded">
                        <a class="btnForgetPwd" href="/login">Login</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <x-modalForgotPassword></x-modalForgotPassword>


    
    <link href="css/login.css" rel="stylesheet">  

    <!-- Bootstrap core JavaScript -->
    <script src="/jquery/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>

    {{-- Meus Scripts --}}
    <script src="/js/forgotPassword.js"></script>

</body>

</html>
