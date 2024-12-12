<!doctype html>
<html lang="en">
<head>
    <title>HIRE HUB &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset ('company_mat/ftco-32x32.png')}}">
    <link rel="stylesheet" href="{{asset ('user_mat/css/custom-bs.css')}}">
    <link rel="stylesheet" href="{{asset ('user_mat/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset ('user_mat/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset ('user_mat/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset ('user_mat/fonts/line-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset ('user_mat/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset ('user_mat/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset ('user_mat/css/style.css')}}">  
    <style>
        :root{
    --primary-color:#89ba16
        }

        /* *,
        *::before,
        *::after{
            box-sizing: border-box;
        } */
        /* body{
            font-family: Montserrat,'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin:0;
            display: grid;
            place-items: center;
            min-height: 100vh;
        } */
        label{
            display: block;
            margin-bottom: 0.5rem;

        }
        input{
            display: block;
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
        }
        .ml-auto {
            margin-left: auto; /* This ensures the button is pushed to the right */
        }

        .width-50 {
            width: auto; /* Change this to auto if you want the button to fit its content */
        }

        /* progressbar */

        .progressbar1{
            position: relative;
            display: flex;
            justify-content: space-between;
            counter-reset: step;
            margin: 2rem 0 4rem;
        }
        .progressbar1::before, .progress1{
            content: "";
            height: 4px;
            width: 100%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: #dcdcdc;
            z-index: -1;
        }
        .progress1{
            background-color: var(--primary-color);
            width: 0%;
        }
        .progress-step1{
            width: 2.1875rem;
            height: 2.1875rem;
            background-color: #dcdcdc;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .progress-step1::before{
            counter-increment: step;
            content:counter(step);
        }

        .progress-step1::after{
            content: attr(data-title);
            position: absolute;
            top: calc(100% + 0.75rem);
            font-size: 0.84rem;
        }

        .progress-step-active1{
            background-color: var(--primary-color);
            color: #ffffff;
        }
        .form1 {
            width: clamp(320px, 30%, 420px);
            margin: 0 auto;
            padding: 1.5rem;
            border-radius: 0.35rem;
            backdrop-filter: blur(10px); /* Apply blur effect */
            background: rgba(0, 0, 0, 0.4); /* Light black transparent background */
            border: 1px solid rgba(255, 255, 255, 0.2); /* Light border */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional subtle shadow */
            color: #fff; /* White text color for better contrast */
        }

        .form-step1{
            display: none;
            transform-origin: top;
            animation: animate 1s;
        }
        .form-step-active1{
            display: block;
            
        }

        @keyframes animate{
            from{
                transform: scale(1,0);
                opacity: 0;
            }
            to{
                transform: scale(1, 1);
                opacity: 1;
            }
        }

        .input-group1{
            margin:2rem 0;
        }

        .btns-group1{
            display: grid;
            grid-template-columns: repeat(2,1fr);
            gap: 1.5rem;
        }

        .btn1{
            margin: 0.75rem;
            display: block;
            text-decoration: none;
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            border-radius: 0.25rem;
            cursor: pointer;
            transition: 0.8s;
            padding: 15px;
        }
        .btn1:hover{
            box-shadow: 0 0 0 7px #fff, 0 0 0 6px var(--primary-color);
        }
        .text-center1{
            text-align: center;
        }
        .site-section {
        height: 100vh; /* Full viewport height */
        background-size: cover; /* Cover the entire section */
        background-repeat: no-repeat; /* Prevent the image from repeating */
        background-position: center; /* Center the image */
        display: flex; /* Optional: Flexbox for centering content */
        justify-content: center; /* Optional: Center horizontally */
        align-items: center; /* Optional: Center vertically */
        color: white; /* Text color for better visibility on background */
}

.input-group1 {
    margin: 2rem 0;
}

.radio-group {
    display: flex; /* Use flexbox to align radio buttons horizontally */
    align-items: center; /* Center align vertically */
}

.radio-group input[type="radio"] {
    width: 24px; /* Increase width */
    height: 24px; /* Increase height */
    margin-right: 0.5rem; /* Space between radio button and label */
}

