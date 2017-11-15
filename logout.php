<?php
session_start();
$_SESSION["user"] = "";
$_SESSION["name"] = "";
$_SESSION["total_cost"]="";
session_destroy();
header("Location: login.php");
?>