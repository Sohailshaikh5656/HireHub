
<!doctype html>
<html lang="en">
  <head>
    <title>HIRE HUB &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="{{asset ('company_mat/ftco-32x32.png')}}">
    
    <link rel="stylesheet" href="{{asset ('user_mat/css/custom-bs.css')}}">
    <link rel="stylesheet" href="{{asset ('user_mat/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset ('user_mat/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset ('user_mat/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset ('user_mat/fonts/line-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset ('user_mat/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset ('user_mat/css/animate.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset ('user_mat/css/style.css')}}">    
  </head>
  <body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
    

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
  @include('user.common.header')


    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url({{asset ('user_mat/images/hero_1.jpg') }});" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">About Us</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>About Us</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    
    <section class="site-section pb-2">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="block__96788">
             
              <img src="{{ asset('user_mat/images/web.jpg') }}" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-title mb-3">JobBoard For Freelancers, Web Developers</h2>
            <p class="lead">Powering 70% of global businesses, web development drives online engagement and customer interaction.</p>
            <p>Web development is evolving with cutting-edge technologies driving innovation. React.js leads front-end development with its scalable, component-based approach, while Node.js simplifies full-stack development using JavaScript. Progressive Web Apps (PWAs) are gaining popularity for offline functionality and app-like experiences, with brands like Starbucks adopting them. Serverless architecture, offered by platforms like AWS Lambda, enables cost-efficient scalability, growing rapidly at 23% annually. Next.js enhances performance with server-side rendering and static site generation, while WebAssembly (Wasm) pushes browser limits for tasks like gaming and video editing. Additionally, AI-powered chatbots are transforming user engagement, cementing their role in the digital future.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section pt-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0 order-md-2">
            <a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="block__96788">
              
              <img src="{{ asset('user_mat/images/jobBoard.jpg') }}" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 mr-auto order-md-1  mb-5 mb-lg-0">
            <h2 class="section-title mb-3">JobBoard For Workers</h2>
            <p class="lead">These platforms empower professionals by providing seamless access to job listings, enabling them to connect with employers and advance in a competitive career landscape.</p>
            <p>Job boards and online platforms have become essential tools in modern recruitment, bridging the gap between job seekers and employers. Platforms like LinkedIn, Indeed, and Glassdoor provide access to millions of job listings across industries, catering to diverse career levels. They streamline the application process, offering features like resume uploads, personalized job recommendations, and application tracking. Many platforms also include networking features, allowing professionals to connect and build relationships within their fields. Advanced filters and AI-powered search capabilities make it easier for candidates to find roles matching their skills and aspirations. These platforms are revolutionizing how talent is discovered and matched to opportunities in a fast-paced, competitive job market.</p>
          </div>
        </div>
      </div>
    </section>

   
    <section class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Our Goals</h2>
          </div>
        </div>

        <div class="row align-items-center block__69944">

          <div class="col-md-6">
            <img src="{{ asset('user_mat/images/jobSearching.jpg') }}" alt="Image" class="img-fluid mb-4 rounded">
          </div>

          <div class="col-md-6">
            <h3>Mission</h3>
           
            <p>At HireHub, our mission is to connect talented individuals with the right opportunities by providing a seamless, user-centric platform for job searching and recruitment. We aim to empower job seekers by offering tools for skill showcasing, resume building, and personalized job recommendations. Simultaneously, we strive to support employers in finding top talent efficiently, fostering meaningful professional connections. By leveraging technology and innovation, we seek to bridge the gap between aspirations and opportunities, creating a thriving ecosystem for career growth..</p>
            
            <h3>Vision</h3>
           
            <p>Our vision at HireHub is to become the leading global job-searching platform that transforms the hiring process into a seamless, accessible, and empowering experience. We aspire to redefine the future of work by leveraging AI and data-driven insights to match candidates and employers with precision. By fostering transparency, inclusivity, and innovation, we aim to build a platform where every individual, regardless of background, can find meaningful career opportunities and every organization can discover exceptional talent effortlessly.</p>
            
          </div>

          
      </div>
    </section>

    @include('user.common.footer')
  
  </div>

    <!-- SCRIPTS -->
     <!-- SCRIPTS -->
     <script src="{{asset ('user_mat/js/jquery.min.js')}}"></script>
     <script src="{{asset ('user_mat/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{asset ('user_mat/js/isotope.pkgd.min.js')}}"></script>
     <script src="{{asset ('user_mat/js/stickyfill.min.js')}}"></script>
     <script src="{{asset ('user_mat/js/jquery.fancybox.min.js')}}"></script>
     <script src="{{asset ('user_mat/js/jquery.easing.1.3.js')}}"></script>
     
     <script src="{{asset ('user_mat/js/jquery.waypoints.min.js')}}"></script>
     <script src="{{asset ('user_mat/js/jquery.animateNumber.min.js')}}"></script>
     <script src="{{asset ('user_mat/js/owl.carousel.min.js')}}"></script>
     
     <script src="{{asset ('user_mat/js/bootstrap-select.min.js')}}"></script>
     
     <script src="{{asset ('user_mat/js/custom.js')}}"></script>
   
   
  </body>
</html>