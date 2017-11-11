<?php
error_reporting(0);
session_start();
if($_SESSION["user"] == ""){
  header("Location: login.php");
}

$curr_user = $_SESSION["user"];
$total=0;

$conn=mysqli_connect('localhost','root','','shopdb');

 if(!$conn ) {
      die('Could not connect');
   }
   
   $sql = "SELECT prod_id, size, qty, title, price, image FROM bag,products WHERE username='$curr_user' AND bag.prod_id=products.id";


      
   $retval = mysqli_query( $conn, $sql );
   
   if(! $retval) {
      die('Could not enter data');
   }
   
  $i=0;
   while($row = mysqli_fetch_assoc($retval)){

    $arr[$i]=$row;
    $i++;
}


   mysqli_close($conn);




?>

<!DOCTYPE html>
<html>
<head>
	<title>Bag</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<link rel="icon" href="image/fevicon.png">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans|Roboto:400,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<style type="text/css">
		body{
			margin-top: 100px;
		}
		

    .prod_box{
      min-height: 170px;
      max-height: 170px;
      min-width: 650px;
      max-width: 650px;
      border: 1px solid rgba(0,0,0,0.1);
    }

    .price_box{
      min-width: 300px;
      max-width: 300px;
      min-height: 320px;
      border: 1px solid rgba(0,0,0,0.1);
    }
	</style>
