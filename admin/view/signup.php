<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- css -->
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
    <style>
        body {
            background-image: url(public/uploads/bg-01.jpg);
            background-size: cover;
        }

        .content {
            margin-top: 100px;
        }

        .signup {
            padding: 15px;
            background-color: rgb(255, 255, 255);
            border-radius: 15px;
            border: 0.1px solid rgb(255, 255, 255, 0.5);
        }

        .col-md-12 input {
            background: none;
            border: none;
        }

        .form-label {
            color: #fb00ff;
        }

        .intro-signup {
            color: #12cce1;
        }

        input[type=email]:focus,
        input[type=password]:focus {
            color: #000;
            background: none;
            outline: none;
            border: .5px solid #fff;
        }

        .continue {
            float: right;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="content row justify-content-center">
            <div class="col-md-4">
                <div class="signup">
                    <div class="intro-signup"></div><br>
                    <div class="alert alert-danger d-none" id="alert" role="alert">
                        Password and re-enter password may be different !
                    </div>
                    <form class="row g-3 form-signup" action="" method="POST">
                        <input type="text" name="a" value="sendmail" hidden>
                        <div id="form-signup">
                            <div class="col-md-12">
                                <label for="input-email" class="form-label"><b id="label-email"></b></label>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <input type="email" tabindex="1" name="email" class="form-control" id="input-email" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn btn-outline-info continue">Continue</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    <script src="public/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        const Intro = document.querySelector('.intro-signup');
        const LableEmail = document.querySelector('#label-email');
        const FormSignup = document.querySelector('#form-signup');
        const btnContinue = document.querySelector('.continue');

        str = 'Welcome to Cuns! Let’s begin the adventure';
        str2 = 'Enter your email';
        i = 0;
        setTimeout(function textIntro() {
            Intro.innerHTML += str[i];
            (str[i] == '!') ? Intro.innerHTML += '<br>': '';
            i++;
            (i < str.length) ? setTimeout(textIntro, 30): clearTimeout(textIntro);
            if (i >= str.length) {
                j = 0;
                setTimeout(function lableIntro() {
                    LableEmail.innerHTML += str2[j]
                    j++;
                    (j < str2.length) ? setTimeout(lableIntro, 30): clearTimeout(lableIntro), document.querySelector('#input-email').focus();
                }, 30);
            }
        }, 30);
        // event click
        let str_password = ['<div class="col-md-12"> <label for="input-password" class="form-label"><b id="label-password"></b></label> <div class="row"> <div class="col-md-2"></div> <div class="col-md-10"> <input type="password" tabindex="1" name="password" class="form-control" id="input-password"/> </div> </div> </div>', '<div class="col-md-12"> <label for="input-repassword" class="form-label"><b id="label-repassword"></b></label> <div class="row"> <div class="col-md-2"></div> <div class="col-md-10"> <input type="password" tabindex="1" class="form-control" id="input-repassword"/> </div> </div> </div>'];

        k = 0;
        btnContinue.addEventListener('click', function() {
            let email = document.querySelector('#input-email').value;
            if (k == 0) {
                FormSignup.innerHTML += str_password[k];
                document.querySelector('#input-email').value = email;
                const LablePassword = document.querySelector('#label-password');
                str = 'Enter your Password';
                j = 0;
                setTimeout(function lableIntro() {
                    LablePassword.innerHTML += str[j]
                    j++;
                    (j < str.length) ? setTimeout(lableIntro, 30): clearTimeout(lableIntro), document.querySelector('#input-password').focus();
                }, 30);
            }
            if (k == 1) {
                let password = document.querySelector('#input-password').value;
                FormSignup.innerHTML += str_password[k];
                document.querySelector('#input-email').value = email;
                document.querySelector('#input-password').value = password;
                const LablePassword = document.querySelector('#label-repassword');
                str = 'Enter your Re - Password';
                j = 0;
                setTimeout(function lableIntro() {
                    LablePassword.innerHTML += str[j]
                    j++;
                    (j < str.length) ? setTimeout(lableIntro, 30): clearTimeout(lableIntro), document.querySelector('#input-repassword').focus();
                }, 30);
            }
            k++;
            if (document.querySelector('#input-repassword').value === document.querySelector('#input-password').value) {
                btnContinue.type = 'submit';
            } else if(document.querySelector('#input-repassword').value != '') {
                document.querySelector('#alert').classList.remove('d-none');
            }
        })
    </script>
</body>

</html>