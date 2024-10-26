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
            <h1 class="text-white font-weight-bold">User Profile Update</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>User Profile Update  </strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
        <div class="main-body">
        
              <!-- Breadcrumb -->
              <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User Profile Update</li>
                </ol>
              </nav>
              <!-- /Breadcrumb -->
       
            <div class="row gutters-sm">
                <div class="col-2"></div>
               
               
                  <div class="col-md-8">
                    <form action="/user/updateUser/{{$user->id}}" method="post">
                        @csrf
                        @method('PUT') 
                      <div class="card mb-3">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-6">
                                <label for="">First Name</label>
                                <input type="text" class="form-control" name="fname" value="{{$user->first_name}}">
                            </div>
                            <div class="col-6">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" name="lname" value="{{$user->last_name}}">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$user->email}}">
                            </div>
                            <div class="col-6">
                                <label for="">Contact</label>
                                <input type="text" class="form-control" name="contact" value="{{$data->contact}}">
                            </div>
                          </div>
                          <div class="row">
                              <div class="col-6">
                                  <label for="">Date of Birth</label>
                                  <input type="date" class="form-control" name="DOB" value="{{$data->DOB}}" >
                              </div>
                              <div class="col-6" style="margin-top:33px;">
                                  <label for="" style="font-size: 17px;">Gender: &nbsp;&nbsp;</label>
                                  <input type="radio" name="gender" value="male" class="" style="transform: scale(1.5); margin-right: 5px;" {{$data->gender == 'male' ? 'checked':''}}>&nbsp;Male &nbsp;&nbsp;
                                  <input type="radio" name="gender" value="female" class="" style="transform: scale(1.5); margin-right: 5px;" {{$data->gender == 'female' ? 'checked':''}}>&nbsp;Female
                              </div>
                            </div>
  
                            <div class="row">
                              <div class="col-6">
                                  <label for="">State</label>
                                 <select name="state" class="form-control">
                                  @foreach ($state as $state)
                                  <option value={{$state->id}}>{{$state->state_name}}</option>
                                  @endforeach
                                 </select>
                              </div>
                              <div class="col-6">
                                  <label for="">City</label>
                                 <select name="city" class="form-control">
                                  @foreach ($city as $city)
                                  <option value={{$city->id}}>{{$city->city_name}}</option>                                    
                                  @endforeach
                                 </select>
                              </div>
                            </div>
                          <div class="row">
                            <div class="col-12">
                                <label for="">Address</label>
                                <textarea name="address" id="" rows="5" class="form-control">{{$data->address}}</textarea>
                            </div>
                            
                          </div>
                          <div class="row">
                            <div class="col-12 mt-3 d-flex justify-content-center">
                               
                              <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                            
                          </div>
                
                        
                      </div>
                    </div>
                    </form>
  
                    {{-- <div class="row gutters-sm edu_title"></div></div> --}}
                     <!-- EDUCATION -->
                   
  
                  
                </div>
                </div>
              
              </div>
        </div>
    
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