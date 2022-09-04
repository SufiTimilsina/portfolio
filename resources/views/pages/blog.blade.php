@extends('layout.temp')
@section('content')

<main id="main">

    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Blogs</h2>
        </div>

        <div class="row">
        @foreach ($bloglist as $blog) 

 <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="card">
  
    <img class="card-img-top" src="{{ Storage::url($blog->blog_image) }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $blog->blog_title }}</h5>
  
      <a href="/readblog/{{ $blog->id }}" class="btn">Read</a>
    </div>
  </div>
</div>
@endforeach
        </div>

      </div>
    </section><!-- End Services Section -->


</main>
@stop