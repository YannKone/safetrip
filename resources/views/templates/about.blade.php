@extends('layout')
  @section('title', 'a propos')
  @section('content')
 
 
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2 style="color: #257EFE">à Propos</h2>
        <ol>
          <li><a href="index">Acceuil</a></li>
          <li>à Propos</li>
        </ol>
      </div>

    </div>
  </section>
  <section id="about" class="about">
    <div class="container">
        {{-- <div class="row">
          <div class="row">
            <div> <h2 class="tittle-left" style="color: #275EFE">Architecture & Processus FuelPay</h2>    </div>
           
            </div>
            <div class="col-lg-6 image-section">
                <img src="{{ asset('images/logo_fp/architectureFP.png') }}" alt="Illustration FuelPay" class="img-fluid">
            </div>

            <div class="col-lg-6 content-section">
                <ul>
                   <p> <i class="ri-check-double-line" style="color: #257EFE" ></i> Le client initie une demande de recharge de son compte Fuelpay</p>
                    <p><i class="ri-check-double-line" style="color: #257EFE" ></i> Le serveur FuelPay sollicite l’agrégateur de paiement suivant le moyen de paiement choisi et le montant</p>  
                    <p><i class="ri-check-double-line" style="color: #257EFE"></i> L’agrégateur informe le serveur FuelPay du rechargement de compte client, qui met à jour le solde du client</p>
                    <p><i class="ri-check-double-line" style="color: #257EFE"></i> Le client reçoit une notification du rechargement de solde</p>
                   <p> <i class="ri-check-double-line" style="color: #257EFE"></i> Le client se rend en station pour une consommation (carburant, lavage, boutique, lubrifiant, gaz)</p>
                   <p> <i class="ri-check-double-line" style="color: #257EFE"></i> Le personnel de station après avoir pris la commande du client scanne le QR code du client pour le débiter via un terminal mis à disposition de la station-service, qui envoie un ordre de débit du compte du client au serveur.</p>
                    <p><i class="ri-check-double-line" style="color: #257EFE"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</p>
                    <p><i class="ri-check-double-line" style="color: #257EFE"></i> Le serveur informe le terminal de débit du compte client.</p>
                    <p><i class="ri-check-double-line" style="color: #257EFE"></i> Le serveur alerte le client et met à jour son solde sur son mobile.</p>
                    <p><i class="ri-check-double-line" style="color: #257EFE"></i> Les Managers (FuelPay et partenaires pétrolier) suivent les transactions en temps réel, accès au PKI, rapprochement financiers, transactions par stations, …</p>
                </ul>
            </div>
        </div> --}}
        <h4>
        <p>FuelPay est la solution de paiement mobile innovante qui révolutionne votre expérience à la station-service. Dites adieu aux files d'attente et aux portefeuilles encombrés ! Avec FuelPay, réglez votre carburant en quelques clics, directement depuis votre smartphone. Rapide, sécurisé et pratique, FuelPay est votre compagnon idéal pour tous vos déplacements.</p>
        <p>Les entreprises peuvent désormais optimiser la gestion de leur flotte grâce à FuelPay. Notre solution permet un suivi précis des consommations, une facturation simplifiée et une meilleure maîtrise des coûts. Offrez à vos collaborateurs une expérience de paiement fluide et sécurisée.</p>
        <p></p>
        </h4>
    
      </div>
  
</section>
@endsection