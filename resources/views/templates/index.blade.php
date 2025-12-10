
@extends('layout')


{{-- @section('title', 'index') --}}
@section('content')
<!-- Splash screen / écran d'accueil -->
<style>

.hero-video {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100%;
  height: 100%;
  object-fit: cover;
  transform: translate(-50%, -50%);
  z-index: 0;
  pointer-events: none; /* évite d'intercepter les clics */
}

/* placer le contenu par-dessus la vidéo */
.carousel-item { position: relative; overflow: hidden; min-height: 420px; }
.carousel-item .carousel-container,
.carousel-item .container { position: relative; z-index: 2; }

.olcards,
.olcards * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.olcards {
  list-style: none;
  counter-reset: cardCount;
  font-family: sans-serif;
  display: flex;
  flex-direction: column;
  --cardsGap: 1rem;
  gap: var(--cardsGap);
  padding-bottom: var(--cardsGap);
}
.olcards li {
  counter-increment: cardCount;
  display: flex;
  color: white;
  --labelOffset: 1rem;
  --arrowClipSize: 1.5rem;
  margin-top: var(--labelOffset);
}

.olcards li::before {
  content: counter(cardCount, decimal-leading-zero);
  background: white;
  color: var(--cardColor);
  font-size: 2em;
  font-weight: 700;
  transform: translateY(calc(-1 * var(--labelOffset)));
  margin-right: calc(-1 * var(--labelOffset));
  z-index: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  padding-inline: 0.5em;
}

.olcards li .content {
  background-color: var(--cardColor);
  --inlinePadding: 1em;
  --boxPadding: 0.5em;
  display: grid;
  padding: var(--boxPadding) calc(var(--inlinePadding) + var(--arrowClipSize))
    var(--boxPadding) calc(var(--inlinePadding) + var(--labelOffset));
  grid-template-areas:
    "icon title"
    "icon text";
  gap: 0.25em 1em;
  clip-path: polygon(
    0 0,
    calc(100% - var(--arrowClipSize)) 0,
    100% 50%,
    calc(100% - var(--arrowClipSize)) 100%,
    calc(100% - var(--arrowClipSize)) calc(100% + var(--cardsGap)),
    0 calc(100% + var(--cardsGap))
  );
  position: relative;
}
.olcards li .content::before {
  content: "";
  position: absolute;
  width: var(--labelOffset);
  height: var(--labelOffset);
  background: var(--cardColor);
  left: 0;
  bottom: 0;
  clip-path: polygon(0 0, 100% 0, 0 100%);
  filter: brightness(0.75);
}
.olcards li .content::after {
  content: "";
  position: absolute;
  height: var(--cardsGap);
  width: var(--cardsGap);
  background: linear-gradient(to right, rgba(0, 0, 0, 0.25), transparent 50%);
  left: 0;
  top: 100%;
}
.olcards li .icon {
  grid-area: icon;
  align-self: center;
  font-size: 1em;
}
.olcards li .content .title {
  grid-area: title;
  font-size: 1.25em;
  /* font-weight: 700; */
}
.olcards li .content .text {
  grid-area: text;
}



  /* Styles du splash */
  #splash {
    position: fixed;
    inset: 0;
    background: #0d17d1ff;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 99999;
    transition: opacity 0.6s ease, visibility 0.6s ease;
  }
  #splash.hidden {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
  }
  .splash-logo {
    width: 520px;

    height: auto;
    display: block;
  }
  body.splash-active {
    overflow: hidden; /* empêche le scroll pendant le splash */
  }
  .one h1 {
  text-align: center;
  text-transform: uppercase;
  padding-bottom: 5px;
}
.one h1:before {
  width: 28px;
  height: 5px;
  display: block;
  content: "";
  position: absolute;
  bottom: 3px;
  left: 50%;
  margin-left: -14px;
  background-color: #0d17d1ff;
}
.one h1:after {
  width: 100px;
  height: 1px;
  display: block;
  content: "";
  position: relative;
  margin-top: 25px;
  left: 50%;
  margin-left: -50px;
  background-color: #0d17d1ff;
}

 /* Empêche le débordement horizontal globalement (si problème persiste : dernier recours) */
  html, body { max-width: 100%; overflow-x: hidden; }

  /* Rendre toutes les images responsives par défaut */
  img { max-width: 100%; height: auto; display: block; }

  /* Splash : éviter qu'il force une largeur fixe */
  .splash-logo {
    max-width: 100%;
    width: auto;
    height: auto;
    display: block;
  }

  /* Conteneurs à largeur fixe (ex : tpe/main-image) : limiter sur mobile */
  .main-image-container {
    width: 100%;
    max-width: 400px; /* garde le rendu desktop */
    height: auto;
  }
  .main-image-container .main-image {
    height: auto;
  }

  /* Override des largeurs fixes des petites vignettes si nécessaire */
  .small-images img.small-image { max-width: 100%; height: auto; }

  /* Header / navbar : assure pas d'overflow si la liste est longue */
  #navbar ul { flex-wrap: wrap; }

  /* Gestion responsive spécifique */
  @media (max-width: 768px) {
    .logo-image { height: 56px; max-width: 160px; }
    .splash-logo { max-width: 320px; } /* réduit encore sur petits écrans */
    .tpe-container { flex-direction: column; gap: 12px; }
    .description { width: 100%; margin-left: 0; }
  }


