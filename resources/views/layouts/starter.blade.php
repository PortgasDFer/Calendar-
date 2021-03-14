<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Calendar+</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="medico/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="medico/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="medico/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="medico/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="medico/css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="medico/css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="medico/css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="medico/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="medico/css/style.css">
    @laravelPWA
</head>
<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/"> <img src="images/Logo-azul.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/acerca">Acerca de nosotros</a>
                                </li>
                                <li class="nav-item">
                                    @guest
                                        <a class="btn_2 d-none d-lg-block" href="{{ route('register') }}">Registrarse</a>
                                        &nbsp;
                                        <a class="btn_2 d-none d-lg-block" href="{{ route('login') }}">Iniciar sesión</a>
                                    @else
                                     <a href="{{ url('/home') }}" class="btn_2 d-none d-lg-block">Inicio</a>
                                     &nbsp;
                                 
                                </li>
                                <li class="nav-item">
                                    <a class="btn_2 d-none d-lg-block" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    @endguest
                                </li>
                               
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
    <!--Cabecera-->
    <section class="banner_part">
        <div class="container">
            @yield('contenido')
        </div>
    </section>
    <!-- footer part start-->
    <footer class="footer-area">
        <div class="footer section_padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-md-4 col-sm-6 single-footer-widget">
                        <a href="#" class="footer_logo"> <img src="images/Logo-azul.png" alt="#"> </a>
                        <p>Siganos en todas nuestras redes sociales </p>
                        <div class="social_logo">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"> <i class="ti-twitter"></i> </a>
                            <a href="#"><i class="ti-instagram"></i></a>
                            <a href="#"><i class="ti-skype"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4>Acceso rapido</h4>
                        <ul>
                            <li><a href="/acerca">Acerca de nosotros</a></li>
                            <li><a href="/register">Registrarse</a></li>
                            <li><a href="/login">Iniciar sesión</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4>Explorar</h4>
                        <ul>
                            <li><a href="#">Mi comunidad</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-6 single-footer-widget">
                        <h4>Otros proyectos</h4>
                        <ul>
                            <li><a href="#">link 1</a></li>
                            <li><a href="#">link 2</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-md-6 single-footer-widget">
                        The crew
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- footer part end-->

    
    <!-- jquery plugins here-->

    <script src="medico/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="medico/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="medico/js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="medico/js/owl.carousel.min.js"></script>
    <script src="medico/js/jquery.nice-select.min.js"></script>
    <!-- contact js -->
    <script src="medico/js/jquery.ajaxchimp.min.js"></script>
    <script src="medico/js/jquery.form.js"></script>
    <script src="medico/js/jquery.validate.min.js"></script>
    <script src="medico/js/mail-script.js"></script>
    <script src="medico/js/contact.js"></script>
    <!-- custom js -->
    <script src="medico/js/custom.js"></script>
</body>
</html>