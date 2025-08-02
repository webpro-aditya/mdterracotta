@extends('layouts.user_type.guest')

@section('page_title', __('About Us'))

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
    <!-- About Us Section -->
    <section id="about-content">
        <div class="bg-white rounded-2xl shadow-2xl p-8 mb-12">
            <h1 class="text-4xl font-extrabold text-center text-stone-900 mb-10 leading-tight">About Maa Dharitri Terracotta Craft Producer</h1>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-12">
                <div class="lg:order-2">
                    <img src="{{ asset('assets/images/banners/1.jpeg') }}" alt="About Us Image" class="rounded-xl shadow-lg w-full h-auto object-cover">
                </div>
                <div class="lg:order-1 prose max-w-none text-gray-700 text-lg leading-relaxed">
                    <p class="mb-6">
                        Maa Dharitri Terracotta Craft Producer is a non-governmental organization founded with a profound commitment to preserving and promoting the ancient art of terracotta craftsmanship. Our journey began with the vision of empowering rural artisans and ensuring that their invaluable skills are passed down through generations.
                    </p>
                    <p class="mb-6">
                        We believe that traditional crafts are not just products; they are a vibrant expression of culture, heritage, and human creativity. Our work focuses on creating sustainable livelihoods for artisan communities, providing them with fair access to markets, and fostering an environment where their artistry can flourish.
                    </p>
                    <p>
                        Through our initiatives, we aim to bridge the gap between traditional craftsmanship and contemporary appreciation, bringing the unique beauty of terracotta into homes worldwide while making a tangible difference in the lives of those who create it.
                    </p>
                </div>
            </div>

            <div class="bg-teal-50 rounded-xl shadow-lg p-8 mb-12 border-b-4 border-teal-600">
                <h2 class="text-4xl font-bold text-center text-stone-900 mb-8">Our Core Values</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="text-5xl text-teal-700 mb-4">&#128170;</div> <!-- Empowerment -->
                        <h3 class="text-2xl font-semibold text-stone-800 mb-2">Empowerment</h3>
                        <p class="text-gray-600 text-base">Fostering economic independence and dignity for artisans.</p>
                    </div>
                    <div class="text-center">
                        <div class="text-5xl text-teal-700 mb-4">&#127793;</div> <!-- Sustainability -->
                        <h3 class="text-2xl font-semibold text-stone-800 mb-2">Sustainability</h3>
                        <p class="text-gray-600 text-base">Promoting eco-friendly practices and responsible resource management.</p>
                    </div>
                    <div class="text-center">
                        <div class="text-5xl text-teal-700 mb-4">&#127912;</div> <!-- Craftsmanship -->
                        <h3 class="text-2xl font-semibold text-stone-800 mb-2">Craftsmanship</h3>
                        <p class="text-gray-600 text-base">Upholding the highest standards of traditional artistry and quality.</p>
                    </div>
                </div>
            </div>

            <h2 class="text-4xl font-bold text-center text-stone-900 mb-8">Our Mission & Vision</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <div class="bg-stone-50 rounded-xl shadow-md p-8 border-l-4 border-teal-600">
                    <h3 class="text-2xl font-semibold text-stone-800 mb-4">Our Mission</h3>
                    <p class="text-gray-700 text-lg leading-relaxed">
                        To create a robust platform that connects skilled terracotta artisans with global markets, ensuring fair compensation and fostering the continuity of their ancestral craft through skill development and ethical practices.
                    </p>
                </div>
                <div class="bg-stone-50 rounded-xl shadow-md p-8 border-l-4 border-teal-600">
                    <h3 class="text-2xl font-semibold text-stone-800 mb-4">Our Vision</h3>
                    <p class="text-gray-700 text-lg leading-relaxed">
                        To envision a world where traditional terracotta art is celebrated and cherished, where artisans thrive economically and culturally, and where their heritage enriches global communities.
                    </p>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('front.contact') }}" class="btn-primary">Get in Touch</a>
            </div>
        </div>
    </section>

</main>
@endsection

@section('front-footer')

@endsection