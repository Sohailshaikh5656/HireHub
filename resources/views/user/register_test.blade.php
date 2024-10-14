<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- <link rel="stylesheet" href="formStyle1.css"> -->
    <style>
        :root{
    --primary-color:rgb(11,28,179)
}

*,
*::before,
*::after{
    box-sizing: border-box;
}
body{
    font-family: Montserrat,'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin:0;
    display: grid;
    place-items: center;
    min-height: 100vh;
}
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
.form1{
    width: clamp(320px, 30%, 420px);
    margin: 0 auto;
    border: 1px solid #ccc;
    border-radius: 0.35rem; /* Corrected */
    padding: 1.5rem;
    color: #666;
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

    </style>

    <script src="form1.js"></script>
</head>
<body>
    <form action="" class="form1">
        <h1 class="text-center1">Registration Form</h1>
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
            <div class="btns-group1">
                <a href="#" class="btn1 btn-next1 width-50 ml-auto">Next</a>
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
                <a href="#" class="btn1 btn-prev1">Previous</a>
                <a href="#" class="btn1 btn-next1">Next</a>
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
                <input type="radio" name="gender" id="city1" value="male">Male&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" id="city1" value="female">Female&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <div class="btns-group1">
                <a href="#" class="btn1 btn-prev1">Previous</a>
                <a href="#" class="btn1 btn-next1">Next</a>
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
                <a href="#" class="btn1 btn-prev1">Previous</a>
                <a href="#" class="btn1 btn-next1">Next</a>
            </div>
        </div>

        <!-- Personal Info 5 -->


        <div class="form-step1">
            <div class="input-group1">
                <label for="state1">State</label>
                <input type="text" name="state1" id="state1">
            </div>
            <div class="input-group1">
                <label>City</label>
                <input type="text" name="city1" id="city1">
            </div>
            <div class="btns-group1">
                <a href="#" class="btn1 btn-prev1">Previous</a>
                <a href="#" class="btn1 btn-next1">Next</a>
            </div>
        </div>

        <!-- Personal Info 6 -->


        <div class="form-step1">
            <div class="input-group1">
                <label for="address1">Address</label>
                <input type="number" name="address" id="address1">
            </div>
            <div class="input-group1">
                <label>Zip Code</label>
                <input type="text" name="zip1" id="zip1">
            </div>
            <div class="btns-group1">
                <a href="#" class="btn1 btn-prev1">Previous</a>
                <input type="submit" class="btn1" value="Submit">
            </div>
        </div>
    </form>

    <script type="text/javascript">
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
</body>
</html>
