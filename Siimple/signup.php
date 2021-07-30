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

    <title>Registration</title>
</head>
<body>
    <section>
        <div class="container">
        <div class="register-box">
            <div class="login-logo">
            <img src="images/logo.png" width="100px" alt="" /> <br />
            <h1><a href="../../index2.html"><b>Makao</b> Housing Solution</a></h1>
            <h3 class="login-box-msg">Registration</h3>
        </div>

        <form action="signup-handler.php" method="post" role="form" class="text-center">
            <div class="row">
                <div class="form-group mt-3 col-md-4">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="form-group mt-3 col-md-4">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="form-group mt-3 col-md-4">
                <label for="name">Phone Number</label>
                    <input type="text" class="form-control" name="phone" placeholder="Your Phone Number" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group mt-3 col-md-4">
                    <label for="name">ID/Passport</label>
                    <input type="text" name="ID" class="form-control" placeholder="Your ID Number" required>
                </div>

                <div class="form-group mt-3 col-md-4">
                    <label for="KRA">KRA Pin</label>
                    <input type="text" class="form-control" name="KRApin" placeholder="Your KRA Pin" required>
                </div>

                <div class="form-group mt-3 col-md-4">
                <label for="name">Physical Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Your Current Residence" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group mt-3 col-md-4">
                    <label for="familyMembers">No. of Family Members</label>
                    <input type="number" name="familyMembers" class="form-control" placeholder="Number of Dependants" required>
                </div>

                <div class="form-group mt-3 col-md-4">
                    <label for="disability">Disability Status</label>
                    <select class="form-control" name="disabilityStatus" required>
                        <option>--SELECT</option>
                        <option>None</option>
                        <option>Handicapped</option>
                    </select>
                </div>

                <div class="form-group mt-3 col-md-4">
                    <label for="employmentStatus">Employment Status</label>
                    <select class="form-control" name="employmentStatus" required>
                        <option>--SELECT</option>
                        <option>Self</option>
                        <option>Contract</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group mt-3 col-md-4">
                    <label for="income">Salary/Income</label>
                    <input type="text" name="income" class="form-control" placeholder="Your Monthly Income" required>
                </div>

                <div class="form-group mt-3 col-md-4">
                    <label for="preferredLocation">Preferred Location</label>
                    <select class="form-control" name="preferredLocation" required>
                        <option>--SELECT</option>
                        <option>Langata</option>
                        <option>Kibra</option>
                        <option>Mathare</option>
                    </select>
                </div>

                <div class="form-group mt-3 col-md-4">
                    <label for="preferredSize">Preferred Size</label>
                    <select class="form-control" name="preferredSize" required>
                        <option>--SELECT</option>
                        <option>1 bedroom</option>
                        <option>2 bedroom</option>
                        <option>3 bedroom</option>
                    </select>
                </div>
                

                
            </div>                

            <div class="row">
                <div class="form-group mt-3 col-md-4"></div>
            
                <div class="text-center mt-3 col-md-4 ">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Your Password" required>
                    <p>Already have an account?<a href="signin.php"> Sign In</a></p>
                    <button type="submit" name="btn-reg" class="btn btn-success form-control">Sign Up</button>
                </div>

                <div class="text-center mt-3 col-md-4"></div>
            </div>
            

        </form>


       
    </div>
        </div>
    </section>
</body>
</html>