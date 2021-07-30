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

    <title>Properties</title>
</head>
<body>
<section>
    <div class="container">
        <div class="register-box">
            <div class="login-logo">
                <img src="images/logo.png" width="100px" alt="" /> <br />
                <h1><a href="../../index2.html"><b>Makao</b> Housing Solution</a></h1>
                <h3 class="login-box-msg">Properties</h3>
            </div>

            <form action="properties-handler.php" method="post" role="form" class="text-center">
                <div class="row">
                    <div class="form-group mt-3 col-md-4">
                        <label for="Location">Location</label>
                        <input type="text" class="form-control" name="location" placeholder="Kibra/Langata/Pangani" required>
                    </div>

                    <div class="form-group mt-3 col-md-4">
                        <label for="block">Block</label>
                        <input type="text" class="form-control" name="block" placeholder="A - E" required>
                    </div>

                    <div class="form-group mt-3 col-md-4">
                        <label for="Size">Size</label>
                        <input type="text" class="form-control" name="size" placeholder=" 1 - 3" required>
                    </div>

                    <div class="form-group mt-3 col-md-4">
                        <label for="floor">Floor</label>
                        <input type="text" class="form-control" name="floor" placeholder="0 - 5" required>
                    </div>

                    <div class="form-group mt-3 col-md-4">
                        <label for="houseNumber">House Number</label>
                        <input type="text" class="form-control" name="houseNumber" placeholder="I - VII" required>
                    </div>

                    <div class="form-group mt-3 col-md-4">
                        <label for="parking">Parking</label>
                        <input type="text" class="form-control" name="parking" placeholder="1 or None " required>
                    </div>

                </div>

                <div class="row">
                    <div class="form-group mt-3 col-md-4"></div>

                    <div class="text-center mt-3 col-md-4 ">
                        <a href="landing.php"><button type="submit" name="btn-reg" class="btn btn-success form-control">Apply</button></a>
                    </div>

                    <div class="text-center mt-3 col-md-4"></div>
                </div>


            </form>



        </div>
    </div>
</section>
</body>
</html>
