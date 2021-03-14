@extends('layouts.calendar')
@section('content')
<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
  <div class="container d-flex">
    <div class="contact-info mr-auto">
      <i class="icofont-envelope"></i> <a href="mailto:thcrewnet@gmail.com">thcrewnet@gmail.com</a>
      <i class="icofont-phone"></i> +5614053241
      <i class="icofont-google-map"></i> Universidad Tecnológica de Nezahualcoyotl, Nezahualcóyotl. Edo.Méx.
    </div>
    <div class="social-links">
      <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
      <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
      <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
      <a href="#" class="skype"><i class="icofont-skype"></i></a>
      <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
    </div>
  </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
<div class="container d-flex align-items-center">

  <h1 class="logo mr-auto"><a href="index.html">Calendar+</a></h1>
  <!-- Uncomment below if you prefer to use an image logo -->
  <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

  <nav class="nav-menu d-none d-lg-block">
    <ul>
      <li class="active"><a href="/">Inicio</a></li>
      <li><a href="/condiciones-de-uso">Condiciones de uso</a></li>
      <li><a href="/politicas">Politicas</a></li>
      <li><a href="/register">Registrarse</a></li>
      <li><a href="/login">Iniciar sesión</a></li>
    </ul>
  </nav><!-- .nav-menu -->
</div>
</header>
<!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container">
    <h1>Bienvenido a Calendar+</h1>
    <h2>El aliado de tu salud.</h2>
    <a href="/register" class="btn-get-started scrollto">Registrarse</a>
  </div>
</section><!-- End Hero -->

<main id="main">
  <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Objetivo</h3>
              <p>
                El objetivo del proyecto Calendar+ es brindar un seguimiento a los medicamentos ingeridos por los pacientes.
              </p>
              <div class="text-center">
                <a href="/register" class="more-btn">Registrarse <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Genere un historial</h4>
                    <p>La aplicación le permitirá generar un historial, con los medicamentos que ha consumido y sus sintomas.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Al alcance de su mano</h4>
                    <p>Solo necesita un dispositivo conectado a internet.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>No olvide sus medicamentos</h4>
                    <p>Agregue foto a sus medicamentos para que los confunda u olvide.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
</main>
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Calendar+</h3>
            <p>
              S/N Universidad Tecnológica de Nezahualcóyotl <br>
              Ciudad Neza, EDOMEX 57000<br>
              México <br><br>
              <strong>Telefono:</strong> 5614053241<br>
              <strong>Email:</strong> thcrewnet@gmail.co<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Enlaces de interés</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/condiciones-de-uso">Condiciones de uso</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/politicas">Politicas</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/register">Registrarse</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/login">Iniciar sesión</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Otros enlaces</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://github.com/PortgasDFer/CalendarPlus">Repositorio del proyecto</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>The Crew</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Con la ayuda de: <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
@endsection