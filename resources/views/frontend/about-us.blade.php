@extends('layouts.user_type.guest')

@section('page_title', __('About Us'))

@section('content')
<!--End Page Header-->
<!-- Start inner Page hero-->
<section class="d-flex align-items-center page-hero hero-vegas-slider inner-page-hero " id="page-hero">
    <div class="overlay-color"></div>
    <div class="vegas-slider-content" data-vegas-slide-1="{{ asset('front/images/hero/vegas-slider/1.jpg') }}" data-vegas-slide-2="{{ asset('front/images/hero/vegas-slider/2.jpg') }}" data-vegas-slide-3="{{ asset('front/images/hero/vegas-slider/3.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12 hero-text-area ">
                    <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">About Us</h1>
                    <nav aria-label="breadcrumb ">
                        <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="index.php"><i class="fas fa-home icon "></i>home</a></li>
                            <li class="breadcrumb-item active">about us</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End inner Page hero-->
<!-- Start  about Section-->
<section class="about mega-section" id="about">
    <div class="container">
        <!-- Start first about div-->
        <div class="content-block  ">
            <div class="row">
                <div class="col-12 col-lg-6 d-flex align-items-center about-col pad-end order-1 order-lg-0 wow fadeInUp "
                    data-wow-delay="0.6s">
                    <div class="text-area "><span class="tag-line">about Us</span>
                        <div class="section-heading side-heading  light-title">
                            <h2 class="section-title ">Providing <span class='featured-text'>Guidance</span> Empowering Masses.<span class="title-design-element "></span></h2>
                        </div>
                        <p class=" init-text">
                            The main objective of "Rajbala Beads &amp; ZariCraft Self Help Group" is to develop and promote handicrafts, support marketing of Terracotta handicraft and take up wide publicity of Handicrafts and welfare activities for the benefit of the artisans. </p>

                        <div class="info-items-list">
                            <div class="row no-gutters">
                                <div class="col-12 ">
                                    <ul class="menu-items">
                                        <li class="info-item"><i class="fas fa-chess-rook hollow-text info-icon"></i>
                                            <div class="info-content">
                                                <h5 class="info-title">Our Mission</h5>
                                                <p class="info-text">Our mission is to empower beads &amp; zaricraft artisans to earn sustainable incomes and, in doing so, fight poverty.</p>
                                            </div>
                                        </li>
                                        <li class="info-item"><i class="fas fa-chart-line  hollow-text info-icon "></i>
                                            <div class="info-content">
                                                <h5 class="info-title">Our Plan </h5>
                                                <p class="info-text">To collaborate, visualize, innovate and then to bring to empower beads &amp; zaricraft artisans.</p>
                                            </div>
                                        </li>
                                        <li class="info-item"><i class="fas fa-database hollow-text info-icon "></i>
                                            <div class="info-content">
                                                <h5 class="info-title">Our Vision</h5>
                                                <p class="info-text">Our Artisan must be financially independent and become master their crafts, only with the intention to financially support their family. </p>
                                            </div>
                                        </li>
                                        <li class="info-item"><i class="fas fa-database hollow-text info-icon "></i>
                                            <div class="info-content">
                                                <h5 class="info-title">Our Motive</h5>
                                                <p class="info-text">Constant quest for art provides a learning platform for the new generation to explore the art of beads &amp; zaricraft. </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cta-area wow fadeInUp" data-wow-delay=".8s"><a class=" btn-solid "
                                href="{{ route('front.about') }}">Read more</a>
                            <!-- <div class="signature ">
                  <div class="signature-img"></div>
                  <div class="signature-name">CEO &amp; Founder </div>
                </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-flex align-items-center about-col order-0 order-lg-1 wow fadeInUp"
                    data-wow-delay="0.2s">
                    <div class="img-area  " data-tilt>
                        <!-- <div class="photo-banner-end">
                <span class="number">46 </span>
                <p class="banner-text">years of Exprince</p>
                <div class="line line-on-center  my-1"></div>
              </div> -->
                        <div class="image">
                            <div class="overlay-color"></div><img class="about-img  img-fluid " src="{{ asset('front/images/star.jpg') }}"
                                alt="Our vision">
                        </div>
                        <div class="video-wrapper on-start ">
                            <div class="play-btn-col-dir"><a class="video-link"
                                    href="https://www.youtube.com/watch?v=BYs7zlyT_C8" role="button"
                                    data-fancybox="data-fancybox">
                                    <div class="play-video-btn">
                                        <div class="play-btn"> <i class="fas fa-play icon"></i></div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End first about div-->
    </div>
</section>
<!-- End  about Section-->

