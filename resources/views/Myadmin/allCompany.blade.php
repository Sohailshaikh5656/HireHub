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
                      <h4 class="card-title">All Company</h4>
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
                              <th> Block </th>
                              <th> Edit </th>
                              <th> Delete </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>
                                <img src="assets/images/faces/face1.jpg" alt="image" />
                                <span class="pl-2">TCS </span>
                              </td>
                              <td> 23/12/2002 </td>
                              <td> tcs_org@gmail.com </td>
                              <td> 6354621866 </td>
                              <td> <a class="btn btn-warning badge badge-outline-warning" href="#">View More</a> </td>
                              <td> <a class="btn btn-info badge badge-outline-info" href="#">Block</a> </td>
                              <td><a class="btn btn-primary badge badge-outline-primary" href="">Edit</a></td>
                              <td><a class="btn btn-danger badge badge-outline-danger" href="">Delete</a></td>
                            </tr>

                            <tr>
                              <td>1</td>
                              <td>
                                <img src="assets/images/faces/face1.jpg" alt="image" />
                                <span class="pl-2">TCS </span>
                              </td>
                              <td> 23/12/2002 </td>
                              <td> tcs_org@gmail.com </td>
                              <td> 6354621866 </td>
                              <td> <a class="btn btn-warning badge badge-outline-warning" href="#">View More</a> </td>
                              <td> <a class="btn btn-info badge badge-outline-info" href="#">Block</a> </td>
                              <td><a class="btn btn-primary badge badge-outline-primary" href="">Edit</a></td>
                              <td><a class="btn btn-danger badge badge-outline-danger" href="">Delete</a></td>
                            </tr>

                            <tr>
                              <td>1</td>
                              <td>
                                <img src="assets/images/faces/face1.jpg" alt="image" />
                                <span class="pl-2">TCS </span>
                              </td>
                              <td> 23/12/2002 </td>
                              <td> tcs_org@gmail.com </td>
                              <td> 6354621866 </td>
                              <td> <a class="btn btn-warning badge badge-outline-warning" href="#">View More</a> </td>
                              <td> <a class="btn btn-info badge badge-outline-info" href="#">Block</a> </td>
                              <td><a class="btn btn-primary badge badge-outline-primary" href="">Edit</a></td>
                              <td><a class="btn btn-danger badge badge-outline-danger" href="">Delete</a></td>
                            </tr>

                            <tr>
                              <td>1</td>
                              <td>
                                <img src="assets/images/faces/face1.jpg" alt="image" />
                                <span class="pl-2">TCS </span>
                              </td>
                              <td> 23/12/2002 </td>
                              <td> tcs_org@gmail.com </td>
                              <td> 6354621866 </td>
                              <td> <a class="btn btn-warning badge badge-outline-warning" href="#">View More</a> </td>
                              <td> <a class="btn btn-info badge badge-outline-info" href="#">Block</a> </td>
                              <td><a class="btn btn-primary badge badge-outline-primary" href="">Edit</a></td>
                              <td><a class="btn btn-danger badge badge-outline-danger" href="">Delete</a></td>
                            </tr>
                            
                              
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