<?php
session_start();
$_SESSION["user"] = "";
$_SESSION["name"] = "";
$_SESSION["total_cost"]="";
header("Location: login.php");
?>