<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SafeTrip</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
  <link rel="manifest" href="{{ asset('site.webmanifest') }}">
  <meta name="theme-color" content="#0d17d1ff">

  <!-- Open Graph & Twitter (améliore l'affichage lors du partage / indexation) -->
  <meta property="og:site_name" content="HOBBIES AGENCY">
  <meta property="og:title" content="HOBBIES AGENCY">
  <meta property="og:description" content="Agence événementielle et voyages — Hobbies Agency">
  <meta property="og:image" content="{{ asset('favicon-512.png') }}">
  <meta property="og:image:width" content="512">
  <meta property="og:image:height" content="512">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:image" content="{{ asset('favicon-512.png') }}">




<!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">



  <!-- =======================================================
  * Template Name: Sailor
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">




      <!-- <h1 class="logo me-auto"><a href="index">HOBBIES AGENCY</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar navbar-expand-lg p-0 w-100">
        <a class="navbar-brand d-flex align-items-center me-auto" href="{{ url('/') }}">
          <img src="{{ asset('images/safetrip.jpg') }}" alt="SafeTrip" class="img-fluid logo-image">
        </a>

        <button id="navbarToggler" class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="bi-list" style="font-size:1.25rem"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
          <ul class="navbar-nav align-items-center">
            <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Accueil</a></li>
            <li class="nav-item"><a class="nav-link btn btn-primary ms-2" href="#fonctionnalite" style="color: blue;">Qui Sommes Nous ?</a></li>
            <li class="nav-item"><a class="nav-link btn btn-primary ms-2" href="#fonctionnalitee">Nos Avantages</a></li>
            <li class="nav-item"><a class="nav-link btn btn-primary ms-2" href="#residence">Nos Résidences</a></li>
            <li class="nav-item"><a class="nav-link btn btn-primary ms-2" href="#testimonials">Témoignages</a></li>
            <li class="nav-item"><a class="nav-link btn btn-primary ms-2" href="#contacteznous">Contactez-nous</a></li>
          </ul>
        </div>
      </nav>




    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->


  <main id="main">

    @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">

              <h3>
                {{-- <img src="{{ asset('images/logo_fp/logo-fuelPay-64x64.png') }}" alt="Logo Fuelpay"> --}}

              </h3>
              <p>
               <strong>Côte d'Ivoire</strong> <br>
               Abidjan, Cote d'Ivoire<br>
                <strong> 01BP 2140- Abidjan 01</strong><br>
                <strong>Telephone : +225 0501914649</strong> <br>


                <strong>Email : Mariemicheleeffi222@gmail.com </strong> <br>
              </p>
              <div class="social-links mt-3">

                <a href="https://www.facebook.com/profile.php?id=61574046737190" class="facebook"><i class="bx bxl-facebook"></i></a>

                <a href="https://wa.me/message/3HKDYS6DBJADK1" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>



              </div>
            </div>
          </div>

          <div style="margin-left: 760px" class="col-lg-2 col-md-6 footer-links">
            <h4>Liens</h4>
            <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Acceuil</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#fonctionnalite">Qui Sommes Nous ?</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#fonctionnalitee">Nos Avantages</a></li>


            <li><i class="bx bx-chevron-right"></i> <a href="#testimonials ">Témoignages</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#contacteznous ">Contactez-Nous</a></li>
            </ul>
          </div>

          {{-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a >Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a>Marketing</a></li>

            </ul>
          </div> --}}

          <div style="margin-left: 225px" class="col-lg-4 col-md-6 footer-newsletter">

          </div>


        </div>
      </div>
    </div>

    <!-- <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Sailor</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div> -->
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short" style="background-color: white"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/waypoints/noframework.waypoints.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const toggler = document.getElementById('navbarToggler');
      const collapseEl = document.getElementById('mainNavbar');
      const navLinks = Array.from(document.querySelectorAll('#mainNavbar .nav-link'));
      let bsCollapse = null;

      // Initialise l'instance Bootstrap Collapse si disponible
      try {
        if (typeof bootstrap !== 'undefined' && bootstrap.Collapse) {
          bsCollapse = bootstrap.Collapse.getOrCreateInstance(collapseEl, { toggle: false });
        }
      } catch (e) {
        bsCollapse = null;
      }

      // Toggler : utilise Bootstrap si possible, sinon fallback CSS
      if (toggler) {
        toggler.addEventListener('click', function (e) {
          e.preventDefault();
          if (bsCollapse) {
            if (collapseEl.classList.contains('show')) bsCollapse.hide();
            else bsCollapse.show();
            this.setAttribute('aria-expanded', String(!collapseEl.classList.contains('show')));
          } else {
            collapseEl.classList.toggle('show');
            const expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', String(!expanded));
          }
        });
      }

      // Ferme le menu après clic sur lien (mobile)
      navLinks.forEach(link => {
        link.addEventListener('click', () => {
          try {
            if (bsCollapse) bsCollapse.hide();
            else collapseEl.classList.remove('show');
            if (toggler) toggler.setAttribute('aria-expanded', 'false');
          } catch (err) {
            collapseEl.classList.remove('show');
            if (toggler) toggler.setAttribute('aria-expanded', 'false');
          }
        });
      });
    });
  </script>
  <style>
  /* maintien des règles générales existantes */
  html, body { max-width:100%; overflow-x:hidden; }
  .logo-image { max-width: 48vw; height: auto; }

  /* spécifique navbar : on ne cache plus #navbar ul globalement */
  #header .container { display: flex; align-items: center; gap: 16px; }
  #navbar { display: flex; align-items: center; width: 100%; position: relative; }
  #navbar > a { display: flex; align-items: center; text-decoration: none; }
  .logo-image { height: 64px; width: auto; max-width: 220px; object-fit: contain; }

  /* desktop nav */
  .navbar-nav { display: flex; gap: 18px; align-items: center; }

  /* MOBILE OVERRIDES - permet au collapse de contrôler l'affichage */
  @media (max-width: 768px) {
    /* cache la navbar-collapse par défaut, mais Bootstrap ajoute .show */
    #mainNavbar { display: none; }
    #mainNavbar.show {
      display: block !important;
      position: absolute;
      top: calc(100% + 8px);
      left: 0;
      right: 0;
      z-index: 1050; /* au-dessus du contenu */
    }

    /* menu vertical quand open */
    #mainNavbar .navbar-nav {
      display: flex !important;
      flex-direction: column;
      gap: 0;
      background: #fff;
      padding: 8px 6px;
      box-shadow: 0 8px 26px rgba(0,0,0,0.12);
      border-radius: 6px;
      margin: 0 12px;
    }

    #mainNavbar .nav-link {
      padding: 10px 14px;
      color: #333 !important;
      border-radius: 6px;
    }

    /* rendre l'icône toggler visible */
    .navbar-toggler { display: block; margin-left: 12px; }
  }

  /* sécurité : éviter que d'anciennes règles masquent le menu */
  .navbar-collapse.show .navbar-nav { display: flex !important; }
</style>

</body>

</html>
