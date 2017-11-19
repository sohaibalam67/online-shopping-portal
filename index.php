<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Echo: Online Shopping</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<link rel="icon" href="image/fevicon.png">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans|Roboto:400,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
 			$(".owl-carousel").owlCarousel();

		});


	</script>
	<style type="text/css">
		.cat_list{
			font-family: 'Roboto', sans-serif;
			color: rgba(0,0,0,0.7);
			padding-top: 15px;
			padding-bottom: 15px;
			font-weight: 600;
			font-size: 11pt;
			border-bottom: 1px solid rgba(0,0,0,0.1);
		}

		.crd{
			min-width: 100%; 
			min-height: 400px; 
			box-shadow: 1px 1px 10px 3px rgba(0,0,0,0.1);
		}

		@keyframes groww {
	    	from {transform: scale(1);}
	    	to {transform: scale(1.04);}
	    }

		.crd:hover{
			animation-name: groww;
			animation-duration: 0.2s;
			animation-fill-mode: forwards;
			box-shadow: 4px 4px 20px 3px rgba(0,0,0,0.1);
		}
		.small_title{
		font-family: 'Roboto', sans-serif;
		font-size: 10pt;
		font-weight: 600;
		color: rgba(0,0,0,0.7);
		}

		.small_cont{
			font-family: 'Noto Sans', sans-serif;
			font-size: 10pt;
			color: rgba(0,0,0,0.4);
			font-weight: bold;

		}
	

</style>
<link rel="stylesheet" type="text/css" href="css/style.css">
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





<div class="inner_cont">
		<div class="container">
		<div class="row">
   			<div class="col-sm-3">
     			<img src="image/s1.jpg"><br>
    		</div>
   			<div class="col-sm-3">
      			<img src="image/s2.jpg"><br>
    		</div>
    		<div class="col-sm-3">
     			 <img src="image/s3.jpg"><br>
    		</div>
    		<div class="col-sm-3">
     			 <img src="image/s4.jpg"><br>
    		</div>
 		 </div>
 		 <br>
	</div>







    <div class="owl-carousel">
    	<div><img src="image/2.jpg"></div>
		<div> <img src="image/1.jpg"> </div>
		<div><img src="image/3.jpg"></div>
		<div> <img src="image/4.jpg"> </div>
		<div> <img src="image/5.jpg"> </div>
	</div>

	<hr>
	<img src="image/strip.jpg" style="width: 100%; height: auto">
	
	<br>

	<div class="title">BRANDS YOU LOVE</div>
	<br>

	<div class="container">
		<div class="row">
   			<div class="col-sm-4">
     			<img src="image/l1.jpg" style="width: 100%; height: auto"><br>
    		</div>
   			<div class="col-sm-4">
      			<img src="image/l2.jpg" style="width: 100%; height: auto"><br>
    		</div>
    		<div class="col-sm-4">
     			 <img src="image/l3.jpg" style="width: 100%; height: auto"><br>
    		</div>
 		 </div>
 		 <br><br>
 		 <div class="row">
   			<div class="col-sm-4">
     			<img src="image/l4.jpg" style="width: 100%; height: auto"><br>
    		</div>
   			<div class="col-sm-4">
      			<img src="image/l5.jpg" style="width: 100%; height: auto"><br>
    		</div>
    		<div class="col-sm-4">
     			 <img src="image/l6.jpg" style="width: 100%; height: auto"><br>
    		</div>
 		 </div>
	</div>
	<br><br><br>
	<img src="image/strip2.jpg" style="width: 100%; height: auto">

	<br>
</div>




<div class="cat_cont">
	<div class="inner_cat_cont">
		<div class="title">ONLY THE BEST</div>
		<div style="font-family: 'Noto Sans', sans-serif; font-size: 10pt; color: #5b5b5b">Popular categories that people are shopping for right now</div><br><br><br>
		<div class="container">
			<div class="row">
  				<div class="col-sm-6"><div class="crd"><div style="max-width: 50%; min-width: 50%; display: block; min-height: 400px; background:url(image/men.jpg) 50% 50%; background-size: cover; float: left;"></div><div style="max-width: 50%; min-width: 50%;display: block; background-color: #fff; min-height: 400px; float: right; padding-left: 20px; padding-top: 20px"><div style="font-family: 'Roboto', sans-serif; font-size: 12pt; font-weight: 900; color: rgba(0,0,0,0.8);">Men's Popular</div>
  				<br>
  				<div class="cat_list"><a href="product.php?item=tshirt&gender=men">T Shirt</a></div>
  				<div class="cat_list"><a href="product.php?item=casual_shirt&gender=men">Shirt</a></div>
  				<div class="cat_list"><a href="product.php?item=jeans&gender=men">Jeans</a></div>

  				</div></div></div>
  				<div class="col-sm-6"><div class="crd"><div style="max-width: 50%; min-width: 50%; display: block; min-height: 400px; background: url(image/women.jpg) 50% 50%; background-size: cover; float: left;"></div><div style="max-width: 50%; min-width: 50%;display: block; background-color: #fff; float: right; min-height: 400px; padding-left: 20px; padding-top: 20px"><div style="font-family: 'Roboto', sans-serif; font-size: 12pt; font-weight: 900; color: rgba(0,0,0,0.8);">Women's Popular</div>
  				<br>
  				<div class="cat_list"><a href="product.php?item=tshirt&gender=women">T Shirt</a></div>
  				<div class="cat_list"><a href="product.php?item=casual_shirt&gender=women">Shirt</a></div>
  				<div class="cat_list"><a href="product.php?item=jeans&gender=women">Jeans</a></div>

  				</div></div></div>
			</div>
		</div>
		<br><br>
	</div>
