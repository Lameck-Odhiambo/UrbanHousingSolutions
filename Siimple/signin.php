<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Siimple - v4.3.0
    * Template URL: https://bootstrapmade.com/free-bootstrap-landing-page/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        body{
            background-color: #f3f1f0;;

        }
    </style>

    <title>Sign Up</title>
</head>
<body>
    <section>
        <div class="container">
        <div class="register-box">
            <div class="login-logo">
            <img src="images/logo.png" width="100px" alt="" /> <br />
            <h1><a href="../../index2.html"><b>Makao</b> Housing Solution</a></h1>
            <h3 class="login-box-msg">Log In</h3>
        </div>

        <form action="signin-handler.php" method="post" class="text-center">
            
            <div class="row">
                <div class="form-group mt-3 col-md-4"></div>

                <div class="form-group mt-3 col-md-4">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="text-center mt-3 col-md-4"></div>
            </div>           

            <div class="row">
                <div class="form-group mt-3 col-md-4"></div>
            
                <div class="text-center mt-3 col-md-4 ">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Your Password" required>
                    <p>Don't have an account?<a href="signup.php"> Sign Up</a></p>
                    <button type="submit" class="btn btn-success form-control">Sign In</button>
                </div>

                <div class="text-center mt-3 col-md-4"></div>
            </div>
            

        </form>


       
    </div>
        </div>
    </section>
</body>
</html>