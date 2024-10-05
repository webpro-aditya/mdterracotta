@extends('layouts.user_type.guest')

@section('page_title', __('E-Brochure'))

@section('content')

<!-- Start inner Page hero-->
<section class="d-flex align-items-center page-hero hero-vegas-slider inner-page-hero " id="page-hero">
      <div class="overlay-color"></div>
      <div class="vegas-slider-content" data-vegas-slide-1="{{ asset('front/assets/images/hero/vegas-slider/1.jpg') }}" data-vegas-slide-2="{{ asset('front/assets/images/hero/vegas-slider/2.jpg') }}" data-vegas-slide-3="{{ asset('front/assets/images/hero/vegas-slider/3.jpg') }}">
        <div class="container">
          <div class="row">
            <div class="col-12 hero-text-area ">
              <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">E Brochure</h1>
              <nav aria-label="breadcrumb ">
                <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="index.php"><i class="fas fa-home icon "></i>home</a></li>
                  <li class="breadcrumb-item active">Events</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->

    <main class="container-c">
  <div class="container__flex-flow">
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_1-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_2-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_3-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_4-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_5-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_6-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_7-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_8-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_15-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_16-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_17-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_18-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_27-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_28-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_29-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_30-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_37-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_38-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_39-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_40-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_41-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_45-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_46-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_47-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_48-min.jpg') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_49-min.jpg') }}') }}" alt="">
    </div>
    <div class="card">
      <img src="{{ asset('front/images/events/IMG_50-min.jpg') }}') }}" alt="">
    </div>
    <!--<div class="card">-->
    <!--  <img src="{{ asset('front/images/events/IMG_1974-min.jpg') }}" alt="">-->
    <!--</div>-->
  </div>
</main>
@endsection
@section('front-footer')
   
@endsection