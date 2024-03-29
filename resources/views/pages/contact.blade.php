@extends('layout.temp')
@section('content')
<main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>
       
        <div class="row mt-1">
        @foreach ($aboutlist as $about) 
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>{{ $about->location }}</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{ $about->email }}</p>
              </div>

            </div>

          </div>
          @endforeach
        
          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{ route ('contactus') }}" method="POST" role="form" class="contactform" enctype="multipart/form-data">
              {{csrf_field()}}

              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              @if (session('status'))
                <div class="send-message" role="alert">
                {{ session('status') }}</div>
                @endif

              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main>

@stop