.radio-group label {
    margin-right: 1rem; /* Adjust spacing between labels */
    padding: 0; /* Remove any default padding */
    font-size: 1.2rem; /* Increase font size */
    display: flex; /* Flexbox for alignment */
    align-items: center; /* Center align text vertically */
}


/* Optional: Make the radio buttons smaller */
.radio-group input[type="radio"] {
    width: 16px; /* Set a specific width */
    height: 16px; /* Set a specific height */
}

button{
    border: none;
}

    </style>
</head>
<body id="top">

<div class="site-wrap">
    <!-- NAVBAR -->
    @include('user.common.header')

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url({{ asset ('user_mat/images/hero_1.jpg')}});" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-white font-weight-bold">Register & Profile</h1>
                    <div class="custom-breadcrumbs">
                        <a href="#">Home</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>Register & Profile</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section" style="background-image: url('{{ asset('user_mat/images/bk1.jpg') }}');">
        
                        {{-- <h2 class="mb-4" style="color: #fff;">Register To Hire Hub</h2> --}}
                        <form action="/user/regsiterUser" class="form1" method="post"  enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
         

                            </div>
                            @endif
                            @if  (session('error'))
                                <div class="alert alert-danger"> 
                                    <li>Password Not matched !</li>
                                    @php
                                        Session(["error"=>false]);
                                    @endphp
                                </div>
                            @endif
                            @if  (session('error1'))
                            <div class="alert alert-danger"> 
                                <li>Email Already Exits !</li>
                                @php
                                    Session(["error1"=>false]);
                                @endphp
                            </div>
                        @endif
                            
                            <h1 class="text-center1" style="color:#fff;">Registration Form</h1>
                            <!-- Progress Bar -->
                            <div class="progressbar1">
                                <div class="progress1" id="progress1"></div>
                                <div class="progress-step1 progress-step-active1" data-title="Email"></div>
                                <div class="progress-step1" data-title="Name"></div>
                                <div class="progress-step1" data-title="Contact"></div>
                                <div class="progress-step1" data-title="Image"></div>
                                <div class="progress-step1" data-title="State"></div>
                                <div class="progress-step1" data-title="Address"></div>
                            </div>
                            <!-- Steps -->
                            <!-- Personal Info 1 -->
                            <div class="form-step1 form-step-active1">
                                <div class="input-group1">
                                    <label for="email1">Email</label>
                                    <input type="email" name="email" id="username1">
                                </div>
                                <div class="input-group1">
                                    <label>Password</label>
                                    <input type="password" name="password" id="password1">
                                </div>
                                <div class="input-group1">
                                    <label>Confirm Password</label>
                                    <input type="password" name="confirmpassword" id="password1">
                                </div>
                                <div class="btns-group1">
                                    {{-- <a href="#" class="btn1 btn-next1 width-50 ml-auto btn btn-primary" style="width:180px">Next</a> --}}
                                    <button type="button" class="btn1 btn-next1">Next</button>
                                </div>
                            </div>
                            <!-- Personal Info 2 -->
                    
                            <div class="form-step1">
                                <div class="input-group1">
                                    <label for="fname1">First Name</label>
                                    <input type="text" name="fname" id="fname1">
                                </div>
                                <div class="input-group1">
                                    <label>Last Name</label>
                                    <input type="text" name="lname" id="lname1">
                                </div>
                                <div class="btns-group1">
                                    <button type="button" class="btn1 btn-prev1">Previous</button>
                                    <button type="button" class="btn1 btn-next1">Next</button>
                                </div>
                            </div>
                    
                                <!-- Personal Info 3-->
                    
                            <div class="form-step1">
                                <div class="input-group1">
                                    <label for="state1">Contact</label>
                                    <input type="number" name="contact" id="state1">
                                </div>
                                <div class="input-group1">
                                    <label>Gender</label>
                                    <div class="radio-group">
                                        <input type="radio" name="gender" id="male" value="male">
                                        <label for="male">Male</label>
                                        
                                        <input type="radio" name="gender" id="female" value="female">
                                        <label for="female">Female</label>
                                    </div>
                                </div>
                                
                                
                                <div class="btns-group1">
                                    <button type="button" class="btn1 btn-prev1">Previous</button>
                                    <button type="button" class="btn1 btn-next1">Next</button>
                                </div>
                            </div>
                    
                            <!-- Personal Info 4 -->
                    
                    
                            <div class="form-step1">
                                <div class="input-group1">
                                    <label for="state1">Dob</label>
                                    <input type="date" name="dob" id="dob" class="dob">
                                </div>
                                <div class="input-group1">
                                      <label for="state1">Profile Image</label>
                                    <input type="file" name="profileImage" id="dob" class="">
                                </div>
                                <div class="btns-group1">
                                    <button type="button" class="btn1 btn-prev1">Previous</button>
                                    <button type="button" class="btn1 btn-next1">Next</button>
                                </div>
                            </div>
                    
                            <!-- Personal Info 5 -->
                    
                    
                            <div class="form-step1">
                                <div class="input-group1">
                                    <label>State</label>
                                    <select name="state" id="state-select" class="form-control">
                                        <option value="">--Select State--</option>
                                        @foreach ($state as $state)
                                            <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <!-- City Dropdown -->
                                <div class="input-group1">
                                    <label>City</label>
                                    <select name="city" id="city-select" class="form-control">
                                        <option value="">--Select City--</option>
                                    </select>
                                </div>
                                
                                <div class="btns-group1">
                                    <button type="button" class="btn1 btn-prev1">Previous</button>
                                    <button type="button" class="btn1 btn-next1">Next</button>
                                </div>
                            </div>
                    
                            <!-- Personal Info 6 -->
                    
                    
                            <div class="form-step1">
                                <div class="input-group1">
                                    <label for="address1">Address</label>
                                    <textarea name="address" id="" cols="40" rows="3" class="form-control"></textarea>
                                </div>
                                <div class="input-group1">
                                    <label>Zip Code</label>
                                    <input type="text" name="zip1" id="zip1">
                                </div>
                                <div class="btns-group1">
                                    <button type="button" class="btn1 btn-prev1">Previous</button>
                                    <button type="submit" style="height:58px; color:#fff; margin-top:13px" class="btn btn-primary" id="submitBtn">Submit</button>
                                </div>
                            </div>
                        </form>
                   
    </section>

    <!-- FOOTER -->
    @include('user.common.footer')
