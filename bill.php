<?php
session_start();
$db = mysqli_connect("localhost","root","","store");
$_SESSION['pr'] = array();
$BID = $_SESSION['BID'];
$U_name = $_SESSION['doaa'];

$sql = "SELECT * FROM account WHERE User_name = '$U_name'";
$result = mysqli_query($db, $sql);
$row =  mysqli_fetch_assoc($result);

$firstname = $row["Fname"];
$secondname = $row["Lname"];
$address =  $row["Address"];
$mobile_num = $row["Mobile"];
$Total_Price = 0;
$ProductName;


$sql1 = "SELECT * FROM cart_product WHERE Cart_ID = '$BID'";
$result1 = mysqli_query($db,$sql1);
$nop = mysqli_num_rows($result1);
$Products_names = array();
$Product_Price = array();

for($i = 0 ; $i < $nop ; $i++)
{
	$row1 = mysqli_fetch_assoc($result1);
	$id = $row1["Product_ID"];
	$sql2 = "SELECT * FROM product WHERE Product_id = '$id'";
	$result2 = mysqli_query($db,$sql2);
	$row2 = mysqli_fetch_assoc($result2);
	$Products_names[] = $row2["Name"];
	$Product_Price[] = $row2["Price"];
	$Total_Price += $row2["Price"];
}

$Transport; 
$Payment;
$Time = date('l');

if(isset($_POST['submit'])) 
{  
      if($_POST["transport"] == "Shipment")
 { 
 	$Sql =  "UPDATE bill SET transportation_type = 'Shipment' WHERE bid = '$BID'";
 	mysqli_query($db,$Sql);
}

else
	{ 
   $Sql =  "UPDATE bill SET transportation_type = 'Mail' WHERE bid = '$BID'";
   mysqli_query($db,$Sql);
}

if($_POST["payment"] == "Credit Card")
{
	$Sql =  "UPDATE bill SET payment_type = 'Credit Card' WHERE bid = '$BID'";
mysqli_query($db,$Sql);
}

else
	{
		$Sql =  "UPDATE bill SET payment_type = 'Cash' WHERE bid = '$BID'";
mysqli_query($db,$Sql);
}
 

 $Sql ="UPDATE bill SET data = $Total_Price WHERE bid = '$BID'";
     mysqli_query($db,$Sql);

     if( date('l') == "Saturday")
     {
     	$Sql =  "UPDATE bill SET arrival_time = 'Saturday' WHERE bid = '$BID'"; 
   mysqli_query($db,$Sql);
}
     if( date('l') == "Sunday")
     	{
     	$Sql =  "UPDATE bill SET arrival_time = 'Sunday' WHERE bid = '$BID'"; 
   mysqli_query($db,$Sql);
}
     if( date('l') == "Monday")
     	{
     	$Sql =  "UPDATE bill SET arrival_time = 'Monday' WHERE bid = '$BID'"; 
   mysqli_query($db,$Sql);
}
     if( date('l') == "Tuesday")
     	{
     	$Sql =  "UPDATE bill SET arrival_time = 'Tuesday' WHERE bid = '$BID'"; 
   mysqli_query($db,$Sql);
}
     if( date('l') == "Wednesday")
     	{
     	$Sql =  "UPDATE bill SET arrival_time = 'Wednesday' WHERE bid = '$BID'"; 
   mysqli_query($db,$Sql);
}
     if( date('l') == "Thursday")
     	{
     	$Sql =  "UPDATE bill SET arrival_time = 'Thursday' WHERE bid = '$BID'"; 
   mysqli_query($db,$Sql);
}
     if( date('l') == "Friday")
     	{
     	$Sql =  "UPDATE bill SET arrival_time = 'Friday' WHERE bid = '$BID'"; 
   mysqli_query($db,$Sql);
}
     	    
 header("location: index_customer.php");

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
				 <li class="active"><a href="#" onClick="alert('Please Submit The bill first')">HOME</a></li>
				 <li><a class="scroll" href="#" onClick="alert('Please Submit The bill first')">Products</a></li>
                <li ><a class="scroll" href="#" onClick="alert('Please Submit The bill first')">FREE PATTERN</a></li>	
				 </ul>
			 </div>
		 </div>
		 <div class="logo">
			 <a href="#" onClick="alert('Please Submit The bill first')"><img src="images/logo.png" alt=""/></a>
		 </div>
		 <div class="header-right">
			 <div class="currency">			 
				 <a href="#"><i class="c1"></i></a>
				 <a class="active" href="#"><i class="c2"></i></a>
				 <a href="#"><i class="c3"></i></a>
				 <a href="#"><i class="c4"></i></a>
			 </div>		 
			 <div class="signin">
				  <div class="cart-sec">
				  <a href="#" onClick="alert('Please Submit The bill first')"><img href="#" onClick="alert('Please Submit The bill first')" src="images/cart.png" alt=""/>(0)</a></div>
				  <ul>
					
					 <li><a href="#" onClick="alert('Please Submit The bill first')"> ِAccount</a></li>
				 </ul>			 
                  <ul>
					
					 <li><a name="out" href="#" onClick="alert('Please Submit The bill first')"> Log Out</a></li>
				 </ul>		

			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>

<!---->
<div class="men-fashions">
	 <div class="container">
<div class="cacategories">
<head>
<style>
table, th, td {
    border: 1px solid black;
}
table#t01 {
    width: 100%;    
    background-color: #f1f1c1;
}
th, td {
    padding: 15px;
}

