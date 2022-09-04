@extends('layout.temp')
@section('content')
<style>
  p{
    text-align:justify;

  }
  </style>

<main id="main">

    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{ $blog->blog_title }}</h2>
          <h6>Last updated on {{ $blog->updated_at }}</h6>
        </div>

        <section class="project-detail section-padding">
          <div class="container">
               <div class="row">

                  <div class="col-lg-6 col-md-6 col-12 mb-5">

                      <img src="{{ Storage::url($blog->blog_image) }}" class="img-fluid" alt="personal website" data-aos="fade-up">
                    </div>

                    <div class="col-lg-5 col-md-6 mr-lg-auto mt-lg-5 col-12">

                      <p class="mt-1 mb-2">  {{ $blog->blog_body }}</p> 
                    </div>
                    <p>{{ $blog->blog_body }}</p>
              </div>
             
          </div>
       
     </section>
   

      </div>
    </section><!-- End Services Section -->


</main>
@stop