<?php

if(isset($_POST["username"]) && isset($_POST["password"])){

$username=$_POST["username"];

$conn=mysqli_connect('localhost','root','','shopdb');

 if(!$conn ) {
      die('Could not connect');
   }
   
   $sql = 'SELECT name, username, password FROM users WHERE username="'.$username.'"';


      
   $retval = mysqli_query( $conn, $sql );
   
   if(! $retval) {
      die('Could not enter data');
   }
   
  
 $row = mysqli_fetch_array($retval, MYSQLI_BOTH);

      $name=$row[0];
      $uname=$row[1];
      $pass=$row[2];

   mysqli_close($conn);


if($_POST["username"]==$uname && $_POST["password"]==$pass){

session_start();
$_SESSION["user"] = $uname;
$_SESSION["name"] = $name;
		header("Location: profile.php");
}else{
      header("Location: login.php");
die();
}}
?>