<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <link rel="shortcut icon" href="/images/Logo-azul-small.png">
    <!-- Title Page-->
    <title>Inicio Calendar+</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{asset('medico/css/style.css')}}">
    <!-- Bootstrap CSS-->
    <link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/vector-map/jqvmap.min.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">
    @laravelPWA
    
</head>
<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="/home">
                    <img src="{{asset('images/Logo-azul-small.png')}}" alt="Calendar+" class="img-fluid" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        @if(Auth::user()->foto==null)
                            <img src="/avatars/default.png" alt="{{Auth::user()->name}} {{Auth::user()->apellido}}" />
                        @else
                            <img src="/avatars/{{Auth::user()->foto}}" alt="{{Auth::user()->name}} {{Auth::user()->apellido}}" />
                        @endif
                    </div>
                    <h4 class="name">{{Auth::user()->name}} {{Auth::user()->apellido}}</h4>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="/home">
                                <i class="fa fa-home"></i> Inicio
                            </a>
                        </li>
                        @if(Auth::user()->hasRole('admin'))
                            <li>
                                <a href="/roles">
                                    <i class="fa fa-universal-access" aria-hidden="true"></i> Roles
                                </a>
                            </li>
                            <li>
                                <a href="/usuarios">
                                    <i class="fa fa-users" aria-hidden="true"></i> Usuarios
                                </a>
                            </li>
                            <li>
                                <a href="/farmacias">
                                    <i class="fa fa-medkit" aria-hidden="true"></i> Farmacias
                                </a>
                            </li>
                        @else
                            <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Mis datos medicos
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="/medicamentos">
                                            <i class="fas fa-tachometer-alt"></i>Mis medicamentos</a>
                                    </li>
                                    <li>
                                        <a href="/rutinas">
                                            <i class="fas fa-tachometer-alt"></i>Mis rutinas</a>
                                    </li>
                                    <li>
                                        <a href="/sintomas">
                                            <i class="fas fa-tachometer-alt"></i>Mis sintomas</a>
                                    </li>
                                    <li>
                                        <a href="/tratamiento">
                                            <i class="fas fa-tachometer-alt"></i>Tratamientos</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/tratamiento">
                                    <i class="fas fa-chart-bar"></i>Nuevo tratamiento</a>
                            </li>
                            <li>
                                <a href="/busquedafarmacia">
                                    <i class="fas fa-shopping-basket"></i>Buscar farmacias</a>
                            </li>
                        @endif
                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn_2 btn-block">Cerrar sesión</button>
                                </form>
                            </li>                    
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="/home">
                                    <img src="images/Logo-azul-small.png" alt="Calendar+" />
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item has-noti js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>Disponible en la siguiente versión de Calendar+</p>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>Una nueva notificación</p>
                                                <span class="date">16/07/2020, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__footer">
                                            <a href="#">Todas las notificaciones</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="/miPerfil/{{Auth::user()->slug}}">
                                                <i class="zmdi zmdi-account"></i>Mi cuenta</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="/configuracion/{{Auth::user()->slug}}">
                                                <i class="zmdi zmdi-settings"></i>Configuración</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="/generar-historial/{{Auth::user()->slug}}">
                                                <i class="zmdi zmdi-pin"></i>Generar Historial <span class="badge badge-danger pull-right">En desarrollo</span></a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-pin"></i>Mi ubicación <span class="badge badge-danger pull-right">Proximamente...</span></a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-notifications"></i>Notificaciones <span class="badge badge-danger pull-right">Proximamente...</span></a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn_2 btn-block">Cerrar sesión</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="images/icon/logo-white.png" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            @if(Auth::user()->foto==null)
                            <img src="/avatars/default.png" alt="{{Auth::user()->name}} {{Auth::user()->apellido}}" />
                            @else
                                <img src="/avatars/{{Auth::user()->foto}}" alt="{{Auth::user()->name}} {{Auth::user()->apellido}}" />
                            @endif
                        </div>
                        <h4 class="name">{{Auth::user()->name}} {{Auth::user()->apellido}}</h4>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            @if(Auth::user()->hasRole('admin'))
                            <li>
                                <a href="/home">
                                    <i class="fa fa-home"></i> Inicio
                                </a>
                            </li>
                            <li>
                                <a href="/roles">
                                    <i class="fa fa-universal-access" aria-hidden="true"></i> Roles
                                </a>
                            </li>
                            <li>
                                <a href="/usuarios">
                                    <i class="fa fa-users" aria-hidden="true"></i> Usuarios
                                </a>
                            </li>
                            <li>
                                <a href="/farmacias">
                                    <i class="fa fa-medkit" aria-hidden="true"></i> Farmacias
                                </a>
                            </li>
                            @else
                            <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Mis datos medicos
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="/medicamentos">
                                            <i class="fas fa-tachometer-alt"></i>Mis medicamentos</a>
                                    </li>
                                    <li>
                                        <a href="/rutinas">
                                            <i class="fas fa-tachometer-alt"></i>Mis rutinas</a>
                                    </li>
                                    <li>
                                        <a href="/sintomas">
                                            <i class="fas fa-tachometer-alt"></i>Mis sintomas</a>
                                    </li>
                                    <li>
                                        <a href="/tratamiento">
                                            <i class="fas fa-tachometer-alt"></i>Tratamientos</a>
                                    </li>
                                </ul>
                                </li>
                                <li>
                                    <a href="/busquedafarmacia">
                                    <i class="fas fa-shopping-basket"></i>Buscar farmacias</a>
                                </li>
                                <li>
                                    <a href="/tratamiento">
                                    <i class="fas fa-chart-bar"></i>Nuevo tratamiento</a>
                                </li>
                                    @endif
                                    <div class="account-dropdown__item">
                                        <a href="/miPerfil/{{Auth::user()->slug}}">
                                            <i class="zmdi zmdi-account"></i>Mi cuenta</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="/configuracion/{{Auth::user()->slug}}">
                                            <i class="zmdi zmdi-settings"></i>Configuración</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn_2 btn-block">Cerrar sesión</button>
                                        </form>
                                    </div>
                                </ul>
                            </li>
                    </nav>
                </div>
            </aside>
            <section>   
                @yield('content')
            </section>
            
        
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2020 Calendar+. All rights reserved..</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- EMD PAGE CONTAINER-->
    </div>
</div>
    <!-- Jquery JS-->
    <script src="{{asset('vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/select2/select2.min.js')}}">
    </script>
    <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js" ></script>
    <script src="{{asset('js/jquery.validate.js')}}"></script>

    <!-- Main JS-->
    <script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/sweetalert.min.js')}}"></script>
    @yield('datatables')
    @yield('validator')
    @include('sweet::alert')
</body>
</html>
