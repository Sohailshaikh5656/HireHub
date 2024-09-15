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
                  <form role="form text-left">
                    <div class="row mb-3">

                        <div class="col-6">
                            <select class="form-control" name="job_catagory" >
                                <option value="0">--- Select Job Category ---</option>
                                <option value="2">IT</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <select class="form-control" name="job name" >
                                <option value="0">--- Select Job Posting ---</option>
                                <option value="2">Java Developer</option>
                            </select>
                        </div>

                    </div>
                   
                    <div class="mb-3">
                        <input type="text" class="form-control" name="min_sal" placeholder="Minimum Salary in Lakh/Per Anumm" aria-label="Name" aria-describedby="email-addon" required>
                      </div>

                      <div class="mb-3">
                        <input type="text" class="form-control" name="mix_sal" placeholder="Maximum Salary in Lakh/Per Anumm" aria-label="Name" aria-describedby="email-addon" required>
                      </div>

                      <div class="mb-3">
                        <input type="number" class="form-control" name="min_exp" placeholder="Minimum Exprience in Years" aria-label="Name" aria-describedby="email-addon" required>
                      </div>

                      <div class="mb-3">
                        <input type="number" class="form-control" name="max_exp" placeholder="Maximum Exprience in Years" aria-label="Name" aria-describedby="email-addon" required>
                      </div>
                      
                      <div class="mb-3">
                        <input type="text" class="form-control" name="degree_require" placeholder="Enter degree (BCA,MCA,All Becholer)" aria-label="Name" aria-describedby="email-addon" required>
                      </div>
                      <div class="mb-3">
                        <textarea class="form-control" name="requirement" placeholder="Mentions some required Skill seprate by, per line"></textarea>
                      </div>
                      <div class="mb-3">
                        <textarea class="form-control" name="description" placeholder="Mentions some Job description and benifit seprated by (,)comma"></textarea>
                      </div>
                      <p>Job Location</p>
                      <div class="row mb-3">

                        <div class="col-6">
                       
                            <select class="form-control" name="state_id">
                                <option value="1">Gujarat</option>
                                <option value="2">Maharashtra</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <select class="form-control" name="city_id">
                                <option value="1">Ahmedabad</option>
                                <option value="2">Rajkot</option>
                            </select>
                        </div>

                      </div>
                    
                    
                    <div class="form-check form-check-info text-left">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
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
    document.getElementById('myForm').addEventlistener('submit',function(event){
        const chk = document.getElementById('flexCheckdefault');
        if(!chk.checked){
            event.preventdefault();
            alert("Please agree to the Terms and Conditions before submitting.");
        }
    });
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "#fff",
          data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 15,
              font: {
                size: 14,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            },
            ticks: {
              display: false
            },
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: "Mobile apps",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#cb0c9f",
            borderWidth: 3,
            backgroundColor: gradientStroke1,
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

          },
          {
            label: "Websites",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#3A416F",
            borderWidth: 3,
            backgroundColor: gradientStroke2,
            fill: true,
            data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
            maxBarThickness: 6
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#b2b9bf',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#b2b9bf',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset ('company_mat/assets/js/soft-ui-dashboard.min.js?v=1.0.3')}}"></script>
</body>

</html>