<nav class="navbar navbar-expand-lg border-bottom bg-info">
    {{-- <button class="btn btn-dark" id="menu-toggle">
        <i class="fas fa-bars"></i>
    </button> --}}
    <h3 class="">App To-Do list</h3>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        {{--<li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>--}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{$name}}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <button id="sair" class="btn dropdown-item">Sair</button>
            <div class="dropdown-divider"></div>
            </div>
        </li>
    </ul>
    </div>
</nav>