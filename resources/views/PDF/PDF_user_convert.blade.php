<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HireHub | Admin AllUser</title>
    <!-- plugins:css -->
   
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    {{-- <link rel="stylesheet" href="{{asset ('admin_mat/assets/css/style.css')}}"> --}}
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
      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
      
        <!-- partial -->
        <div class="main-panel">
         <div class="content-wrapper">
            <div class="row ">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">All User Dom PDF</h4>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th> FirstName </th>
                              <th> LastName </th>
                              <th> Email </th>
                              <th> Contact </th>
                              <th> Profile Image </th>
                             
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($data as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>
                                 
                                  <span class="pl-2">{{$data->first_name}} </span>
                                </td>
                                <td> {{$data->last_name}} </td>
                                <td> {{$data->email}} </td>
                                <td> {{$data->contact}} </td>
                                <td> <img src="{{ asset('images/userData/' . $data->ImageUrl) }}" style="height: 70px; width:70px" ></td>
                               
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
        
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    
  </body>
</html>