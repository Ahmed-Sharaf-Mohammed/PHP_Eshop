
<?php 
require_once "header.php"; 
require_once "connect.php"; 
if(isset($_SESSION["userID"])){
  $userID=$_SESSION["userID"];
  }
  
if(isset($_GET['action'])){

if($_GET['action']=="delete"){
  if ( !isset($_COOKIE['cookie'])){
$itemID=$_GET['itemID'];

$deleteStmt="delete from cart where itemID='$itemID' and userID='$userID'";
$deleteRes=$connect->query($deleteStmt);
  }
  else{
    $itemID=$_GET['itemID'];
    setcookie("cookie[$itemID]", null);
    header('location: http://localhost/ecommerce-project/cart.php');
  }

}
else if($_GET['action']=="confirmOrder"){

  $insertInvoice="insert into invoice (userID) values ('$userID')";
  if($connect->query($insertInvoice)){
    $invoiceID=$connect->insert_id;
  }
  $selectStmt="select cart.itemID as i,cart.quantity as q,item.price as p from cart inner join item on 
  item.id=cart.itemID
  where userID='$userID'";
  $cartRes=$connect->query($selectStmt);
  while($row=$cartRes->fetch_assoc()){
    $item=$row["i"];
    $price=$row["p"];
    $quantity=$row["q"];

    $insertQuery="insert into orders(itemID,price,quantity,invoiceID)
    values('$item','$price',' $quantity','$invoiceID')";

    $insertRes=$connect->query($insertQuery);
   
  }

  $deleteCart="delete from cart where userID='$userID'";

  $deleteRes=$connect->query($deleteCart);

  header('location: http://localhost/ecommerce-project/home.php');
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
<div style="margin-top:50px;">  <button class="confirmOrder" type="submit"> <a href="checkOut.php?action=confirmOrder">Confirm order</a></button></div>
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