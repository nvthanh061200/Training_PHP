<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="http://localhost/PHP_TRAINING/">
    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="public/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                                <?php 
                                    $rl=$data["message"];
                               ?>
                        <p style="text-align: center;" class="form-control form-control-user"><?php echo $rl; ?></p>

                            <form class="user" method="POST" action="register/register">
                              
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" required
                                        placeholder="username" name="username" id="username"  autocomplete="off">
                                </div>
                                    <div id="message"></div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" required
                                        placeholder="Fullname" name="fullname" autocomplete="off">
                                </div>
                                 <div class="form-group">
                                    <input type="password" class="form-control form-control-user" required
                                        placeholder="Enter password" name="password">
                                </div>
                                 <div class="form-group">
                                    <input type="text" class="form-control form-control-user" 
                                       placeholder="Address"  required name="address">
                                </div>
                              
                                <button class="btn btn-primary btn-user btn-block" name="btn_reg">Register Account</button>
                                <a href="login/login" class="btn btn-primary btn-user btn-block">
                                    <i class="fab  fa-fw"></i> LOGIN
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

    <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="public/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="public/js/sb-admin-2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="public/js/main.js"></script>

</html>