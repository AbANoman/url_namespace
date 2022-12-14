<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NameSpace URL Shortener - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{ url('/') }}">NameSpace</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">

                    <ul>
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link scrollto active" href="{{ url('/#hero') }}">Home</a></li>
                            <li><a class="nav-link scrollto" href="{{ url('/#services') }}">Shorten</a></li>
                            <li><a class="nav-link scrollto" href="{{ url('/#about') }}">About</a></li>
                            <li><a class="nav-link scrollto" href="{{ url('/#pricing') }}">Pricing</a></li>
                            <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
                            
                            @if (Route::has('register'))
                            <li><a class="nav-link scrollto" href="{{ route('register') }}">Register</a></li>
                            <li><a class="getstarted scrollto" href="{{ route('register') }}">Get a Quote</a></li>
                            @endif
                        @else

                            <li><a class="nav-link scrollto" href="#">
                                    @if(auth()->user()->is_admin)
                                        <span class="badge badge-secondary">{{ __('Admin') }}</span> &nbsp;
                                    @endif
                                    {{ auth()->user()->name }}
                                </a>
                            </li>
                                    @if(auth()->user()->is_admin)
                                        <a href="/admin/links" class="dropdown-item">{{ __('All Links') }}</a>
                                        <a href="/admin/users" class="dropdown-item">{{ __('Users') }}</a>
                                        <div class="dropdown-divider"></div>
                                    @endif
                                    <a href="user/dashboard" class="dropdown-item">{{ __('My Dashboard') }}</a>
                                    <a href="/settings" class="dropdown-item">{{ __('Settings') }}</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

      <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->