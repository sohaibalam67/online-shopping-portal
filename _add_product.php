<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
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

  <script type="text/javascript">
    $(document).ready(function(){

      $(".gen").change(function(){
        if($(this).val()=="men"){
          $(".cat").html("<select name='catg'><option value='tshirt'>tshirt</option><option value='casual_shirt'>casual shirt</option><option value='formal_shirt'>Formal Shirt</option><option value='jacket'>Jacket</option><option value='blazer'>Blazer</option><option value='suit'>Suit</option><option value='jeans'>Jeans</option><option value='casual_trouser'>Casual Trouser</option><option value='formal_trouser'>Formal Trouser</option><option value='shorts'>Shorts</option><option value='track_pant'>Track Pant</option><option value='kurta'>Kurta</option><option value='shervani'>Sherwani</option><option value='nehru_jacket'>Nehru Jacket</option><option value='active_tshirt'>Active Tshirt</option></select>");
        }else{
          $(".cat").html("<select name='catg'><option value='tops'>Tops</option><option value='casual_shirt'>casual shirt</option><option value='tshirt'>TShirt</option><option value='jacket'>Jacket</option><option value='blazer'>Blazer</option><option value='dress'>Dresses</option><option value='jeans'>Jeans</option><option value='trouser'>Trouser</option><option value='formal_trouser'>Formal Trouser</option><option value='shorts'>Shorts</option><option value='skirt'>Skirt</option><option value='kurti'>Kurti</option><option value='suit'>Suit</option><option value='active_tshirt'>Active Tshirt</option></select>");
        }
      });

    });
  </script>
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
              <div style="font-size: 20pt; color: rgba(0,0,0,0.5); font-weight: lighter;">Add Product</div><br>
              <hr>

              <br>
              <form enctype="multipart/form-data" method="post" action="_ap_script.php">
              <table cellpadding="0" cellspacing="0" width="500px" style="min-height: 600px">
                <tr>
                  <td>Product id</td>
                  <td><input type="text" name="id" style="width: 100%"></td>
                </tr>
                <tr>
                  <td>Product title</td>
                  <td><input type="text" name="title" style="width: 100%"></td>
                </tr>
                <tr>
                  <td>Product brand</td>
                  <td><input type="text" name="brand" style="width: 100%"></td>
                </tr>
                <tr>
                  <td>Product image</td>
                  <td><input type="file" name="file" style="width: 100%"></td>
                </tr>
                <tr>
                  <td>Product detail</td>
                  <td><input type="text" name="detail" style="width: 100%"></td>
                </tr>
                <tr>
                  <td>Gender</td>
                  <td><input type="radio" name="gen" value="men" class="gen">Male &nbsp <input type="radio" name="gen" class="gen" value="women">Female</td>
                </tr>
                <tr>
                  <td>category</td>
                  <td class="cat">
                </td>
                </tr>
                <tr>
                  <td>Color</td>
                  <td><select name="color">
                    <option value="1">White</option>
                    <option value="2">Black</option>
                    <option value="3">Blue</option>
                    <option value="4">Green</option>
                    <option value="5">Red</option>
                    <option value="6">Yellow</option>
                    <option value="7">Brown</option>
                    <option value="8">Orange</option>
                    <option value="9">Mixed</option>
                  </select></td>
                </tr>
                <tr>
                  <td>Size Type</td>
                  <td><select name="sizetyp"><option value="1">S,M,L,XL</option><option value="2">30,31,32</option></select></td>
                </tr>
                <tr>
                  <td>Price</td>
                  <td><input type="text" name="price" style="width: 100%" placeholder="In Rupees"></td>
                </tr>
                <tr>
                  <td colspan="2" align="right"><input type="submit" name="" value="Add" class="btn btn-info" style="box-shadow:0px 10px 25px 1px rgba(0,0,0,0.1)"></td>
                </tr>
              </table>
              </form>
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