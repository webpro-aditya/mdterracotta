@extends('layouts.user_type.guest')

@section('page_title', __('Events'))
@section('front-header')
<style>
  /* Button styles for a more professional look */
  .btn-primary {
    background-color: #0D9488;
    /* Teal-700 */
    color: white;
    padding: 0.75rem 2rem;
    border-radius: 0.5rem;
    /* Slightly less rounded */
    font-weight: 600;
    transition: background-color 0.3s ease, transform 0.2s ease;
  }

  .btn-primary:hover {
    background-color: #0F766E;
    /* Teal-800 */
    transform: translateY(-2px);
  }

  /* Custom styles for mobile menu toggle */
  .mobile-menu-button {
    display: none;
    /* Hidden by default */
    cursor: pointer;
    font-size: 2rem;
    color: white;
  }

  /* Show button on small screens */
  @media (max-width: 767px) {

    /* Tailwind's 'md' breakpoint is 768px */
    .mobile-menu-button {
      display: block;
    }

    .nav-menu.active {
      display: flex;
      /* Show menu when active */
      flex-direction: column;
      /* Stack items vertically */
      width: 100%;
      text-align: center;
      margin-top: 1rem;
    }

    .nav-menu li {
      margin: 0.5rem 0;
    }
  }
</style>
@endsection
@section('content')
<main class="container py-12">

  <!-- Events Section -->
  <section id="events-content">
    <div class="bg-white rounded-2xl shadow-2xl p-8 mb-12">
      <h1 class="text-4xl font-extrabold text-center text-stone-900 mb-10 leading-tight">Our Events & Photo Gallery</h1>

      <p class="text-xl text-gray-700 leading-loose text-center mb-12 max-w-3xl mx-auto">
        Stay updated with our latest workshops, exhibitions, and community outreach programs. Explore moments that capture the essence of our work and the beauty of terracotta art.
      </p>

      <h2 class="text-4xl font-bold text-center text-stone-900 mb-10">Upcoming Events</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
        <!-- Upcoming Event 1 -->
        <div class="bg-teal-50 rounded-xl shadow-lg overflow-hidden border-b-4 border-teal-600">
          <img src="{{ asset('assets/images/banners/2.jpeg') }}" alt="Upcoming Workshop" class="w-full h-56 object-cover">
          <div class="p-6">
            <h3 class="text-2xl font-semibold text-stone-800 mb-2">Advanced Terracotta Glazing Workshop</h3>
            <p class="text-gray-600 text-base mb-3">
              Learn advanced glazing techniques from master artisans. Limited seats available!
            </p>
            <p class="text-sm text-gray-500 mb-4">Date: Feb, 2021 | Location: Artisan Training Center</p>
            <!-- <a href="#" class="btn-primary text-sm">Register Now</a> -->
          </div>
        </div>
        <!-- Upcoming Event 2 -->
        <div class="bg-teal-50 rounded-xl shadow-lg overflow-hidden border-b-4 border-teal-600">
          <img src="{{ asset('assets/images/banners/6.jpeg') }}" alt="Annual Exhibition" class="w-full h-56 object-cover">
          <div class="p-6">
            <h3 class="text-2xl font-semibold text-stone-800 mb-2">Annual Terracotta Art Exhibition</h3>
            <p class="text-gray-600 text-base mb-3">
              Discover new collections and interact with artisans at our biggest annual event.
            </p>
            <p class="text-sm text-gray-500 mb-4">Date: November 5-7, 2025 | Location: City Exhibition Hall</p>
            <!-- <a href="#" class="btn-primary text-sm">Learn More</a> -->
          </div>
        </div>
        <!-- Upcoming Event 3 -->
        <div class="bg-teal-50 rounded-xl shadow-lg overflow-hidden border-b-4 border-teal-600">
          <img src="{{ asset('assets/images/banners/8.jpeg') }}" alt="Community Fair" class="w-full h-56 object-cover">
          <div class="p-6">
            <h3 class="text-2xl font-semibold text-stone-800 mb-2">Rural Craft Fair Participation</h3>
            <p class="text-gray-600 text-base mb-3">
              We'll be showcasing our crafts at the local rural community fair.
            </p>
            <p class="text-sm text-gray-500 mb-4">Date: December 1, 2025 | Location: Village Community Ground</p>
            <!-- <a href="#" class="btn-primary text-sm">View Details</a> -->
          </div>
        </div>
      </div>

      <h2 class="text-4xl font-bold text-center text-stone-900 mb-10">Past Events & Gallery</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        <!-- Gallery Item 1 -->
        <div class="bg-stone-50 rounded-xl shadow-lg overflow-hidden">
          <img src="{{ asset('assets/images/banners/3.jpeg') }}" alt="Artisan Workshop 2024" class="w-full h-56 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-stone-800 mb-2">Artisan Workshop 2021</h3>
            <p class="text-gray-600 text-sm">Focus on traditional firing techniques.</p>
            <p class="text-xs text-gray-500 mt-2">Date: Dec 2021</p>
          </div>
        </div>
        <!-- Gallery Item 2 -->
        <div class="bg-stone-50 rounded-xl shadow-lg overflow-hidden">
          <img src="{{ asset('assets/images/banners/4.jpeg') }}" alt="Exhibition Highlights" class="w-full h-56 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-stone-800 mb-2">Exhibition Highlights</h3>
            <p class="text-gray-600 text-sm">Glimpses from our successful Spring 2022 exhibition.</p>
            <p class="text-xs text-gray-500 mt-2">Date: Feb 2022</p>
          </div>
        </div>
        <!-- Gallery Item 3 -->
        <div class="bg-stone-50 rounded-xl shadow-lg overflow-hidden">
          <img src="{{ asset('assets/images/banners/2.jpeg') }}" alt="School Visit" class="w-full h-56 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-stone-800 mb-2">School Outreach Program</h3>
            <p class="text-gray-600 text-sm">Engaging young students with the art of terracotta.</p>
            <p class="text-xs text-gray-500 mt-2">Date: Feb 2021</p>
          </div>
        </div>
        <!-- Gallery Item 4 -->
        <div class="bg-stone-50 rounded-xl shadow-lg overflow-hidden">
          <img src="{{ asset('assets/images/banners/7.jpeg') }}" alt="Artisan Meetup" class="w-full h-56 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-stone-800 mb-2">Artisan Community Meetup</h3>
            <p class="text-gray-600 text-sm">A gathering for knowledge sharing and collaboration.</p>
            <p class="text-xs text-gray-500 mt-2">Date: June 2024</p>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection

@section('front-footer')

@endsection