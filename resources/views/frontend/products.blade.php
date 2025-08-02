@extends('layouts.user_type.guest')

@section('page_title', __('Products'))
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

    .filter-btn {
        padding: 0.6rem 1.5rem;
        border-radius: 9999px;
        /* rounded-full */
        font-weight: 500;
        transition: background-color 0.3s ease, color 0.3s ease;
        white-space: nowrap;
        /* Prevent wrapping */
    }

    .filter-btn.active-filter {
        background-color: #0D9488;
        /* Teal-700 */
        color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .filter-btn:not(.active-filter) {
        background-color: #E0F2F7;
        /* Light Teal */
        color: #0D9488;
    }

    .filter-btn:not(.active-filter):hover {
        background-color: #B2EBF2;
        /* Lighter Teal on hover */
    }

    /* Custom styles for mobile menu toggle */
    .mobile-menu-button {
        display: none;
        /* Hidden by default */
        cursor: pointer;
        font-size: 2rem;
        color: white;
    }

    .pagination_wrapper {
        min-width: 400px;
    }

    .add_cart {
        cursor: pointer;
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

        .pagination_wrapper {
            min-width: 80%;
        }
    }
</style>
@endsection
@section('content')
<main class="container py-12">
    <!-- Products Section -->
    <section id="products-content">
        <div class="bg-white rounded-2xl shadow-2xl p-8 mb-12">
            <h1 class="text-5xl font-extrabold text-center text-stone-900 mb-10 leading-tight">Our Exquisite Terracotta Collections</h1>

            <p class="text-xl text-gray-700 leading-loose text-center mb-12 max-w-3xl mx-auto">
                Explore our diverse range of handcrafted terracotta products, meticulously created by our skilled artisans. Each piece is a testament to traditional art and sustainable craftsmanship.
            </p>

            <!-- Product Filters -->
            <!-- <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button class="filter-btn active-filter" data-category="all">All Products</button>
                <button class="filter-btn" data-category="vases">Vases & Pots</button>
                <button class="filter-btn" data-category="sculptures">Sculptures & Figurines</button>
                <button class="filter-btn" data-category="decor">Home Decor</button>
                <button class="filter-btn" data-category="utility">Utility Items</button>
                <button class="filter-btn" data-category="gifts">Gifts & Souvenirs</button>
            </div> -->

            <!-- Product Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8" id="product-grid">
                @forelse($products as $product)
                <!-- Example Product 1 (Vases) -->
                <div class="bg-stone-50 rounded-xl shadow-lg overflow-hidden product-card" data-category="vases">
                    <img src="{{ asset('assets/images/products/'. $product->image) }}" alt="Terracotta Vase" loading="lazy" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-stone-800 mb-2">{{ $product->name }}</h3>
                        <!-- <p class="text-gray-600 text-base">A classic terracotta vase, perfect for flowers or as a standalone art piece.</p> -->
                        <div class="mt-5 flex justify-between items-center">
                            <span class="text-xl font-bold text-teal-900">₹{{ $product->price }}</span>
                            <a href="{{ route('front.checkout', [encrypt($product->id)]) }}" class="btn-primary add_cart">Add to Cart</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="grid grid-cols-1 sm:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-8">
                    No Products found.
                </div>
                @endforelse
                {{-- Add the pagination links here --}}
                @if ($products->count() > 0)
                <div class="pagination_wrapper">
                    {{ $products->onEachSide(config('constants.pagination_links_each_side'))->withQueryString()->links() }}
                </div>
                @endif
            </div>
        </div>
    </section>

</main>
@endsection

@section('front-footer')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const productGrid = document.getElementById('product-grid');
        const productCards = productGrid.querySelectorAll('.product-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                filterButtons.forEach(btn => {
                    btn.classList.remove('active-filter');
                });
                button.classList.add('active-filter');

                const category = button.dataset.category;

                productCards.forEach(card => {
                    if (category === 'all' || card.dataset.category === category) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
@endsection