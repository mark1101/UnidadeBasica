<html>

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{asset('img/icone1.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        ComunityHelth
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="{{asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons')}}" />
    <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}">
    <!-- CSS Arquivos -->
    <link href="{{asset('css/material-dashboard.css')}}" rel="stylesheet" />

</head>

<body>
<div class="wrapper ">

    <div class="sidebar" style="right: 0;" data-color="purple" data-background-color="white" data-image="{{asset('img/unidade.jpg')}}">
        <div class="logo"><a href="#" class="simple-text logo-normal">
                Unidade São José
            </a></div>
        <div class="sidebar-wrapper ">
            <ul class="nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('inicio')}}">
                        <i class="material-icons">home_work</i>
                        <p>Início</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('paciente')}}">
                        <i class="material-icons">person
                        </i>
                        <p>Paciente</p>
                    </a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">content_paste</i>
                        Exames
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('cadastroExame')}}">Novo Exame</a>
                        <a class="dropdown-item" href="{{route('buscarExame')}}">Buscar Exames </a>
                    </div>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="{{route('buscarExame')}}">
                        <i class="material-icons">content_paste
                        </i>
                        <p>Buscar Exames</p>
                    </a>
                </li>

                <li class="nav-item  ">
                    <a class="nav-link" href="#">
                        <i class="material-icons">attach_file
                        </i>
                        <p>Recados</p>
                    </a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">insert_comment</i>
                        Comunicação
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Médico</a>
                        <a class="dropdown-item" href="#">Enfermeiro</a>
                        <a class="dropdown-item" href="#">Transporte</a>
                        <a class="dropdown-item" href="#">Recepção</a>
                        <a class="dropdown-item" href="#">Administrador</a>
                    </div>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="./paciente.html">
                        <i class="material-icons">history
                        </i>
                        <p>Histórico dos Pacientes</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- content -->
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- content -->

</div>

<!--   Core JS Files   -->
<script src="{{asset('js/core/jquery.min.js')}}"></script>
<script src="{{asset('js/core/popper.min.js')}}"></script>
<script src="{{asset('js/core/bootstrap-material-design.min.js')}}"></script>
<script src="{{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!-- Plugin for the momentJs  -->
<script src="{{asset('assets/js/plugins/moment.min.js')}}"></script>
<!--  Plugin for Sweet Alert -->
<script src="{{asset('js/plugins/sweetalert2.js')}}"></script>
<!-- Forms Validations Plugin -->
<script src="{{asset('js/plugins/jquery.validate.min.js')}}"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{asset('js/plugins/jquery.bootstrap-wizard.js')}}"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{asset('js/plugins/bootstrap-selectpicker.js')}}"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{asset('js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{asset('js/plugins/bootstrap-tagsinput.js')}}"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{asset('js/plugins/jasny-bootstrap.min.js')}}"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{asset('js/plugins/fullcalendar.min.js')}}"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{asset('js/plugins/jquery-jvectormap.js')}}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('js/plugins/nouislider.min.js')}}"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js')}}"></script>
<!-- Library for adding dinamically elements -->
<script src="{{asset('js/plugins/arrive.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="{{asset('https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE')}}"></script>
<!-- Chartist JS -->
<script src="{{asset('js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('js/material-dashboard.js?v=2.1.2')}}" type="text/javascript"></script>
</body>

</html>
