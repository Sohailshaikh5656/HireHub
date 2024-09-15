<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HireHub | Admin - Add Job Sub Cataegory</title>
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
           
            <div class="page-header">
                <h3 class="page-title"> Form | Sub Job Category</h3>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Add Sub Job Catagory</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                  </ol>
                </nav>
              </div>
              <div class="row">
                <div class="col-md-3 grid-margin stretch-card"></div>
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Add Sub Job Catagory Form</h4>
                      <p class="card-description"> Horizontal form layout </p>
                      <form class="forms-sample" action="store_subjob" method="post">
                        @csrf
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @elseif (session('addSubjob'))
                        <div class="alert alert-success">
                          <ul>
                                  <li>Category Updated</li>
                                  @php
                                    session(['addSubjob'=>false]);
                                    @endphp
                          </ul>
                      </div>
                    @endif
                        <div class="form-group row">
                          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Catagory Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" id="exampleInputUsername2" placeholder="Enter Sub Catagory Name">
                          </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="category">
                                @foreach ($jd as $jd)
                                <option value="{{$jd->id}}">{{$jd->category_name}}</option>
                                  
                                @endforeach
                              </select>
                            </div>
                          </div>

                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Description</label>
                          <div class="col-sm-9">
                            <input type="text" name="description" class="form-control" id="exampleInputEmail2" placeholder="Job Sub Catagory Description">
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Status</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" name="status" class="form-check-input" name="status" id="optionsRadios1" value="Active"> Active &nbsp;&nbsp;&nbsp;</label>
                              </div>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="status" id="optionsRadios2" value="Inactive" checked> Inactive </label>
                              </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-dark">Cancel</button>
                      </form>
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