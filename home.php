<?php 
require_once "header.php"; 
require_once "connect.php"; 
if(isset($_SESSION["userID"]) && isset($_COOKIE['cookie'])){
    $userID=$_SESSION["userID"];
    foreach ($_COOKIE['cookie'] as $name => $value) {
      $selectStmt="select * from cart where itemID='$name' and userID='$userID'";
      $selectRes=$connect->query($selectStmt);
      
      if($selectRes->num_rows==0){
        $insertCart="insert into cart (itemID,quantity,userID) values
        ('$name','$value','$userID')";
        $res=$connect->query( $insertCart);
      }
      else{
      
        $updateStmt="update cart set quantity=quantity+'$value' where itemID='$name' and userID='$userID'";
        $updateRes=$connect->query( $updateStmt);
      }
      setcookie("cookie[$name]", null);
    }
 
  }
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>


    <body>




<div class="banner"><div class="banner-left"><img src="img/xhero_man.png.pagespeed.ic.cN86RxAvqq.webp"></div>
<div class="banner-right">
    <h2>60% discounts</h2>
    <h1>Winter Collection</h1>
    <p>Best cloth collection by 2020</p>
    <div class="shop-btn"><b>Shop Now</b></div>
</div>
</div>
<div class="shop-category">
    <div class="category-title"><h1>Shop By Category</h1></div>
    <div class="category-products">
        <div class="product">
            <img src="img/xcat1.jpg.pagespeed.ic.fHyE_8RHVV.webp">
            <div class="product-title1">
                <h3>Womens'</h3>
                <div class="product-link"><b>Best New Deals</b></div>
                <p>New collection</p>
            </div>
        </div>
        <div class="product">
            <img src="img/xcat2.jpg.pagespeed.ic.Y9XV67bWs0.webp">
            <div class="product-title2">
                <p>discount</p>
                <h3>Winter CLoths</h3>
                <h4>New collection</h4>
            </div>
        
        </div>
        <div class="product">
            <img src="img/xcat3.jpg.pagespeed.ic.2LQT-LNfhJ.webp">
            <div class="product-title1">
                <h3>Mens' cloth</h3>
                <div class="product-link"><b>Best New Deals</b></div>
                <p>New collection</p>
            </div>
        </div>

    </div>

</div>

<div class="latest-product-title">
    <h1>Latest product</h1>
    <div class="latest-product-links">
        <ul>
            <li><a href="#">all</a></li>
            <li><a href="#">featured</a></li>
            <li><a href="#">new</a></li>
            <li><a href="#">offer</a></li>
        </ul>
    </div>
</div>
<div class="latest-products">

    <div class="latest-product-box">
        <img src="img/xproduct1.png.pagespeed.ic.1xDh2tYQRf.webp">
        <div class="box-description">
        <div class="star-icon1"><i class="far fa-star"></i></div>
        <div class="star-icon1"><i class="far fa-star"></i></div>
        <div class="star-icon1"><i class="far fa-star"></i></div>
        <div class="star-icon2"><i class="far fa-star"></i></div>
        <div class="star-icon2"><i class="far fa-star"></i></div>
        <a href="#">Green dress with details</a>
        <div class="main-price"><p>$40.00</p></div>
        <div class="last-price"><p>$60.00</p></div>
        </div>
        
    </div>

    <div class="latest-product-box"><img src="img/xproduct2.png.pagespeed.ic.eUEI6NamxP.webp">
        <div class="box-description">
            <div class="star-icon1"><i class="far fa-star"></i></div>
            <div class="star-icon1"><i class="far fa-star"></i></div>
            <div class="star-icon1"><i class="far fa-star"></i></div>
            <div class="star-icon2"><i class="far fa-star"></i></div>
            <div class="star-icon2"><i class="far fa-star"></i></div>
            <a href="#">Green dress with details</a>
            <div class="main-price"><p>$40.00</p></div>
            <div class="last-price"><p>$60.00</p></div>
            </div>
    </div>
    <div class="latest-product-box"><img src="img/xproduct3.png.pagespeed.ic.7lSBCQxjjP.webp">
        <div class="box-description">
            <div class="star-icon1"><i class="far fa-star"></i></div>
            <div class="star-icon1"><i class="far fa-star"></i></div>
            <div class="star-icon1"><i class="far fa-star"></i></div>
            <div class="star-icon2"><i class="far fa-star"></i></div>
            <div class="star-icon2"><i class="far fa-star"></i></div>
            <a href="#">Green dress with details</a>
            <div class="main-price"><p>$40.00</p></div>
            <div class="last-price"><p>$60.00</p></div>
            </div>
    </div>
    <div class="latest-product-box"><img src="img/xproduct4.png.pagespeed.ic.E_ANc_dSPj.webp">
        <div class="box-description">
            <div class="star-icon1"><i class="far fa-star"></i></div>
            <div class="star-icon1"><i class="far fa-star"></i></div>
            <div class="star-icon1"><i class="far fa-star"></i></div>
            <div class="star-icon2"><i class="far fa-star"></i></div>
            <div class="star-icon2"><i class="far fa-star"></i></div>
            <a href="#">Green dress with details</a>
            <div class="main-price"><p>$40.00</p></div>
            <div class="last-price"><p>$60.00</p></div>
            </div>
    </div>
    <div class="latest-product-box"><img src="img/xproduct5.png.pagespeed.ic.izexkyESWy.webp">
        <div class="box-description">
            <div class="star-icon1"><i class="far fa-star"></i></div>
            <div class="star-icon1"><i class="far fa-star"></i></div>
            <div class="star-icon1"><i class="far fa-star"></i></div>
            <div class="star-icon2"><i class="far fa-star"></i></div>
            <div class="star-icon2"><i class="far fa-star"></i></div>
            <a href="#">Green dress with details</a>
            <div class="main-price"><p>$40.00</p></div>
            <div class="last-price"><p>$60.00</p></div>
            </div>
    </div>
    <div class="latest-product-box"><img src="img/xproduct6.png.pagespeed.ic.kDamUyhwF-.webp">
        <div class="box-description">
            <div class="star-icon1"><i class="far fa-star"></i></div>
            <div class="star-icon1"><i class="far fa-star"></i></div>
            <div class="star-icon1"><i class="far fa-star"></i></div>
            <div class="star-icon2"><i class="far fa-star"></i></div>
            <div class="star-icon2"><i class="far fa-star"></i></div>
            <a href="#">Green dress with details</a>
            <div class="main-price"><p>$40.00</p></div>
            <div class="last-price"><p>$60.00</p></div>
            </div>
    </div>