</style>

<div id="splash" aria-hidden="true">
  <div class="splash-inner">
    <img src="{{ asset('images/safetrip.jpg') }}" alt="Hobbies Agency" class="splash-logo">
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Active la classe pour bloquer le scroll si nécessaire
    document.body.classList.add('splash-active');

    // Durée d'affichage du splash en ms (ajustez ici)
    var SPLASH_DURATION = 900;

    setTimeout(function () {
      var splash = document.getElementById('splash');
      if (!splash) return;
      splash.classList.add('hidden');

      // Après la transition, on supprime l'élément et on réactive le scroll
      setTimeout(function () {
        if (splash && splash.parentNode) {
          splash.parentNode.removeChild(splash);
        }
        document.body.classList.remove('splash-active');
      }, 650); // doit être >= transition CSS (0.6s)
    }, SPLASH_DURATION);
  });
</script>

<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner" role="listbox">
      <!-- Slide 1 -->
      <div class="carousel-item active">
  <!-- video background -->
  <video class="hero-video" autoplay muted loop playsinline poster="{{ asset('images/logo_fp/hobbies1.png') }}">
    <source src="{{ asset('videos/hero.mp4') }}" type="video/mp4">
    <!-- fallback image if video not supported -->
  </video>

  <div class="carousel-container">
    <div class="container">
      <h3 class="animate__animated animate__fadeInDown" style="color: white;">Bienvenue sur <span style="color: #0d17d1ff">SAFE TRIP</span></h3>
      <h4 style="color: blue;" class="animate__animated animate__fadeInUp"> Safe Trip est une structure immobilière créée dans le but de vous accompagner efficacement et de simplifier chacune de vos démarches, en vous proposant des résidences sécurisées en Côte d’Ivoire, plus particulièrement à Abidjan, tout en respectant vos critères de sélection...</h4>
      <br>
      <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto" style="background-color: #0d17d1ff">Lisez plus</a>
    </div>
  </div>
</div>

      <!-- Slide 2 -->

      <!-- Slide 3 -->


    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div>
</section>

<section id="fonctionnalite">
  <section  class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2 style="color: #0d17d1ff"><strong>Qui Sommes Nous ?</strong></h2>
        <ol>

          <li>Qui Sommes Nous ?</li>
        </ol>
      </div>

    </div>
  </section>
