



  <!-- ======= Header ======= -->

  @extends('layout')
 
  @section('title', 'demo')
  @section('content')
 
  <section id="Demo" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2 style="color: #275efe">demo</h2>
        <ol>
          <li><a href="index">Acceuil</a></li>
          <li>Demo</li>
        </ol>
      </div>

    </div>
  </section>

  <section id="contact" class="contact">
    <div class="container">

     <h3>Vous etes interressé par Fuelpay et aimeriez avoir une demonstration de notre plateforme ?</h3>
     <h4>Donnez nous vos informations et nous recontacterons très bientot !</h4>

      <div class="row mt-5">

          <form method="post" action="/demoenregistrer"  role="form" class="php-email-form">
            <div class="col-lg-8 mt-5 mt-lg-0">
              @if(session()->has('message-demo'))
                <div class="alert alert-success">
                    {{ session()->get('message-demo') }}
                </div>
              @endif
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <input  type="text" name="entreprise_name" class="form-control" id="entreprise_name" placeholder="Nom de l'Entreprise" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nom & Prénoms" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="email" pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" class="form-control" name="email" id="email" placeholder="Votre Email" required>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="profession" id="email" placeholder="Votre Profession" required>
            </div>
            {{-- <div class="form-group mt-3">
              <input type="text" class="form-control" name="description" id="description" placeholder="Donnez une description" required>
            </div> --}}
            <div class="form-group mt-3">
              <div class="form-group mt-3" style="position: relative;">
                <textarea class="form-control" name="description" id="description" rows="5" placeholder="Votre Description" maxlength="500" required style="padding-bottom: 20px;"></textarea>
                <div id="compteurCaractere" style="position: absolute; bottom: 5px; right: 10px; font-size: 12px; color: grey;">500 caractères restants</div>
                <script>
                  const champSaisie = document.getElementById('description');
                  const elementCompteur = document.getElementById('compteurCaractere');
              
                  champSaisie.addEventListener('input', function() {
                    mettreAJourCompteurCaractere();
                  });
              
                  function mettreAJourCompteurCaractere() {
                    const caracteresRestant = champSaisie.maxLength - champSaisie.value.length;
                    elementCompteur.textContent = `${caracteresRestant} caractères restants`;
                  }
              
                  mettreAJourCompteurCaracteres();
                </script>
              </div>
              {{-- <label >Sélectionnez un pays :</label>
    <input type="text"  list="pays"> --}}
    

              <input type="text" for="paysInput" id="paysInput" class="form-control" name="pays" id="pays" placeholder="Pays" list="pays" required>
              <datalist id="pays">
                <option value="Afghanistan">AF</option>
                <option value="Afrique du Sud">ZA</option>
                <option value="Albanie">AL</option>
                <option value="Algérie">DZ</option>
                <option value="Allemagne">DE</option>
                <option value="Andorre">AD</option>
                <option value="Angola">AO</option>
                <option value="Antigua-et-Barbuda">AG</option>
                <option value="Arabie saoudite">SA</option>
                <option value="Argentine">AR</option>
                <option value="Arménie">AM</option>
                <option value="Australie">AU</option>
                <option value="Autriche">AT</option>
                <option value="Azerbaïdjan">AZ</option>
                <option value="Bahamas">BS</option>
                <option value="Bahreïn">BH</option>
                <option value="Bangladesh">BD</option>
                <option value="Barbade">BB</option>
                <option value="Belgique">BE</option>
                <option value="Belize">BZ</option>
                <option value="Bénin">BJ</option>
                <option value="Bhoutan">BT</option>
                <option value="Biélorussie">BY</option>
                <option value="Birmanie">MM</option>
                <option value="Bolivie">BO</option>
                <option value="Bosnie-Herzégovine">BA</option>
                <option value="Botswana">BW</option>
                <option value="Brésil">BR</option>
                <option value="Brunei">BN</option>
                <option value="Bulgarie">BG</option>
                <option value="Burkina Faso">BF</option>
                <option value="Burundi">BI</option>
                <option value="Cambodge">KH</option>
                <option value="Cameroun">CM</option>
                <option value="Canada">CA</option>
                <option value="Cap-Vert">CV</option>
                <option value="Centrafrique">CF</option>
                <option value="Chili">CL</option>
                <option value="Chine">CN</option>
                <option value="Chypre">CY</option>
                <option value="Colombie">CO</option>
                <option value="Comores">KM</option>
                <option value="Congo">CG</option>
                <option value="Corée du Nord">KP</option>
                <option value="Corée du Sud">KR</option>
                <option value="Costa Rica">CR</option>
                <option value="Côte d'Ivoire">CI</option>
                <option value="Croatie">HR</option>
                <option value="Cuba">CU</option>
                <option value="Danemark">DK</option>
                <option value="Djibouti">DJ</option>
                <option value="Dominique">DM</option>
                <option value="Égypte">EG</option>
                <option value="Émirats arabes unis">AE</option>
                <option value="Équateur">EC</option>
                <option value="Érythrée">ER</option>
                <option value="Espagne">ES</option>
                <option value="Estonie">EE</option>
                <option value="Eswatini">SZ</option>
                <option value="États-Unis">US</option>
                <option value="Éthiopie">ET</option>
                <option value="Fidji">FJ</option>
                <option value="Finlande">FI</option>
                <option value="France">FR</option>
                <option value="Gabon">GA</option>
                <option value="Gambie">GM</option>
                <option value="Géorgie">GE</option>
                <option value="Ghana">GH</option>
                <option value="Grèce">GR</option>
                <option value="Grenade">GD</option>
                <option value="Guatemala">GT</option>
                <option value="Guinée">GN</option>
                <option value="Guinée-Bissau">GW</option>
                <option value="Guinée équatoriale">GQ</option>
                <option value="Guyana">GY</option>
                <option value="Haïti">HT</option>
                <option value="Honduras">HN</option>
                <option value="Hongrie">HU</option>
                <option value="Inde">IN</option>
                <option value="Indonésie">ID</option>
                <option value="Irak">IQ</option>
                <option value="Iran">IR</option>
                <option value="Irlande">IE</option>
                <option value="Islande">IS</option>
                <option value="Israël">IL</option>
                <option value="Italie">IT</option>
                <option value="Jamaïque">JM</option>
                <option value="Japon">JP</option>
                <option value="Jordanie">JO</option>
                <option value="Kazakhstan">KZ</option>
                <option value="Kenya">KE</option>
                <option value="Kirghizistan">KG</option>
                <option value="Kiribati">KI</option>
                <option value="Kosovo">XK</option>
                <option value="Koweït">KW</option>
                <option value="Laos">LA</option>
                <option value="Lesotho">LS</option>
                <option value="Lettonie">LV</option>
                <option value="Liban">LB</option>
                <option value="Libéria">LR</option>
                <option value="Libye">LY</option>
                <option value="Liechtenstein">LI</option>
                <option value="Lituanie">LT</option>
                <option value="Luxembourg">LU</option>
                <option value="Macédoine du Nord">MK</option>
                <option value="Madagascar">MG</option>
                <option value="Malaisie">MY</option>
                <option value="Malawi">MW</option>
                <option value="Maldives">MV</option>
                <option value="Mali">ML</option>
                <option value="Malte">MT</option>
                <option value="Maroc">MA</option>
                <option value="Marshall">MH</option>
                <option value="Maurice">MU</option>
                <option value="Mauritanie">MR</option>
                <option value="Mexique">MX</option>
                <option value="Micronésie">FM</option>
                <option value="Moldavie">MD</option>
                <option value="Monaco">MC</option>
                <option value="Mongolie">MN</option>
                <option value="Monténégro">ME</option>
                <option value="Mozambique">MZ</option>
                <option value="Namibie">NA</option>
                <option value="Nauru">NR</option>
                <option value="Népal">NP</option>
                <option value="Nicaragua">NI</option>
                <option value="Niger">NE</option>
                <option value="Nigeria">NG</option>
                <option value="Niue">NU</option>
                <option value="Norvège">NO</option>
                <option value="Nouvelle-Zélande">NZ</option>
                <option value="Oman">OM</option>
                <option value="Ouganda">UG</option>
                <option value="Ouzbékistan">UZ</option>
                <option value="Pakistan">PK</option>
                <option value="Palaos">PW</option>
                <option value="Panama">PA</option>
                <option value="Papouasie-Nouvelle-Guinée">PG</option>
                <option value="Paraguay">PY</option>
                <option value="Pays-Bas">NL</option>
                <option value="Pérou">PE</option>
                <option value="Philippines">PH</option>
                <option value="Pologne">PL</option>
                <option value="Portugal">PT</option>
                <option value="Qatar">QA</option>
                <option value="République dominicaine">DO</option>
                <option value="République démocratique du Congo">CD</option>
                <option value="République tchèque">CZ</option>
                <option value="Roumanie">RO</option>
                <option value="Royaume-Uni">GB</option>
                <option value="Russie">RU</option>
                <option value="Rwanda">RW</option>
                <option value="Saint-Kitts-et-Nevis">KN</option>
                <option value="Saint-Marin">SM</option>
                <option value="Saint-Vincent-et-les-Grenadines">VC</option>
                <option value="Sainte-Lucie">LC</option>
                <option value="Salvador">SV</option>
                <option value="Samoa">WS</option>
                <option value="Sao Tomé-et-Principe">ST</option>
                <option value="Sénégal">SN</option>
                <option value="Serbie">RS</option>
                <option value="Seychelles">SC</option>
                <option value="Sierra Leone">SL</option>
                <option value="Singapour">SG</option>
                <option value="Slovaquie">SK</option>
                <option value="Slovénie">SI</option>
                <option value="Somalie">SO</option>
                <option value="Soudan">SD</option>
                <option value="Soudan du Sud">SS</option>
                <option value="Sri Lanka">LK</option>
                <option value="Suède">SE</option>
                <option value="Suisse">CH</option>
                <option value="Suriname">SR</option>
                <option value="Syrie">SY</option>
                <option value="Tadjikistan">TJ</option>
                <option value="Tanzanie">TZ</option>
                <option value="Tchad">TD</option>
                <option value="Thaïlande">TH</option>
                <option value="Timor oriental">TL</option>
                <option value="Togo">TG</option>
                <option value="Tonga">TO</option>
                <option value="Trinité-et-Tobago">TT</option>
                <option value="Tunisie">TN</option>
                <option value="Turkménistan">TM</option>
                <option value="Turquie">TR</option>
                <option value="Tuvalu">TV</option>
                <option value="Ukraine">UA</option>
                <option value="Uruguay">UY</option>
                <option value="Vanuatu">VU</option>
                <option value="Vatican">VA</option>
                <option value="Venezuela">VE</option>
                <option value="Vietnam">VN</option>
                <option value="Yémen">YE</option>
                <option value="Zambie">ZM</option>
                <option value="Zimbabwe">ZW</option>
                  </datalist>
            
            </div>
            <div class="form-group mt-3">
              <input type="number" class="form-control" name="num_tel" id="num_tel" placeholder="Numero de Téléphone" required>
            </div>
            {{-- <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div> --}}
           
            <div class="text-center"><button type="submit">Soumettre</button></div>
          </form>

        </div>

      </div>

    </div>
  </section>
  @endsection