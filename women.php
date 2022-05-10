<?php require_once "header.php";
require_once "connect.php";
if(isset($_GET["action"]) && isset($_SESSION["userID"])){
    if($_GET["action"]=="add"){
    $itemID=$_GET["itemID"];
    if(isset($_SESSION["userID"])){
        $userID=$_SESSION["userID"];
        }
        else{$userID=4;}
    $selectStmt="select * from cart where itemID='$itemID' and userID='$userID'";
    $selectRes=$connect->query($selectStmt);
    
    if($selectRes->num_rows==0){
      $insertCart="insert into cart (itemID,quantity,userID) values
      ('$itemID',1,'$userID')";
    
      $res=$connect->query( $insertCart);
    }
    else{
    
      $updateStmt="update cart set quantity=quantity+1  where itemID='$itemID' and userID='$userID'";
      $updateRes=$connect->query( $updateStmt);
    }
    
    
    }
    
    
    }
    
    else if(isset($_GET["action"]) && !isset($_SESSION["userID"])){
        $itemID=$_GET["itemID"];
        if(isset($_COOKIE['cookie'])){
            foreach ($_COOKIE['cookie'] as $name => $value) {
                if($name==$itemID){
                $value = $value+1;
                }
            }
        }
        else{
        setcookie("cookie[$itemID]", 1);
        }
    }
    ?>

<!DOCTYPE html >
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>

    <body>
      <div class="womenSection">

            <section id="sidebar">
                <div class="py-3">
                    <h5 class="font-weight-bold">Categories</h5>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Coats <span class="badge badge-primary badge-pill">328</span> </li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Jackets <span class="badge badge-primary badge-pill">112</span> </li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Dresses <span class="badge badge-primary badge-pill">32</span> </li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Shirts <span class="badge badge-primary badge-pill">48</span> </li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> T-shirts <span class="badge badge-primary badge-pill">90</span> </li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Jeans <span class="badge badge-primary badge-pill">56</span> </li>
                    </ul>
                </div>
                <div class="py-3">
                    <h5 class="font-weight-bold">Brands</h5>
                    <form class="brand">
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Carina <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Generic<input type="checkbox" checked> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Michael Kors<input type="checkbox" checked> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Onda<input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">GUESS<input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">

Carlos<input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Calvin Klein<input type="checkbox"> <span class="check"></span> </label> </div>
                    </form>
                </div>
                <div class="py-3">
                    <h5 class="font-weight-bold">Rating</h5>
                    <form class="rating">
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <input type="checkbox"> <span class="check"></span> </label>                            </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label>                            </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label>                            </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label>                            </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label>                            </div>
                    </form>
               
            </section>

            <div id="products">
        
        <div class="row">
        <?php
    $getItems="select * from item where catID=2";
$itemRes=$connect->query($getItems);

while($row=$itemRes->fetch_assoc()){

?>
            <div class="col-lg-4 ">
                <div class="card d-flex flex-column align-items-center">
                    <div class="product-name"><?php echo $row["name"]; ?></div>
                    <div class="card-img"> <img src="img/<?php echo $row["imgPath"]; ?>" alt=""> </div>
                    <div class="card-body pt-5">
                        <div class="d-flex align-items-center price">
                            <div class="font-weight-bold"><?php echo $row["price"]; ?>$</div>
                            <button class="addToCart"><a href="women.php?action=add&itemID=<?php echo $row["id"]; ?>">+</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <?php  } ?>
        </div>
        
    </div>
  
    </div>        
        
<div class="footer">
    <div class="footer-descrip">
        <img src="img/download (2).webp">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
    </div>
    <div class="footer-descrip">
        <h3>Quick links</h3>
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Offers & Discounts</a></li>
            <li><a href="#">Get copoun</a></li>
            <li><a href="#">Contact Us</a></li>

        </ul>
    </div>
   
    <div class="footer-descrip">
        <h3>New products</h3>
        <ul>
            <li><a href="#">Woman cloth</a></li>
            <li><a href="#">Fashion Accessories</a></li>
            <li><a href="#">Man Accessories</a></li>
            <li><a href="#">Rubber made Toys</a></li>

        </ul>
    </div>
    <div class="footer-descrip">
        <h3>support</h3>
        <ul>
            <li><a href="#">Frequently Asked Questions</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Report a Payment Issue</a></li>


        </ul>
</div>

    </body>
</html>