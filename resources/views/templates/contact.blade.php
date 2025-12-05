



  <!-- ======= Header ======= -->

  @extends('layout')
  @section('title', 'contact')
  @section('content')
 
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2 style="color: #275efe">Contact</h2>
        <ol>
          <li><a href="index">Acceuil</a></li>
          <li>Contact</li>
        </ol>
      </div>

    </div>
  </section>
  <section id="contact" class="contact">
    <div class="container">

      

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Localisation: Abidjan Cocody Angré</h4>
              <p></p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email: technix@technix.com</h4>
              <p></p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Telephone: 225 0707080809</h4>
              <p></p>
            </div>

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
  @endsection