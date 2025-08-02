<!-- Header and Navigation -->
<header class="bg-stone-800 text-white px-5 shadow-xl">
  <nav class="container flex flex-col md:flex-row justify-between items-center">
    <a href="index.html" class="text-4xl font-extrabold text-stone-100 mb-4 md:mb-0 tracking-wide">
      <img src="{{ asset('assets/images/logo/logo.jpg') }}" alt="Logo" width="100">
    </a>
    <!-- Mobile Menu Toggle Button -->
    <button class="mobile-menu-button md:hidden" id="mobile-menu-button">
      &#9776; <!-- Hamburger icon -->
    </button>
    <!-- Navigation Menu -->
    <ul class="nav-menu hidden md:flex flex-wrap justify-center space-x-6 md:space-x-8 text-lg font-medium" id="main-nav-menu">
      <li><a href="{{ route('home') }}" class="hover:text-teal-400 transition duration-300 nav-link text-teal-300">Home</a></li>
      <li><a href="{{ route('front.about') }}" class="hover:text-teal-400 transition duration-300 nav-link">About Us</a></li>
      <li><a href="{{ route('front.management') }}" class="hover:text-teal-400 transition duration-300 nav-link">Management</a></li>
      <li><a href="{{ route('front.ourStory') }}" class="hover:text-teal-400 transition duration-300 nav-link">Our Story</a></li>
      <li><a href="{{ route('front.products') }}" class="hover:text-teal-400 transition duration-300 nav-link">Products</a></li>
      <li><a href="{{ route('front.events') }}" class="hover:text-teal-400 transition duration-300 nav-link">Events</a></li>
      <li><a href="{{ route('front.contact') }}" class="hover:text-teal-400 transition duration-300 nav-link">Contact Us</a></li>
    </ul>
  </nav>
</header>