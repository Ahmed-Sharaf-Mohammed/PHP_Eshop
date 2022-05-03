<?php 

require_once "connect.php";
require_once "header.php";
$userID=$_SESSION["userID"];
if($_POST) {
    $firstName=$_POST['Fname'];
    $lastName=$_POST['Lname'];
    $userName=$_POST['username'];
    $phoneNumber=$_POST['phoneNumber'];
    $address=$_POST['address'];
    $password=$_POST['pass'];
    $confirmPass=$_POST['confirmPass'];

    if($password==$confirmPass){
        $selectStmt="select * from user where (username='$userName' or phone='$phoneNumber') and not id ='$userID'";
        $res=$connect->query($selectStmt);
    if($res->num_rows==0){
        $updateStmt="update user set Fname='$firstName',Lname='$lastName',username='$userName',phone='$phoneNumber',address='$address',password='$password' where id='$userID'";
        $updateRes=$connect->query($updateStmt);
        header('location: http://localhost/task-8/home.php');

    }
}

}

?>


<!doctype html>
<html lang="en">

<head>
    <title>Update profile</title>
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
    
<?php
   $getUser="select * from user where id='$userID'";
    $selectRes=$connect->query($getUser);
    $row=$selectRes->fetch_assoc();
  ?>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Update profile </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-6 " style="height:60vh;" >
                    <div class="login-wrap" style="height:100%;">
                     
                        <form action="" class="signup-form" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <input type="text" class="form-control" value="<?php echo $row["Fname"]?>" name="Fname" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <input type="text" class="form-control" value="<?php echo $row["Lname"]?>"  name="Lname" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <input type="text" class="form-control" value="<?php echo $row["username"]?>" name="username" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <input type="text" class="form-control" value="<?php echo $row["phone"]?>" name="phoneNumber" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <input type="text" class="form-control" value="<?php echo $row["address"]?>" name="address" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <input type="password" class="form-control" value="<?php echo $row["password"]?>" name="pass" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <input type="password" class="form-control" value="<?php echo $row["password"]?>" name="confirmPass" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group d-flex">
                                        <button type="submit" class="btn btn-primary rounded submit p-3" style="background-color: #ca1515 !important;border-radius:10px 0px 10px 0px !important;">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="w-100 social-wrap" style="margin-top:93px;">
                        
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