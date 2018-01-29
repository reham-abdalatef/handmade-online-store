<?php

 $link="";
 $type="";
session_start();
$db = mysqli_connect("localhost","root","","store");
  if(isset($_POST['log']))
  {
       $username = mysql_real_escape_string($_POST['username']);
       $password = mysql_real_escape_string($_POST['password']);
      $sql="SELECT * FROM Account WHERE User_name ='$username' AND Password ='$password'";
      $result = mysqli_query($db, $sql);
       if( mysqli_num_rows($result) == 1 )
       {
       	        
       	        $row1=mysqli_fetch_array($result);
                 $type = $row1['type'];
            
             if($type =="cus")
               {
	              header("location: index_customer.php");
		       }
		     else
		       {
		        	header("location: index_Admin.php");
		       }
		     
		       
		           $_SESSION['doaa']=$username;
       }
  
      else
        {
          $link="Username/Password Combination Incorrect";
      }
  }

  $_SESSION['nop'] = 0;

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
<title>Shopper an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Login :: w3layouts</title>
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
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });

        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!---- tabs---->

</head>
<body>
<!---->
<div class="header">
	 <div class="container">
		 <div class="header-left">
			 <div class="top-menu">
				 <ul>
				 <li><a href="index.php">HOME</a></li>
				 <li><a href="woman_visitor.php">PRODUCT</a></li>
			
                <li><a href="free_pattern.php">FREE PATTERN</a></li>			 

				 </ul>
			 </div>
		 </div>
		 <div class="logo">
			 <a href="index.php"><img src="images/logo.png" alt=""/></a>
		 </div>
		 <div class="header-right">
			 	 
			 <div class="signin">
				
				  <ul>
                      <li><a href="registration.php">REGISTRATION</a> <span>/</span> &nbsp;</li>
					 <li><a href="login.php"> LOGIN</a></li>

				 </ul>			 
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<div   class="login">
	 <div class="container">
		 <h2>Login</h2>
		 <div class="col-md-6 log">			 
				 <p>Welcome, please enter the folling to continue.</p>
				 <p>If you have previously Login with us, <span>click here</span></p>
				 <form method="post" action="login.php">
					 <h5>User Name:</h5>	
					 <input type="text" name="username" value="">
					 <h5>Password:</h5>
					 <input type="password" name="password" value="">					
					 <input type="submit" name="log" value="Login">
                      <span class="text-danger"><?php echo $link; ?></span>
                                            <span class="text-danger"><?php echo $type; ?></span>


					  <a href="#">Forgot Password ?</a>
				 </form>				 
		 </div>
		  <div class="col-md-6 login-right">
			  	<h3>NEW REGISTRATION</h3>
				<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				<a class="acount-btn" href="register.php">Create an Account</a>
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
		