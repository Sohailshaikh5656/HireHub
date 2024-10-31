<header class="site-navbar mt-3">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="site-logo col-6"><a href="index.html">HIRE HUB</a></div>

        <nav class="mx-auto site-navigation">
          <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
            <li><a href="/user/Home" class="nav-link {{ Request::is('user/Home') ? 'active' : '' }}">Home</a></li>
            <li><a href="/user/about">About</a></li>
            {{-- <li class="has-children">
              <a href="job-listings.html">Job Listings</a>
              <ul class="dropdown">
                <li><a href="job-single.html">Job Single</a></li>
                <li><a href="post-job.html">Post a Job</a></li>
              </ul>
            </li> --}}
          
            <li class="has-children">
              <a href="services.html">Pages</a>
              <ul class="dropdown">
                <li><a href="services.html">Services</a></li>
                <li><a href="service-single.html">Service Single</a></li>
                <li><a href="blog-single.html">Blog Single</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="portfolio-single.html">Portfolio Single</a></li>
                <li><a href="testimonials.html">Testimonials</a></li>
                <li><a href="faq.html">Frequently Ask Questions</a></li>
                <li><a href="gallery.html">Gallery</a></li>
              </ul>
            </li>
            <li><a href="/user/contact" class=" nav-link {{ Request::is('user/contact') ? 'active' : '' }}">Contact</a></li>
            @if (session('user_login'))
            <li><a href="/user/userProfile" class="nav-link {{ Request::is('user/userProfile') ? 'active' : '' }}">Profile</a></li>
            <li><a href="/user/feedback" class="nav-link  {{ Request::is('user/feedback') ? 'active' : '' }}">Feedback</a></li>
            <li><a href="/user/Home" class="nav-link ">Resume</a></li>
            
          </ul>
        </nav>
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="/user/logout" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Logout</a>
              
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

            @else
           
            <li class="nav-link {{ Request::is('user/companyLogin') ? 'active' : '' }}" style="margin-left: -20px"><a href="/user/companyLogin"> Post a Job</a></li>
          </ul>
        </nav>
            <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
              <div class="ml-auto">
                <a href="/user/register" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Register</a>
                <a href="/user/login" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
              </div>
              <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
            </div>
            @endif

      </div>
    </div>
  </header>