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
      .item{
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
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">All Agency / Companies (Extra Pages)</h1>
            <div class="custom-breadcrumbs">
              <a href="/user/Home">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>All Agency / Companies</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section block__62272" id="next-section">
      

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
              <h1 class="text-center mb-4">Search By Name</h1>
              <form class="row justify-content-center" action="/user/SearchAgencies" method="POST">
                @csrf
                  <div class="col-9 mb-3 text-right">
                    <select class="selectpicker" name="agencyName" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Agency by Name">
                      @foreach ($agencies as $agencies)
                        <option value="{{$agencies->agency_name}}" style="text-transform: uppercase">{{$agencies->agency_name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-3 text-left">
                      <input type="submit" class="btn btn-primary btn-lg" value="Submit">
                  </div>
              </form>
          </div>
      </div>
        <div class="col-12 mx-auto"><br>
          <h1 align=center>Listed Companies</h1>
        </div>
        @foreach ($data as $data)
          
        <div id="posts" class="row no-gutter">
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="/user/companySearch/{{$data->id}}" class="item-wrap">
              <span class="" style="text-transform: uppercase">{{$data->agency_name}}</span>
              <img class="img-fluid" src="{{asset ('images/agencyData/'.$data->image_url)}}" height="300" width="400">
            </a>
          </div>
          
        @endforeach
        </div>
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