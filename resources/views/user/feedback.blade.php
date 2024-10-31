<!doctype html>
<html lang="en">
<head>
    <title>HIRE HUB &mdash; Feedback</title>
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

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --yellow: #FFBD13;
            --blue: #4383FF;
            --blue-d-1: #3278FF;
            --light: #F5F5F5;
            --grey: #AAA;
            --white: #FFF;
            --shadow: 8px 8px 30px rgba(0,0,0,.05);
        }

        /* body {
            background: var(--light);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 1rem;
        } */






        .wrapper {
            background: var(--white);
            padding: 2rem;
            max-width: 576px;
            width: 100%;
            border-radius: .75rem;
            box-shadow: var(--shadow);
            text-align: center;
        }
        .wrapper h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        .rating {
            display: flex;
            justify-content: center;
            align-items: center;
            grid-gap: .5rem;
            font-size: 2rem;
            color: var(--yellow);
            margin-bottom: 2rem;
        }
        .rating .star {
            cursor: pointer;
        }
        .rating .star.active {
            opacity: 0;
            animation: animate .5s calc(var(--i) * .1s) ease-in-out forwards;
        }

        @keyframes animate {
            0% {
                opacity: 0;
                transform: scale(1);
            }
            50% {
                opacity: 1;
                transform: scale(1.2);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }


        .rating .star:hover {
            transform: scale(1.1);
        }
        textarea {
            width: 100%;
            background: var(--light);
            padding: 1rem;
            border-radius: .5rem;
            border: none;
            outline: none;
            resize: none;
            margin-bottom: .5rem;
        }
        .btn-group {
            display: flex;
            grid-gap: .5rem;
            align-items: center;
        }
        .btn-group .btn {
            padding: .75rem 1rem;
            border-radius: .5rem;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: .875rem;
            font-weight: 500;
        }
        .btn-group .btn.submit {
            background: var(--blue);
            color: var(--white);
        }
        .btn-group .btn.submit:hover {
            background: var(--blue-d-1);
        }
        .btn-group .btn.cancel {
            background: var(--white);
            color: var(--blue);
        }
        .btn-group .btn.cancel:hover {
            background: var(--light);
        }
    </style>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body id="top">

<div class="site-wrap">
    <!-- NAVBAR -->
    @include('user.common.header')

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-white font-weight-bold">FeedBack Form</h1>
                    <div class="custom-breadcrumbs">
                        <a href="/user/Home">Home</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>FeedBack Form</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section vh-200" style="background-image: url('{{ asset('user_mat/images/bk1.jpg') }}');">
        
                        {{-- <h2 class="mb-4" style="color: #fff;">Register To Hire Hub</h2> --}}
                        <center>
                        <div class="wrapper">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @if (session("success"))
                                <div class="alert alert-primary" role="alert">
                                    {{session("success")}}
                                    @php
                                        session(['success'=>false]);
                                    @endphp
                                </div>
                            @endif
                            <h3>Your Feedback is most Important for Us.</h3>
                            <form action="/user/feedbackStore" method="POST">
                                @csrf
                                <div class="rating">
                                    <input type="number" name="rating" hidden>
                                    <i class='bx bx-star star' style="--i: 0;"></i>
                                    <i class='bx bx-star star' style="--i: 1;"></i>
                                    <i class='bx bx-star star' style="--i: 2;"></i>
                                    <i class='bx bx-star star' style="--i: 3;"></i>
                                    <i class='bx bx-star star' style="--i: 4;"></i>
                                </div>
                                <textarea name="opinion" cols="30" rows="5" placeholder="Your opinion..."></textarea>
                                <div class="btn-group">
                                    <input type="submit" class="btn submit" value="Submit">
                                    <button type="button" class="btn cancel">Cancel</button>

                                </div>
                            </form>
                        </div>
                    </center>
    </section>

    <!-- FOOTER -->
    @include('user.common.footer')
</div>
<script>
    const allStar = document.querySelectorAll('.rating .star')
const ratingValue = document.querySelector('.rating input')

allStar.forEach((item, idx)=> {
	item.addEventListener('click', function () {
		let click = 0
		ratingValue.value = idx + 1

		allStar.forEach(i=> {
			i.classList.replace('bxs-star', 'bx-star')
			i.classList.remove('active')
		})
		for(let i=0; i<allStar.length; i++) {
			if(i <= idx) {
				allStar[i].classList.replace('bx-star', 'bxs-star')
				allStar[i].classList.add('active')
			} else {
				allStar[i].style.setProperty('--i', click)
				click++
			}   
		}
	})
})
</script>
</body>
</html>
