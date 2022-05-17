<?php 
require_once "connect.php";
session_start();
if($_POST){
    $username=$_POST['username'];
    $pass=$_POST['password'];
    $selectStatement = "select * from user where username='$username' and password='$pass' ";
    $result=$connect->query($selectStatement);
    if($result->num_rows==1){
        $row=$result->fetch_assoc();
        $_SESSION['userID']=$row['id'];
        header('location: http://localhost/SW2/home.php');

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
    

    <!-- Copyright -->
    <script src="js/up.js"></script>
    <script src="js/app.js"></script>


</body>


</html>
