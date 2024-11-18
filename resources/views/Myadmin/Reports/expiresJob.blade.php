<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HireHub | Admin - Expire Sub job</title>
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
    table{
        font-size: 9px;
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
                                <h4 class="card-title">Expire Job Posting </h4>
                                <a class="btn btn-primary" href="/Myadmin/PDF_expiresJob">Download PDF</a>
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

                            @elseif (session('error'))
                        <div class="alert alert-success">
                          <ul>
                                  {{session('error')}}
                                  @php
                                    session(['error'=>false]);
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
                                <th> Agency </th>
                                <th> Name </th>
                                <th> Description </th>
                                <th> Posting Date</th>
                                <th> Deadline </th>
                                <th> Salary</th>
                                <th> Eduaction Required</th>
                               
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($data as $data )
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->agency_name}}</td>
                                <td>{{$data->postName}}</td>
                                <td> 
                                <ul>
                                    @foreach (explode(';',$data->description) as $line)
                                      <li style="text-transform: capitalize">{{$line}}</li>
                                    @endforeach  
                                  </ul>    
                                </td>
                                <td class=""> {{$data->created_at}} </td>
                                <td class=""> {{$data->Deadline}} </td>
                                
                                <td> {{$data->min_salary}} to {{$data->max_salary}} / Lakh Per  Anum  </td>
                                {{-- <td> <a class="btn btn-warning badge badge-outline-warning" href="#">View More</a> </td> --}}
                                <td>{{$data->degree}}</td>
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