</div>
<div class="find-best">
<div class="cover-img"><img src="img/xcard.png.pagespeed.ic.HqMQFXi7Kw.webp"></div>
<div class="man-img"><img src="img/xcard-man.png.pagespeed.ic.atpcqNbLer.webp"></div>
<div class="find-best-title">
    <h1>Find The Best Product from Our Shop</h1>
    <p>Designers who are interesten creating state ofthe.  </p>
    <div class="shop-btn"><b>shop now</b></div>
</div>
<div class="books-img"><img src="img/xcard-shape.png.pagespeed.ic.VnXz22z4_Q.webp"></div>

</div>

<div class="best-collection">
    <div class="collection-1">
        <h1>Best Collection of This Month</h1>
        <p>Designers who are interesten crea.</p>
        <div class="shop-btn"><b>shop now</b></div>
        <img src="img/xcollection1.png.pagespeed.ic.OD6oEotzwr.webp">
    </div>
    <div class="collection-2"><img src="img/xcollection2.png.pagespeed.ic.1WKxZbEmZj.webp"></div>

    <div class="collection-3">
        <div class="item">
            <p>Menz Winter
                Jacket</p>
            <img src="img/xcollection3.png.pagespeed.ic.rKxUeaW_F4.webp">
        </div>
        <div class="item">
            <p>Menz Winter
                Jacket</p>
            <img src="img/xcollection4.png.pagespeed.ic.3qNjVmyPpO.webp">
        </div>
        <div class="item">
            <p>Menz Winter
                Jacket</p>
            <img src="img/xcollection5.png.pagespeed.ic.LwLQ9InyzI.webp">
        </div>
    </div>

</div>

<div class="get-offers">
    <img src="img/latest-offer.png.webp">
    <div class="get-offers-title">
        <h1>Get Our Latest Offers News</h1>
        <p>Subscribe news latter</p>
    </div>
    <div class="your-email-here"><input type="email" placeholder="youe email here">
    
    </div>
    <div class="shop-btn"><b>shop now</b></div>
</div>

<div class="free-shipping">
    <div class="free-box">
        <div class="free-icon"><i class="fas fa-cube"></i></div>
        <h3>Free Shipping Method</h3>
        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
    </div>
    <div class="free-box">
        <div class="free-icon"><i class="fas fa-lock-open"></i></div>
        <h3>Free Shipping Method</h3>
        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
    </div>
    <div class="free-box">
        <div class="free-icon"><i class="fas fa-exchange-alt"></i></div>
        <h3>Free Shipping Method</h3>
        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
    </div>

</div>
<div class="models">
    <div class="model-pic"><img src="img/xgallery1.jpg.pagespeed.ic.mRum_SCVP_.webp"></div>
    <div class="model-pic"><img src="img/xgallery2.jpg.pagespeed.ic.GtSiUs1tb3.webp"></div>
    <div class="model-pic"><img src="img/xgallery3.jpg.pagespeed.ic.tWI_VtRMni.webp"></div>
    <div class="model-pic"><img src="img/xgallery4.jpg.pagespeed.ic.Men8FVEW1X.webp"></div>
    <div class="model-pic"><img src="img/xgallery5.jpg.pagespeed.ic.cK5777QVa3.webp"></div>
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

</div>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="css/fontawesome-free-5.15.4-web/js/all.js"></script>
        <script src="js/js.js"></script>
    </body>
</html>