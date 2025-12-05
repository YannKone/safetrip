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

      <nav id="navbar" class="navbar">
        <a href="index">
      <img src="{{ asset('/images/safetrip.jpg') }}" alt="Logo Fuelpay" class="img-fluid me-2 logo-image">
    </a>
        <ul>
          <li><a href="#" class="active" style="color: #0d17d1ff;">Acceuil</a></li>
        <li><a href="#fonctionnalite" class="active" style="color: #0d17d1ff";>Qui Sommes Nous ?</a></li>

        <li><a href="#fonctionnalitee" class="scrollto" style="color: #0d17d1ff";>Nos Avantages</a></li>

          <li><a href="#testimonials" style="color: #0d17d1ff">Témoignages</a></li>
          <li><a href="#contacteznous" style="color: #0d17d1ff">Contactez-nous</a></li>


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
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

  <!-- DataTables JS -->
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready(function() {
      $('#userEmailsTable').DataTable();
  });
  </script>

</body>

</html>
<style>


    /* Corrections anti-overflow mobile */
html, body { max-width:100%; overflow-x:hidden; }

/* Sécurise les conteneurs */
.container, header, section, .carousel, .portfolio-container {
  box-sizing: border-box;
  max-width:100%;
}

/* Carousel background responsive */
.carousel-item {
  background-size: cover !important;
  background-position: center center !important;
}

/* Logo responsive (évite qu'il pousse le layout) */
.logo-image { max-width: 48vw; height: auto; }

/* Éléments à largeur fixe : rendre flexibles */
.main-image-container { width: 100% !important; max-width: 400px; }
.tpe-container { flex-wrap: wrap !important; }
.description { margin-left: 0 !important; width: 100% !important; }

/* Menu mobile : forcer affichage correct */
#navbar ul { margin-left: auto !important; }

/* Empêche les éléments inline ou styles fixes de casser le layout */
*[style*="width: 400px"], *[style*="width:400px"], *[style*="margin-left:280px"] {
  max-width: 100% !important;
  margin-left: 0 !important;
}

/* Images : toujours adaptatives */
img, .portfolio-wrap img, .act-card img { max-width:100%; height:auto; display:block; }

/* si besoin : retirer overflow caché seulement si tout le reste échoue */
/* body { overflow-x: hidden !important; } */

  /* --- Positionnement du logo et du menu --- */
  #header .container { display: flex; align-items: center; gap: 16px; }

  #navbar { display: flex; align-items: center; width: 100%; }

  /* logo (à gauche) */
  #navbar > a { display: flex; align-items: center; text-decoration: none; }
  .logo-image {
    height: 84px;        /* hauteur du logo sur desktop */
    width: auto;
    max-width: 320px;
    object-fit: contain;
  }

  /* menu (poussé à droite) */
  #navbar ul {
    margin-left: auto !important; /* override du style inline */
    display: flex;
    gap: 18px;
    list-style: none;
    padding: 0;
    align-items: center;
  }
  #navbar ul li { margin: 0; }
  #navbar ul li a { display: inline-block; padding: 8px 10px; color: inherit; text-decoration: none; }

  /* mobile / tablettes */
  @media (max-width: 992px) {
    .logo-image { height: 64px; max-width: 240px; }
    #navbar ul { gap: 12px; }
  }
  @media (max-width: 576px) {
    .logo-image { height: 48px; max-width: 160px; }
    #navbar ul { display: none; } /* garde le toggle mobile pour afficher le menu */
  }

  /* conserve l'effet fade-in existant */
  .fade-in { opacity: 0; transition: opacity 1s ease-in-out; }
  .fade-in.appear { opacity: 1; }

    /* Mobile menu fixes */
  #header .container { position: relative; display: flex; align-items: center; gap: 12px; }

  #navbar { display: flex; align-items: center; width: 100%; position: relative; }

  /* logo */
  #navbar > a { display: flex; align-items: center; }
  .logo-image { height: 64px; width: auto; max-width: 220px; object-fit: contain; }

  /* navigation desktop */
  #navbar ul {
    margin-left: auto !important;
    display: flex;
    gap: 18px;
    list-style: none;
    padding: 0;
    align-items: center;
  }

  /* mobile toggle icon */
  .mobile-nav-toggle { display: none; font-size: 26px; cursor: pointer; color: #333; margin-left: 12px; }

  /* mobile behavior */
  @media (max-width: 768px) {
    .logo-image { height: 52px; max-width: 180px; }

    /* hide horizontal menu */
    #navbar ul { display: none; }

    /* show toggle */
    .mobile-nav-toggle { display: block; margin-left: auto; }

    /* when menu open */
    #navbar.navbar-mobile ul {
      display: flex;
      flex-direction: column;
      gap: 0;
      position: absolute;
      top: calc(100% + 8px);
      left: 0;
      right: 0;
      background: #fff;
      padding: 12px 8px;
      box-shadow: 0 8px 26px rgba(0,0,0,0.12);
      z-index: 99999;
    }

    /* style mobile links */
    #navbar.navbar-mobile ul li { width: 100%; }
    #navbar.navbar-mobile ul li a {
      display: block;
      padding: 10px 14px;
      color: #333;
      border-radius: 6px;
    }

    /* ensure header doesn't clip dropdown */
    header.fixed-top { z-index: 10000; }
  }

  /* small safety: avoid inline margin-left breaking layout */
  *[style*="margin-left:280px"] { margin-left: 0 !important; }

</style>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const sections = document.querySelectorAll('.fade-in');

    function checkVisibility() {
        sections.forEach(section => {
            const rect = section.getBoundingClientRect();
            const windowHeight = window.innerHeight || document.documentElement.clientHeight;

            if (rect.top <= windowHeight && rect.bottom >= 0) {
                section.classList.add('appear');
            }
        });
    }

    window.addEventListener('scroll', checkVisibility);
    window.addEventListener('resize', checkVisibility);
    checkVisibility();  // Vérifie la visibilité dès le chargement
});

</script>
