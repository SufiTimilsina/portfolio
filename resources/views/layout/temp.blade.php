<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sufi Timilsina</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets')}}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('assets')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('assets')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('assets')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('assets')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets')}}/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="\" class="nav-link"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="{{ route('about') }}" class="nav-link"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="{{ route('gallary') }}" class="nav-link"><i class="bx bx-book-content"></i> <span>Gallary</span></a></li>
        <li><a href="{{ route('blog') }}" class="nav-link"><i class="bx bx-server"></i> <span>Blog</span></a></li>
        <li><a href="{{ route('contact') }}" class="nav-link"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->


  <div class="main-content">
            @yield('content')
        </div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets')}}/vendor/purecounter/purecounter.js"></script>
  <script src="{{ asset('assets')}}/vendor/aos/aos.js"></script>
  <script src="{{ asset('assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets')}}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('assets')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('assets')}}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('assets')}}/vendor/typed.js/typed.min.js"></script>
  <script src="{{ asset('assets')}}/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{ asset('assets')}}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets')}}/js/main.js"></script>

</body>

</html>