

<?php

 session_start();

if(isset($_POST['out']))
{session_destroy();
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
<title>Shopper an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Home :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="bootstrap/css/bootstrap-theme.min.css" rel='stylesheet' type='text/css' />
    <link href="bootstrap/css/bootstrap-theme.min.css" rel='stylesheet' type='text/css' />


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

<head>
<body>
<!---->
<div class="header">
	 <div class="container">
		 <div class="header-left">
			 <div class="top-menu">
				 <ul>
				 <li class="active"><a href="index_Admin.php">HOME</a></li>
				 <li><a href="adduser.php">Add User</a></li>
                 <li><a href="deletecus.php">Delete Customer</a></li>	
                  <li><a href="editpro.php">Edit Product</a></li>

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
			 <a href="index_Admin.php"><img src="images/logo.png" alt=""/></a>
		 </div>
		 <div class="header-right">
				 
			 <div class="signin">
				  
				  <ul>
					
					 <li><a href="account_admin.php"> ِAccount</a></li>
				 </ul>			 
                  <ul>
					
					 <li><a name="out" href="index.php"> LOG OUT</a></li>
				 </ul>
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<script src="js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        manualControls: '#slider3-pager',
      });
    });
  </script>
</head>
    
<body>
    
 <div class="slider">
	  <div class="callbacks_container">
	     <ul class="rslides" id="slider">
	         <li>
				  <img src="images/reham/reham1.png" alt="">
	         </li>
	         <li>
				 <img src="images/reham/reham2.png" alt="">
			 </li>
	         <li>
	             <img src="images/reham/reham3.png" alt="">
	         </li>
               <li>
	             <img src="images/reham/reham4.png" alt="">
	         </li>
               <li>
	             <img src="images/reham/reham5.png" alt="">
	         </li>
               <li>
	             <img src="images/reham/reham6.png" alt="">
	         </li>
	      </ul>
	  </div>
  </div>
<!---->

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
		