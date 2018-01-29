<?php
session_start();

$db = mysqli_connect("localhost","root","","store");

if (!$db) {
             die("Connection failed: " . mysqli_connect_error());
                 }
$cart_id;
$P_ID = $_SESSION['P_ID'];
$U_name = $_SESSION['doaa'];
$Products = array();
$Products = $_SESSION['arr'] ;
if($P_ID != 0)
{
	$Products[] = $P_ID;
}
$num = sizeof($Products);
$nop = $num;
$_SESSION['pr'] = $Products;

if(isset($_POST['cancel']))
{
	$_SESSION['P_ID'] = 0;
	$_SESSION['arr'] = array();
	header("location: cart.php");
}
    $sql="SELECT * FROM cart";
    $result = mysqli_query($db, $sql);
    $NOR= mysqli_num_rows($result);
    $cart_id = $NOR + 1;
    $_SESSION['BID'] = $cart_id;
    $sql="SELECT * FROM account WHERE User_name = '$U_name'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($result);
    $Aid = $row["AID"];

for($i = 0; $i < $num ; $i++)
{
	if($Products[$i] == 0)
		$nop--;
}
$_SESSION['nop'] = $nop;
if(isset($_POST['confirm']))
{
	if($nop == 0)
		header("location: cart.php");
	else
	{
		$sql = " INSERT INTO bill(bid) VALUES('$cart_id')";
mysqli_query($db,$sql);
    $sql = " INSERT INTO cart(cart_id, bid, Aid) VALUES('$cart_id','$cart_id','$Aid')";
            mysqli_query($db,$sql);
            for($i = 0 ; $i < $num ; $i++)
            {
            	if($Products[$i] != 0)
            	{
            		$ql = " INSERT INTO cart_product(Cart_ID, Product_ID) Values('$cart_id','$Products[$i]')";
            mysqli_query($db,$ql);
            	}
            }
	$_SESSION['P_ID'] = 0;
	$_SESSION['arr'] = array();
	$_SESSION['nop'] = 0;
	header("location: bill.php");
}

}

?>
<!DOCTYPE html>
<html>
<head>
<title>Shopper an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Cart :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
<!---- tabs---->
<link type="text/css" rel="stylesheet" href="css/easy-responsive-tabs.css" />

</head>
<body>
<!---->
<div class="header">
	 <div class="container">
		 <div class="header-left">
			 <div class="top-menu">
				 <ul>
				 <li class="active"><a href="index_customer.php">HOME</a></li>
				 <li><a class="scroll" href="woman.php">PRODUCT</a></li>
                <li ><a class="scroll" href="free_pattern_customer.php">FREE PATTERN</a></li>	
				 </ul>
			 </div>
		 </div>
		 <div class="logo">
			 <a href="index_customer.php"><img src="images/logo.png" alt=""/></a>
		 </div>
		 <div class="header-right">
				 
			 <div class="signin">
				  <div class="cart-sec">
				  <a href="cart.php"><img href="cart.php" src="images/cart.png" alt=""/>(<?php echo $nop; ?>)</a></div>
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
<div class="cart">
	 <div class="container">
		 <div class="cart-info">
		 <h3>There are <?php echo $nop?> items in the cart</h2>
		 <p>if you clicked continue shopping you will back to the products page also you can remove products from the cart and of course you can confirm it </p>
		 <a href="woman.php">CONTINUE SHOPPING</a>
		 </div>
		 <!--da code el free pattern ely e7na 7teno :V-->
<!---->
<div class="men-fashions">
	 <div class="container">		
		 <div class="col-md-12 fashions">
			 <div class="title">
				 <h3>SELECTED PRODUCTS</h3>
			 </div>
			 <div class="fashion-section">
				 <div class="fashion-grid4">
					 <?php




			$Product_id;
			$n = 1;

for($i = 0 ; $i < $num ; $i++)
{
	if(isset($_POST[$Products[$i]]) && $n == 1)
		{
			$Products[$i] = 0;
			$n--;
			$_SESSION['arr'] = $Products;
			$_SESSION['P_ID'] = 0;
			$nop--;
			header("location: cart.php");

}
}


			  for ($i=0; $i < $num; $i++) { 
				  	if($Products[$i] != 0)
				  	{
				  		$Product_id = $Products[$i];
                  $sql="SELECT * FROM product WHERE Product_id='$Product_id' ";
                  $result = mysqli_query($db, $sql);
                 $row = mysqli_fetch_assoc($result) ;
                     $name = $row["Name"];
                     $Price = $row["Price"];
                     $Image = $row["Image"];
                     
				 	?>
				 	<div class="col-md-4 fashion-grid">
						 <a href="#"><img src="<?php echo $Image; ?>" alt=""/>
							 <div class="product">
								 <h3> <?php echo $name; ?></h3>
								 <p><span></span>  <?php echo $Price; echo "L.E"; ?>  </p>	
							 </div>							 
						 </a>
						 <div class="fashion-view"><span></span>

						 <div class="container">
              <form method="post" action="#">
				 <input type="submit"  name="<?php echo $Product_id;?>"  value="Remove"> 
               </form>
				 </div>
									<div class="clearfix"></div>
									
						 </div>
					 </div>
					 
				 	
				<?php 
			}	 }

			 ?>
					 <div class="clearfix"></div>
				 </div>
				
			
		
				 </div>
			 </div>
		 </div>
	
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<br>
<div class="container">
              <form method="post" action="#">
				 <input type="submit"  name="confirm"  value="CONFIRM"> 
               </form>
				 </div>
<br>
				 <div class="container">
              <form method="post" action="#">
				 <input type="submit"  name="cancel"  value="CANCEL"> 
               </form>
				 </div>
				 
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
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