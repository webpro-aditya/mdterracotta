@extends('layouts.user_type.guest')

@section('page_title', __('Contact'))

@section('content')
<!-- Start inner Page hero-->
<section class="d-flex align-items-center page-hero hero-vegas-slider inner-page-hero " id="page-hero">
  <div class="overlay-color"></div>
  <div class="vegas-slider-content" data-vegas-slide-1="{{ asset('front/assets/images/hero/vegas-slider/1.jpg') }}" data-vegas-slide-2="{{ asset('front/assets/images/hero/vegas-slider/2.jpg') }}" data-vegas-slide-3="{{ asset('front/assets/Images/hero/vegas-slider/3.jpg') }}">
    <div class="container">
      <div class="row">
        <div class="col-12 hero-text-area ">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Contact Us</h1>
          <nav aria-label="breadcrumb ">
            <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="#0"><i class="fas fa-home icon "></i>home</a></li>
              <li class="breadcrumb-item active">contact us</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End inner Page hero-->
<!-- Start contact-us -->
<section class="contact-us  mega-section  pb-0" id="contact-us">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-5  mx-auto  mb-5 mb-lg-0 wow fadeInUp  " data-wow-delay="0.4s">
        <div class=" contact-info-panel">
          <div class="overlay-photo-image-bg "></div>
          <div class="overlay-color"></div>
          <div class="info-section ">
            <div class="info-panel"><i class="fas fa-map-marker-alt icon"></i>
              <div class="info-content">
                <h6 class="info-title">our locations</h6>
                <p class="info-text">
                  J.J. COLONY, MADANGIR, NEW DELHI – 110062, INDIA
                </p>
              </div>
            </div>
            <div class="info-panel"><i class="fas fa-mobile-alt icon"></i>
              <div class="info-content">
                <h6 class="info-title">phone numbers</h6>
                <p class="info-text"> <a class="tel link" href="tel:0123456789">(+91) 9711023091, 9811992120</a></p>
              </div>
            </div>
            <div class="info-panel"><i class="fas fa-envelope icon"></i>
              <div class="info-content">
                <h6 class="info-title">Emails</h6>
                <p class="info-text"> <a class="tel link" href="mailto:rajbalashg1@gmail.com">rajbalashg1@gmail.com</a></p>
              </div>
            </div>
            <div class="info-panel"><i class="fas fa-globe-africa icon"></i>
              <div class="info-content">
                <h6 class="info-title">website</h6>
                <p class="info-text"> <a class="site link" href="https://rajbalaselfhelpgroup.org"> https://rajbalaselfhelpgroup.org</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-7  mx-auto wow fadeInUp  " data-wow-delay="0.2s">
        <div class="contact-form-panel">
          <div class="section-heading side-heading  light-title">
            <h2 class="section-title wow fadeInUp" data-wow-delay=".2s">Keep in touch <span class="title-design-element "></span></h2>
            <p class="section-subtitle wow fadeInUp" data-wow-delay=".6s">We Will answer your questions as soon as possible</p>
          </div>
          <div class="contact-form-area input-boxed">
            <!--Form To have user messages-->
            <form class="main-form" id="contact-us-form" action="https://flexcode.xyz/consulto/php/send-mail.php" method="post"><span class="done-msg"></span>
              <div class="row ">
                <div class="col-12 col-lg-6">
                  <div class="   input-wrapper">
                    <input class="text-input" id="user-name" name="UserName" type="text" />
                    <label for="user-name"> Name <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                  </div>
                </div>
                <div class="col-12 col-lg-6">
                  <div class="   input-wrapper">
                    <input class="text-input" id="user-email" name="UserEmail" type="email" />
                    <label for="user-email"> E-mail <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                  </div>
                </div>
                <div class="col-12 ">
                  <div class="   input-wrapper">
                    <input class="text-input" id="msg-subject" name="subject" type="text" />
                    <label for="msg-subject"> Subject <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                  </div>
                </div>
                <div class="col-12 ">
                  <div class="   input-wrapper">
                    <textarea class=" text-input" id="msg-text" name="message"></textarea>
                    <label for="msg-text"> your message <span class="req">*</span></label><span class="b-border"></span><i></i><span class="error-msg"></span>
                  </div>
                </div>
                <div class="col-12 submit-wrapper">
                  <button class=" btn-solid" id="submit-btn" type="button" name="UserSubmit">Send your message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="map-box pt-5 mt-5">
    <div class="mapouter">
      <div class="gmap_canvas">
        <iframe class="map-iframe" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d56047.048573907996!2d77.20488692980211!3d28.601560666325913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1648754007828!5m2!1sen!2sin"></iframe>
      </div>
    </div>
  </div>
</section>
<!-- End contact-us -->

@endsection

@section('front-footer')

@endsection