</div>
<script>
 document.addEventListener('DOMContentLoaded', () => {
    const prevBtns1 = document.querySelectorAll(".btn-prev1");
    const nextBtns1 = document.querySelectorAll(".btn-next1");
    const progress1 = document.getElementById("progress1");
    const formSteps1 = document.querySelectorAll(".form-step1");
    const progressSteps1 = document.querySelectorAll(".progress-step1");

    let formStepsNum1 = 0;

    nextBtns1.forEach(btn => {
        btn.addEventListener("click", () => {
            formStepsNum1++;
            updateFormSteps1();
            updateProgressbar();
        });
    });

    prevBtns1.forEach(btn => {
        btn.addEventListener("click", () => {
            formStepsNum1--;
            updateFormSteps1();
            updateProgressbar();
        });
    });

    function updateFormSteps1() {
        formSteps1.forEach((formStep, index) => {
            formStep.classList.remove("form-step-active1");
        });
        formSteps1[formStepsNum1].classList.add("form-step-active1");
    }

    function updateProgressbar(){
        progressSteps1.forEach((progressStep1,idx)=>{
            if(idx< formStepsNum1+1){
                progressStep1.classList.add('progress-step-active1');
            }
            else{
                progressStep1.classList.remove('progress-step-active1');
            }
        })
    }
});


</script>

<script>
    document.getElementById('state-select').addEventListener('change', function() {
        var stateId = this.value;

        // Clear the city dropdown
        var citySelect = document.getElementById('city-select');
        citySelect.innerHTML = '<option value="">--Select City--</option>'; // Reset city dropdown

        if (stateId) {
            // Fetch cities for the selected state
            fetch(`/get-cities/${stateId}`)
                .then(response => response.json())
                .then(data => {
                    data.cities.forEach(city => {
                        var option = document.createElement('option');
                        option.value = city.id;
                        option.textContent = city.city_name;
                        citySelect.appendChild(option);
                    });
                })
                .catch(error => console.error('Error fetching cities:', error));
        }
    });
</script>

</body>
</html>
