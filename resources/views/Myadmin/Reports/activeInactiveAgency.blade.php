<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HireHub | Admin - All Sub job</title>
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
    th{
        text-transform: uppercase;
        color: #ffffff;
    }
    td{
      color: #f7f7f2;
    }
    td:hover{
      color: #f2e9e4;
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
                        <div class="row">
                            <div class="col-12 d-flex justify-content-between">
                                <h4 class="card-title">Active User </h4>
                                <a class="btn btn-primary" href="/Myadmin/PDF_activeInactiveAgency">Download PDF</a>
                            </div>
                        </div>
                     
                      <div class="table-responsive mt-3">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @elseif (session('subjob'))
                        <div class="alert alert-success">
                          <ul>
                                  <li>Job Updated</li>
                                  @php
                                    session(['subjob'=>false]);
                                  @endphp
                                  
                                </ul>
                            </div>

                            @elseif (session('addSubjob'))
                        <div class="alert alert-success">
                          <ul>
                                  <li>Sub Job Added Successfully !</li>
                                  @php
                                    session(['addSubjob'=>false]);
                                    @endphp
                          </ul>
                      </div>

                            @elseif (session('delete'))
                        <div class="alert alert-danger">
                          <ul>
                                  <li>Job deleted !</li>
                                  @php
                                    session(['delete'=>false]);
                                  @endphp
                                  
                                </ul>
                            </div>
                          @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th> Agency Name </th>
                                    <th> email </th>
                                    <th> Contact</th>
                                    <th>City</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($data1 as $data1)
                                <tr>
                                    <td>{{$data1->id}}</td>
                                    <td>{{$data1->agency_name}}</td>
                                    
                                  <td>{{$data1->email}}</td>
                                 
                               
                                  <td class=""> {{$data1->contact}} </td>
                                  <td>{{$data1->city_name}}</td>
                                
                                 
                                  {{-- <td> <a class="btn btn-warning badge badge-outline-warning" href="#">View More</a> </td> --}}
                                 
                                </tr>
                               
                
                
                                @endforeach 
                              </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row ">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-between">
                                <h4 class="card-title">Inactive Users </h4>
                                
                            </div>
                        </div>
                     
                      <div class="table-responsive mt-3">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @elseif (session('subjob'))
                        <div class="alert alert-success">
                          <ul>
                                  <li>Job Updated</li>
                                  @php
                                    session(['subjob'=>false]);
                                  @endphp
                                  
                                </ul>
                            </div>

                            @elseif (session('addSubjob'))
                        <div class="alert alert-success">
                          <ul>
                                  <li>Sub Job Added Successfully !</li>
                                  @php
                                    session(['addSubjob'=>false]);
                                    @endphp
                          </ul>
                      </div>

                            @elseif (session('delete'))
                        <div class="alert alert-danger">
                          <ul>
                                  <li>Job deleted !</li>
                                  @php
                                    session(['delete'=>false]);
                                  @endphp
                                  
                                </ul>
                            </div>
                          @endif
                        <table class="table">
                            <thead>
                                <tr> <th>#</th>
                                    <th> Agency Name </th>
                                   
                                    <th> email </th>
                                    <th> Contact</th>
                                    <th>City</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($data2 as $data2)
                                <tr>
                                    <td>{{$data2->id}}</td>
                                    <td>{{$data2->agency_name}}</td>
                                    
                                  <td>{{$data2->email}}</td>
                                 
                               
                                  <td class=""> {{$data2->contact}} </td>
                                  <td>{{$data2->city_name}}</td>
                                
                                 
                                  {{-- <td> <a class="btn btn-warning badge badge-outline-warning" href="#">View More</a> </td> --}}
                                 
                                </tr>
                               
                
                
                                @endforeach 
                              </tbody>
                        </table>
                      </div>
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