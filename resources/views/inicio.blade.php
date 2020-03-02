@extends('layout.layoutInicio');

<div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">

                <!-- BOTAO DE RESPONSIVIDADE PARA OPCIOES DE SIDEBAR-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>

                <!-- TOPO EM CIMA PARA OPCAO DE SAIDA E CONFIGURAÇÃOES DE PERFIL E SISTEMA  -->
                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form"></form>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="javascript:;" id="navbarDropdownProfile"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">short_text</i>
                                <p class="d-lg-none d-md-block">
                                    Configuração
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" >Log out</a>
                                <form action="{{ route('logout') }}" method="get"></form>
                            </div>
                        </li>
                    </ul>
                </div>
            <div>
        </nav>
</div>
        
        <br>
        <br>

@section('content')

    



                <h1 align="center">Bem Vindo</h1>

        

        
        <footer class="footer">
            <div class="container-fluid">
            
            </div>
        </footer>
    </div>
@endsection
