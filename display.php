<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
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
			margin-top: 140px;
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
            <a class="nav-link" href="#">MEN <span class="sr-only">(current)</span></a>
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
          if($_SESSION["user"] == ""){
            echo '<a href="login.php"><button class="btn btn-outline-warning">Login</button></a> <a href="register.php"><button class="btn btn-outline-info">Register</button></a>';
          }else{
            echo '<img src="image/face.png" height="20px" width="20px"> Hi! <i>'.$_SESSION["name"].'</i><br><br><a href="profile.php"><button class="btn btn-outline-info">Profile</button></a> <a href="logout.php"><button class="btn btn-outline-warning">Logout</button></a>';
          }
        ?>
        </div>
        </div> &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
        <img src="image/bag.png" height="25px" width="25px">
      </div>
    </nav>




    <div class="container inner_cont2">
    	<div class="tree">Home / Clothing / Men Clothing / Tshirts / Roadster</div><br>
    	<br>
    	<div class="row">
    		<div class=".col-6"><img src="prod/11497528268811-Roadster-Men-Navy-Blue-Printed-Round-Neck-T-shirt-3131497528268552-1.jpg" class="prod_img"><br><div style="font-size: 10pt">Product code: 1751654</div></div>
    		<div class=".col-6 prd_dsc">
    			<div class="prod_title">Roadster Men Navy Blue Printed Round Neck T-shirt</div>
    			<div class="prod_price">Rs. 400</div><br><hr>
    			<div class="prod_size">SELECT SIZE</div>
    			<div class="select_size">
		    			<label class="custom-control custom-radio">
						<input id="radio1" name="size" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">S</span>
						</label> &nbsp &nbsp

    					<label class="custom-control custom-radio">
						<input id="radio1" name="size" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">M</span>
						</label> &nbsp &nbsp

    					<label class="custom-control custom-radio">
						<input id="radio1" name="size" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">L</span>
						</label> &nbsp &nbsp&nbsp &nbsp

    					<label class="custom-control custom-radio">
						<input id="radio1" name="size" type="radio" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">XL</span>
						</label> &nbsp &nbsp&nbsp &nbsp
    			</div><br><br>
    			<div class="add_bag"><button type="button" class="btn btn-info"><span class="add_bag_inner">ADD TO BAG</span></button></div><br>
    			<hr>
    			<div class="prod_detail_head">PRODUCT DETAILS</div>
    			<div class="prod_detail">Navy blue printed T-shirt, has a round neck, short sleeves</div>
    			<br><br><hr><br>
    			<div class="extra_info">
    				Tax: Applicable tax on the basis of exact location & discount will be charged at the time of checkout <br>
					100% Original Products <br>
					Free Delivery on order above Rs. 1199 <br>
					Cash on delivery might be available <br>
					Easy 30 days returns & exchange <br>
					Try & Buy might be available <br>
    			</div>
    		</div>
    	</div>

    	<br><br><hr><br><br>
    </div>

    <div class="webb">ECHO.</div>
   
    <div class="wrapper">
    	<div class="footer"></div> 
    </div>

    



</body>
</html>