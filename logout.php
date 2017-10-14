<?php
session_start();
$_SESSION["user"] = "";
$_SESSION["name"] = "";
header("Location: login.php");
?>