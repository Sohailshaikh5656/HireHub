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
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset ('company_mat/assets/css/soft-ui-dashboard.css?v=1.0.3')}}" rel="stylesheet" />
</head>
@php
    $pagename = "New Job Posting"
@endphp
<body class="g-sidenav-show  bg-gray-100">
  @include('Company.common.side_nav')
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    @include('Company.common.navbar')
    <!-- End Navbar -->
    <section class="min-vh-100 mb-8">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
          <span class="mask bg-gradient-dark opacity-6"></span>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-5 text-center mx-auto">
                <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row mt-lg-n10 mt-md-n11 mt-n10">
            <div class="col-xl-9 col-lg-10 col-md-10 mx-auto">
              <div class="card z-index-0">
                <div class="card-header text-center pt-4">
                  <h5>Job Posting Page</h5>
                </div>
                <div class="row px-xl-5 px-sm-4 px-3">

                </div>
                <div class="card-body">
                  <form role="form text-left" action="/Company/updateJobPosting/{{$data->id}}" method="post">
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
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                      <div class="col-6">
                          <select class="form-control" id="jobCategory" name="job_category">
                              <option value="0">--- Select Job Category ---</option>
                              @foreach ($job as $job)
                              <option value={{ $job->id }} {{$job->id == $data->jobcategory_id ? 'selected':''}}>{{ $job->category_name }}</option>
                              @endforeach
                          </select>
                      </div>
                  
                      <div class="col-6 ">
                          <select class="form-control" id="jobSubCategory" name="job_sub_category">
                              <option value="0">--- Select Job Posting ---</option>
                              @foreach ($subJob as $subJob)
                              <option value="{{ $subJob->job_sub_category }}"{{$subJob->job_sub_category == $data->job_post_name ? 'selected':''}}>{{ $subJob->job_sub_category }}</option>
                              @endforeach
                          </select>
                      </div>
                  </div>
                   
                  <div class="row mb-3">
                    <div class="col-6">
                        <input type="text" class="form-control" name="min_sal" placeholder="Minimum Salary in Lakh/Per Anumm" aria-label="Name" aria-describedby="email-addon" value="{{ intval($data->min_salary) == $data->min_salary ? intval($data->min_salary) : rtrim(rtrim(number_format($data->min_salary, 2), '0'), '.') }}" required>
                      </div>
                      

                      <div class="col-6">
                        <input type="text" class="form-control" name="max_sal" placeholder="Maximum Salary in Lakh/Per Anumm" aria-label="Name" aria-describedby="email-addon" value="{{ intval($data->max_salary) == $data->max_salary ? intval($data->max_salary) : rtrim(rtrim(number_format($data->max_salary, 2), '0'), '.') }}" required>
                      </div>

                  </div>

                      <div class="mb-3">
                        <input type="number" class="form-control" name="min_exp" value="{{ intval($data->min_experience) == $data->min_experience ? intval($data->min_experience) : rtrim(rtrim(number_format($data->min_experience, 2), '0'), '.') }}" placeholder="Minimum Exprience in Years" aria-label="Name" aria-describedby="email-addon" required>
                      </div>

                      <div class="mb-3">
                        <input type="number" class="form-control" name="max_exp" value="{{ intval($data->max_experience) == $data->max_experience ? intval($data->max_experience) : rtrim(rtrim(number_format($data->max_experience, 2), '0'), '.') }}" placeholder="Maximum Exprience in Years" aria-label="Name" aria-describedby="email-addon" required>
                      </div>
                      
                      <div class="mb-3">
                        <input type="text" class="form-control" name="degree_require" value="{{$data->degree}}" placeholder="Enter degree (BCA,MCA,All Becholer)" aria-label="Name" aria-describedby="email-addon" required>
                      </div>
                      <div class="mb-3">
                        <textarea class="form-control" name="requirement" placeholder="Mentions some required Skill seprate by, per line">{{$data->requirement}}</textarea>
                      </div>
                      <div class="mb-3">
                        <textarea class="form-control" name="description"  placeholder="Mentions some Job description and benifit seprated by (,)comma">{{$data->description}}</textarea>
                      </div>
                      <p>Job Location</p>
                      <div class="row mb-3">

                        <div class="col-6">
                       
                            <select class="form-control" name="state_id">
                                <option value=0>--Select State --</option>
                                @foreach ($state as $state)
                                <option value={{$state->id}} {{$state->id == $data->state_id?'selected':''}}>{{$state->state_name}}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <select class="form-control" name="city_id">
                              <option value=0>--Select City--</option>
                              @foreach ($city as $city)
                                <option value={{$city->id}} {{$city->id==$data->city_id?'selected':''}}>{{$city->city_name}}</option>
                              @endforeach
                               
                                
                            </select>
                        </div>

                      </div>
                    
                    
                    <div class="form-check form-check-info text-left">
                        <input class="form-check-input" type="checkbox" name="termAndConditions" value="accepted" id="flexCheckDefault" required>
                        <label class="form-check-label" for="flexCheckDefault">
                          I agree to the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                        </label>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
  </main>
  
  <!--   Core JS Files   -->
  <script src="{{asset ('company_mat/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset ('company_mat/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset ('company_mat/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset ('company_mat/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset ('company_mat/assets/js/plugins/chartjs.min.js')}}"></script>


  <script>
  
    document.getElementById('jobCategory').addEventListener('change', function() {
        var jobCategoryId = this.value;

        if (jobCategoryId != 0) {
            fetchSubCategories(jobCategoryId);
        } else {
            // Reset the sub-category dropdown if no category is selected
            document.getElementById('jobSubCategory').innerHTML = '<option value="0">--- Select Job Posting ---</option>';
        }
    });

    function fetchSubCategories(jobCategoryId) {
        // Perform AJAX request to fetch subcategories based on selected category
        fetch(`/get-subcategories/${jobCategoryId}`)
        .then(response => response.json())
        .then(data => {
            var subCategoryDropdown = document.getElementById('jobSubCategory');
            subCategoryDropdown.innerHTML = '<option value="0">--- Select Job Posting ---</option>';

            data.forEach(subJob => {
                subCategoryDropdown.innerHTML += `<option value="${subJob.id}">${subJob.job_sub_category}</option>`;
            });
        })
        .catch(error => console.error('Error fetching subcategories:', error));
    }
</script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>

<script>
  $( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
  
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset ('company_mat/assets/js/soft-ui-dashboard.min.js?v=1.0.3')}}"></script>
</body>

</html>