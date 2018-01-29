<?php
session_start();


if(isset($_POST['out']))
{session_destroy();
}

$db = mysqli_connect("localhost","root","","store");

$_SESSION['P_ID'] = 0;
$productid;
$arrayName = array();
$num = $_SESSION['nop']; 


$sql= "SELECT Name FROM product Where Adress='buffsweat.php'";
$result = mysqli_query($db, $sql);
if( $row = mysqli_fetch_assoc($result)){
    $productname = $row['Name'];
}
$sql= "SELECT Description FROM product Where Adress='buffsweat.php'";

$result = mysqli_query($db, $sql);
if( $row = mysqli_fetch_assoc($result)){
    $productdes = $row['Description'];
}
$sql= "SELECT Price FROM product Where  Adress='buffsweat.php'";

$result = mysqli_query($db, $sql);
if( $row = mysqli_fetch_assoc($result)){
    $productprice = $row['Price'];
}
$sql= "SELECT Product_id FROM product Where  Adress='buffsweat.php'";
$result = mysqli_query($db, $sql);
if( $row = mysqli_fetch_assoc($result)){
    $productid = $row['Product_id'];
}
$sql= "SELECT Statue FROM product Where  Adress='buffsweat.php'";
$result = mysqli_query($db, $sql);
if( $row = mysqli_fetch_assoc($result)){
    $productstat = $row['Statue'];
}

$arrayName = $_SESSION['pr'];
$_SESSION['arr'] = $arrayName;

if(isset($_POST['add_cart']))
{
	echo "string";
	$_SESSION['P_ID'] = $productid;
	header("location: cart.php");
}

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Shopper an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| single :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/hover.css" rel="stylesheet" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopper Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>
<!---->
<div class="header">
	 <div class="container">
		 <div class="header-left">
			 <div class="top-menu">
				 <ul>
				<li ><a href="index_customer.php">HOME</a></li>
				 <li class="active" ><a href="woman.php" >Products</a></li>
                 <li><a href="free_pattern_customer.php">FREE PATTERN</a></li>			 

				 </ul>
				 <!-- script-for-menu -->
				 <script>
						$("span.menu").click(function(){
							$(".top-menu ul").slideToggle("slow" , function(){
							});
						});
				 </script>
				 <!-- script-for-menu -->	 	 

			 </div>
		 </div>
		 <div class="logo">
			 <a href="index_customer.php"><img src="images/logo.png" alt=""/></a>
		 </div>
		 <div class="header-right">
				 
			 <div class="signin">
				  <div class="cart-sec">
				  <a href="cart.php"><img href="cart.php" src="images/cart.png" alt=""/>(<?php echo $num; ?>)</a></div>
				  <ul>
					
					 <li><a href="account.php"> ِAccount</a></li>
				 </ul>			 
                  <ul>
					
					 <li><a name="out" href="index.php"> Log Out</a></li>
				 </ul>
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
 <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 1
      $("#slider2").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 500,
		 namespace: "callbacks",
      });
    });
  </script>
    <script src="js/responsiveslides.min.js"></script>
<div class="single-section">
	 <div class="col-md-8 fashions2">			 
			<div class="slider2">
				<ul class="rslides rslider" id="slider2">				  
				<li><img src="images/sweaters/sweater2.png" alt=""></li>
                 <li><img src="images/sweaters/sweater2.2.png" alt=""></li>
				</ul>
		   </div>
	  </div> 
	<div class="col-md-4 side-bar2">
		  <div class="product-price">
			   <div class="product-name">
				 <h2>
                 <?php echo $productname; ?>
                </h2>
					<p><?php echo $productdes; ?></p>
					<span><?php echo $productprice; ?> L.E </span>
					<div class="clearfix"></div>
				<?php if($productstat != "sold out" ): ?>
                   <h4>AVAILABLE</h4>
                   <?php endif; ?>
                   <?php if($productstat == "sold out"): ?>
                 <h4 style="color:red;">SOLD OUT</h4>
                   <?php endif; ?>
			  </div>	
			 <div class="product-id">
				 <p>PRODUCT ID : <a href="#"> <?php echo $productid; ?></a></p>
               <?php if($productstat != "sold out" ):?>
				 <div class="container">
              <form method="post" action="#">
				 <input type="submit"  name="add_cart"  value="ADD TO CART"> 
               </form>


				 </div>
    
                 <?php endif; ?>
			 </div>
		 </div>
      </div>
	      	 
	 <div class="clearfix"></div>
</div>
<!---->
<div class="footer">
	 <div class="container">
		 <p>Copyright &copy; 2015 All rights reserved | Template by  <a href="#">  W3layouts</a></p>
		 <div class="social">
			
			 <a href="https://www.facebook.com/KnittingWonders" target="_blank"><span class="icon2"></span></a>
			 
		 </div>
		 <div class="clearfix"></div>
	 </div>	 
</div>
<!---->		
</body>
</html>