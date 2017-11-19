<?php
error_reporting(0);
session_start();

if($_SESSION["admin"]!=$_SESSION["user"]){
  header("Location:profile.php");
}

$curr_user = $_SESSION["user"];
$total=0;

$conn=mysqli_connect('localhost','root','','shopdb');

 if(!$conn ) {
      die('Could not connect');
   }
   
   $sql = "SELECT order_id, username, prod_id, size, qty, status, title, image FROM orders,products WHERE orders.prod_id=products.id";


      
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
	<title>Order Status</title>
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
      margin-top: 130px;
     }

    .contents{
      min-height: 450px;
      min-width: 100%;
      border: 1px solid rgba(0,0,0,0.2);
      border-radius: 3px;
      padding:40px 40px 40px 40px;
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
            <a class="nav-link" href="#">MEN </span></a>
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


    <div class="inner_cont4">
      <center>
      <div class="container">
        <div class="row">
  


          <div class="col-sm-12">
            <div class="contents">
              <div style="font-size: 20pt; color: rgba(0,0,0,0.5); font-weight: lighter;">Orders</div><br>
              <hr>
              <br>


              <table style="width: 100%" class="table table-striped">
                <tr style="font-weight: 700">
                  <td>ID</td>
                  <td>Photo</td>
                  <td>Name</td>
                  <td>username</td>
                  <td>product_id</td>
                  <td>size</td>
                  <td>qty</td>
                  <td>status</td>
                  <td>Action</td>
                </tr>


                <?php
                  foreach ($arr as $prodd) {
                    
                    echo '<tr style="font-size:10pt">
                  <td>'.$prodd["order_id"].'</td>
                  <td><img src="prod/'.$prodd["image"].'" height="133px" width="100px"></td>
                  <td>'.$prodd["title"].'</td>
                  <td>'.$prodd["username"].'</td>
                  <td>'.$prodd["prod_id"].'</td>
                  <td>'.$prodd["size"].'</td>
                  <td>'.$prodd["qty"].'</td>
                  <td>';

                  switch ($prodd["status"]) {
                    case 0:
                       echo 'Processing';
                      break;
                    case 1:
                       echo 'Shipped';
                      break;
                    case 2:
                       echo 'Delivered';
                      break;
                    
                    default:
                      echo "status unavailable";
                      break;
                  }

                  echo '</td>
                  <td><a href="_update_order.php?od='.$prodd["order_id"].'&pi='.$prodd["prod_id"].'&act=0">Processing</a><br><a href="_update_order.php?od='.$prodd["order_id"].'&pi='.$prodd["prod_id"].'&act=1">Shipped</a><br><a href="_update_order.php?od='.$prodd["order_id"].'&pi='.$prodd["prod_id"].'&act=2">Delivered</a></td>
                </tr>';

                  }

                ?>

                


              </table>




              
            </div>
              <br>
              <br>
          </div>
        </div>
      </div>
      </center>
    </div>

    



</body>
</html>