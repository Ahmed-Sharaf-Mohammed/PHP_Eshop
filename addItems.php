<?php require_once "header.php";
require_once "connect.php";
require_once "cartClass.php";
$cart=new cart();
if(isset($_GET["action"]) && $_GET["action"]=="add"&&isset($_SESSION["userID"])){
    $itemID=$_GET["itemID"];
    $userID=$_SESSION["userID"];
    $cart->addToCart($itemID,$userID,$connect);
    }
    
    else if(isset($_GET["action"]) && !isset($_SESSION["userID"])){
        $itemID=$_GET["itemID"];
        if(isset($_COOKIE['cookie'])){
            foreach ($_COOKIE['cookie'] as $name => $value) {
                if($name==$itemID){
                $value = $value+1;
                }
                else{setcookie("cookie[$itemID]", 1);}
            }
        }
        else{
        setcookie("cookie[$itemID]", 1);
        }
    }
    ?>

<div id="products">
        
    <div class="row">
            <?php
            $CatID=$_GET['catID'];
            $getItems="select * from item where catID= '$CatID' ";
            $itemRes=$connect->query($getItems);

        while($row=$itemRes->fetch_assoc()){?>

    <div class="col-lg-4 ">
        <div class="card d-flex flex-column align-items-center">
            <div class="product-name"><?php echo $row["name"]; ?></div>
                <div class="card-img"> <img src="img/<?php echo $row["imgPath"]; ?>" alt=""> </div>
                    <div class="card-body pt-5">
                        <div class="d-flex align-items-center price">
                                <div class="font-weight-bold"><?php echo $row["price"]; ?>$</div>
                                    <button class="addToCart"><a href="addItems.php?action=add&catID=<?php echo $CatID; ?> &itemID=<?php echo $row["id"]; ?>">+</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php  } ?>
                </div>
                
            </div>
        </div>
    </div>