</div>



<div class="inner_cont">
	<div class="title">POPULAR SEARCHES</div>
	<div class="sr_tg" style="font-family: 'Noto Sans', sans-serif; font-size: 10pt; color: rgba(0,0,0,0.6); text-align: justify;">Make up | Dresses For Girls | T-Shirts | Sandals | Headphones | Baby Dolls | Blazers For Men | Handbags | Ladies Watches | One Piece Dress | Bags | Sport Shoes | Reebok Shoes | Puma Shoes | Boxers | Wallets | Tops | Ear Rings | Fastrack Watches | Kurtis | Nike | Smart Watches | Titan Watches | Designer Blouse | Gowns | Rings | Shoes For Men | Forever 21 | Arrow | Mango | Punjabi Suits | Saree | Watches | Dresses | Lehengas | Nike Shoes Goggles | Suits | Chinos | Shoes | Adidas Shoes | Woodland Shoes | Jewellery</div>

	<br>
	<hr>
	<br>
	<div class="small_title">Online Shopping: Convenient shopping experience at an affordable price!</div>
	<div class="small_cont">Fashion has taken today’s youth by surprise, and the availability of numerous options just leaves them spoilt of choice. Online stores fuel fashion by making the latest trending dresses, accessories, and apparels available to you within a few clicks. Shopping is no longer a day long affair with online shopping sites offering convenience of easy shopping facility from your home, anywhere and anytime you wish. Online shopping presents a large variety of quality products to choose from. With our fast changing lifestyle, online shopping offers fast, easy & a money saving solution giving you a very interesting shopping experience. Moreover, at your service round the clock, online shopping sites offers you feasibility to order any products anytime.</div>
	<br>

	<div class="small_title">Echo: The trailblazer of online fashion destination!</div>
	<div class="small_cont">The leader in fashion online shopping has stamped its mark throughout India. With an aim to redefine the fashion arena in India, Echo has everything to offer, ranging from all kinds of men’s and women’s apparels to accessories. Featuring some of the best deals in the realm of fashion accessories and trending gears, you may attractive discounts and shop till you drop at end of the season sales. To make shopping convenient, Echo provides easy payment facility through Cash on Delivery, Card on Delivery, and similar payment options. And to get your purchased apparel on time, it boasts an efficient network of delivery. You can also easily make a wishlist and shortlist items for future puchases. Whether it is clothing, footwear, jewelry, accessories and cosmetics, we showcase the most elite brands in the world. Now, if you did not like the purchased product, then shop something else through our easy return or exchange policy. Explore the latest collections of top brands like United Colors of Benetton, Arrow, Esprit, French Connection, Adidas, Reebok, Nike, Clarks, Burberry, Calvin Klein and many others.</div>
	<br>

	<div class="small_title">Avail added online shopping benefits</div>
	<div class="small_cont">With a variety of products and their information available in the most user-friendly way on Echo, you get a chance to analyze the product you want to buy according to your terms. You can shop in complete privacy and get easy replacement and returns as well. You can choose your desired product and order it on Echo. Our team will leave no stone unturned to deliver it right at your doorstep anywhere in India at the promised time. You just need to pay for the product, while we ensure free shipping on almost everything. To offer you a safe and risk-free online shopping experience, we have COD facility as well. Now, you can buy gifts for your loved ones and avail our special gift-wrap facility at a nominal cost on Echo.</div>

	<br>

	<div class="small_title">Echo.com: the 24 x7 one stop Fashion & Lifestyle store for everyone</div>
	<div class="small_cont">We, at Echo, have all that you need to spruce up your fashion quotient. From an extensive range of men’s shirts, western dresses for women, funky clothes for kids and matching footwear, sports shoes and accessories for everyone, we cater to a diversity of choices of online shoppers in India under one umbrella. So, don’t lose out on your chance to buy your desired piece of apparel and avail our attractive discounts!</div>
	
</div>

	<br><br>





	<script type="text/javascript">
		var owl = $('.owl-carousel');
		owl.owlCarousel({
    		items:1,
    		margin:0,
    		loop:true,
    		autoplay:true,
    		autoplayTimeout:2000,
    		autoplayHoverPause:false
		});
    	owl.trigger('play.owl.autoplay',[2000])

	</script>

</body>
</html>