<!-- Start  blog Section-->
<section class="blog blog-home mega-section  " id="blog">
    <div class="container ">
        <div class="section-heading center-heading">
            <h2 class="section-title  wow fadeInUp" data-wow-delay=".2s">latest <span class='hollow-text'>Activities</span><span
                    class="title-design-element "></span></h2>
            <div class="line line-on-center wow fadeIn" data-wow-delay=".7s"></div>
        </div>
        <div class="row ">
            <div class="col-12 ">
                <div class="posts-grid ">
                    <div class="row">
                        <div class="col-12 col-lg-4 ">
                            <div class="post-box"> <a class="post-link" href="activities.php">
                                    <div class="post-img-wrapper">
                                        <div class="overlay-color"></div><i class="fas fa-arrow-right icon "> </i><img class="post-img"
                                            src="{{ asset('front/images/events/IMG_1-min.jpg') }}" alt="" />
                                    </div>
                                </a>
                                <div class="post-summary">


                                    <div class="post-text"><a class="post-link" href="activities.php">
                                            <h2 class="post-title"> as a rule love what you do to do what you love</h2>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 ">
                            <div class="post-box"> <a class="post-link" href="activities.php">
                                    <div class="post-img-wrapper">
                                        <div class="overlay-color"></div><i class="fas fa-arrow-right icon "> </i><img class="post-img"
                                            src="{{ asset('front/images/events/IMG_8-min.jpg') }}" alt="" />
                                    </div>
                                </a>
                                <div class="post-summary">
                                    <div class="post-text"><a class="post-link" href="activities.php">
                                            <h2 class="post-title"> stories of our great fathers lights our pathes</h2>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 ">
                            <div class="post-box"> <a class="post-link" href="activities.php">
                                    <div class="post-img-wrapper">
                                        <div class="overlay-color"></div><i class="fas fa-arrow-right icon "> </i><img class="post-img"
                                            src="{{ asset('front/images/events/IMG_17-min.jpg') }}" alt="" />
                                    </div>
                                </a>
                                <div class="post-summary">
                                    <div class="post-text"><a class="post-link" href="activities.php">
                                            <h2 class="post-title"> our goal is making your fancy thoughts exist</h2>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 ">
                            <div class="post-box"> <a class="post-link" href="activities.php">
                                    <div class="post-img-wrapper">
                                        <div class="overlay-color"></div><i class="fas fa-arrow-right icon "> </i><img class="post-img"
                                            src="{{ asset('front/images/events/IMG_28-min.jpg') }}" alt="" />
                                    </div>
                                </a>
                                <div class="post-summary">
                                    <div class="post-text"><a class="post-link" href="activities.php">
                                            <h2 class="post-title"> our goal is making your fancy thoughts exist</h2>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 ">
                            <div class="post-box"> <a class="post-link" href="activities.php">
                                    <div class="post-img-wrapper">
                                        <div class="overlay-color"></div><i class="fas fa-arrow-right icon "> </i><img class="post-img"
                                            src="{{ asset('front/images/events/IMG_37-min.jpg') }}" alt="" />
                                    </div>
                                </a>
                                <div class="post-summary">

                                    <div class="post-text"><a class="post-link" href="activities.php">
                                            <h2 class="post-title"> stories of our great fathers lights our pathes</h2>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 ">
                            <div class="post-box"> <a class="post-link" href="activities.php">
                                    <div class="post-img-wrapper">
                                        <div class="overlay-color"></div><i class="fas fa-arrow-right icon "> </i><img class="post-img"
                                            src="{{ asset('front/images/events/IMG_50-min.jpg') }}" alt="" />
                                    </div>
                                </a>
                                <div class="post-summary">
                                    <div class="post-text"><a class="post-link" href="activities.php">
                                            <h2 class="post-title"> stories of our great fathers lights our pathes</h2>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End  blog Section-->

<!-- Start  take-action Section-->
<section class="take-action mega-section " id="take-action">
    <div class="overlay-photo-image-bg parallax "></div>
    <div class="overlay-color "></div>
    <div class="cta-wrapper">
        <div class="container">
            <div class="section-heading center-heading">
                <h2 class="section-title  wow fadeInUp" data-wow-delay=".2s">Still Have More <span class='hollow-text'>Questions</span>?<span class="title-design-element "></span></h2>
                <!--<p class="section-subtitle wow fadeInUp" data-wow-delay=".6s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, architecto cupiditate odio rerum est</p>-->
                <div class="line line-on-center wow fadeIn" data-wow-delay=".7s"></div>
            </div>
            <!--Start .see-more-area-->
            <div class=" see-more-area wow fadeInUp" data-wow-delay="0.8s"><a class=" btn-solid cta-link" href="contact-us.php">get in touch</a></div>
            <!--End Of .see-more-area        -->
        </div>
    </div>
</section>
<!-- End  take-action Section-->

@endsection

@section('front-footer')

@endsection