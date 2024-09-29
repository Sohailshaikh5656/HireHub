
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
        .rdGender{
            font-size: 35px;
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
            <h1 class="text-white font-weight-bold">User Profile</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>User Profile</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-3"></div>
          <div class="col-lg-6 mb-5">
            <h2 class="mb-4">Profile Page</h2>
            <form action="#" class="p-4 border rounded">
                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="text-black" for="fname">Personal Address</label>
                        <textarea class="form-control" name="address" rows="3"></textarea>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="text-black mb-7" style="margin-top: -15px;">Gender&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <div class="form-check form-check-inline">
                            <input name="gender" type="radio" class="form-check-input mt-3 ml-7" id="male" value="male" style="width: 20px; height: 20px;">
                            <label class="form-check-label mt-3" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="gender" type="radio" class="form-check-input mt-3" id="female" value="female" style="width: 20px; height: 20px;">
                            <label class="form-check-label mt-3" for="female">Female</label>
                        </div>
                    </div>
                </div>
                
              <div class="row form-group">
                <div class="col-md-5 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Contact</label>
                  <input type="text" name = "contact" id="fname" class="form-control" placeholder="Enter Contact" required>
                </div>
                <div class="col-md-5 mb-3 mb-md-0">
                    <label class="text-black" for="fname">DOB</label>
                    <input type="date" name = "dob" id="fname" class="form-control"  required>
                  </div>
              </div>
              <div class="row form-group">
                <div class="col-md-5 mb-3 mb-md-0">
                  <label class="text-black" for="fname">State</label>
                    <select class="form-control" name="state">
                        <option>--Select State--</option>
                        <option>Ahmedabad</option>
                        <option>Ahmedabad</option>
                        <option>Ahmedabad</option>
                        <option>Ahmedabad</option>
                        <option>Ahmedabad</option>
                    </select>
                </div>

                <div class="col-md-5 mb-3 mb-md-0">
                    <label class="text-black" for="fname">City</label>
                      <select class="form-control" name="state">
                          <option>--Select City--</option>
                          <option>Ahmedabad</option>
                          <option>Ahmedabad</option>
                          <option>Ahmedabad</option>
                          <option>Ahmedabad</option>
                          <option>Ahmedabad</option>
                      </select>
                  </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Profile Image</label>
                  <input type="file" name="profileImage" class="form-control"  required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Submit" class="btn px-4 btn-primary text-white">
                </div>
              </div>

            </form>
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