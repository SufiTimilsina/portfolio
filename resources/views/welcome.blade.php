@extends('layout.temp')
@section('content')

<section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Sufi Timilsina</h1>
      <p>I'm <span class="typed" data-typed-items="Developer, Designer, Freelancer"></span></p>
    <div class="social-links">
    @foreach ($aboutlist as $about) 
        <a href="{{ $about->facebook }}" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="{{ $about->instagram }}" class="instagram"><i class="fa-brands fa-instagram"></i></a>
        <a href="{{ $about->linkedin }}" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="{{ $about->github }}" class="Github"><i class="fa-brands fa-github"></i></a>
@endforeach
      </div>
    </div>

  </section>
  @stop