</head>
<body>

	<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
      <a class="navbar-brand" href="index.php"><img src="image/logo1.png"  height="35px" width="138px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dp1">
            <a class="nav-link" href="#">MEN</span></a>
            <div class="dp_cont">
            	
            	<div class="container">
            		<div class="row">
   					<div class="col-sm-6">
     				<div class="nav_title">TopWear</div>
     				<div class="nav_cont"><a href="product.php?item=tshirt&gender=men">Tshirt</a> <br> <a href="product.php?item=casual_shirt&gender=men">Casual Shirt</a><br> <a href="product.php?item=formal_shirt&gender=men">Formal Shirt</a> <br> <a href="product.php?item=jacket&gender=men">Jacket</a> <br> <a href="product.php?item=blazer&gender=men">Blazer</a> <br> <a href="product.php?item=suit&gender=men">Suit</a></div>
     				<div class="nav_title">BottomWear</div>
     				<div class="nav_cont"><a href="product.php?item=jeans&gender=men">Jeans</a> <br> <a href="product.php?item=casual_trouser&gender=men">Casual Trouser</a> <br> <a href="product.php?item=formal_trouser&gender=men">Formal Trouser</a> <br> <a href="product.php?item=shorts&gender=men">Shorts</a> <br> <a href="product.php?item=track_pant&gender=men">Track Pants</a></div>
    				</div>
   					<div class="col-sm-6">
      				<div class="nav_title">Sports & ActiveWear</div>
     				<div class="nav_cont"><a href="product.php?item=active_tshirt&gender=men">Active Tshirt</a> <br> <a href="product.php?item=track_pant&gender=men">Track Pant</a> <br> <a href="product.php?item=shorts&gender=men">Shorts</a></div>
     				<div class="nav_title">Indian and Festive Wear</div>
     				<div class="nav_cont"><a href="product.php?item=kurta&gender=men">Kurta </a><br> <a href="product.php?item=shervani&gender=men">Shervani</a> <br> <a href="product.php?item=nehru_jacket&gender=men">Nehru Jacket</a></div>
    				</div>
 		 			</div>
            	</div>


            </div>
          </li>
          <li class="nav-item dp2">
            <a class="nav-link" href="#">WOMEN</a>

             <div class="dp_cont_2">
            	
            	<div class="container">
            		<div class="row">
   					<div class="col-sm-6">
     				<div class="nav_title">Western Wear</div>
     				<div class="nav_cont"><a href="product.php?item=tops&gender=women">Tops</a> <br> <a href="product.php?item=casual_shirt&gender=women">Casual Shirt </a><br> <a href="product.php?item=tshirt&gender=women">Tshirt</a> <br> <a href="product.php?item=jacket&gender=women">Jacket</a> <br> <a href="product.php?item=blazer&gender=women">Blazer</a> <br> <a href="product.php?item=dress&gender=women">Dresses</a></div>
     				<div class="nav_title">BottomWear</div>
     				<div class="nav_cont"><a href="product.php?item=jeans&gender=women">Jeans </a><br><a href="product.php?item=trouser&gender=women">Trouser </a><br> <a href="product.php?item=skirt&gender=women">Skirts</a><br> <a href="product.php?item=shorts&gender=women">Shorts</a></div>
    				</div>
   					<div class="col-sm-6">
      				<div class="nav_title">Sports & ActiveWear</div>
     				<div class="nav_cont"><a href="product.php?item=active_tshirt&gender=women">Active Tshirt</a> <br> <a href="product.php?item=track_pant&gender=women">Track Pant</a> <br> <a href="product.php?item=shorts&gender=women">Shorts</a></div>
     				<div class="nav_title">Indian and Festive Wear</div>
     				<div class="nav_cont"><a href="product.php?item=kurti&gender=women">Kurti </a><br><a href="product.php?item=suit&gender=women"> Suit </a><br></div>
    				</div>
 		 			</div>
            	</div>


            </div>
          </li>
          
        </ul>
        <form class="form-inline mt-2 mt-md-0"  style="margin-right: 10%">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" style="width: 400px">
        </form>
        <div class="dp3"><img src="image/account.png" height="25px" width="25px">
        <div class="dp_cont_3">
          
          <?php 
          if(!isset($_SESSION["user"]) || $_SESSION["user"] == ""){
            echo '<a href="login.php"><button class="btn btn-outline-warning">Login</button></a> <a href="register.php"><button class="btn btn-outline-info">Register</button></a>';
          }else{
            echo '<img src="image/face.png" height="20px" width="20px"> Hi! <i>'.$_SESSION["name"].'</i><br><br><a href="profile.php"><button class="btn btn-outline-info">Profile</button></a> <a href="logout.php"><button class="btn btn-outline-warning">Logout</button></a>';
          }
        ?>

        </div>
        </div> &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
        <a href="bag.php"><img src="image/bag.png" height="25px" width="25px"></a>
      </div>
    </nav>

    <div class="inner_cont2">
    <div class="container">
      <div style="font-family: 'Roboto', sans-serif; color: rgba(0,0,0,0.7); font-weight: 700; font-size: 15pt">My Shopping Bag</div><br><br>
      <div class="row">
        <div class="col-8">

          <?php


          foreach ($arr as $prodd) {
            $total = $total+$prodd["price"];
            echo '<div class="prod_box">
            <div style="min-width: 120px; max-width: 120px; min-height: 170px; max-height: 170px; background: url(prod/'.$prodd["image"].'); background-size: cover; background-position: center; display: inline-block; float: left; margin-right: 20px;"></div>

            <div style="font-weight: 700; color: rgba(0,0,0,0.7); padding-bottom: 10px; font-size: 10pt; padding-top: 10px">'.$prodd["title"].'</div>
            <div style="font-weight: 700; color: rgba(0,0,0,0.7); padding-bottom: 15px; font-size: 10pt">Rs. '.$prodd["price"].'</div>
            <div style="font-size: 10pt; padding-bottom: 10px">Size: '.$prodd["size"].' &nbsp &nbsp Quantity: '.$prodd["qty"].'</div><hr>
            <div style="font-size: 10pt; font-weight: 700"><a href="remove_item_bag.php?user='.$curr_user.'&item='.$prodd["prod_id"].'">REMOVE</a></div>
          </div><br>';
          }
          $tax =round((0.06*$total));
          $_SESSION["total_cost"]=$total+$tax;

          if($_SESSION["total_cost"]==0){
            echo "The bag is currently empty.";
          }

          ?>
            

          

          




        </div>


        <div class="col-4">
          
          <div class="price_box" style="padding: 10px; padding-top: 20px;">
            
            <div style="font-family: 'Roboto', sans-serif; color: rgba(0,0,0,0.5); font-weight: 700; font-size: 10pt">PRICE DETAILS</div>
            <br>
            <table cellpadding="0" cellspacing="0" width="95%" align="center" style="font-family: 'Roboto', sans-serif; color: rgba(0,0,0,0.5); font-weight: 400; font-size: 10pt; min-height: 130px"> 
              <tr>
                <td>Bag Total</td><td align="right">Rs. <?php echo $total;?></td>
              </tr>
              <tr>
                <td>Estimated tax</td><td align="right">Rs. <?php

                
                echo $tax;
                ?></td>
              </tr>
              <tr>
                <td>Delivery <br><br></td><td align="right" style="color: green">FREE<br><br></td>
              </tr>
              <tr style="border-top: 1px solid rgba(0,0,0,0.1); font-weight: 700;">
                <td>Order Total</td><td align="right">Rs. <?php
                 echo $total+$tax; 
                   
                ?></td>
              </tr>
            </table>
            <br><br>
            <?php 
              if($_SESSION["total_cost"]!=0){
                echo '<a href="delivery.php" style="text-decoration: none;"><div class="order_button" style="background: #2cd2b1; color: #fff; text-align: center; padding-top: 10px; padding-bottom: 10px; border-radius: 5px; box-shadow: 0px 10px 25px 1px rgba(0,0,0,0.1)">PLACE ORDER</div></a>';
              }
            ?>
            </div>

        </div>
      </div>

    </div>
    </div>


    <br><br><br>

     <div class="webb">ECHO.</div>
   
    <div class="wrapper">
      <div class="footer"></div> 
    </div>
</body>
</html>