<?php 

require_once "connect.php";

if($_POST) {
    $firstName=$_POST['Fname'];
    $lastName=$_POST['Lname'];
    $userName=$_POST['username'];
    $phoneNumber=$_POST['phoneNumber'];
    $address=$_POST['address'];
    $password=$_POST['pass'];
    $confirmPass=$_POST['confirmPass'];

    if($password==$confirmPass){
        $selectStmt="select * from user where username='$userName' or phone='$phoneNumber' ";
        $res=$connect->query($selectStmt);
    if($res->num_rows==0){
        $insertQuery= "insert into user (Fname, Lname, username, password, phone, address) 
        values ('$firstName','$lastName','$userName','$password','$phoneNumber','$address')";
        $insertResult=$connect->query($insertQuery);
        header('location: http://localhost/SW2/sign-in.php');

    }
}

}

?>


<!doctype html>
<html lang="en">

<head>
    <title>Sign Up </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/Header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/up.css">
    <link rel="stylesheet" href="css/search.css">
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
    <link rel="stylesheet" href="css/sign-up.css">


</head>

<body>
    

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Sign Up </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-6 " style="height:60vh;" >
                    <div class="login-wrap" style="height:100%;">
                        <h3 class="mb-4 text-center">Create Your Account</h3>
                        <form action="" class="signup-form" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <input type="text" class="form-control" placeholder="E.g.John" name="Fname">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <input type="text" class="form-control" placeholder="E.g.Doe"  name="Lname">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <input type="text" class="form-control" placeholder="john33" name="username">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <input type="text" class="form-control" placeholder="+396584152" name="phoneNumber">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <input type="text" class="form-control" placeholder="Giza" name="address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <input type="password" class="form-control" placeholder="Password" name="pass">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <input type="password" class="form-control" placeholder="Confirm Password" name="confirmPass">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group d-flex">
                                        <button type="submit" class="btn btn-primary rounded submit p-3" style="background-color: #ca1515 !important;border-radius:10px 0px 10px 0px !important;">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="w-100 social-wrap" style="margin-top:93px;">
                        
                           
                            <p class="mt-4">I'm already a member! <a href="sign-in.php" style="color: #ca1515 !important; ">Sign In</a></p>
                        </div>
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