@extends('layouts.user_type.guest')

@section('page_title', __('Our Story'))
@section('front-header')
<style>
    body {
        font-family: 'Inter', sans-serif;
        background-color: #f0f0f0;
        /* Lighter, more neutral background */
        color: #333;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        /* padding: 1.5rem; */
        /* Increased padding for more breathing room */
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
    <!-- Our Story Section -->
    <section id="story-content">
        <div class="bg-white rounded-2xl shadow-2xl p-8 mb-12">
            <h1 class="text-5xl font-extrabold text-center text-stone-900 mb-10 leading-tight">The Journey of Maa Dharitri Crafts</h1>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-12">
                <div>
                    <img src="{{ asset('assets/images/banners/1.jpeg') }}" alt="Artisan at Work" class="rounded-xl shadow-lg w-full h-auto object-cover">
                </div>
                <div class="prose max-w-none text-gray-700 text-lg leading-relaxed">
                    <h2 class="text-3xl font-bold text-stone-800 mb-4">Our Humble Beginnings</h2>
                    <p class="mb-6">
                        The story of Maa Dharitri Terracotta Craft Producer began in 2020 with a simple yet powerful realization: the immense talent of rural terracotta artisans was often overlooked, leading to economic hardship and the potential loss of a precious cultural heritage. Our founder, Prem Kumari, witnessed this struggle firsthand in remote villages, where generations of craftsmanship were at risk of fading away.
                    </p>
                    <p class="mb-6">
                        Inspired by the resilience and artistic spirit of these communities, Prem Kumari envisioned an organization that would not only preserve this ancient art form but also create a sustainable future for the artisans. Starting with just a few dedicated individuals, Maa Dharitri embarked on its mission to bridge the gap between traditional skills and modern markets.
                    </p>
                </div>
            </div>

            <div class="bg-teal-50 rounded-xl shadow-lg p-8 mb-12 border-b-4 border-teal-600">
                <h2 class="text-4xl font-bold text-center text-stone-900 mb-8">Milestones & Growth</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <p class="text-5xl font-extrabold text-teal-700 mb-4">2020</p>
                        <h3 class="text-2xl font-semibold text-stone-800 mb-2">Foundation</h3>
                        <p class="text-gray-600 text-base">Maa Dharitri established with initial artisan partnerships.</p>
                    </div>
                    <div class="text-center">
                        <p class="text-5xl font-extrabold text-teal-700 mb-4">2021</p>
                        <h3 class="text-2xl font-semibold text-stone-800 mb-2">First Exhibition</h3>
                        <p class="text-gray-600 text-base">Successfully held our first major exhibition, gaining wider recognition.</p>
                    </div>
                    <div class="text-center">
                        <p class="text-5xl font-extrabold text-teal-700 mb-4">2023</p>
                        <h3 class="text-2xl font-semibold text-stone-800 mb-2">Online Presence</h3>
                        <p class="text-gray-600 text-base">Launched our e-commerce platform, reaching global customers.</p>
                    </div>
                    <div class="text-center">
                        <p class="text-5xl font-extrabold text-teal-700 mb-4">Today</p>
                        <h3 class="text-2xl font-semibold text-stone-800 mb-2">Expanding Impact</h3>
                        <p class="text-gray-600 text-base">Supporting hundreds of artisans across multiple regions.</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="lg:order-2">
                    <img src="{{ asset('assets/images/banners/2.jpeg') }}" alt="Community Impact" class="rounded-xl shadow-lg w-full h-auto object-cover">
                </div>
                <div class="lg:order-1 prose max-w-none text-gray-700 text-lg leading-relaxed">
                    <h2 class="text-3xl font-bold text-stone-800 mb-4">Our Commitment to Community</h2>
                    <p class="mb-6">
                        Beyond promoting art, our story is deeply intertwined with the communities we serve. We invest in skill development workshops, provide access to quality raw materials, and ensure fair trade practices that empower artisans to earn a dignified living. This holistic approach helps uplift entire villages, fostering education, health, and a renewed sense of pride in their craft.
                    </p>
                    <p class="mb-6">
                        Every piece of terracotta you see is a result of generations of knowledge, hard work, and the unwavering spirit of our artisans. By choosing Maa Dharitri Crafts, you are not just acquiring a beautiful object; you are becoming a part of this inspiring story of cultural preservation and community empowerment.
                    </p>
                    <p>
                        We invite you to join us as we continue to write new chapters, celebrating art, heritage, and the transformative power of human connection.
                    </p>
                </div>
            </div>

        </div>
    </section>

</main>

@endsection

@section('front-footer')

@endsection