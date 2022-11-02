<?php


$name=$_REQUEST['name'];
$password=$_REQUEST['password'];

$nam2 ="saim";
$pass2 ="009";

if($name == $nam2 && $password == $pass2){
header("location:P2.php");
}
 else{
   header("location:check.php");

   
 }
?>