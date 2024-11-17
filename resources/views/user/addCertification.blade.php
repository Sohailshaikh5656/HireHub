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
    --primary-color:rgb(11,28,179)
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
            color: #A9A9A9;
        }
        .form1 {
            width: clamp(480px, 45%, 630px);
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
        height: 150vh; /* Full viewport height */
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

.forget:hover {
  cursor: pointer;
  color: #89ba16;
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
                    <h1 class="text-white font-weight-bold">Add certificate Page</h1>
                    <div class="custom-breadcrumbs">
                        <a href="/user/Home">Home</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>User certificate Page</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section vh-200" style="background-image: url('{{ asset('user_mat/images/bk1.jpg') }}');">
        
        <form action="/user/storecertificate" class="form1" method="post">
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
            @if (session('error'))
            <div class="alert alert-danger">
                <ul>
                    <li>{{ session('error') }}</li>
                </ul>
            </div>
            @endif
            <h1 class="text-center1" style="color:#fff;">Add Certification</h1>
        
            <div class="form-step1 form-step-active1">
                <div class="input-group1">
                    <label for="certificateName">Certificate Name</label>
                    <input type="text" name="cname" id="certificateName" placeholder="Ex: Python Trainee" value="{{ old('certificateName') }}">
                </div>
                <div class="input-group1">
                    <label for="certificateDescription">Certificate Description</label>
                    <textarea name="cdes" class="form-control" id="certificateDescription" placeholder="Enter description">{{ old('certificateDescription') }}</textarea>
                </div>
        
                <div class="input-group1 col-6">
                    <label for="completionDate">Completion Date</label>
                    <input type="date" name="cdate" id="completionDate" value="{{ old('completionDate') }}">
                </div>
        
                <div class="btns-group1">
                    <button type="submit" class="btn btn-primary p-3">Add Certificate</button>
                </div>
            </div>
        </form>
        
                   
    </section>

    <!-- FOOTER -->
    @include('user.common.footer')
</div>

</body>
</html>
