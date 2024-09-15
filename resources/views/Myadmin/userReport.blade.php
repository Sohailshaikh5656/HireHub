<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HireHub | Admin UserReport</title>
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
                      <h4 class="card-title">User Report</h4>
                      Any Report Reported by user like Techinal problem, or any violeation by agencies
                      {{-- <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th> FirstName </th>
                              <th> LastName </th>
                              <th> Email </th>
                              <th> Contact </th>
                              <th> View More </th>
                              <th> Block </td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>
                                <img src="assets/images/faces/face1.jpg" alt="image" />
                                <span class="pl-2">Henry </span>
                              </td>
                              <td> Klein </td>
                              <td> shaikhhenry1131@gmail.com </td>
                              <td> 6354621866 </td>
                              <td> <a class="btn btn-warning badge badge-outline-danger" href="#">View More</a> </td>
                              <td> <a class="btn btn-danger badge badge-outline-secondary" href="#">Block</a> </td>
                            </tr>
                           


                            <tr>
                                <td>1</td>
                                <td>
                                  <img src="assets/images/faces/face1.jpg" alt="image" />
                                  <span class="pl-2">Henry </span>
                                </td>
                                <td> Klein </td>
                                <td> shaikhhenry1131@gmail.com </td>
                                <td> 6354621866 </td>
                                <td> <a class="btn btn-warning badge badge-outline-danger" href="#">View More</a> </td>
                                <td> <a class="btn btn-danger badge badge-outline-secondary" href="#">Block</a> </td>
                              </tr>

                              <tr>
                                <td>1</td>
                                <td>
                                  <img src="assets/images/faces/face1.jpg" alt="image" />
                                  <span class="pl-2">Henry </span>
                                </td>
                                <td> Klein </td>
                                <td> shaikhhenry1131@gmail.com </td>
                                <td> 6354621866 </td>
                                <td> <a class="btn btn-warning badge badge-outline-danger" href="#">View More</a> </td>
                                <td> <a class="btn btn-danger badge badge-outline-secondary" href="#">Block</a> </td>
                              </tr>

                               <tr>
                              <td>1</td>
                              <td>
                                <img src="assets/images/faces/face1.jpg" alt="image" />
                                <span class="pl-2">Henry </span>
                              </td>
                              <td> Klein </td>
                              <td> shaikhhenry1131@gmail.com </td>
                              <td> 6354621866 </td>
                              <td> <a class="btn btn-warning badge badge-outline-danger" href="#">View More</a> </td>
                              <td> <a class="btn btn-danger badge badge-outline-secondary" href="#">Block</a> </td>
                            </tr>
                             
                          </tbody>
                        </table> 
                       </div> --}}
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