</section>
<section id="about" class="about">
  <div class="container fade-in">


        <div class="one">
            <h1>Decouvrez <span style="color: #0d17d1ff">Safe Trip</span></h1>
        </div>

        <h3></h3>
      </div>
      <!-- <div class="col-lg-6 pt-4 pt-lg-0 fade-in">
        <p>


        </p>


        <ul>
         <li><i class="ri-check-double-line" style="color: #0d17d1ff"></i></li>
          <li><i class="ri-check-double-line" style="color: #0d17d1ff"></i> </li>
          <li><i class="ri-check-double-line" style="color: #0d17d1ff"></i></li>
          <li><i class="ri-check-double-line" style="color: #0d17d1ff"></i></li>
            <li><i class="ri-check-double-line" style="color: #0d17d1ff"></i></li>

        </ul>
        {{-- <p class="fst-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p> --}}
      </div>
    </div> -->

  <!-- </div> -->
   <div class="container fade-in">
   <h4>Safe Trip est une structure créée dans le but de vous accompagner efficacement et de simplifier chacune de vos démarches, en vous proposant des résidences sécurisées en Côte d’Ivoire, plus particulièrement à Abidjan, tout en respectant vos critères de sélection.
   </h4>
</div>
<div class="container fade-in">
   <h4>Grâce à Safe Trip, vous n’avez plus à craindre les risques d’arnaques qui se multiplient à l’ère du numérique. Laissez-nous nous charger de tout et profitez d’un service fiable et transparent.
   </h4>
</div>
  <div class="container fade-in">
   <h4>
    Notre structure est spécialisée dans la mise à disposition de résidences adaptées à tous les budgets, à partir de 15 000 F seulement, selon le standing souhaité. Que vous recherchiez un studio, une villa ou un appartement en Côte d’Ivoire, vous êtes à la bonne adresse.
   </h4>
</div>


 <div class="container fade-in">
   <h4>Safe Trip s’inscrit dans une vision moderne visant à valoriser la Côte d’Ivoire et, plus largement, l’Afrique, tant sur le plan touristique que social.
Notre mission première est de vous satisfaire, de vous accompagner et de garantir votre sécurité à chaque étape.
</h4>
</div>

    </div>




   </div>





<!-- <div class="container">

</div> -->
</section><!-- End About Section -->

<!-- ======= actualite ======= -->

<!-- End actualite Section -->

<!-- ======= Services Section ======= -->

<section id="fonctionnalitee">
  <section  class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2 style="color: #0d17d1ff"><strong>Nos Avantages</strong></h2>
        <ol>

          <li>Nos Avantages</li>
        </ol>
      </div>

    </div>
  </section>
</section>



<section class="services">
  <div class="container">
    <div class="container fade-in">

      <!-- <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, magnam minus aut cum aperiam neque alias, rem minima sed odit natus eius officiis aliquam explicabo magni omnis sapiente animi reiciendis!</h4> -->
      </div>
    <div class="row">
      <div class="col-md-6">
        <div class="icon-box">
          <i class="bi bi-people-fill" style="color: #0d17d1ff"></i>
          <h4><a>Gain de temps pour les clients et les propriétaires</a></h4>
          <p>Les utilisateurs n’ont plus à effectuer des recherches longues et incertaines : la structure s’occupe de tout.</div>
      </div>
      <div class="col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="bi bi-briefcase" style="color: #0d17d1ff"></i>
          <h4><a>Accessibilité pour tous les budgets</a></h4>
        <p>Proposer des hébergements variés à partir de 15 000 F permet d’attirer un large public, du voyageur économique au client haut de gamme.</p>
        </div>
        </div>
      <div class="col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="bi bi-rocket-fill" style="color: #0d17d1ff"></i>
          <h4><a>Sécurisation des locations</a></h4>
    <p>L’activité protège les voyageurs contre les arnaques, fréquentes dans le secteur de la location immobilière informelle.</p>
        </div>
        </div>
      <div class="col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="bi bi-mic" style="color: #0d17d1ff"></i>
          <h4><a>Contribution au développement touristique</a></h4>
<p>En facilitant l’accès à des résidences fiables, l’activité participe à la promotion du tourisme local et à l’image positive du pays.</p>
        </div>
        </div>
      <div class="col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="bi bi-music-note-beamed" style="color: #0d17d1ff"></i>
          <h4><a>Soutien aux propriétaires locaux</a></h4>
        <p>Les propriétaires bénéficient d’une plateforme pour valoriser leurs biens et accroître leur visibilité.</p>
        </div>
        </div>
      <div class="col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="bi bi-calendar-event" style="color: #0d17d1ff"></i>
          <h4><a>Accompagnement personnalisé et rassurant</a></h4>
          <p>Le service prend en compte les critères spécifiques de chaque client, offrant une expérience sur mesure et sécurisée.</p>
        </div>
      </div>
    </div>

  </div>
</section>
<section id="choisir-residence" class="py-5" style="background: #f8f9fb;">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-6">
        <h2 style="color:#0d17d1ff; margin-bottom:10px;">Comment choisir votre résidence avec <strong>Safe Trip CI</strong> ?</h2>
        <p class="text-muted mb-4">Suivez ces étapes simples pour trouver un logement fiable sans stress.</p>

        <ol class="steps-list" style="padding-left:0; list-style:none; counter-reset:step;">
          <li style="display:flex; gap:12px; margin-bottom:18px; align-items:flex-start;">
            <div style="width:44px; height:44px; border-radius:50%; background:#0d17d1ff; color:#fff; display:flex; align-items:center; justify-content:center; font-weight:700; counter-increment:step;">
              1
            </div>
            <div>
              <strong>Rendez‑vous sur notre page Facebook <span style="color:#0d17d1ff">Safe Trip CI</span>.</strong>
              <div class="text-muted">Consultez nos publications et galeries pour voir les résidences disponibles.</div>
            </div>
          </li>

          <li style="display:flex; gap:12px; margin-bottom:18px; align-items:flex-start;">
            <div style="width:44px; height:44px; border-radius:50%; background:#0d17d1ff; color:#fff; display:flex; align-items:center; justify-content:center; font-weight:700;">
              2
            </div>
            <div>
              <strong>Faites défiler les publications.</strong>
              <div class="text-muted">vous y trouverez une large sélection de résidences disponibles. Chaque annonce contient photos, description et informations utiles.</div>
            </div>
          </li>

          <li style="display:flex; gap:12px; margin-bottom:18px; align-items:flex-start;">
            <div style="width:44px; height:44px; border-radius:50%; background:#0d17d1ff; color:#fff; display:flex; align-items:center; justify-content:center; font-weight:700;">
              3
            </div>
            <div>
              <strong>Cliquez sur l’icône WhatsApp sous la résidence qui vous intéresse.</strong>
              <div class="text-muted">Envoyez-nous un message rapide — nous nous occupons du reste.</div>
            </div>
          </li>

          <li style="display:flex; gap:12px; margin-bottom:6px; align-items:flex-start;">
            <div style="width:44px; height:44px; border-radius:50%; background:#0d17d1ff; color:#fff; display:flex; align-items:center; justify-content:center; font-weight:700;">
              4
            </div>
            <div>
              <strong>Notre équipe prend le relais.</strong>
              <div class="text-muted">Coordination des visites, vérifications et réservation — fiable et sans arnaque.</div>
            </div>
          </li>
        </ol>

        <div class="mt-4 d-flex flex-wrap align-items-center gap-3">
          <a href="https://wa.me/message/3HKDYS6DBJADK1" target="_blank" rel="noopener" class="btn" style="background:#25D366;color:#fff;padding:10px 18px;border-radius:8px; display:inline-flex; align-items:center; gap:10px;">
            <i class="bi bi-whatsapp" style="font-size:20px;"></i>
            Nous contacter sur WhatsApp
          </a>

          <a href="https://www.facebook.com/profile.php?id=61574046737190" class="btn btn-outline-secondary" style="border-color:#0d17d1ff;color:#0d17d1ff;padding:10px 18px;border-radius:8px;">
            Voir nos offres
          </a>
        </div>

        <p class="text-muted mt-3" style="font-size:0.95rem;">Avec Safe Trip CI, plus besoin de vous fatiguer à chercher : nous vous connectons à des logements fiables, sans aucun stress et sans risque d’arnaque.</p>
      </div>


    </div>
  </div>

  <style>
    /* Styles locaux pour la section */
    @media (min-width: 992px) {
      .steps-list li div:first-child { flex: 0 0 44px; }
    }
    .steps-list div strong { display:block; margin-bottom:4px; }
  </style>
</section>









{{-- nos TPE --}}
<section id="TPE">
  <style  >
    .tpe-container {
        display: flex;
        align-items: flex-start;
        justify-content: center;
        margin: 20px;
        flex-direction: row;
    }
    .tpe-content {
        display: flex;
        align-items: flex-start;
        margin-right: 20px;
    }
    .main-image-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 400px; /* Largeur fixe pour le conteneur de l'image principale */
        height: 400px; /* Hauteur fixe pour le conteneur de l'image principale */
    }

    .main-image-container img.main-image {
    width: 100%;
    height: 100%;
    border-radius: 10px;
    object-fit: cover; /* Ajuste l'image pour qu'elle couvre toute la zone */
    object-position: center; /* Centre l'image à l'intérieur de la zone */
    }
    .small-images {
        display: flex;
        flex-direction: column;
        margin-left: 20px;
        cursor: pointer;

    }
    .small-images img.small-image {
        width: 85px;
        margin-bottom: 10px;
        border-radius: 10px;
    }
    .description {
        width: 30%;
        margin-left: 70px;

    }
</style>

<section id="residence">
<section  class="breadcrumbs fade-in">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2 style="color: #0d17d1ff"><strong>Nos Résidences</strong></h2>

    </div>

  </div>
</section>
</section>
<section id="galerie-residences" class="py-5">
  <div class="container">
<h4> Safe Trip CI regroupe Plus de 100 résidences entre Abidjan et plusieurs autres villes dans l’intérieur du pays — toutes soigneusement sélectionnées pour votre confort, votre sécurité et un séjour sans souci et en voici certaines de nos meilleures residences à Abidjan :</h4>
<br>
<div class="text-center mb-4">
        <p class="text-muted">Cliquez sur l'image principale pour ouvrir la galerie complète de la résidence.</p>
    </div>

    <div class="row g-4">
      <!-- Résidence 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="res-card">
          <a href="{{ asset('images/residences/res1/1.jpg') }}" class="res-gallery" data-gallery="res-1">
            <img src="{{ asset('images/residences/res1/1.jpg') }}" alt="Résidence 1 - vue principale">
          </a>

          <!-- photos supplémentaires (cachées mais nécessaires pour la lightbox) -->
          <a href="{{ asset('images/residences/res1/2.jpg') }}" class="res-gallery d-none" data-gallery="res-1"></a>
          <a href="{{ asset('images/residences/res1/3.jpg') }}" class="res-gallery d-none" data-gallery="res-1"></a>
          <a href="{{ asset('images/residences/res1/4.jpg') }}" class="res-gallery d-none" data-gallery="res-1"></a>
          <a href="{{ asset('images/residences/res1/5.jpg') }}" class="res-gallery d-none" data-gallery="res-1"></a>
          <a href="{{ asset('images/residences/res1/6.jpg') }}" class="res-gallery d-none" data-gallery="res-1"></a>
          <a href="{{ asset('images/residences/res1/7.jpg') }}" class="res-gallery d-none" data-gallery="res-1"></a>
          <a href="{{ asset('images/residences/res1/8.jpg') }}" class="res-gallery d-none" data-gallery="res-1"></a>
          <a href="{{ asset('images/residences/res1/9.jpg') }}" class="res-gallery d-none" data-gallery="res-1"></a>
          <a href="{{ asset('images/residences/res1/10.jpg') }}" class="res-gallery d-none" data-gallery="res-1"></a>


          <div class="res-desc">
            <h5>35.000f/jour</h5>
            <p class="text-muted">Bel Appartement de 2 pièces situé à la Riviera Bonoumin</p>
          </div>
        </div>
      </div>

      <!-- Résidence 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="res-card">
          <a href="{{ asset('images/residences/res2/1.jpg') }}" class="res-gallery" data-gallery="res-2">
            <img src="{{ asset('images/residences/res2/1.jpg') }}" alt="Résidence 2 - vue principale">
          </a>
          <a href="{{ asset('images/residences/res2/2.jpg') }}" class="res-gallery d-none" data-gallery="res-2"></a>
          <a href="{{ asset('images/residences/res2/3.jpg') }}" class="res-gallery d-none" data-gallery="res-2"></a>
          <a href="{{ asset('images/residences/res2/4.jpg') }}" class="res-gallery d-none" data-gallery="res-2"></a>
          <a href="{{ asset('images/residences/res2/5.jpg') }}" class="res-gallery d-none" data-gallery="res-2"></a>
          <a href="{{ asset('images/residences/res2/6.jpg') }}" class="res-gallery d-none" data-gallery="res-2"></a>

          <div class="res-desc">
            <h5>20.000f/jour</h5>
            <p class="text-muted">Beau studio situé à la Riviera nouveau camp!</p>
          </div>
        </div>
      </div>

      <!-- Résidence 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="res-card">
          <a href="{{ asset('images/residences/res3/1.jpg') }}" class="res-gallery" data-gallery="res-3">
            <img src="{{ asset('images/residences/res3/1.jpg') }}" alt="Résidence 3 - vue principale">
          </a>
          <a href="{{ asset('images/residences/res3/2.jpg') }}" class="res-gallery d-none" data-gallery="res-3"></a>
          <a href="{{ asset('images/residences/res3/3.jpg') }}" class="res-gallery d-none" data-gallery="res-3"></a>
          <a href="{{ asset('images/residences/res3/4.jpg') }}" class="res-gallery d-none" data-gallery="res-3"></a>
          <a href="{{ asset('images/residences/res3/5.jpg') }}" class="res-gallery d-none" data-gallery="res-3"></a>

          <div class="res-desc">
            <h5>70.000f/jour</h5>
            <p class="text-muted">Une super maison basse de 3 pièces avec jardin et cour situé dans le quartier chic paisible et sécurisée</p>
          </div>
        </div>
      </div>

      <!-- Résidence 4 -->
      <div class="col-md-6 col-lg-4">
        <div class="res-card">
          <a href="{{ asset('images/residences/res4/1.jpg') }}" class="res-gallery" data-gallery="res-4">
            <img src="{{ asset('images/residences/res4/1.jpg') }}" alt="Résidence 4 - vue principale">
          </a>
          <a href="{{ asset('images/residences/res4/2.jpg') }}" class="res-gallery d-none" data-gallery="res-4"></a>
          <a href="{{ asset('images/residences/res4/3.jpg') }}" class="res-gallery d-none" data-gallery="res-4"></a>
          <a href="{{ asset('images/residences/res4/4.jpg') }}" class="res-gallery d-none" data-gallery="res-4"></a>
          <a href="{{ asset('images/residences/res4/5.jpg') }}" class="res-gallery d-none" data-gallery="res-4"></a>
          <a href="{{ asset('images/residences/res4/6.jpg') }}" class="res-gallery d-none" data-gallery="res-4"></a>
          <a href="{{ asset('images/residences/res4/7.jpg') }}" class="res-gallery d-none" data-gallery="res-4"></a>
          <a href="{{ asset('images/residences/res4/8.jpg') }}" class="res-gallery d-none" data-gallery="res-4"></a>
          <a href="{{ asset('images/residences/res4/9.jpg') }}" class="res-gallery d-none" data-gallery="res-4"></a>
          <a href="{{ asset('images/residences/res4/10.jpg') }}" class="res-gallery d-none" data-gallery="res-4"></a>

          <div class="res-desc">
            <h5>30.000f la journée, 25000f long séjour</h5>
            <p class="text-muted">Belle résidence Située a cocody riviera 2,
A quelque mètre du restaurant Texas grill </p>
          </div>
        </div>
      </div>

      <!-- Résidence 5 -->
      <div class="col-md-6 col-lg-4">
        <div class="res-card">
          <a href="{{ asset('images/residences/res5/1.jpg') }}" class="res-gallery" data-gallery="res-5">
            <img src="{{ asset('images/residences/res5/1.jpg') }}" alt="Résidence 5 - vue principale">
          </a>
          <a href="{{ asset('images/residences/res5/2.jpg') }}" class="res-gallery d-none" data-gallery="res-5"></a>
          <a href="{{ asset('images/residences/res5/3.jpg') }}" class="res-gallery d-none" data-gallery="res-5"></a>
          <a href="{{ asset('images/residences/res5/4.jpg') }}" class="res-gallery d-none" data-gallery="res-5"></a>
          <a href="{{ asset('images/residences/res5/5.jpg') }}" class="res-gallery d-none" data-gallery="res-5"></a>
          <a href="{{ asset('images/residences/res5/6.jpg') }}" class="res-gallery d-none" data-gallery="res-5"></a>
          <a href="{{ asset('images/residences/res5/7.jpg') }}" class="res-gallery d-none" data-gallery="res-5"></a>
          <a href="{{ asset('images/residences/res5/8.jpg') }}" class="res-gallery d-none" data-gallery="res-5"></a>
          <a href="{{ asset('images/residences/res5/9.jpg') }}" class="res-gallery d-none" data-gallery="res-5"></a>
          <a href="{{ asset('images/residences/res5/10.jpg') }}" class="res-gallery d-none" data-gallery="res-5"></a>

          <div class="res-desc">
            <h5>50.000f/jour</h5>
            <p class="text-muted">Penthouse disponible à la riviera palmeraie</p>
          </div>
        </div>
      </div>


<div class="text-center mb-4">
 <h4>
  Vous voulez voir plus de residences ?
 <a href="https://www.facebook.com/profile.php?id=61574046737190" class="btn btn-link"><h4>cliquez ici


 </h4></a>

</h4>    </div>
    </div>
  </div>

  <style>
    .res-card { background:#fff; border-radius:10px; overflow:hidden; box-shadow:0 8px 22px rgba(0,0,0,0.06); }
    .res-card a img { width:100%; height:220px; object-fit:cover; display:block; }
    .res-desc { padding:12px 14px; }
    .res-desc h5 { margin:0 0 6px; color:#0d17d1ff; }
    .res-desc p { margin:0; font-size:0.95rem; color:#666; }
    @media (max-width: 576px) {
      .res-card a img { height:160px; }
    }
  </style>

  <!-- initialise GLightbox (group par data-gallery) -->
  <script>
    document.addEventListener('DOMContentLoaded', function(){
      if (typeof GLightbox === 'function') {
        GLightbox({ selector: '.res-gallery' });
      }
    });
  </script>
</section>



{{-- temoignage --}}
<section id="testimonials">
<section  class="breadcrumbs fade-in">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2 style="color: #0d17d1ff"><strong>Temoignages</strong></h2>

    </div>

  </div>
</section>
</section>

<section id="testimonial">
<section  class="testimonials fade-in">

    <div class="container">
      <div class="row justify-content-center g-4">
        <!-- Ligne du haut : 2 témoignages -->
        <div class="col-lg-5 col-md-6">
          <div class="testimonial-item">
            <img src="images/blue.png" class="testimonial-img" alt="">
            <h3>Mr. Gogoua (Proprietaire)</h3>
            <h4> Contact : +225 05 01 91 46 49</h4>
            <p><i class="bx bxs-quote-alt-left quote-icon-left"></i>
Depuis que je collabore avec Safe Trip, mon appartement est régulièrement loué par des clients sérieux. Leur gestion est transparente et me fait gagner un temps précieux.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div>

        <div class="col-lg-5 col-md-6">
          <div class="testimonial-item">
            <img src="images/blue.png" class="testimonial-img" alt="">
            <h3>Mr. Toumba (Proprietaire)</h3>
            <h4> Contact : +225 05 01 91 46 49</h4>
            <p><i class="bx bxs-quote-alt-left quote-icon-left"></i>
Safe Trip m’apporte une visibilité que je n’avais jamais eue auparavant pour ma villa. Les échanges sont fluides et les locataires envoyés sont toujours respectueux.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div>



        <!-- Ligne du bas : 2 témoignages -->
        <div class="col-lg-5 col-md-6">
          <div class="testimonial-item">
            <img src="images/blue.png" class="testimonial-img" alt="">
            <h3>Daril (Client)</h3>
            <h4> Contact : +225 05 01 91 46 49</h4>
            <p><i class="bx bxs-quote-alt-left quote-icon-left"></i>
Je voyage souvent pour le travail et Safe Trip m’a permis de réserver un studio propre et conforme à mes attentes. Leur équipe est à l’écoute et très professionnelle.
        </p>
          </div>
        </div>

        <div class="col-lg-5 col-md-6">
          <div class="testimonial-item">
            <img src="images/blue.png" class="testimonial-img" alt="">
            <h3>Perplexe (Client)</h3>
            <h4> Contact : +225 05 01 91 46 49</h4>
            <p><i class="bx bxs-quote-alt-left quote-icon-left"></i>
Grâce à Safe Trip, j’ai enfin trouvé une résidence sécurisée à Abidjan sans stress ni mauvaise surprise. Le service est rapide, fiable et vraiment rassurant.

        </p>
          </div>
        </div>
      </div>
    </div>

  </section>
</section>














































<section id="contact2" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2 style="color: #0d17d1ff"><strong>Contactez-nous</strong></h2>
      <ol>
        <li><a href="index">Acceuil</a></li>
        <li>Contact</li>
      </ol>
    </div>
  </div>
</section>
<section class="d-flex justify-content-center align-items-center" style="min-height:40vh; padding:24px;">
  <div class="text-center">
    <div class="d-flex flex-wrap justify-content-center align-items-start gap-4">
      <!-- Bloc WhatsApp -->
      <div class="d-flex flex-column align-items-center" style="text-align:center;">
        <a href="https://wa.me/2250501914649" target="_blank" rel="noopener" title="Contact WhatsApp" aria-label="Contact WhatsApp"
           style="display:inline-flex; align-items:center; justify-content:center; text-decoration:none;">
         <i class="bi bi-whatsapp" style="font-size:96px;color:#25D366;"></i>
        </a>
        <a href="https://wa.me/2250501914649" target="_blank" rel="noopener"
           style="margin-top:10px; color:#25D366; font-weight:700; text-decoration:none; font-size:15px;">
          Cliquez pour nous rejoindre directement sur WhatsApp
        </a>
      </div>

      <!-- Bloc QR -->
      <div class="d-flex flex-column align-items-center" style="text-align:center;">
        <a href="{{ asset('images/codeqr.png') }}" target="_blank" rel="noopener" title="QR WhatsApp" aria-label="QR WhatsApp">
          <img src="{{ asset('images/codeqr.png') }}" alt="QR WhatsApp" style="width:140px;height:140px;object-fit:cover;border-radius:12px;box-shadow:0 8px 20px rgba(0,0,0,0.12);">
        </a>
        <div style="margin-top:10px; color:#666; font-size:15px; font-weight:600;">
          Agrandissez et Scannez pour nous rejoindre directement sur WhatsApp
        </div>
      </div>
    </div>
  </div>
</section>
<section id="contacteznous" class="contact">
  <div class="container">



    <div class="row mt-5">

      <div class="col-lg-4">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Cote d'Ivoire, Abidjan </h4>
            <p></p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4> Email : Mariemicheleeffi222@gmail.com</h4>
            <p></p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Téléphone : +225 0501914649
            <p></p>
          </div>
          <br>


        </div>

      </div>

      <div class="col-lg-8 mt-5 mt-lg-0">

        <form action="/saveuser" method="post" role="form" class="php-email-form">
          @if(session()->has('message'))
          <div class="alert alert-success">
              {{ session()->get('message') }}
          </div>
      @endif
                @csrf
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="nameUser" class="form-control" id="name" placeholder="Votre Nom & Prenom" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" class="form-control" name="email" id="email" placeholder="Votre Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="objetUser" id="subject" placeholder="Objet du message" required>
          </div>
          <div class="form-group mt-3" style="position: relative;">
            <textarea class="form-control" name="messageUser" id="message" rows="5" placeholder="Votre Message" maxlength="500" required style="padding-bottom: 20px;"></textarea>
            <div id="compteurCaracteres" style="position: absolute; bottom: 5px; right: 10px; font-size: 12px; color: grey;">500 caractères restants</div>
            <script>
              const champSaisie = document.getElementById('message');
              const elementCompteur = document.getElementById('compteurCaracteres');

              champSaisie.addEventListener('input', function() {
                mettreAJourCompteurCaracteres();
              });

              function mettreAJourCompteurCaracteres() {
                const caracteresRestants = champSaisie.maxLength - champSaisie.value.length;
                elementCompteur.textContent = `${caracteresRestants} caractères restants`;
              }

              mettreAJourCompteurCaracteres();
            </script>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Envoyez</button></div>
        </form>

      </div>

    </div>
  </div>

</section>




<!-- End Portfolio Section -->
@endsection
@if(!session('cookie_consent'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Consentement aux cookies',
                text: 'Nous utilisons des cookies pour améliorer votre expérience utilisateur. En cliquant sur "Accepter", vous acceptez notre politique de cookies.',
                icon: 'info',
                confirmButtonText: 'Accepter',
                cancelButtonText: 'Refuser'

            }).then((result) => {
                if (result.isConfirmed) {
                    // Enregistrer le consentement
                    fetch('{{ route('cookie-consent.store') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    }).then(response => response.json()).then(data => {
                        console.log('Consentement enregistré:', data);
                    });
                } else {
                    // Gérer le refus
                    console.log('Utilisateur a refusé les cookies');
                }
            });
        });

         (function(){
        var modal = document.getElementById('actModal');
        var titleEl = document.getElementById('actModalTitle');
        var dateEl = document.getElementById('actModalDate');
        var descEl = document.getElementById('actModalDesc');
        var galleryEl = document.getElementById('actModalGallery');
        var glightboxInstance;

        function buildGallery(images) {
          galleryEl.innerHTML = '';
          images.forEach(function(url, idx){
            var link = document.createElement('a');
            link.href = url;
            link.className = 'modal-glightbox';
            link.setAttribute('data-gallery','actualites-modal');
            link.style.display = 'inline-block';
            link.style.width = '120px';
            link.style.height = '80px';
            link.style.overflow = 'hidden';
            link.style.borderRadius = '6px';
            link.style.boxShadow = '0 4px 12px rgba(0,0,0,0.08)';
            var img = document.createElement('img');
            img.src = url;
            img.style.width = '100%';
            img.style.height = '100%';
            img.style.objectFit = 'cover';
            img.alt = '';
            link.appendChild(img);
            galleryEl.appendChild(link);
          });

          // destroy previous instance if exists
          if (glightboxInstance && typeof glightboxInstance.destroy === 'function') {
            try { glightboxInstance.destroy(); } catch(e){/*ignore*/ }
          }
          // init GLightbox on modal links
          if (typeof GLightbox === 'function') {
            glightboxInstance = GLightbox({ selector: '.modal-glightbox' });
          }
        }

        // populate modal from clicked trigger (buttons or image links)
        document.querySelectorAll('.act-open').forEach(function(btn){
          btn.addEventListener('click', function(e){
            var el = e.currentTarget;
            // some triggers are inside article, prefer dataset on the button, else find nearest article
            var article = el.closest('article.act-card') || el;
            var datasetSource = el.dataset && el.dataset.title ? el.dataset : (article ? article.dataset : {});
            var title = datasetSource.title || article.dataset.title || '';
            var date = datasetSource.date || article.dataset.date || '';
            var desc = datasetSource.desc || article.dataset.desc || '';
            var imgs = (datasetSource.images || article.dataset.images || '').split('|').filter(Boolean);

            titleEl.textContent = title;
            dateEl.textContent = date;
            descEl.textContent = desc;
            buildGallery(imgs);
          });
        });

        // Optional: clean up glightbox when modal hidden
        modal.addEventListener('hidden.bs.modal', function () {
          if (glightboxInstance && typeof glightboxInstance.destroy === 'function') {
            try { glightboxInstance.destroy(); } catch(e){/*ignore*/ }
          }
        });
      })();
    </script>


@endif

