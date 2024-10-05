<!DOCTYPE html>
<html>

<head>
  <title>@hasSection('page_title')@yield('page_title') @endif</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Rajbala SHG">

  <title> Rajbala SHG </title>

  <!-- fav icon -->
  <link rel="icon" href="images/logo.png">

  <!-- bootstarp -->
  <link rel="stylesheet" href="{{ asset('front/css/vendors/bootstrap.min.css') }}">

  <!-- Fancybox -->
  <link rel="stylesheet" href="{{ asset('front/css/vendors/jquery.fancybox.min.css') }}">

  <!-- animate.css') }} file -->
  <link rel="stylesheet" href="{{ asset('front/css/vendors/animate.css') }}">

  <!-- Swiper -->
  <link rel="stylesheet" href="{{ asset('front/css/vendors/swiper.min.css') }}">

  <!-- fontAwesome -->
  <link rel="stylesheet" href="{{ asset('front/css/vendors/all.min.css') }}">


  <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">

  <!-- Font Family -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Merriweather:wght@100;300;400;500;700;800;900&amp;family=Nunito:wght@100;300;400;500;600;700;800;900&amp;display=swap">

  <!-- main-LTR -->
  <link rel="stylesheet" href="{{ asset('front/css/main-LTR.css') }}">

  @yield('front-header')
</head>

<body class="rounded-btns rounded-btns">

  @yield('guest')


  @yield('front-footer')
</body>

</html>