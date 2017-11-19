<?php
error_reporting(0);
session_start();
$_SESSION["user"] = "";
$_SESSION["name"] = "";
$_SESSION["total_cost"]="";

if(isset($_SESSION["admin"])){
	$_SESSION["admin"]="";
}

session_destroy();
header("Location: login.php");
?>