@extends('layouts.user_type.guest')

@section('page_title', __('Management'))
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

  <!-- Management Section -->
  <section id="management-content">
    <div class="bg-white rounded-2xl shadow-2xl p-8 mb-12">
      <h1 class="text-5xl font-extrabold text-center text-stone-900 mb-10 leading-tight">Meet Our Dedicated Team</h1>

      <p class="text-xl text-gray-700 leading-loose text-center mb-12 max-w-6xl mx-auto">
        Our management team consists of "National Award Winning" artisans from different backgrounds and experiences. They are recognized as the best Terracotta Handicraft artisans and they encourage everyone to continue with the craft in a more enthusiastic and productive manner, which will ultimately inspire others to emulate them.<br/><br/>
        <q>
          We believe in getting our hands dirty & bring something amazing with clay. We believe in taking Terracotta Handicrafts far fewer than other competitors, and making a far higher impact with our uniqueness.
        </q>
      </p>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        <!-- Member 1 -->
        <div class="bg-stone-50 rounded-xl shadow-lg p-8 text-center border-t-4 border-teal-600">
          <img src="{{ asset('assets/images/managers/prem-kumari.jpeg') }}" alt="Prem Kumari" class="w-48 h-48 rounded-full mx-auto mb-6 object-cover border-4 border-stone-300 shadow-md">
          <h3 class="text-3xl font-bold text-stone-800 mb-2">Prem Kumari</h3>
          <p class="text-teal-700 text-xl font-semibold mb-4">Director</p>
          <p class="text-gray-600 text-base leading-relaxed">
            A visionary leader with over 20 years of experience in social development, Prem Kumari spearheaded the establishment of Maa Dharitri, driven by a deep commitment to rural artisan empowerment.
          </p>
        </div>
        <!-- Member 2 -->
        <div class="bg-stone-50 rounded-xl shadow-lg p-8 text-center border-t-4 border-teal-600">
          <img src="{{ asset('assets/images/managers/har-kishan.jpeg') }}" alt="Har Kishan" class="w-48 h-48 rounded-full mx-auto mb-6 object-cover border-4 border-stone-300 shadow-md">
          <h3 class="text-3xl font-bold text-stone-800 mb-2">Har Kishan</h3>
          <p class="text-teal-700 text-xl font-semibold mb-4">Director</p>
          <p class="text-gray-600 text-base leading-relaxed">
            Har Kishan meticulously manages our operational strategies, ensuring efficiency in production, logistics, and supply chain management, vital for our artisans' success.
          </p>
        </div>
        <!-- Member 3 -->
        <div class="bg-stone-50 rounded-xl shadow-lg p-8 text-center border-t-4 border-teal-600">
          <img src="{{ asset('assets/images/managers/ram-rati.jpeg') }}" alt="Ram Rati" class="w-48 h-48 rounded-full mx-auto mb-6 object-cover border-4 border-stone-300 shadow-md">
          <h3 class="text-3xl font-bold text-stone-800 mb-2">Ram Rati</h3>
          <p class="text-teal-700 text-xl font-semibold mb-4">Director</p>
          <p class="text-gray-600 text-base leading-relaxed">
            Ram Rati drives our global outreach, connecting our unique terracotta crafts with a wider audience through innovative marketing and partnership initiatives.
          </p>
        </div>
        <!-- Member 4 -->
        <div class="bg-stone-50 rounded-xl shadow-lg p-8 text-center border-t-4 border-teal-600">
          <img src="{{ asset('assets/images/managers/daya-chand.jpeg') }}" alt="Daya Chand" class="w-48 h-48 rounded-full mx-auto mb-6 object-cover border-4 border-stone-300 shadow-md">
          <h3 class="text-3xl font-bold text-stone-800 mb-2">Daya Chand</h3>
          <p class="text-teal-700 text-xl font-semibold mb-4">Director</p>
          <p class="text-gray-600 text-base leading-relaxed">
            Works directly with artisans, understanding their needs and facilitating training programs to enhance their skills and well-being.
          </p>
        </div>
        <!-- Member 5 -->
        <div class="bg-stone-50 rounded-xl shadow-lg p-8 text-center border-t-4 border-teal-600">
          <img src="{{ asset('assets/images/managers/girraj-prasad.jpeg') }}" alt="Girraj Prasad" class="w-48 h-48 rounded-full mx-auto mb-6 object-cover border-4 border-stone-300 shadow-md">
          <h3 class="text-3xl font-bold text-stone-800 mb-2">Girraj Prasad</h3>
          <p class="text-teal-700 text-xl font-semibold mb-4">Director</p>
          <p class="text-gray-600 text-base leading-relaxed">
            Ensures the financial health and administrative efficiency of our organization, providing crucial support for all our initiatives and programs.
          </p>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection

@section('front-footer')

@endsection