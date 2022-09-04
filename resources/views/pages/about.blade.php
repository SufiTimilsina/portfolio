@extends('layout.temp')
@section('content')

<main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">
 
    <div class="section-title">
      <h2>About</h2>
      @foreach ($aboutlist as $about) 
      <p>{{ $about->describe }}</p>
    </div>

    <div class="row">
      <div class="col-lg-10 pt-4 pt-lg-0 content">
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>27 Feb, 2000</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{ $about->website }}</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $about->location }}</span></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $about->age }}</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ $about->degree }}</span></li>
          
            </ul>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Skills</h2>
    </div>
    <div class="row skills-content">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Language and Script</th>
      <th scope="col">Web Technologies</th>
      <th scope="col">Designing</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($skilllist as $skill) 
    <tr>

      <td>{{ $skill->language }}</td>
      <td>{{ $skill->technology }}</td>
      <td>{{ $skill->design }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</main>

@stop