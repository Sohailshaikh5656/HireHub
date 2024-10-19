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

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
.skill {
    width: 160px;
    height: 160px;
    position: relative; /* Relative position to anchor the svg inside */
    margin: 0 auto; /* Center it within the card horizontally */
}
.outer {
    height: 160px;
    width: 160px;
    box-shadow: 6px 6px 10px -1px rgba(0, 0, 0, 0.15), -6px -6px 10px -1px rgba(255, 255, 255, 0.7);
    border-radius: 50%;
    padding: 20px;
    position: relative;
}
.inner {
    height: 120px;
    width: 120px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: inset 4px 4px 6px -1px rgba(0, 0, 0, 0.2),
                -0.5px -0.5px 0px rgba(255, 255, 255, 1),
                0.5px 0.5px 0px rgba(0, 0, 0, 0.15),
                0px 12px 10px -10px rgba(0, 0, 0, 0.5);
    position: relative;
    z-index: 1;
}
#number {
    font-weight: 600;
    color: #555;
    font-size: 30px;
}
circle {
    fill: none;
    stroke: url(#GradientColor);
    stroke-width: 20px;
    stroke-dasharray: 440; /* Based on circle radius */
    stroke-dashoffset: 440; /* Start hidden */
    transition: stroke-dashoffset 6s ease-in-out;
}
svg {
    position: absolute;
    top: 0;
    left: 0;
}
.box{
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.skill1{
			height: 60px;
			width: 140px;
			border-radius: 10px;
			background-color: skyblue;
      box-shadow: inset 4px 4px 6px -1px rgba(0, 0, 0, 0.2),
                -0.5px -0.5px 0px rgba(255, 255, 255, 1),
                0.5px 0.5px 0px rgba(0, 0, 0, 0.15),
                0px 12px 10px -10px rgba(0, 0, 0, 0.5);
			margin: 10px;
			display: flex;
			justify-content: center;
			align-items: center;
      padding-top:10px; 
      float: left;
		}
		.skill1 p{
			font-family: 'popins';
			font-weight: 400;
			text-transform: uppercase;
			color: #fff;
      font-size: 16px;
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
            <h1 class="text-white font-weight-bold">Profile</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Profile  </strong></span>
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
                  <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
              </nav>
              <!-- /Breadcrumb -->
        
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="{{ asset('images/userData/' . $userProfile->ImageUrl) }}" alt="Admin" class="rounded-circle" width="150" height="150">
                        <div class="mt-3">
                          <h4>{{$user->first_name}} {{$user->last_name}}</h4>
                          <p class="text-secondary mb-1">Full Stack Developer</p>
                          <p class="text-muted font-size-sm">{{$userProfile->address}}</p>
                          <button class="btn btn-primary">Follow</button>
                          <button class="btn btn-outline-primary">Message</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                        <span class="text-secondary">https://bootdey.com</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                        <span class="text-secondary">bootdey</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                        <span class="text-secondary">@bootdey</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                        <span class="text-secondary">bootdey</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                        <span class="text-secondary">bootdey</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{$user->first_name}} {{$user->last_name}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Date of Birth</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{$userProfile->DOB}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                         {{$user->email}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{$userProfile->contact}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Mobile</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          (320) 380-4539
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                         {{$userProfile->address}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                          <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  {{-- <div class="row gutters-sm edu_title"></div></div> --}}
                   <!-- EDUCATION -->
                  <div class="row gutters-sm">
                    <div class="col-sm-12 text-secondary mb-3">
                        <div class="card h-20">
                            <div class="card-body" style="display: flex; justify-content: space-between">
                                    <p class="mt-1">Education</p>
                                    <div><a class="btn btn-primary" style="color:white;" href="/user/addEducation">Add Education</a>
                                        <a class="btn btn-danger" style="color:white;">Edit Education</a> </div>
                                    
                            </div>
                        </div>
                      </div>
                      @foreach ($EducationData as $education)
                            <div class="col-sm-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <large style="font-size: 1.1rem;"><strong>Degree:</strong> <span style="color: #555;">{{ $education->degree }}</span></large><br><hr>
                                        <large style="font-size: 1.1rem;"><strong>Board:</strong> <span style="color: #555;">{{ $education->board }}</span></large><br><hr>
                                        <large style="font-size: 1.1rem;"><strong>Starting Year:</strong> <span style="color: #555;">{{ $education->starting_year }}</span></large><br><hr>
                                        <large style="font-size: 1.1rem;"><strong>Ending Year:</strong> <span style="color: #555;">{{ $education->ending_year }}</span></large><br><hr>
                                        <large style="font-size: 1.1rem;"><strong>School Name:</strong> <span style="color: #555;">{{ $education->school_name }}</span></large><br><hr>

                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 mb-3">
                              <div class="card h-100">
                                  <div class="card-body">
                                     
                                    <h6 class="mt-3"><strong>Percentage Scored:</strong></h6>
                                    <div class="skill">
                                        <div class="outer">
                                            <div class="inner">
                                                <div id="number">{{ $education->grade }}%</div>
                                            </div>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                                            <defs>
                                                <linearGradient id="GradientColor">
                                                    <stop offset="0%" stop-color="#DA22FF" />
                                                    <stop offset="100%" stop-color="#9733EE" />
                                                </linearGradient>
                                            </defs>
                                            <circle cx="80" cy="80" r="70" stroke-linecap="round" id="progressCircle"/>
                                        </svg>
                                    </div> 
                                  </div>
                              </div>
                          </div>
                        @endforeach
                  </div>

                  <div class="row gutters-sm">
                    <div class="col-sm-12 text-secondary mb-3">
                        <div class="card h-20">
                            <div class="card-body" style="display: flex; justify-content: space-between">
                                    <p class="mt-1">Expreince</p>
                                    <div><a class="btn btn-primary" style="color:white;" href="/user/addExperience">Add Experiance</a>
                                        <a class="btn btn-danger" style="color:white;">Edit Experiance</a> </div>
                                    
                            </div>
                        </div>
                      </div>
                    @foreach ($ExpData as $ExpData)
                    <div class="col-sm-6 mb-3">
                      <div class="card h-100">
                          <div class="card-body">
                            <large style="font-size: 1.1rem;"><strong>Post Name:</strong> <span style="color: #555;">{{ $ExpData->post_name }}</span></large><br><hr>
                            <large style="font-size: 1.1rem;"><strong>Description:</strong> <span style="color: #555;">{{ $ExpData->post_description }}</span></large><br><hr>
                            <large style="font-size: 1.1rem;"><strong>Department Name:</strong> <span style="color: #555;">{{ $ExpData->department_name }}</span></large><br><hr>
                            <large style="font-size: 1.1rem;"><strong>Industry:</strong> <span style="color: #555;">{{ $ExpData->industry }}</span></large><br><hr>
                          </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-3">
                      <div class="card h-100">
                          <div class="card-body">
                            <large style="font-size: 1.1rem;"><strong>Starting Year:</strong> <span style="color: #555;">{{ $ExpData->starting_year }}</span></large><br><hr>
                            <large style="font-size: 1.1rem;"><strong>Ending Year:</strong> <span style="color: #555;">{{ $ExpData->ending_year }}</span></large><br><hr>
                            <large style="font-size: 1.1rem;"><strong>Institution Name:</strong> <span style="color: #555;">{{ $ExpData->inst }}</span></large><br><hr>
                            <large style="font-size: 1.1rem;"><strong>Institution Address:</strong> <span style="color: #555;">{{ $ExpData->school_name }}</span></large><br><hr>
                          </div>
                        </div>
                    </div>
                    @endforeach
                  </div>



                  <div class="row gutters-sm">
                    <div class="col-sm-12 text-secondary mb-3">
                        <div class="card h-20">
                            <div class="card-body" style="display: flex; justify-content: space-between">
                                    <p class="mt-1">Award & Certification</p>
                                    <div><a class="btn btn-primary" style="color:white;" href="/user/addCertificte">Add </a>
                                        <a class="btn btn-danger" style="color:white;">Edit</a> </div>
                                    
                            </div>
                        </div>
                      </div>
                    
                      @foreach ($Certi as $Certi)
                    <div class="col-sm-12 mb-3">
                      <div class="card h-100">
                          <div class="card-body">
                            <large style="font-size: 1.1rem;"><strong>Certificate Name:</strong> <span style="color: #555;">{{ $Certi->certificate_name }}</span></large><br><hr>
                            <large style="font-size: 1.1rem;"><strong>Description:</strong> <span style="color: #555;">{{ $Certi->description }}</span></large><br><hr>
                            <large style="font-size: 1.1rem;"><strong>Completion Date :</strong> <span style="color: #555;">{{ $Certi->completion_date }}</span></large><br><hr>

                          </div>
                        </div>
                    </div>
                    @endforeach

                </div>

                <div class="row gutters-sm">
                    <div class="col-sm-12 text-secondary mb-3">
                        <div class="card h-20">
                            <div class="card-body" style="display: flex; justify-content: space-between">
                                    <p class="mt-1">Skills</p>
                                    <div><a class="btn btn-primary" style="color:white;" href="/user/addSkill">Add </a>
                                        <a class="btn btn-danger" style="color:white;">Edit</a> </div>
                                    
                            </div>
                        </div>
                      </div>
                      <div class="col-sm-12 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                              <div class="box " style="display:flex; flex-wrap:wrap;justify-content: flex-start; gap:10px">
                                @if(is_array($skills) && count($skills) > 0)
                                        @foreach ($skills as $skill)
                                            <div class="skill1">
                                                <p>{{ $skill }}</p>
                                            </div>
                                        @endforeach
                                    @else
                                        <p>No skills available.</p>
                                    @endif
                                
                              </div>
                            </div>
                          </div>
                      </div>

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