@extends('layouts.user_type.guest')

@section('page_title', __('Maadhatri Terracotta Craft Producer'))
@section('front-header')
<style>
  /* Custom styles for the slider */
  .slider-container {
    position: relative;
    overflow: hidden;
    border-radius: 0.75rem;
    /* rounded-xl */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    /* Subtle shadow for depth */
  }

  .slider-wrapper {
    display: flex;
    transition: transform 0.6s ease-in-out;
    /* Slightly slower transition */
  }

  .slider-item {
    min-width: 100%;
    box-sizing: border-box;
    height: 550px;
    /* Slightly taller slider images */
    background-size: cover !important;
    background-repeat: no-repeat !important;
    background-position: center center !important;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: white;
    text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);
    /* Stronger text shadow */
    font-size: 3rem;
    /* Larger font size for impact */
    font-weight: 800;
    /* Extra bold font */
    padding: 2rem;
    text-align: center;
  }

  .slider-item p {
    margin-bottom: 1rem;
  }

  .slider-item .slider-description {
    font-size: 1.25rem;
    font-weight: 500;
    max-width: 700px;
    line-height: 1.6;
  }

  .slider-nav-button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.4);
    /* Slightly lighter overlay */
    color: white;
    padding: 0.75rem 1.25rem;
    /* Larger buttons */
    border-radius: 9999px;
    /* rounded-full */
    cursor: pointer;
    z-index: 10;
    font-size: 1.8rem;
    /* Larger icon */
    transition: background-color 0.3s ease;
  }

  .slider-nav-button:hover {
    background-color: rgba(0, 0, 0, 0.6);
  }

  .slider-nav-button.left {
    left: 1.5rem;
    /* More spacing */
  }

  .slider-nav-button.right {
    right: 1.5rem;
    /* More spacing */
  }

  /* Product card hover effect */
  .product-card {
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
  }

  .product-card:hover {
    transform: translateY(-8px);
    /* More pronounced lift */
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.15);
    /* Stronger shadow on hover */
  }

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

  .btn-secondary {
    border: 2px solid #0D9488;
    /* Teal-700 border */
    color: #0D9488;
    padding: 0.75rem 2rem;
    border-radius: 0.5rem;
    font-weight: 600;
    transition: background-color 0.3s ease, color 0.3s ease, transform 0.2s ease;
  }

  .btn-secondary:hover {
    background-color: #0D9488;
    color: white;
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

  <!-- Homepage Section -->
  <section id="home-content">
    <div class="bg-white rounded-2xl shadow-2xl p-8 mb-12">
      <h1 class="text-4xl font-extrabold text-center text-stone-900 mb-10 leading-tight">Crafting Heritage, Empowering Futures</h1>

     <!-- Slider Section -->
      <div class="slider-container w-full mx-auto mb-16">
        <div class="slider-wrapper" id="slider-wrapper">
          <div class="slider-item" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url({{ asset('assets/images/banners/1.jpeg') }});">
            <p>Exquisite Craftsmanship</p>
            <p class="slider-description text-xl font-light">Each piece tells a story of tradition, skill, and dedication.</p>
          </div>

          <div class="slider-item" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url({{ asset('assets/images/banners/2.jpeg') }});">
            <p>Artisan Empowerment</p>
            <p class="slider-description text-xl font-light">Supporting rural communities through sustainable livelihoods.</p>
          </div>

          <div class="slider-item" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url({{ asset('assets/images/banners/3.jpeg') }});">
            <p>Timeless Terracotta</p>
            <p class="slider-description text-xl font-light">Bringing ancient art into modern homes.</p>
          </div>
        </div>
        <button class="slider-nav-button left" id="prev-slide">&#10094;</button>
        <button class="slider-nav-button right" id="next-slide">&#10095;</button>
      </div>


      <div class="text-center mb-16">
        <p class="text-xl text-gray-700 leading-loose mb-8 max-w-3xl mx-auto">
          Maa Dharitri Terracotta Craft Producer is a non-profit organization dedicated to preserving the rich heritage of terracotta artistry while fostering economic independence for skilled artisans. We connect traditional craftsmanship with global markets, ensuring fair trade and sustainable practices.
        </p>
        <p class="text-xl text-gray-700 leading-loose max-w-3xl mx-auto">
          Discover the beauty of handcrafted terracotta and become a part of a movement that celebrates culture, empowers communities, and promotes ethical artistry.
        </p>
      </div>

      <!-- Our Impact Section -->
      <h2 class="text-4xl font-bold text-center text-stone-900 mb-10">Our Impact</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
        <div class="bg-teal-50 rounded-xl shadow-lg p-8 text-center border-b-4 border-teal-600">
          <p class="text-6xl font-extrabold text-teal-700 mb-4">500+</p>
          <h3 class="text-2xl font-semibold text-stone-800 mb-2">Artisans Supported</h3>
          <p class="text-gray-600 text-base">Providing sustainable livelihoods and skill development.</p>
        </div>
        <div class="bg-teal-50 rounded-xl shadow-lg p-8 text-center border-b-4 border-teal-600">
          <p class="text-6xl font-extrabold text-teal-700 mb-4">5+</p>
          <h3 class="text-2xl font-semibold text-stone-800 mb-2">Years of Service</h3>
          <p class="text-gray-600 text-base">A decade dedicated to preserving traditional crafts.</p>
        </div>
        <div class="bg-teal-50 rounded-xl shadow-lg p-8 text-center border-b-4 border-teal-600">
          <p class="text-6xl font-extrabold text-teal-700 mb-4">100%</p>
          <h3 class="text-2xl font-semibold text-stone-800 mb-2">Fair Trade</h3>
          <p class="text-gray-600 text-base">Ensuring ethical practices and fair compensation.</p>
        </div>
      </div>

      <!-- Why Choose Us Section -->
      <h2 class="text-4xl font-bold text-center text-stone-900 mb-10">Why Choose Maa Dharitri Crafts?</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
        <div class="bg-stone-50 rounded-xl shadow-md p-8 text-center border-t-4 border-stone-300">
          <div class="text-6xl text-teal-600 mb-4">&#9996;&#65039;</div> <!-- Hand gesture for handcrafted -->
          <h3 class="text-2xl font-semibold text-stone-800 mb-2">Authentic Handcrafted Quality</h3>
          <p class="text-gray-600 text-base">Each product is meticulously crafted by master artisans, ensuring unparalleled quality and authenticity.</p>
        </div>
        <div class="bg-stone-50 rounded-xl shadow-md p-8 text-center border-t-4 border-stone-300">
          <div class="text-6xl text-teal-600 mb-4">&#127757;</div> <!-- Globe for global impact -->
          <h3 class="text-2xl font-semibold text-stone-800 mb-2">Ethical & Sustainable Sourcing</h3>
          <p class="text-gray-600 text-base">We are committed to eco-friendly practices and fair wages, supporting both people and planet.</p>
        </div>
        <div class="bg-stone-50 rounded-xl shadow-md p-8 text-center border-t-4 border-stone-300">
          <div class="text-6xl text-teal-600 mb-4">&#128161;</div> <!-- Lightbulb for innovation/unique -->
          <h3 class="text-2xl font-semibold text-stone-800 mb-2">Unique Artistic Expressions</h3>
          <p class="text-gray-600 text-base">Discover distinctive designs that blend traditional techniques with contemporary aesthetics.</p>
        </div>
      </div>

      <!-- Featured Products Section -->
      <h2 class="text-4xl font-bold text-center text-stone-900 mb-10">Our Collections</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Product 1 -->
        <div class="bg-stone-50 rounded-xl shadow-lg overflow-hidden product-card">
          <img src="{{ asset('assets/images/collections/vases.jpg') }}" alt="Elegant Terracotta Pot" class="w-full h-56 object-cover">
          <div class="p-6">
            <h3 class="text-2xl font-semibold text-stone-800 mb-2">Elegant Terracotta Vases</h3>
            <p class="text-gray-600 text-base">Hand-thrown and intricately designed, perfect for enhancing any interior space.</p>
            <!-- <div class="mt-5 flex justify-between items-center">
              <span class="text-xl font-bold text-teal-900">$25.00</span>
              <a href="products.html" class="btn-primary">View Collection</a>
            </div> -->
          </div>
        </div>
        <!-- Product 2 -->
        <div class="bg-stone-50 rounded-xl shadow-lg overflow-hidden product-card">
          <img src="{{ asset('assets/images/collections/sculptures.jpg') }}" alt="Terracotta Figurine" class="w-full h-56 object-cover">
          <div class="p-6">
            <h3 class="text-2xl font-semibold text-stone-800 mb-2">Artisan Sculptures & Figurines</h3>
            <p class="text-gray-600 text-base">Captivating pieces reflecting cultural narratives and artistic mastery.</p>
            <!-- <div class="mt-5 flex justify-between items-center">
              <span class="text-xl font-bold text-teal-900">$40.00</span>
              <a href="products.html" class="btn-primary">View Collection</a>
            </div> -->
          </div>
        </div>
        <!-- Product 3 -->
        <div class="bg-stone-50 rounded-xl shadow-lg overflow-hidden product-card">
          <img src="{{ asset('assets/images/collections/home-decor.jpg') }}" alt="Terracotta Lamp" class="w-full h-56 object-cover">
          <div class="p-6">
            <h3 class="text-2xl font-semibold text-stone-800 mb-2">Distinctive Home Decor Accents</h3>
            <p class="text-gray-600 text-base">From lamps to wall hangings, elevate your home with unique terracotta art.</p>
            <!-- <div class="mt-5 flex justify-between items-center">
              <span class="text-xl font-bold text-teal-900">$55.00</span>
              <a href="products.html" class="btn-primary">View Collection</a>
            </div> -->
          </div>
        </div>
      </div>

      <!-- Call to Action Section -->
      <div class="bg-stone-800 text-white rounded-2xl shadow-xl p-10 mt-16 text-center">
        <h2 class="text-4xl font-bold mb-5 leading-tight">Join Us in Empowering Artisans</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto">
          Your engagement directly contributes to the preservation of traditional crafts and the upliftment of rural artisan communities. Explore our full range of products or delve deeper into our inspiring story.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-6">
          <a href="{{ route('front.products') }}" class="btn-primary bg-teal-600 hover:bg-teal-700">Shop Our Collections</a>
          <a href="{{ route('front.ourStory') }}" class="btn-secondary border-teal-600 text-teal-300 hover:bg-teal-600 hover:text-white">Learn Our Story</a>
        </div>
      </div>

    </div>
  </section>

</main>
@endsection

@section('front-footer')
<script>
  // JavaScript for Image Slider
  document.addEventListener('DOMContentLoaded', () => {
    const sliderWrapper = document.getElementById('slider-wrapper');
    const prevSlideBtn = document.getElementById('prev-slide');
    const nextSlideBtn = document.getElementById('next-slide');
    const sliderItems = document.querySelectorAll('.slider-item');
    let currentIndex = 0;

    const updateSlider = () => {
      const offset = -currentIndex * 100; // Move by 100% of item width
      sliderWrapper.style.transform = `translateX(${offset}%)`;
    };

    prevSlideBtn.addEventListener('click', () => {
      currentIndex = (currentIndex > 0) ? currentIndex - 1 : sliderItems.length - 1;
      updateSlider();
    });

    nextSlideBtn.addEventListener('click', () => {
      currentIndex = (currentIndex < sliderItems.length - 1) ? currentIndex + 1 : 0;
      updateSlider();
    });

    // Auto-slide functionality
    let autoSlideInterval = setInterval(() => {
      currentIndex = (currentIndex < sliderItems.length - 1) ? currentIndex + 1 : 0;
      updateSlider();
    }, 6000); // Change slide every 6 seconds

    // Pause auto-slide on hover
    sliderWrapper.parentElement.addEventListener('mouseenter', () => {
      clearInterval(autoSlideInterval);
    });
    sliderWrapper.parentElement.addEventListener('mouseleave', () => {
      autoSlideInterval = setInterval(() => {
        currentIndex = (currentIndex < sliderItems.length - 1) ? currentIndex + 1 : 0;
        updateSlider();
      }, 6000);
    });
  });
</script>
@endsection