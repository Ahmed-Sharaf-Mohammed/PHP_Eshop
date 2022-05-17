<?php
require_once "connect.php";
class user{
   private $firstName;
   private $lastName;
   private $userName;
   private $phoneNumber;
   private $address;
   private $password;
   private $confirmPass;

  function setUserData($firstName,$lastName,$userName,$phoneNumber,$address,$password,$confirmPass){
    
    $this->firstName=$firstName;
    $this->lastName=$lastName;
    $this->userName=$userName;
    $this->phoneNumber=$phoneNumber;
    $this->address=$address;
    $this->password=$password;
    $this->confirmPass=$confirmPass;
   }

   function insertNewUser($connect){
    
    if($this->password==$this->confirmPass){
    $selectStmt="select * from user where username='$this->userName' or phone='$this->phoneNumber' ";
    $res=$connect->query($selectStmt);
    if($res->num_rows==0){
    $insertQuery= "insert into user (Fname, Lname, username, password, phone, address) 
    values ('$this->firstName','$this->lastName','$this->userName','$this->password','$this->phoneNumber','$this->address')";
    $insertResult=$connect->query($insertQuery);
    header('location: http://localhost/SW2/sign-in.php');
      }

     }
  
   }

   function updateUserProfile($userID,$connect){

    if($this->password==$this->confirmPass){
        $selectStmt="select * from user where (username='$this->userName' or phone='$this->phoneNumber') and not id ='$userID'";
        $res=$connect->query($selectStmt);
    if($res->num_rows==0){
        $updateStmt="update user set Fname='$this->firstName',Lname='$this->lastName',username='$this->userName',phone='$this->phoneNumber',address='$this->address',password='$this->password' where id='$userID'";
        $updateRes=$connect->query($updateStmt);
        header('location: http://localhost/SW2/home.php');
    }

     }
   }
  }


?>
