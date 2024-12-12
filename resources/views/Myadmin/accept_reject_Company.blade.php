<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HireHub | Admin Add Job Catagorey</title>
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
                      @if (session('error'))
                      <div class="alert alert-danger">
                        <ul>
                          <li>{{session("error")}}</li>
                          @php
                          session(['error'=>false]);
                          @endphp
                        </ul>
                    </div>
                      @endif
                      <h4 class="card-title">Accept / Reject</h4>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th> Company Name </th>
                              <th> Estiblished Date </th>
                              <th> Email </th>
                              <th> Contact </th>
                              <th> View More </th>
                              <th> Accept </th>
                              <th> Reject </th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach ($data as $data)
                          
                          <tr>
                            <td>{{$data->id}}</td>
                            <td>
                              <img src="{{asset('images/agencyData/'. $data->image_url)}}" alt="image" />
                              <span class="pl-2">{{$data->agency_name}} </span>
                            </td>
                            <td> {{$data->est_date}} </td>
                            <td> {{$data->email}} </td>
                            <td> {{$data->contact}} </td>
                            <td> <a class="btn btn-warning badge badge-outline-warning" href="/Myadmin/companyViewmore/{{$data->id}}">View More</a> </td>
                            <td> <a class="btn btn-success badge badge-outline-success" href="/Myadmin/agencyAccept/{{$data->id}}" onclick="return confirm('Are you Sure !')">Accept</a> </td>
                            <td><a class="btn btn-danger badge badge-outline-danger" href="/Myadmin/agencyReject/{{$data->id}}" onclick="return confirm('Are you Sure ! This Will Delete Record as well ?')">Reject</a></td>
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