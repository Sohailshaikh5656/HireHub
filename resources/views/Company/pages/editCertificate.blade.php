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
</head>
@php
    $pagename = "Dashboard"
@endphp
<body class="g-sidenav-show  bg-gray-100">
  @include('Company.common.side_nav')
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    @include('Company.common.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      
      
      
      <div class="row">
        <div class="col-9 mb-md-0 mb-4 mx-auto ">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-7 col-7">
                  <h6>Add Certificate</h6>
                 
                
              </div>
            </div>

            
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <form action="/Company/updateCertificate/{{$certi->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                  @method('PUT')
                    <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="font-size: 23px;">Feild</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="font-size: 23px;">Information</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <th>
                                  Award & Certificate Name
                              </th>
                              <td>
                                 <input type="text" name="certiName" class="form-control" value="{{$certi->certificate_name}}">
                              </td>
                          </tr>
                          <tr>
                            <th>date / Completion Year</th>
                            <td>
                                <input type="date" name="endingdate" class="form-control" value="{{$certi->Year}}">
                            </td>
                          </tr>
                          <tr>
                            <th>Description</th>
                            <td>
                                <textarea name="derscription" id="" cols="10" rows="10" class="form-control">{{$certi->description}}</textarea>
                            </td>
                          </tr>
                          <tr>
                            <th>Perivous Image</th>
                            <td>
                              <div class="mx-auto">
                                <img src="{{asset ('images/agencycertificate/'.$certi->image_url)}}" alt="Image Not Found" height="300" width="auto">
                              </div>
                               
                            </td>
                          </tr>
                          <tr>
                            <th>upload New Image / Change Image</th>
                            <td>
                                <input type="file" name="file" class="form-control" >
                            </td>
                          </tr>
                         
                      <tr>
                       
                        <td colspan="2" align="right"><input type="submit" class="btn btn-primary" value="Add certificate"></td>
                      </tr>
                        </tbody>
                      </table>
                </form>
               
              </div>
            </div>
          </div>
        </div>
        </div>
       
      @include("Company.common.footer")
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