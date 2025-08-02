<!DOCTYPE html>
<html>

<head>
  <title>@hasSection('page_title')@yield('page_title') @endif</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  @yield('front-header')
</head>

<body class="rounded-btns rounded-btns">

  @yield('guest')


  @yield('front-footer')
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const mobileMenuButton = document.getElementById('mobile-menu-button');
      const mainNavMenu = document.getElementById('main-nav-menu');

      if (mobileMenuButton && mainNavMenu) {
        mobileMenuButton.addEventListener('click', () => {
          mainNavMenu.classList.toggle('active');
        });
      }
    });
  </script>
</body>

</html>