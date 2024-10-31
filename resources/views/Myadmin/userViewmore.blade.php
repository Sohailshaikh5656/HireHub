<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HireHub | Admin Agency View More</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset ('admin_mat/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset ('admin_mat/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset ('admin_mat/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset ('admin_mat/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset ('admin_mat/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset ('admin_mat/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset ('admin_mat/assets/images/favicon.png')}}" />
    <style>
    <style>
    th{
        text-transform: uppercase;
        color: #ffffff;
    }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('Myadmin.common.side_nav')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('Myadmin.common.navbar')
        <!-- partial -->
        <div class="main-panel">
         <div class="content-wrapper">
            <div class="row ">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                        <div class="card-body">
                      @if (session('AccountStatus'))
                      <div class="alert alert-danger">
                        <ul>
                          <li>{{session("AccountStatus")}}</li>
                          @php
                          session(['deleted'=>false]);
                          @endphp
                        </ul>
                    </div>
                      @endif
                      <h4 class="card-title">View More Page : {{$user->first_name}}</h4>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th> Infomation </th>
                              
                            </tr>
                          </thead>
                          <tbody>
                           
                            <tr>
                              <td>First name</td>
                              <td>{{$user->first_name}}</td>
                            </tr>
                            <tr>
                                <td>Last name</td>
                                <td>{{$user->last_name}}</td>
                              </tr>
                            <tr>
                              <td>Email</td>
                              <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                              <td>Contact</td>
                              <td>{{$userProfile->contact}}</td>
                            </tr>
                            <tr>
                                <td>date of Birth </td>
                                <td>{{$userProfile->DOB}}</td>
                              </tr>
                            <tr>
                              <td>Gender</td>
                              <td>{{$userProfile->gender}}</td>
                            </tr>
                          </tr>
                          
                            <tr>
                              <td>Address</td>
                              <td>{{$userProfile->address}}</td>
                            </tr>
                            <tr>
                              <td>State</td>
                              <td>{{$state->state_name}}</td>
                            </tr>
                            <tr>
                              <td>City</td>
                              <td>{{$city->city_name}}</td>
                            </tr>
                            <tr>
                              <td>Register Date</td>
                              <td>{{$userProfile->created_at}}</td>
                            </tr>
                            <tr>
                              <td>Profile Updated Date</td>
                              <td>{{$userProfile->updated_at}}</td>
                            </tr>
                            <tr>
                              <td>Blocked Status</td>
                              <td>{{ $user->isBlocked==0 ? 'Active or UnBlocked' : 'Blocked' }}</td>
                            </tr>
                              
                          </tbody>
                        </table>
                      </div>

                      <h4 class="card-title mt-4">Education details : </h4>
                     @foreach ($edu as $edu)
                     <div class="table-responsive mt-4">
                        <table class="table">
                          <thead>
                            <tr>
                              <th style="color: #ffffff">#</th>
                              <th style="color: #ffffff"> Infomation </th>
                              
                            </tr>
                          </thead>
                          <tbody>
                           
                            <tr>
                              <td>First name</td>
                              <td>{{$edu->degree}}</td>
                            </tr>
                            <tr>
                                <td>board</td>
                                <td>{{$edu->board}}</td>
                              </tr>
                            <tr>
                              <td>Staring Year</td>
                              <td>{{$edu->starting_year}}</td>
                            </tr>
                            <tr>
                              <td>Ending Year</td>
                              <td>{{$edu->ending_year}}</td>
                            </tr>
                            <tr>
                                <td>School Name </td>
                                <td>{{$edu->school_name}}</td>
                              </tr>
                            <tr>
                              <td>Percentage</td>
                              <td>{{$edu->grade}}</td>
                            </tr>
                          </tr>
                          
                          
                          </tbody>
                        </table>
                      </div>
                     @endforeach
                    </div>


                    <h4 class="card-title mt-4">Experience details : </h4>
                    @foreach ($exp as $exp)
                    <div class="table-responsive mt-4">
                       <table class="table">
                         <thead>
                           <tr>
                             <th style="color: #ffffff">#</th>
                             <th style="color: #ffffff"> Infomation </th>
                             
                           </tr>
                         </thead>
                         <tbody>
                          
                           <tr>
                             <td>Post Name</td>
                             <td>{{$exp->post_name}}</td>
                           </tr>
                           <tr>
                               <td>Post description</td>
                               <td>{{$exp->post_description}}</td>
                             </tr>
                             <tr>
                                <td>Department Name</td>
                                <td>{{$exp->department_name}}</td>
                              </tr>
                           <tr>
                             <td>Staring Year</td>
                             <td>{{$exp->starting_year}}</td>
                           </tr>
                           <tr>
                             <td>Ending Year</td>
                             <td>{{$exp->ending_year}}</td>
                           </tr>
                           <tr>
                               <td>Industry </td>
                               <td>{{$exp->industry}}</td>
                             </tr>
                           <tr>
                             <td>Institution / Organization Name</td>
                             <td>{{$exp->institution_name}}</td>
                           </tr>
                           <tr>
                            <td>Institution / Organization Address</td>
                            <td>{{$exp->intitution_address}}</td>
                          </tr>
                         
                         
                         </tbody>
                       </table>
                     </div>
                    @endforeach
                  

                   <h4 class="card-title mt-4">Awards & Certificates details : </h4>
                   @foreach ($certi as $certi)
                   <div class="table-responsive mt-4">
                      <table class="table">
                        <thead>
                          <tr>
                            <th style="color: #ffffff">#</th>
                            <th style="color: #ffffff"> Infomation </th>
                            
                          </tr>
                        </thead>
                        <tbody>
                         
                          <tr>
                            <td>Certificate Name</td>
                            <td>{{$certi->certificate_name}}</td>
                          </tr>
                          <tr>
                              <td>Certificate description</td>
                              <td>{{$certi->description}}</td>
                            </tr>
                           
                          <tr>
                            <td>Completion Year</td>
                            <td>{{$certi->completion_date}}</td>
                          </tr>
                         
                        
                        </tbody>
                      </table>
                    </div>
                   @endforeach
                  </div>
                    
                  </div>
                </div>
              </div>
         </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('Myadmin.common.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset ('admin_mat/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset ('admin_mat/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset ('admin_mat/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset ('admin_mat/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset ('admin_mat/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset ('admin_mat/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset ('admin_mat/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset ('admin_mat/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset ('admin_mat/assets/js/misc.js')}}"></script>
    <script src="{{asset ('admin_mat/assets/js/settings.js')}}"></script>
    <script src="{{asset ('admin_mat/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset ('admin_mat/assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>