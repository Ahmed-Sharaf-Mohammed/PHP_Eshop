<?php 
require_once "connect.php";
session_start();
if($_POST){

    $email=$_POST['username'];
    $pass=$_POST['password'];
    $selectStatement = "select * from user where username='$email' and password='$pass' ";
    $result=$connect->query($selectStatement);
    if($result->num_rows==1){
        $row=$result->fetch_assoc();
        $_SESSION['userID']=$row['id'];
        header('location: http://localhost/ecommerce-project/home.php');

            }
}
?>

<!doctype html>
<html lang="en">


<head>
    <title>Login </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/main.css">


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

    <!--FORM -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center" style="background-color: rgb(83, 78, 78);">
                            <span class="fa fa-user-o" style="color: rgb(0, 0, 0);"></span>
                        </div>
                        <h3 class="text-center mb-4" style="color: black;">Have an account?</h3>


                        <form action="#" class="login-form" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" placeholder="Username" name="username" required>
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" class="form-control rounded-left" placeholder="Password" name="password" required>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" >
									  <span class="checkmark"></span>
									</label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#" class="co">Forgot Password</a>
                                </div>
                            </div>
                            <p class="mt-4" style="text-align: center">Don't have account?<a href="sign-up.php" style="color: #ca1515 !important; ">Sign Up</a></p>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary rounded submit p-3 px-5" style="background-color: #ca1515 !important;">SIGN IN</button>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!-- FOOTER -->
    <footer class="w-100 py-4 flex-shrink-0" style="background-color: transparent;">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="h1 text-black" style="margin-bottom:20px;"><img src="img/download.webp"></h5>
                    <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <img src="img/xpayment-1.png.pagespeed.ic.n2kKvTDVR3.webp" class="rounded float-start" style="padding:0 5px;">
                    <img src="img/xpayment-2.png.pagespeed.ic.ZRduM6EAng.webp" class="rounded float-start" style="padding:0 5px;">
                    <img src="img/xpayment-3.png.pagespeed.ic.WyXEccmJ7c.webp" class="rounded float-start" style="padding:0 5px;">
                    <img src="img/xpayment-4.png.pagespeed.ic.KD_lCYLjIB.webp" class="rounded float-start" style="padding:0 5px;">
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-black mb-3">Quick links</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-black mb-3">Account</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Orders Tracking</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Wishlist</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 news">
                    <h5 class="text-black mb-3">Newsletter</h5>
                    <div class="input-group mb-3">
                        <div class="two">
                            <ul class="links ">
                                <form>
                                    <input type="email" placeholder="Email">
                                    <button type="submit ">Subscribe</button>
                                </form>
                                <a><i class="fab fa-facebook-f text-black"></i></a>
                                <a><i class="fab fa-twitter text-black"></i></a>
                                <a><i class="fab fa-youtube text-black"></i></a>
                                <a><i class="fab fa-instagram text-black"></i></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </footer>


    <!-- Copyright -->
    <div class="text-center p-3 foot" style="background-color: rgba(0, 0, 0, 0.2);">
        Copyright &copy; 2022 All rights reserved | This template is made with
        <i class="fa fa-heart " aria-hidden="true "></i> by <a href="# " target="_blank ">Murad</a>
    </div>
    <!-- Copyright -->
    <script src="js/up.js"></script>
    <script src="js/app.js"></script>


</body>


</html>