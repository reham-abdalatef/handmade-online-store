
<?php

 session_start();

if(isset($_POST['out']))
{session_destroy();
}


$num = $_SESSION['nop']; 



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
<title>Shopper an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Man :: w3layouts</title>
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
<div class="header men">
	 <div class="container">
		 <div class="header-left">
			 <div class="top-menu">
				 <ul>
				 <li><a href="index_customer.php">HOME</a></li>
				 <li><a href="woman.php">PRODUCT</a></li>
                
				 <li class="active"><a href="free_pattern_customer.php">FREE PATTERN</a></li>			 
				 </ul>
			 </div>
		 </div>
		 <div class="logo">
			 <a href="index_customer.php"><img src="images/logo.png" alt=""/></a>
		 </div>
		 <div class="header-right">
			 	 
			 <div class="signin">
				  <div class="cart-sec">
				  <a href="cart.php"><img href="cart.php" src="images/cart.png" alt=""/>(<?php echo $num ?>)</a></div>
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
<div class="men-fashions">
	 <div class="container">		
		 <div class="col-md-12 fashions">
			 <div class="title">
				 <h3>FREE PATTERNS</h3>
			 </div>
			 <div class="fashion-section">
				 <div class="fashion-grid1">
					 <div class="col-md-4 fashion-grid">
						 <a href="pattern1_customer.php"><img src="images/pattern/1/main1a.jpg" alt=""/>
							 <div class="product">
								 <h3>Owl Amigurumi</h3>
							 </div>							 
						 </a>
						 <div class="fashion-view"><span></span>
									<div class="clearfix"></div>
								 <h4><a href="pattern1_customer.php">View</a></h4>
						 </div>
					 </div>
					 <div class="col-md-4 fashion-grid">
						 <a href="pattern2_customer.php"><img src="images/pattern/2/main4web.jpg" alt=""/>
							 <div class="product">
								 <h3>EASTER BUNNY AMIGURUMI</h3>
							 </div>
						 </a>
						 <div class="fashion-view"><span></span>
									<div class="clearfix"></div>
								 <h4><a href="pattern2_customer.php">View</a></h4>
						 </div>
					 </div>
					 <div class="col-md-4 fashion-grid">
						 <a href="pattern3_customer.php"><img src="images/pattern/3/main.jpg" alt=""/>
							 <div class="product">
								 <h3>Cabled Wrist Warmers</h3>
							 </div>
						 </a>
						 <div class="fashion-view"><span></span>
									<div class="clearfix"></div>
								 <h4><a href="pattern3_customer.php">View</a></h4>
						 </div>
					 </div>
					 <div class="clearfix"></div>
				 </div>
				
			
		
				 </div>
			 </div>
		 </div>
	
		 <div class="clearfix"></div>
	 </div>
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
		