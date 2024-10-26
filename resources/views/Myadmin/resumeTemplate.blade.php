<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HireHub | Admin - ResumeTemplateManagement</title>
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
        a{
            text-decoration: none;
            color: #fff;
        }
        a:hover{
            text-decoration: none;
        }
        .mmsg{
            margin-top:30px;
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
              @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
             
                 

                  @elseif (session('added'))
              <div class="alert alert-succes">
                <ul>
                        <li>Resume Added !</li>
                        @php
                          session(['added'=>false]);
                        @endphp
                        
                      </ul>
                  </div>

                  @elseif (session('empty'))
              <div class="alert alert-succes">
                <ul>
                        <li>Some thing Wrong Happened !</li>
                        @php
                          session(['empty'=>false]);
                        @endphp
                        
                      </ul>
                  </div>
                @endif
              <form action="/Myadmin/addResume" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-3"></div>
                  <div class="col-9 p-3 ">
                    <h4 class="mb-1">Resume Add Form</h4>
                    <div class="mt-2">
                      <input type="text" name="name" id="" class="form-control" placeholder="Enter Name of Design or Resume Name">
                    </div>
                  <div class="mt-3">
                    <input type="file" name="resumefile" class="form-control">
                  </div>
                  <div class="mt-3">
                    <input class="btn btn-danger" type="submit">
                  </div>
                  <div class="mt-4">
                    <p>Note : Uploads only blade file desing with simpl css and Html code.</p>
                    <p>Note : After Uploading Change the code of file in blade</p>
                  </div>

                  </div>
                </div>

                <div class="row mt-4">
                 <div class="col-2"></div>
                  <div class="col-10">
                    <table cellpadding=10 cellspacing=0 align="center" style="width: 100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>File Name</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                        
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Simple</td>
                          <td>Resume</td>
                          <td><a href="" class="btn btn-primary">Edit</a></td>
                          <td><a href="" class="btn btn-danger">Delete</a></td>
                        </tr>
                      </tbody>
      
                    </table>
                  
              </div>
            </div>
            </div>
          </form>
         
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