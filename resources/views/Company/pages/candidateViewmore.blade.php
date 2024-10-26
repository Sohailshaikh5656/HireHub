<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset ('company_mat/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset ('company_mat/assets/img/favicon.png')}}">
  <title>
    Soft UI Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset ('company_mat/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset ('company_mat/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset ('company_mat/assets/css/soft-ui-dashboard.css?v=1.0.3')}}" rel="stylesheet" />
  <style>
    th,td{
      text-transform: uppercase;
    }
  </style>
</head>
@php
    $pagename = "Manage Job Posting"
@endphp
<body class="g-sidenav-show  bg-gray-100">
  @include('Company.common.side_nav')
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    @include('Company.common.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>Job Posted table</h6>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center justify-content-center mb-0">
                   
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{$user->id}}</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Data</th>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">First Name</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$user->first_name}}</td>
                    </tr>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Last Name</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$user->last_name}}</td>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$user->email}}</td>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Contact</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$userProfile->contact}}</td>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Address</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$userProfile->address}}</td>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date of Birth</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$userProfile->DOB}}</td>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Gender</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$userProfile->gender}}</td>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">State</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$state->state_name}}</td>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">City</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$city->city_name}}</td>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Profile Image</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"><img src="{{asset ('images/userData/'.$userProfile->ImageUrl) }}" alt="User Image" height="70"></td>
                      </tr>
                  
                  </table>
                </div>
              </div>
            </div>

            <!-- Eduaction Table -->
        </div>
       


        <div class="row">
          <div class="col-12">
            @foreach ($edu as $edu)
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>Eduaction Details</h6>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center justify-content-center mb-0">
                   
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{$user->id}}</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Data</th>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Degree</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$edu->degree}}</td>
                    </tr>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Board</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$edu->board}}</td>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Starting date</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$edu->starting_year}}</td>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Ending Date</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$edu->ending_year}}</td>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">School / College Name</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$edu->school_name}}</td>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Percentage</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$edu->grade}}</td>
                      </tr>
                      
                  </table>
                </div>
              </div>
            </div>
            @endforeach

            
            <!-- Eduaction Table -->
        </div>

        <!--Experienace -->

        <div class="row">
          <div class="col-12">
            @foreach ($exp as $exp)
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>Experience Details</h6>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center justify-content-center mb-0">
                   
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{$user->id}}</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Data</th>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Post Name</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$exp->post_name}}</td>
                    </tr>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">post description</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$exp->post_description}}</td>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">department name</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$exp->department_name}}</td>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">starting date</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$exp->staring_year}}</td>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ending date</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$exp->ending_year}}</td>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Industry</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$exp->industry}}</td>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Institution / Organization Name</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$exp->institution_name}}</td>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Institution Address</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$exp->intitution_address}}</td>
                      </tr>
                      
                  </table>
                </div>
              </div>
            </div>
            @endforeach

            
            <!-- Eduaction Table -->
        </div>

        <!-- Award and Certificate -->

        <div class="row">
          <div class="col-12">
            @foreach ($certi as $certi)
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>Certificate & Award Details</h6>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center justify-content-center mb-0">
                   
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{$user->id}}</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Data</th>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Post Name</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$certi->certificate_name}}</td>
                    </tr>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">post description</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$certi->description}}</td>
                      </tr>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Completion Date</th>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{$certi->completion_date}}</td>
                      </tr>
                     
                  </table>
                </div>
              </div>
            </div>
            @endforeach

            
            <!-- Eduaction Table -->
        </div>
        @include('Company.common.footer')
      </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset ('company_mat/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset ('company_mat/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset ('company_mat/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset ('company_mat/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset ('company_mat/assets/js/plugins/chartjs.min.js')}}"></script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset ('company_mat/assets/js/soft-ui-dashboard.min.js?v=1.0.3')}}"></script>
</body>

</html>