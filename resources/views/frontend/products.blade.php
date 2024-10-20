@extends('layouts.user_type.guest')

@section('page_title', __('Products'))

@section('content')
<style>
    .checkout_btn {
        background: #635BFF !important;
    }
    .card__price {
        display: flex;
        justify-content: center;
    }
</style>
<!-- Start inner Page hero-->
<section class="d-flex align-items-center page-hero hero-vegas-slider inner-page-hero " id="page-hero">
    <div class="overlay-color"></div>
    <div class="vegas-slider-content" data-vegas-slide-1="{{ asset('front/assets/Images/hero/vegas-slider/1.jpg') }}" data-vegas-slide-2="{{ asset('front/assets/Images/hero/vegas-slider/2.jpg') }}" data-vegas-slide-3="{{ asset('front/assets/Images/hero/vegas-slider/3.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12 hero-text-area ">
                    <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Products</h1>
                    <nav aria-label="breadcrumb ">
                        <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="index.php"><i class="fas fa-home icon "></i>home</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End inner Page hero-->
<div class="container-t">
    <h3>
        Our Products
    </h3>
    <ul class="grid">
        @forelse ($products as $product)
        <li class="card">
            <a class="card__link" href="#"><img class="card__image" src="{{ asset('front/'. $product->image) }}" />
                <div class="card__text">
                    {{ $product->name }}
                </div>
                <div class="card__price">
                    <a href="{{ route('front.checkout', [encrypt($product->id)]) }}" class="btn text-light checkout_btn">
                        <div class="price">Rs {{ $product->price }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"></path>
                            </svg>
                        </div>
                    </a>
                </div>
            </a>
        </li>
        @empty
        <span>No products found</span>
        @endforelse
    </ul>
</div>

@endsection

@section('front-footer')

@endsection