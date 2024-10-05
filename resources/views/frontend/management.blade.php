@extends('layouts.user_type.guest')

@section('page_title', __('Management'))

@section('content')
<!-- Start inner Page hero-->
<section class="d-flex align-items-center page-hero hero-vegas-slider inner-page-hero" id="page-hero">
  <div class="overlay-color"></div>
  <div class="vegas-slider-content" data-vegas-slide-1="{{ asset('front/assets/Images/hero/vegas-slider/1.jpg') }}" data-vegas-slide-2="{{ asset('front/assets/Images/hero/vegas-slider/2.jpg') }}" data-vegas-slide-3="{{ asset('front/assets/images/hero/vegas-slider/3.jpg') }}">
    <div class="container">
      <div class="row">
        <div class="col-12 hero-text-area ">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Our Management</h1>
          <nav aria-label="breadcrumb ">
            <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="index.php"><i class="fas fa-home icon "></i>home</a></li>
              <li class="breadcrumb-item active">Our Management</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End inner Page hero-->

<!-- Start our team Section-->
<section class="our-team mega-section " id="our-team">
  <div class="container">
    <div class="section-heading center-heading">
      <h2 class="section-title  wow fadeInUp" data-wow-delay=".2s"> our <span class='hollow-text'></span> Management<span class="title-design-element "></span></h2>
      <div class="line line-on-center wow fadeIn" data-wow-delay=".7s"></div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <!--first Team Member-->
      <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
        <div class="tm-member-card   wow   fadeInUp" data-wow-delay="0.2s" data-tilt="data-tilt">
          <div class="tm-image js-tilt"><a class="tm-link" href="team-member.html">
              <div class="overlay overlay-color"></div><img class="img-fluid " src="{{ asset('front/images/renu.jpg') }}" alt="Team Member" />
            </a>
          </div>
          <div class="tm-details"><a class="tm-link" href="team-member.html">
              <h6 class="tm-name">Smt. Renu Srivastava</h6>
            </a><span class="tm-role">President </span></div>
        </div>
      </div>

    </div>
  </div>
  <!--Start see-more-area-->
  <!--<div class="see-more-area   wow fadeInUp" data-wow-delay="0.8s"><a class=" btn-solid" href="#0">all team members</a></div>-->
</section>
<!-- End our team Section-->


<div class="container">
  <div class="section-heading center-heading">
    <h2 class="section-title  wow fadeInUp" data-wow-delay=".2s">LIST OF THE GOVERNING BODY FOR THE YEAR <span class='hollow-text'>2020-2021</span><span class="title-design-element "></span></h2>
    <div class="line line-on-center wow fadeIn" data-wow-delay=".7s"></div>
  </div>
</div>

<div class="container">
  <table class="table table-striped table-bordered table-hover">
    <thead class="table-danger">
      <tr>
        <th>S. No.</th>
        <th>Name &amp; Address</th>
        <th>Post</th>
        <th>Profession</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>1</td>
        <td>Smt Renu Srivastava<br>
          W/o Sh. Pramod Srivastava<br>
          J-IInd/70, Madangir <br>
          New Delhi-110062
        </td>
        <td>President</td>
        <td>Social Worker</td>
      </tr>

      <tr>
        <td>2</td>
        <td>Ms. Prem Kumari <br>
          D/o Late Pyare Lal<br>
          38 /1299, DDA Flats,<br>
          Madangir, New Delhi-110062<br>
          Mobile:9811808311
        </td>
        <td>Secretary</td>
        <td>Professional</td>
      </tr>

      <tr>
        <td>3</td>
        <td>Smt. Sheela <br>
          W/o Sh Brij Mohan<br>
          D -70 Fatehpuri Beri,<br>
          Harswaroop Colony, New Delhi -110074
        </td>
        <td>Treasurer</td>
        <td>House wife</td>
      </tr>

      <tr>
        <td>4</td>
        <td>Smt. Kiran Devi <br>
          W/o Sh. Karan Singh Sayal<br>
          H.No.515 Fatehpur Beri Ext. <br>
          New Delhi – 110074
        </td>
        <td>Social Worker</td>
        <td>Ex. Memeber</td>
      </tr>

      <tr>
        <td>5</td>
        <td>Sh. Amrendra Kumar Singh<br>
          S/o Sh. Onkar Nath Singh<br>
          254, Gadmal pur<br>
          Tehsil- Sikander pur,
        </td>
        <td>Member</td>
        <td>Professional</td>
      </tr>

      <tr>
        <td>6</td>
        <td>Smt. Bina Devi <br>
          W/o Sh. Shiv Sagar <br>
          H.No. C – 20 Fatehpur Beri Village <br>
          New Delhi -110074

        </td>
        <td>Member</td>
        <td>House wife </td>
      </tr>

      <tr>
        <td>7</td>
        <td>Smt. Usha Mishra<br>
          W/o Sh. Rameshwar Mishra<br>
          H.No. 278 A H.S. Colony Fatehpur<br>
          Beri Village New Delhi -110074

        </td>
        <td>Member</td>
        <td>House wife</td>
      </tr>
    </tbody>
  </table>
</div>
@endsection

@section('front-footer')

@endsection