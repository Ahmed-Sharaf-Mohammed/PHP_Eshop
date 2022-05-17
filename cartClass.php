<?php
require_once "OrderClass.php"; 

require_once "connect.php";
class cart{

   public function addToCart($itemID, $userID,$connect){
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

public function deleteFromCart($itemID,$userID,$connect){
  $deleteStmt="delete from cart where itemID='$itemID' and userID='$userID'";
  $deleteRes=$connect->query($deleteStmt);
}




/*public function confirmOrder($userID,$connect){
  $insertInvoice="insert into invoice (userID) values ('$userID')";
  if($connect->query($insertInvoice)){
    $invoiceID=$connect->insert_id;
  }
  $selectStmt="select cart.itemID as itemID,cart.quantity as quantity,item.price as price from cart inner join item on 
  item.id=cart.itemID
  where userID='$userID'";
  $cartRes=$connect->query($selectStmt);
  while($row=$cartRes->fetch_assoc()){
    $item=$row["itemID"];
    $price=$row["price"];
    $quantity=$row["quantity"];

    $insertQuery="insert into orders(itemID,price,quantity,invoiceID)
    values('$item','$price',' $quantity','$invoiceID')";

    $insertRes=$connect->query($insertQuery);
   
  }

  $deleteCart="delete from cart where userID='$userID'";

  $deleteRes=$connect->query($deleteCart);

  header('location: http://localhost/task-8/checkOut.php');
}*/

}


?>