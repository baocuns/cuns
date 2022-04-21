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
        .login {
            padding: 15px;
        }
        .col-md-12 input {
            background: none;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="content row justify-content-center">
            <div class="col-md-3">
                <div class="login">
                    <h3>Login</h3>
                    <form class="row g-3" action="" method="POST">
                        <div class="col-md-12">
                            <input type="text" name="a" value="login" hidden>
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-12">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Remember me
                                </label>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    <script src="public/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>

    </script>
</body>

</html>