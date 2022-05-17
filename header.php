 <?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>

    <body>
        <?php if(isset($_SESSION['userID'])){ ?>



    <div id="header-3">
    <div class="estore-logo"><img src="img/download (2).webp"></div>
<div id="header-3-links">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="addItems.php?catID=1">Men</a></li>
        <li><a href="addItems.php?catID=2">Women</a></li>

        <li><a href="#">Contact</a></li>
        <li> <div class="dropdown">
        <button class="dropbtn">My profile
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="updateProfile.php">Edit profile</a>
          <a href="cart.php">cart</a>
          <a href="logout.php">log out</a>
        </div>
    </div></li>
   
    </ul>
    
</div>

<div class="search-products"><input type="search"placeholder="search products"></div>

</div>

<?php } else {?>

    <div id="header-3">
    <div class="estore-logo"><img src="img/download (2).webp"></div>
<div id="header-3-links">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="addItems.php?catID=1">Men</a></li>
        <li><a href="addItems.php?catID=2">Women</a></li>
       <li> <a href="cart.php">cart</a></li>
        <li><a href="#">Contact</a></li>
        
   
    </ul>
    
</div>

<div class="search-products"><input type="search"placeholder="search products"></div>

<a href="sign-in.php" class="sign-in"><p>sign in</p></a>
</div>

<?php } ?>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
<script src="css/fontawesome-free-5.15.4-web/js/all.js"></script>
<script src="js/js.js"></script>
</body>
</html>