<header class="bg-stone-800 text-white px-5 shadow-xl my_header">
  <nav class="container mx-auto py-4 flex flex-wrap justify-between items-center">
    <!-- Logo -->
    <a href="{{ route('home') }}" class="text-4xl font-extrabold text-stone-100 tracking-wide">
      <img src="{{ asset('assets/images/logo/logo.jpg') }}" alt="Logo" width="100">
    </a>
    
    <!-- Mobile Menu Toggle Button -->
    <button class="text-white text-3xl md:hidden focus:outline-none" id="mobile-menu-button">
      &#9776; <!-- Hamburger icon -->
    </button>
    
    <!-- Navigation Menu (responsive) -->
    <ul class="nav-menu hidden md:flex md:flex-row flex-wrap justify-center space-y-4 md:space-y-0 md:space-x-8 text-lg font-medium w-full md:w-auto" id="main-nav-menu">
      <li><a href="{{ route('home') }}" class="hover:text-teal-400 transition duration-300 nav-link block py-2 px-4 rounded-lg @if(Request::routeIs('home')) text-teal-300 @endif">Home</a></li>
      <li><a href="{{ route('front.about') }}" class="hover:text-teal-400 transition duration-300 nav-link block py-2 px-4 rounded-lg @if(Request::routeIs('front.about')) text-teal-300 @endif">About Us</a></li>
      <li><a href="{{ route('front.management') }}" class="hover:text-teal-400 transition duration-300 nav-link block py-2 px-4 rounded-lg @if(Request::routeIs('front.management')) text-teal-300 @endif">Management</a></li>
      <li><a href="{{ route('front.ourStory') }}" class="hover:text-teal-400 transition duration-300 nav-link block py-2 px-4 rounded-lg @if(Request::routeIs('front.ourStory')) text-teal-300 @endif">Our Story</a></li>
      <li><a href="{{ route('front.products') }}" class="hover:text-teal-400 transition duration-300 nav-link block py-2 px-4 rounded-lg @if(Request::routeIs('front.products')) text-teal-300 @endif">Products</a></li>
      <li><a href="{{ route('front.events') }}" class="hover:text-teal-400 transition duration-300 nav-link block py-2 px-4 rounded-lg @if(Request::routeIs('front.events')) text-teal-300 @endif">Events</a></li>
      <li><a href="{{ route('front.contact') }}" class="hover:text-teal-400 transition duration-300 nav-link block py-2 px-4 rounded-lg @if(Request::routeIs('front.contact')) text-teal-300 @endif">Contact Us</a></li>
    </ul>
  </nav>
</header>