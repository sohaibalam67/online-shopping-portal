<?php
error_reporting(0);
session_start();
if(!isset($_SESSION["user"])){
  header("Location: login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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
			margin-top: 0px;
		}
		.register_container{
			min-width: 100%;
			min-height: 100vh;
			padding-top: 140px;
			background: -moz-linear-gradient(225deg, rgba(208,255,174,1) 0%, rgba(52,235,233,1) 100%); /* ff3.6+ */
			background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(52,235,233,1)), color-stop(100%, rgba(208,255,174,1))); /* safari4+,chrome */
			background: -webkit-linear-gradient(225deg, rgba(208,255,174,1) 0%, rgba(52,235,233,1) 100%); /* safari5.1+,chrome10+ */
			background: -o-linear-gradient(225deg, rgba(208,255,174,1) 0%, rgba(52,235,233,1) 100%); /* opera 11.10+ */
			background: -ms-linear-gradient(225deg, rgba(208,255,174,1) 0%, rgba(52,235,233,1) 100%); /* ie10+ */
			background: linear-gradient(225deg, rgba(208,255,174,1) 0%, rgba(52,235,233,1) 100%); /* w3c */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d0ffae', endColorstr='#34ebe9',GradientType=1 ); /* ie6-9 */
		}

		.register_card{
			min-width: 400px;
			max-width: 400px;
			min-height: 450px;
			
			background-color: white;
			border-radius: 4px;
			box-shadow: 0px 10px 15px 2px rgba(0,0,0,0.2);
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
        <div class="dp_cont_3"><a href="login.php"><button class="btn btn-outline-warning">Login</button></a> <a href="register.php"><button class="btn btn-outline-info">Register</button></a></div>
        </div> &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
       <a href="bag.php"><img src="image/bag.png" height="25px" width="25px"></a>
      </div>
    </nav>


  
    	<div class="register_container">
	    	<center>
	    		<div class="register_card">
	    			<div style="font-size: 20pt; padding-top: 50px; color: rgba(0,0,0,0.6); padding-bottom: 20px"><i class="fa fa-lock" aria-hidden="true"></i> Register</div>

	    			<div style="max-width: 320px">
	    			<form method="post" action="register_script.php">
                        <input type="text" name="name" placeholder="Name" required class="form-control" style="border-bottom-left-radius: 0px; border-bottom-right-radius: 0px; min-height: 50px; border-left-color: #f492ac; border-top-color: #f492ac; border-right-color: #f492ac">
	    				<input type="text" name="username" placeholder="Username" required class="form-control" style="border-radius: 0px ;min-height: 50px; border-left-color: #f492ac; border-right-color: #f492ac">
                        <input type="password" name="password" placeholder="Password" required class="form-control" style="border-radius: 0px ;min-height: 50px; border-left-color: #f492ac; border-right-color: #f492ac">
                        <input type="password" name="conf_password" placeholder="Confirm Password" required class="form-control" style="border-radius: 0px ;min-height: 50px; border-left-color: #f492ac; border-right-color: #f492ac">
	    				<input type="number" name="phone" placeholder="Phone" required class="form-control" style="border-top-left-radius: 0px; border-top-right-radius: 0px; min-height: 50px; border-left-color: #f492ac; border-right-color: #f492ac; border-bottom-color: #f492ac">
	    				<br>
	    				<input type="submit" name="submit" value="REGISTER"  style="min-height: 50px; background-color: #ef5585; color: #fff; border: 0px solid white; min-width: 320px; border-radius: 3px; font-size: 10pt; font-weight: 600">
	    			</form>
	    			<br><div style="font-size: 10pt;">Have an account? <a href="login.php" style="color: #8869a6">Login here</a></div>
	    			</div><br>
			
	    		</div>
	    	</center>
    	</div>
    



</body>
</html>