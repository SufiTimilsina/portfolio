@extends('layout.temp')
@section('content')

<main id="main">
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallary</h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
            
              <li data-filter=".filter-app">Portfolio</li>
              <li data-filter=".filter-card">My Photos</li>
              
            </ul>
          </div>
        </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
      @foreach  ($gallarylist as $gallary) 
        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ Storage::url($gallary->photos) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="{{ Storage::url($gallary->photos) }}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="fa-solid fa-magnifying-glass"></i></a>
                </div>
              </div>
            </div>
        </div>
        @endforeach

        @foreach  ($portfoliolist as $portfolio) 
         <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ Storage::url($portfolio->image) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p>{{ $portfolio->title }}</p>
                <div class="portfolio-links">
                  <a href="{{ Storage::url($portfolio->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $portfolio->detail }}"><i class="fa-solid fa-magnifying-glass"></i></a>
                 
                </div>
              </div>
            </div>
          </div>

        </div>
        @endforeach

      </div>
    </section><!-- End Portfolio Section -->
</main>
@stop