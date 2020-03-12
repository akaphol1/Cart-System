<?php 
$conn = new mysqli("localhost","root","","cart_system");
if($conn->connect_error){
    die("Connect Failed".$conn->connect_error);
}

?>