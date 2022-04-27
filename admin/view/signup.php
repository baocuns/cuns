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
            background-color: rgb(000, 000, 000, 0.2);
            border-radius: 15px;
            border: 0.1px solid rgb(255, 255, 255, 0.5);
        }

        .col-md-12 input {
            background: none;
            border: none;
            offset-inline-start: auto;
        }

        .form-label {
            color: #fb00ff;
        }

        .intro-signup {
            color: #12cce1;
        }
        input[type = email]:focus {
            color: #fff;
            background: none;
            outline: none;
        }
        .continue{
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
                    <form class="row g-3" action="" method="POST">
                        <div class="col-md-12">
                            <label for="input-email" class="form-label"><b id="label-email"></b></label>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <input type="email" tabindex="1" name="email" class="form-control" id="input-email">
                                </div>
                            </div>
                            <input type="text" name="a" value="sendmail" hidden>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-info continue">Continue</button>
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
    </script>
</body>

</html>