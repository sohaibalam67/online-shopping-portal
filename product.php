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




    <div class="container inner_cont2">
    	<div class="row">
    	<div class="col cont_filter">
    		<div class="feature">BRAND</div><br>
    		<div class="brands choose">
            <input type="checkbox">
            All
    		<br><input type="checkbox">Roadster 
    		<br><input type="checkbox"> Jack & Jones 
    		<br><input type="checkbox"> Tommy Hilfiger 
    		<br><input type="checkbox"> WROGN 
    		<br><input type="checkbox"> Adidas 
    		<br><input type="checkbox"> Duke 
    		<br><input type="checkbox"> John Players 
    		<br><input type="checkbox"> Lee Cooper
    		</div>

    		<br><hr><br>
    		<div class="feature">PRICE</div><br>
    		<div class="price choose">
    		<input type="radio" name="sel_price"> Below Rs. 300  
    		<br><input type="radio" name="sel_price"> Below Rs. 500  
    		<br><input type="radio" name="sel_price"> Below Rs. 700 
    		<br><input type="radio" name="sel_price"> Below Rs. 1000  
    		<br><input type="radio" name="sel_price"> Below Rs. 1500 
    		<br><input type="radio" name="sel_price"> Below Rs. 2000
            <br><input type="radio" name="sel_price"> Rs. 2000+  
    		</div>
    	</div>
 		<div class="col cont_list">
 			<div class="head_bar"><div class="prod_head" style="float: left;">Men Tshirt</div> 
 			<div style="float: right">
 			<select class="custom-select">
  			<option selected disabled>Sort By:</option>
			<option value="1">Price: Low to High</option>
			<option value="2">Price: High to Low</option>
			</select></div>
			</div><br><br><hr>
			<br>

					<div class="product">
					<div class="card" style="width: 180px">
		  			<img class="card-img-top" src="prod/11497260027908-Roadster-Men-Maroon-Printed-Round-Neck-T-shirt-9931497260027848-1.jpg" alt="Card image cap">
		  			<div class="card-body">
		    		<div class="card_brand">Roadster</div><div class="card_price">Rs. 400</div><div class="add_cart">ADD TO BAG</div>
		  			</div>
					</div>
					</div>

					<div class="product">
					<div class="card" style="width: 180px">
		  			<img class="card-img-top" src="prod/11497528268811-Roadster-Men-Navy-Blue-Printed-Round-Neck-T-shirt-3131497528268552-1.jpg" alt="Card image cap">
		  			<div class="card-body">
		    		<div class="card_brand">Roadster</div><div class="card_price">Rs. 400</div><div class="add_cart">ADD TO BAG</div>
		  			</div>
					</div>
					</div>

					<div class="product">
					<div class="card" style="width: 180px">
		  			<img class="card-img-top" src="prod/11500448711136-Roadster-Men-Tshirts-1701500448710920-1.jpg" alt="Card image cap">
		  			<div class="card-body">
		    		<div class="card_brand">Roadster</div><div class="card_price">Rs. 400</div><div class="add_cart">ADD TO BAG</div>
		  			</div>
					</div>
					</div>

					<div class="product">
					<div class="card" style="width: 180px">
		  			<img class="card-img-top" src="prod/11500457838239-Roadster-Men-Olive-Green-Printed-Round-Neck-T-shirt-9901500457838027-1.jpg" alt="Card image cap">
		  			<div class="card-body">
		    		<div class="card_brand">Roadster</div><div class="card_price">Rs. 400</div><div class="add_cart">ADD TO BAG</div>
		  			</div>
					</div>
					</div>

					<div class="product">
					<div class="card" style="width: 180px">
		  			<img class="card-img-top" src="prod/11500457846905-Roadster-Men-Teal-Printed-Round-Neck-T-shirt-8001500457846743-1.jpg" alt="Card image cap">
		  			<div class="card-body">
		    		<div class="card_brand">Roadster</div><div class="card_price">Rs. 400</div><div class="add_cart">ADD TO BAG</div>
		  			</div>
					</div>
					</div>

					<div class="product">
					<div class="card" style="width: 180px">
		  			<img class="card-img-top" src="prod/11500887815070-Roadster-Men-Tshirts-8321500887814835-1.jpg" alt="Card image cap">
		  			<div class="card-body">
		    		<div class="card_brand">Roadster</div><div class="card_price">Rs. 400</div><div class="add_cart">ADD TO BAG</div>
		  			</div>
					</div>
					</div>

					<div class="product">
					<div class="card" style="width: 180px">
		  			<img class="card-img-top" src="prod/11501761621353-Roadster-Men-Blue-Printed-Round-Neck-T-shirt-5331501761621129-1.jpg" alt="Card image cap">
		  			<div class="card-body">
		    		<div class="card_brand">Roadster</div><div class="card_price">Rs. 400</div><div class="add_cart">ADD TO BAG</div>
		  			</div>
					</div>
					</div>


					
			
			
 		</div>
		</div>

        <hr>
        <div class="title">POPULAR SEARCHES</div>
    <div class="sr_tg" style="font-family: 'Noto Sans', sans-serif; font-size: 10pt; color: rgba(0,0,0,0.6); text-align: justify; padding-right: 100px;">Make up | Dresses For Girls | T-Shirts | Sandals | Headphones | Baby Dolls | Blazers For Men | Handbags | Ladies Watches | One Piece Dress | Bags | Sport Shoes | Reebok Shoes | Puma Shoes | Boxers | Wallets | Tops | Ear Rings | Fastrack Watches | Kurtis | Nike | Smart Watches | Titan Watches | Designer Blouse | Gowns | Rings | Shoes For Men | Forever 21 | Arrow | Mango | Punjabi Suits | Saree | Watches | Dresses | Lehengas | Nike Shoes Goggles | Suits | Chinos | Shoes | Adidas Shoes | Woodland Shoes | Jewellery</div>
    </div>
    <br><br>


      <div class="webb">ECHO.</div>
   
    <div class="wrapper">
        <div class="footer"></div> 
    </div>

</body>
</html>