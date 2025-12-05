



  <!-- ======= Header ======= -->

  @extends('layout')
  @section('title', 'testimonials')
  @section('content')
 
 
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2 style="color: #275efe">temoignages</h2>
        <ol>
          <li><a href="index">Acceuil</a></li>
          <li>temoignages</li>
        </ol>
      </div>

    </div>
  </section>
  
  <section id="testimonials" class="testimonials">
    <div class="container">
{{-- @dd($temoignages) --}}
      <div class="row">
        @foreach($temoignages as $temoignage)
        <div class="col-lg-6">
          <div class="testimonial-item">
            <img src="images/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>{{ $temoignage->nom_prenom }}</h3>
            <h4>{{ $temoignage->poste }}</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              {{ $temoignage->temoignagetext }}              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div>
      
        <div class="col-lg-6">
          <div class="testimonial-item mt-4 mt-lg-0">
            <img src="images/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>{{ $temoignage->nom_prenom }}</h3>
            <h4>{{ $temoignage->poste }}</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              {{ $temoignage->temoignagetext }}              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="testimonial-item mt-4">
            <img src="images/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>{{ $temoignage->nom_prenom }}</h3>
            <h4>{{ $temoignage->poste }}</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              {{ $temoignage->temoignagetext }}              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div>
        
        <div class="col-lg-6">
          <div class="testimonial-item mt-4">
            <img src="images/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>{{ $temoignage->nom_prenom }}</h3>
            <h4>{{ $temoignage->poste }}</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              {{ $temoignage->temoignagetext }}              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div>
        

        
        
      </div>

    </div>
  </section>
  @endforeach
  