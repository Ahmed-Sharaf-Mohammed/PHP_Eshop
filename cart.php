<?php 
require_once "header.php"; 
require_once "cartClass.php"; 
require_once "OrderClass.php"; 
$order=new Order();
$cart=new cart();
if(isset($_SESSION["userID"])){
  $userID=$_SESSION["userID"];
  }
  
if(isset($_GET['action'])){

    if($_GET['action']=="delete"){
      if ( !isset($_COOKIE['cookie'])){
$itemID=$_GET['itemID'];
$cart->deleteFromCart($itemID,$userID,$connect);
  }
  else{
    $itemID=$_GET['itemID'];
    setcookie("cookie[$itemID]", null);
    header('location: http://localhost/SW2/cart.php');
  }

}
else if($_GET['action']=="confirmOrder"){

  $order->confirmOrder($userID,$connect);
}

}

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <center>
 <?php if(isset($_SESSION["userID"])){ ?>
<table width="70%" style="margin-top:50px;">
 
<th>Product</th>
<th>Price</th>
<th>Quantity</th>
<th>Tolal</th>

<?php
$selectItems="select item.id as i,item.name as n,item.price as p,cart.quantity as q 
from cart inner join item 
on item.id=cart.itemID
where userID='$userID'";


$selectRes=$connect->query($selectItems);
while($row=$selectRes->fetch_assoc()){
?>

<tr>
  
  <td><?php echo $row["n"]; ?></td>
  <td><?php echo $row["p"]; ?></td>
  <td><?php echo $row["q"]; ?></td>
  <td><?php echo $row["p"] * $row["q"] ?></td>
   <td style="color:red; font-weight: bold;">
   <a href="cart.php?action=delete&itemID=<?php echo $row["i"]; ?>">X</td></a>
</tr>
<?php } ?>
</table>
<div style="margin-top:50px;">  <button class="confirmOrder" type="submit"> <a href="cart.php?action=confirmOrder">Confirm order</a></button></div>
<?php } else if(isset($_COOKIE["cookie"])) { ?>

  <table width="70%" style="margin-top:50px;">
 
<th>Product</th>
<th>Price</th>
<th>Quantity</th>
<th>Tolal</th>

<?php
foreach ($_COOKIE['cookie'] as $name => $value) {
$selectItems="select * from item
where id='$name'";
$selectRes=$connect->query($selectItems);
$row=$selectRes->fetch_assoc();
?>

<tr>
  
  <td><?php echo $row["name"]; ?></td>
  <td><?php echo $row["price"]; ?></td>
  <td><?php echo $value; ?></td>
  <td><?php echo $row["price"] * $value; ?></td>
   <td style="color:red; font-weight: bold;">
   <a href="cart.php?action=delete&itemID=<?php echo $name; ?>">X</td></a>
</tr>
<?php } ?>
</table>
<div style="margin-top:50px;">  <button class="confirmOrder" type="submit"> <a href="sign-in.php">Confirm order</a></button></div>
<?php } ?>
</center>
</body>
</html>