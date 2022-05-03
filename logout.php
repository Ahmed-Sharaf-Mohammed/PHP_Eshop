<?php 

session_start();

require_once 'connect.php';

session_unset(); 

session_destroy(); 

header('location: http://localhost/task-8/sign-in.php');

?>