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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset ('user_mat/css/style.css')}}">   
    <style>

body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
        .main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}
th{
  background-color: gray;
  border-bottom: 1px solid black;
  color: #fff

}
table{
  margin-top: 30px;
  margin-bottom: 30px;
  border: none;
  border-bottom:1px solid red;
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
            <h1 class="text-white font-weight-bold">Reusme</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Resume</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
        <div class="main-body">
        
              <!-- Breadcrumb -->
              {{-- <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Resume</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
              </nav> --}}
              <!-- /Breadcrumb -->
        
              <div class="row gutters-sm">
                <div class="col-12">
                    <div class="row">
                        <!-- Card 1 -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
            
                        <!-- Card 2 -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
            
                        <!-- Card 3 -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
            
                        <!-- Card 4 -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
            
                        <!-- Add more cards as needed, repeating the structure -->
                    </div>
                </div>
            </div>
            
    
            </div>
        </div>
    
    @include('user.common.footer')
  
  </div>

    <!-- SCRIPTS -->
    
       <script>
        // Get the number and circle elements
        let number = document.getElementById('number');
        let progressCircle = document.getElementById('progressCircle');
        
        // Get the percentage from the #number div
        let percentage = parseInt(number.innerHTML); // Convert string to integer

        // Calculate the stroke-dashoffset based on the percentage
        let strokeOffset = 440 - (440 * percentage / 100); // 440 is the total dash length

        // Animate the progress
        let counter = 0;
        let interval = setInterval(() => {
            if (counter >= percentage) {
                clearInterval(interval);
            } else {
                counter++;
                number.innerHTML = `${counter}%`;    
                progressCircle.style.strokeDashoffset = strokeOffset; // Update stroke offset
            }
        }, 30);
    </script>

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