table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: black;
    color: white;
}

</style>
</head>
<table id = t01>
	
	<tr>
	<th colspan="4">
	<h2> <br> Customer information  </h2>
	</th>
	</tr>
	<tr>
		<td> <h3>Name </h3></td>
		<td><h3> <?php echo $firstname . " " . $secondname; ?> </h3></td>
		<td><h3> Mobile Number</h3> </td>
		<td><h3> <?php echo $mobile_num; ?> </h3></td>
	</tr>

	<tr>
		<td><h3> Address </h3> </td>
		<td><h3> <?php echo $address; ?> </h3></td>
		<td> <h3> Arrival Time </h3> </td>
		<td> <h3><?php echo $Time ?></h3> </td>
	</tr>
</table>

<head>
<style>
table, th, td {
    border: 1px solid black;
}
table#t02 {
    width: 100%;    
    background-color: #f1f1c1;
}
th, td {
    padding: 15px;
}

table#t02 tr:nth-child(even) {
    background-color: #eee;
}
table#t02 tr:nth-child(odd) {
   background-color:#fff;
}
table#t02 th {
    background-color: black;
    color: white;
}

</style>
</head>
<br>
<table id = t02>
	
	<tr>
	<th colspan="2">
	<h2> <br> Chosen Products  </h2>
	</th>
	</tr>

<?php for ($i=0; $i <$nop ; $i++) {
?> 
<table id = t02>
<tr>

<td>
<h3><?php echo $Products_names[$i]; ?></h3>
</td>

<td>
<h3><?php echo $Product_Price[$i]; ?></h3>
</td>

</tr>

<?php
} ?>
<tr>
<td>
<h3>Total Price</h3>
</td>
<td>
	<h3><?php echo $Total_Price; ?></h3>
</td>
</tr>
</table>
<!---shipping and payment options-->
<br>
<form method="post">
<h3>Choose Your Shipping OPtions</h3>
<input type="radio" name="transport" value="Shipment">Shipment
<input type="radio" name="transport" value="Mail" checked>Mail
<br>
<br>
<h3>Choose Your Payment Method</h3>
<input type="radio" name="payment" value="Credit Card">Credit Card
<input type="radio" name="payment" value="Cash" checked>Cash
<br>
<br>
<input type="submit" name="submit" value="Submit">
	
</form>

</div>
</div>
</div>
<!---->
<div class="footer">
	 <div>
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