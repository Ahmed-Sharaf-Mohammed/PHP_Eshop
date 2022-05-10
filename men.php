<?php require_once "header.php";
require_once "connect.php";

if(isset($_GET["action"]) && isset($_SESSION["userID"])){
    if($_GET["action"]=="add"){
    $itemID=$_GET["itemID"];
   
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
<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Men</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="css/men.css">
    <link rel="stylesheet" href="css/Header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/up.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="shortcut icon" href="A.png" />
    <link rel="stylesheet" href="css/main.css">


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="bg-white rounded d-flex align-items-center justify-content-between" id="header"> <button class="btn btn-hide text-uppercase" type="button" data-toggle="collapse" data-target="#filterbar" aria-expanded="false" aria-controls="filterbar" id="filter-btn" onclick="changeBtnTxt()"> <span class="fas fa-angle-left" id="filter-angle"></span> <span id="btn-txt">Hide filters</span> </button>
            <nav class="navbar navbar-expand-lg navbar-light pl-lg-0 pl-auto "> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" aria-controls="mynav" aria-expanded="false" aria-label="Toggle navigation" onclick="chnageIcon()" id="icon"> <span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse" id="mynav">
                    <ul class="navbar-nav d-lg-flex align-items-lg-center hed">
                        <li class="nav-item active"> <select name="sort" id="sort">
                            <option value="" hidden selected>Sort by</option>
                            <option value="price">Price</option>
                            <option value="popularity">Popularity</option>
                            <option value="rating">Rating</option>
                        </select> </li>
                        <li class="nav-item d-inline-flex align-items-center justify-content-between mb-lg-0 mb-3">
                            <div class="d-inline-flex align-items-center mx-lg-2" id="select2">
                                <div class="pl-2">Products:</div> <select name="pro" id="pro">
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                            </select>
                            </div>
                            <div class="font-weight-bold mx-2 result">18 from 200</div>
                        </li>
                        <li class="nav-item d-lg-none d-inline-flex"> </li>
                    </ul>
                </div>
            </nav>
            <div class="ml-auto mt-3 mr-2">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true" class="font-weight-bold">&lt;</span> <span class="sr-only">Previous</span> </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">..</a></li>
                        <li class="page-item"><a class="page-link" href="#">24</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true" class="font-weight-bold">&gt;</span> <span class="sr-only">Next</span> </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="content" class="my-5">
            <div id="filterbar" class="collapse">
                <div class="box border-bottom">
                    <div class="form-group text-center">
                        <div class="btn-group" data-toggle="buttons"> <label class="btn btn-success form-check-label"> <input class="form-check-input" type="radio"> Reset </label> <label class="btn btn-success form-check-label active"> <input class="form-check-input" type="radio" checked> Apply </label>                            </div>
                    </div>
                    <div> <label class="tick">New <input type="checkbox" checked="checked"> <span class="check"></span> </label> </div>
                    <div> <label class="tick">Sale <input type="checkbox"> <span class="check"></span> </label> </div>
                </div>
                <div class="box border-bottom">
                    <div class="box-label text-uppercase d-flex align-items-center">Outerwear <button class="btn ml-auto" type="button" data-toggle="collapse" data-target="#inner-box" aria-expanded="false" aria-controls="inner-box" id="out" onclick="outerFilter()"> <span class="fas fa-plus"></span> </button> </div>
                    <div id="inner-box" class="collapse mt-2 mr-1">
                        <div class="my-1"> <label class="tick">Windbreaker <input type="checkbox" checked="checked"> <span class="check"></span> </label> </div>
                        <div class="my-1"> <label class="tick">Jumpsuit <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="my-1"> <label class="tick">Jacket <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="my-1"> <label class="tick">Coat <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="my-1"> <label class="tick">Raincoat <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="my-1"> <label class="tick">Handbag <input type="checkbox" checked> <span class="check"></span> </label> </div>
                        <div class="my-1"> <label class="tick">Warm vest <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="my-1"> <label class="tick">Wallets <input type="checkbox" checked> <span class="check"></span> </label> </div>
                    </div>
                </div>
                <div class="box border-bottom">
                    <div class="box-label text-uppercase d-flex align-items-center">season <button class="btn ml-auto" type="button" data-toggle="collapse" data-target="#inner-box2" aria-expanded="false" aria-controls="inner-box2"><span class="fas fa-plus"></span></button> </div>
                    <div id="inner-box2" class="collapse mt-2 mr-1">
                        <div class="my-1"> <label class="tick">Spring <input type="checkbox" checked="checked"> <span class="check"></span> </label> </div>
                        <div class="my-1"> <label class="tick">Summer <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="my-1"> <label class="tick">Autumn <input type="checkbox" checked> <span class="check"></span> </label> </div>
                        <div class="my-1"> <label class="tick">Winter <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="my-1"> <label class="tick">Rainy <input type="checkbox"> <span class="check"></span> </label> </div>
                    </div>
                </div>
                <div class="box border-bottom">
                    <div class="box-label text-uppercase d-flex align-items-center">price <button class="btn ml-auto" type="button" data-toggle="collapse" data-target="#price" aria-expanded="false" aria-controls="price"><span class="fas fa-plus"></span></button> </div>
                    <div class="collapse" id="price">
                        <div class="middle">
                            <div class="multi-range-slider"> <input type="range" id="input-left" min="0" max="100" value="10"> <input type="range" id="input-right" min="0" max="100" value="50">
                                <div class="slider">
                                    <div class="track"></div>
                                    <div class="range"></div>
                                    <div class="thumb left"></div>
                                    <div class="thumb right"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <div> <span id="amount-left" class="font-weight-bold"></span> $ </div>
                            <div> <span id="amount-right" class="font-weight-bold"></span> $ </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-label text-uppercase d-flex align-items-center">size <button class="btn ml-auto" type="button" data-toggle="collapse" data-target="#size" aria-expanded="false" aria-controls="size"><span class="fas fa-plus"></span></button> </div>
                    <div id="size" class="collapse">
                        <div class="btn-group d-flex align-items-center flex-wrap" data-toggle="buttons"> <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox"> 80 </label> <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox" checked> 92 </label>
                            <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox" checked> 102 </label> <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox" checked> 104 </label>                            <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox" checked> 106 </label> <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox" checked> 108 </label>                            </div>
                    </div>
                </div>
            </div>
           

            <div id="products">
        
                <div class="row">
                <?php
            $getItems="select * from item where catID=1";
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
                                    <button class="addToCart"><a href="men.php?action=add&itemID=<?php echo $row["id"]; ?>">+</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php  } ?>
                </div>
                
            </div>
           
        </div>
    </div>
    <div>

       
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src=''></script>
    <script type='text/Javascript'>
    </script>
    <script src="js/up.js"></script>
    <script src="js/app.js"></script>

</body>

</html>