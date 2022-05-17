<?php
require_once "connect.php";
class Order{
    public function confirmOrder($userID,$connect){
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
      
        header('location: http://localhost/SW2/checkOut.php');
      }

}

?>