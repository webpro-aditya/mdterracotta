 <!--Start Page Header-->
 <header class="header-2" id="page-header">
    <div class="header-search-box">
      <div class="close-search"></div>
      <form class="nav-search search-form" role="search" method="get" action="#">
        <div class="search-wrapper">
          <label class="search-lbl">Search for:</label>
          <input class="search-input" type="search" placeholder="Search..." name="searchInput" autofocus="autofocus" />
          <button class="search-btn" type="submit"><i class="fas fa-search icon"></i></button>
        </div>
      </form>
    </div>
    <!--== top bar-->
    <div class="bar-top">
      <div class="container">
        <div class="bar-top-group">
          <div class="info-panel menu-wrapper">
            <div class="list-js info-list"><i class="fas fa-times close-icon"></i>
              <div class="info-list-inner">
                <div class="info info-panel-logo">
                  <div class="logo"><img class="logo-img light-logo" src="{{ asset('front/assets/Images/logo/logo-dark-colored.png') }}"
                      alt="logo" /></div>
                  <h3 class="info-title">Who We Are?</h3>
                  <div class="info-text">
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus praesentium
                      consequuntur cumque labore modi voluptatum fugit animi tempore id perspiciatis!</p>
                  </div>
                </div>
                <h3 class="info-title">contact info</h3>
                <div class="info">
                  <div class="info-icon"><i class="fas fa-map-marker-alt icon"></i></div>
                  <div class="info-text">
                    <p class="text"> J.J. COLONY, MADANGIR, NEW DELHI – 110062, INDIA </p>
                  </div>
                </div>
                <div class="info">
                  <div class="info-icon"><i class="fas fa-envelope icon"></i></div>
                  <div class="info-text"><a class="text info-link"
                      href="mailto:example@example.com">rajbalashg1@gmail.com</a></div>
                </div>
                <div class="info">
                  <div class="info-icon"> <i class="fas fa-phone icon"></i></div>
                  <div class="info-text"><a class="text info-link" href="tel:(800)123-0045-1254">(+91) 9711023091
                      ,9811992120</a></div>
                </div>
              </div>
              <div class="social-icons">
                <!-- <h3 class="info-title">follow us</h3>
                <div class="sc-wrapper dir-row sc-flat">
                  <ul class="sc-list">
                    <li class="sc-item " title="Facebook"><a class="sc-link" href="#0"><i
                          class="fab fa-facebook-f sc-icon"></i></a></li>
                    <li class="sc-item " title="youtube"><a class="sc-link" href="#0"><i
                          class="fab fa-youtube sc-icon"></i></a></li>
                    <li class="sc-item " title="instagram"><a class="sc-link" href="#0"><i
                          class="fab fa-instagram sc-icon"></i></a></li>
                    <li class="sc-item " title="twitter"><a class="sc-link" href="#0"><i
                          class="fab fa-twitter sc-icon"></i></a></li>
                  </ul>
                </div> -->
                <a href="{{ route('front.e-brochure') }}" class="e__brochure">E-Brochure</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== bottom bar-->
    <div class="bar-bottom">
      <div class="container">
        <nav class="menu-navbar">
          <div class="header-logo"><a class="logo-link" href="logo.php"><img class="logo-img light-logo"
                src="{{ asset('front/images/logo.png') }}" alt="logo" /><img class="logo-img  dark-logo" src="{{ asset('front/images/logo.png') }}"
                alt="logo" />
              <p>Rajbala Selfhelp Group</p></a></div>
          <div class="links menu-wrapper ">
            <ul class="list-js links-list">
              <li class="menu-item has-sub-menu"><a class="menu-link active" href="{{ route('home') }}">home </a></li>
              <li class="menu-item has-sub-menu"><a class="menu-link" href="{{ route('front.about') }}">about us</a></li>
              <li class="menu-item has-sub-menu"><a class="menu-link" href="{{ route('front.management') }}">management</a></li>
              <li class="menu-item has-sub-menu"><a class="menu-link" href="{{ route('front.products') }}">products</a></li>
              <li class="menu-item has-sub-menu"><a class="menu-link" href="{{ route('front.events') }}">events</a></li>
              <li class="menu-item"><a class="menu-link" href="{{ route('front.contact') }}">contact us </a></li>
            </ul>
          </div>
          <div class="controls-box">
            <div class="control header-search-btn">
              <svg class="search-icon" width="60" height="60" viewBox="0 0 60 60">
                <g transform="translate(-1460 -905)">
                  <g transform="translate(1460 905)">
                    <g transform="translate(0 0)">
                      <path class="search-path"
                        d="M59.634,56.1,42.2,38.669A23.8,23.8,0,1,0,38.669,42.2L56.1,59.634a1.25,1.25,0,0,0,1.768,0l1.767-1.767A1.25,1.25,0,0,0,59.634,56.1ZM23.75,42.5A18.75,18.75,0,1,1,42.5,23.75,18.771,18.771,0,0,1,23.75,42.5Z"
                        transform="translate(0 0)"></path>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <div class="control  info-toggler"><span> </span><span> </span><span></span></div>
            <div class="control  menu-toggler"><span></span><span></span><span></span></div>
          </div><!--<a class="btn-solid header-cta-btn" href="#">Get started</a>-->
        </nav>
      </div>
    </div>
  </header>
  <!--End Page Header-->