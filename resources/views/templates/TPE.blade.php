@extends('layout')
  
  @section('content')

  
  
  <style>
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
  <section id="TPE" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2 style="color: #275efe">nos TPE</h2>
        <ol>
          <li><a href="index">Acceuil</a></li>
          <li>nos TPE</li>
        </ol>
      </div>

    </div>
    <section>
        <div class="container">

            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui totam quod laudantium. Placeat beatae fugit, vel quos, commodi natus possimus illum tenetur fuga modi enim consequuntur incidunt? Sunt, odio voluptatem!</h4>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, magnam minus aut cum aperiam neque alias, rem minima sed odit natus eius officiis aliquam explicabo magni omnis sapiente animi reiciendis!</h4>
            </div>
        <div class="tpe-container">
            <div class="tpe-content">
                <div class="main-image-container">
                    <img src="{{ asset('images/tpe/tpe_image_1.jpg') }}" alt="TPE principal" class="main-image" id="mainImage1">
                    <p style="color: #275efe">Nom du TPE</p>
                </div>
                <div class="small-images">
                    <img src="{{ asset('images/tpe/tpe_image_1.jpg') }}" alt="TPE vue 1" class="small-image" onclick="changeImage(this, 'mainImage1')">
                    <img src="{{ asset('images/tpe/tpe_image_2.jpg') }}" alt="TPE vue 2" class="small-image" style="margin-top: 40px" onclick="changeImage(this, 'mainImage1')">
                    <img src="{{ asset('images/tpe/tpe_image_3.jpg') }}" alt="TPE vue 3" class="small-image" style="margin-top: 40px  " onclick="changeImage(this, 'mainImage1')">
                </div>
            </div>
            
            <div class="description">
                <h2 style="margin-left: 75px; color: #275efe">Description du TPE</h2>
                <p style="margin-top: 30px">
                    <span>Le TPE (Terminal de Paiement Électronique) est un dispositif permettant de réaliser des transactions financières 
                    sécurisées. Il est utilisé dans les commerces pour accepter les paiements par carte bancaire.</span>
                </p>
                <p>Système d'exploitation :</p>
                <p>Stockage :</p>
                <p>NFC :</p>
                <p>imprimante thermique & scanner:</p>
                <p>carte a puce & connectivité :</p>
                <p>Taille :</p>
            </div>
        </div>
    </section>

    <section>
        <div class="tpe-container">
            <div class="tpe-content">
                <div class="main-image-container">
                    <img src="{{ asset('images/tpe/tpe_image_1.jpg') }}" alt="TPE principal" class="main-image" id="mainImage2">
                    <p style="color: #275efe">Nom du TPE</p>
                </div>
                <div class="small-images">
                    <img src="{{ asset('images/tpe/tpe_image_1.jpg') }}" alt="TPE vue 1" class="small-image" onclick="changeImage(this, 'mainImage2')">
                    <img src="{{ asset('images/tpe/tpe_image_2.jpg') }}" alt="TPE vue 2" class="small-image" style="margin-top: 40px" onclick="changeImage(this, 'mainImage2')">
                    <img src="{{ asset('images/tpe/tpe_image_3.jpg') }}" alt="TPE vue 3" class="small-image" style="margin-top: 40px  " onclick="changeImage(this, 'mainImage2')">
                </div>
            </div>
            
            <div class="description">
                <h2 style="margin-left: 75px; color: #275efe">Description du TPE</h2>
                <p style="margin-top: 30px">
                    <span>Le TPE (Terminal de Paiement Électronique) est un dispositif permettant de réaliser des transactions financières 
                    sécurisées. Il est utilisé dans les commerces pour accepter les paiements par carte bancaire.</span>
                </p>
                <p>O.S :</p>
            <p>Stockage :</p>
            <p>NFC :</p>
            <p>imprimante thermique & scanner:</p>
            <p>carte a puce & connectivité :</p>
            <p>Taille :</p>
            </div>
        </div>
    </section>
    <section>
        <div class="tpe-container">
            <div class="tpe-content">
                <div class="main-image-container">
                    <img src="{{ asset('images/tpe/tpe_image_1.jpg') }}" alt="TPE principal" class="main-image" id="mainImage3">
                    <p style="color: #275efe">Nom du TPE</p>
                </div>
                <div class="small-images">
                    <img src="{{ asset('images/tpe/tpe_image_1.jpg') }}" alt="TPE vue 1" class="small-image" onclick="changeImage(this, 'mainImage3')">
                    <img src="{{ asset('images/tpe/tpe_image_2.jpg') }}" alt="TPE vue 2" class="small-image" style="margin-top: 40px" onclick="changeImage(this, 'mainImage3')">
                    <img src="{{ asset('images/tpe/tpe_image_3.jpg') }}" alt="TPE vue 3" class="small-image" style="margin-top: 40px  " onclick="changeImage(this, 'mainImage3')">
                </div>
            </div>
            
            <div class="description">
                <h2 style="margin-left: 75px; color: #275efe">Description du TPE</h2>
                <p style="margin-top: 30px">
                    <span>Le TPE (Terminal de Paiement Électronique) est un dispositif permettant de réaliser des transactions financières 
                    sécurisées. Il est utilisé dans les commerces pour accepter les paiements par carte bancaire.</span>
                </p>
                <p>O.S :</p>
            <p>Stockage :</p>
            <p>NFC :</p>
            <p>imprimante thermique & scanner:</p>
            <p>carte a puce & connectivité :</p>
            <p>Taille :</p>
            </div>
        </div>
    </section>

  <section>
    <div class="tpe-container">
        <div class="tpe-content">
            <div class="main-image-container">
                <img src="{{ asset('images/tpe/tpe_image_1.jpg') }}" alt="TPE principal" class="main-image" id="mainImage4">
                <p style="color: #275efe">Nom du TPE</p>
            </div>
            <div class="small-images">
                <img src="{{ asset('images/tpe/tpe_image_1.jpg') }}" alt="TPE vue 1" class="small-image" onclick="changeImage(this, 'mainImage4')">
                <img src="{{ asset('images/tpe/tpe_image_2.jpg') }}" alt="TPE vue 2" class="small-image" style="margin-top: 40px" onclick="changeImage(this, 'mainImage4')">
                <img src="{{ asset('images/tpe/tpe_image_3.jpg') }}" alt="TPE vue 3" class="small-image" style="margin-top: 40px  " onclick="changeImage(this, 'mainImage4')">
            </div>
        </div>
        
        <div class="description">
            <h2 style="margin-left: 75px; color: #275efe">Description du TPE</h2>
            <p style="margin-top: 30px">
                <span>Le TPE (Terminal de Paiement Électronique) est un dispositif permettant de réaliser des transactions financières 
                sécurisées. Il est utilisé dans les commerces pour accepter les paiements par carte bancaire.</span>
            </p>
            <p>O.S :</p>
            <p>Stockage :</p>
            <p>NFC :</p>
            <p>imprimante thermique & scanner:</p>
            <p>carte a puce & connectivité :</p>
            <p>Taille :</p>
        </div>
    </div>
</section>
<script src="{{ asset('js/script.js') }}"></script>
@endsection