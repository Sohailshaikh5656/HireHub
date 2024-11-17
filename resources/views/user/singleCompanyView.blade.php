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
    <style>
      .item:hover{
        box-shadow: 6px 6px 10px -1px rgba(0, 0, 0, 0.15), -6px -6px 10px -1px rgba(255, 255, 255, 0.7);
      }
    </style>
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
    <section class="section-hero overlay inner-page bg-image" style="background-image: url({{ asset ('user_mat/images/hero_1.jpg')}});" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Portfolio Single (Extra Pages)</h1>
            <div class="custom-breadcrumbs">
              <a href="index.html">Home</a> <span class="mx-2 slash">/</span>
              <a href="portfolio.html">Portfolio</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Portfolio Single</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section pb-0 portfolio-single" id="next-section">

      <div class="container">
        
        <div class="row mb-5 mt-5">

          <div class="col-lg-8">
            <figure class="item">
              <a href="images/sq_img_6.jpg" data-fancybox="gallery"><img class="" src="{{asset ('images/agencyData/'.$agencyProfile->image_url)}}" alt="Image" class="img-fluid"></a>
            </figure>
            <figure class="item">
              @foreach ($certi as $certi)
              <div class="col-12">
                <div class="row">
                  <div class="col-6 p-4">
                   <strong>Certificate / Award Name : </strong> {{$certi->certificate_name}}<br>
                   <strong>Year : </strong> {{$certi->Year}}<br>
                   <strong>Description : </strong> {{$certi->description}}<br>
                
                  </div>
                  <div class="col-6">
                   <img src="{{asset ('images/agencyCertificate/'.$certi->image_url)}}" alt="" width="200">
                  </div>
                </div>
               </div>
               <hr>
              @endforeach
             
            </figure>
            
          </div>

          <div class="col-lg-4 ml-auto h-100 jm-sticky-top item">
           

            <div class="mb-4">
              <h3 class="mb-4 h4 border-bottom">Company name : </h3>
              
              <p class="mb-0">{{$agency->agency_name}}</p>
            </div>

            <div class="row mb-4">

              <div class="col-sm-12 col-md-12 mb-4 col-lg-12">
                <strong class="d-block text-black">Owner : </strong>
                {{$agencyProfile->owner_name}}
              </div>
              <div class="col-sm-12 col-md-12 mb-4 col-lg-12">
                <strong class="d-block text-black">Address / Headquater</strong>
                {{$agencyProfile->address}}
              </div>
              <div class="col-sm-12 col-md-12 mb-4 col-lg-12">
                <strong class="d-block text-black">Location</strong>
                {{$city->city_name}}, {{$state->state_name}}
              </div>
              <div class="col-sm-12 col-md-12 mb-4 col-lg-12">
                <strong class="d-block text-black">Year Started</strong>
                {{$agencyProfile->est_date}}
              </div>
              
              <div class="col-sm-12 col-md-12 mb-4 col-lg-12">
                <strong class="d-block text-black mb-3">Website URL</strong>
                <a href="#" class="btn btn-outline-primary border-width-2">Visit Website</a>
              </div>
            </div>

            <div class="block__87154 mb-0">
                
                <blockquote>
                  <p>Ipsum harum assumenda in eum vel eveniet numquam, cumque vero vitae enim cupiditate deserunt eligendi officia modi consectetur. Expedita tempora quos nobis earum hic ex asperiores quisquam optio nostrum sit</p>
                </blockquote>
                <div class="block__91147 d-flex align-items-center">
                  <figure class="mr-4"><img src="images/person_2.jpg" alt="Image" class="img-fluid"></figure>
                  <div>
                    <h3>Chris Peter</h3>
                    <span class="position">Web Designer</span>
                  </div>
                </div>
              </div>

          </div>
        </div>
        
      </div>
    </section>
    <section class="site-section" id="next">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">22,392 Related Jobs</h2>
          </div>
        </div>
        
        <ul class="job-listings mb-5">
          @foreach ($jobs as $job)
          <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center" style="margin: 20px">
              <a href="/user/singleJobPage/{{$job->id}}"></a>
              <div class="job-listing-logo">
                  <img src="{{ asset('images/agencyData/' . $job->image_url) }}" alt="Agency Logo" class="img-fluid">
              </div>
              
              <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                  <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                      <h2>{{$job->Post}}</h2>
                      <strong>{{$job->agency_name}}</strong>
                  </div>
                  <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                      <span class="icon-room"></span> {{$job->state}}, {{$job->city}}
                  </div>
                  <div class="job-listing-meta">
                      <span class="badge badge-success">&#8377;{{$job->minSalary}}&nbsp;-&nbsp;&#8377;{{$job->maxSalary}}&nbsp; Lakh/Per Anum</span>
                  </div>
              </div>
          </li>
      @endforeach
      
        
        
          

          
        </ul>

       
      </div>
    </section>
    

    <section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Happy Candidates Says</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="block__87154 bg-white rounded">
              <blockquote>
                <p>Ipsum harum assumenda in eum vel eveniet numquam cumque vero vitae enim cupiditate deserunt eligendi officia modi consectetur. Expedita tempora quos nobis earum hic ex asperiores quisquam optio nostrum sit</p>
              </blockquote>
              <div class="block__91147 d-flex align-items-center">
                <figure class="mr-4"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></figure>
                <div>
                  <h3>Elisabeth Smith</h3>
                  <span class="position">Creative Director</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="block__87154 bg-white rounded">
              <blockquote>
                <p>Ipsum harum assumenda in eum vel eveniet numquam, cumque vero vitae enim cupiditate deserunt eligendi officia modi consectetur. Expedita tempora quos nobis earum hic ex asperiores quisquam optio nostrum sit</p>
              </blockquote>
              <div class="block__91147 d-flex align-items-center">
                <figure class="mr-4"><img src="images/person_2.jpg" alt="Image" class="img-fluid"></figure>
                <div>
                  <h3>Chris Peter</h3>
                  <span class="position">Web Designer</span>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>
    @include('user.common.footer')
  
  </div>

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