<?php
    $link="Choose Customer You Want Delete . ";
    session_start();
$db = mysqli_connect("localhost","root","","store");

        $cusError="";
        

        $query5=false;
    $sql5= "SELECT * FROM account where type='cus' ";
    $result5 = mysqli_query($db, $sql5);

  
    if(isset($_POST['del']))
    { 
        
         $CUSTOMER=mysql_real_escape_string($_POST['sel1']);

         $error = false;
      
         
        
 if($CUSTOMER=="Customer Names")
    {   $error = true;
     $cusError = "Please Choose Customer Name You Want !!.";
    }  
 
     
   

        
        
        if(! $error)
  {      
   
          $sql = " DELETE FROM `account` WHERE User_name='$CUSTOMER'";
            mysqli_query($db,$sql);
         $link ="your Deleting successfull !!"; 
         
       
  }
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
<title>Shopper an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Registration :: w3layouts</title>
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
<style >
.reg form input[type="submit"]{
width:40%;
margin:0 auto;
display:block;
padding: 10px;
font-size: 1.2em;
font-weight: 400;
border:none;
color:#fff;
border-radius:5px;
outline: none;
background:background: rgb(119,119,119);
background: -moz-linear-gradient(top,  rgba(119,119,119,1) 0%, rgba(2,2,2,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(119,119,119,1)), color-stop(100%,rgba(2,2,2,1)));
background: -webkit-linear-gradient(top,  rgba(119,119,119,1) 0%,rgba(2,2,2,1) 100%);
background: -o-linear-gradient(top,  rgba(119,119,119,1) 0%,rgba(2,2,2,1) 100%);
background: -ms-linear-gradient(top,  rgba(119,119,119,1) 0%,rgba(2,2,2,1) 100%);
background: linear-gradient(to bottom,  rgba(119,119,119,1) 0%,rgba(2,2,2,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#777777', endColorstr='#020202',GradientType=0 );
margin-top:1em;
}
</style>
</head>
<body>
<!---->
<div class="header men">
	 <div class="container">
		 <div class="header-left">
			 <div class="top-menu">
				<ul>
				 <li ><a href="index_Admin.php">HOME</a></li>
				 <li><a href="adduser.php">Add User</a></li>
                 <li class="active"><a href="deletecus.php">Delete Customer</a></li>	
                  <li><a href="editpro.php">Edit Product</a></li>

				 </ul>
			 </div>
		 </div>
		 <div class="logo">
			 <a href="index_Admin.php"><img src="images/logo.png" alt=""/></a>
		 </div>
		 <div class="header-right">
				  <div class="signin">

				  <ul>
                      <li class="active" ><a href="account_admin.php">Account</a> <span>/</span> &nbsp;</li>
					 <li><a href="index.php"> LOG OUT</a></li>
				 </ul>			 
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<div class="registration-form">
	 <div class="container">
<h2>Delete customer</h2>
		 <div class="col-md-6 reg-form">
			 <div class="reg">
				<!-- <p>Welcome, please enter the following to continue.</p>-->
			
				 <form method="post" action= "deletecus.php">
                     
               <div class="alert alert-success" role="alert">
                <strong><?php echo $link; ?></strong> 
                  </div> 
                    <p>
                    BE Carful!!!! <br>The Customer You will Delete  Be Deleted permanently !!!! 
                    <br> That's mean  you can't get it after deleting.
                     <br> SO BE Sure Before dicussed deleting!!<br>
                            </p> 
                  	
          <br>
                     <ul>
                       <label for="sel1">Select Customer_Name:</label>
                       <select class="form-control" name="sel1">
                       <option > Customer Names</option>
                        <?php while ($row5=mysqli_fetch_array( $result5)): ;?>
                          <option ><?php echo $row5[9] ;?></option>
            <?php endwhile; ?>

                           </select>
                                                    <span class="text-danger"><?php echo $cusError; ?></span>

                          </ul> 
<br>
				<input type="submit" name="del"  value="Delete The customer"> 
					 <p class="click">By clicking this button, you agree to my modern style <a>Pollicy Terms and Conditions</a> to Use</p> 
				 </form>
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