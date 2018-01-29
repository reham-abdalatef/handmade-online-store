<?php
    $link="Add Your New User ";
    session_start();
$db = mysqli_connect("localhost","root","","store");

        $usernameError="";
        $nameError="";
        $passError="";
        $mobError="";
        $addressError="";
        $emailError="";
    if(isset($_POST['add']))
    { 
        $username = mysql_real_escape_string($_POST['user_name']);
        $fname=mysql_real_escape_string($_POST['fname']);
         $lname=mysql_real_escape_string($_POST['lname']);
         $email=mysql_real_escape_string($_POST['email']);
         $password=mysql_real_escape_string($_POST['password1']);
         $password2=mysql_real_escape_string($_POST['password2']);
         $mob=mysql_real_escape_string($_POST['Mob']);
         $sel=mysql_real_escape_string($_POST['sel1']);
         $address=mysql_real_escape_string($_POST['address']);
         $type=mysql_real_escape_string($_POST['sel2']);

         $error = false;
      
          //  username validation
if(empty($username))
{
       $error = true;
   $usernameError = "Please enter your User name.";
}
else{ 
    $query=false;
    $sql= "SELECT AID FROM Account Where User_name='$username'";
    $result = mysqli_query($db, $sql);

   if( mysqli_num_rows($result) >0 ){
    $error = true;
    $usernameError = "Provided Username is already in use.";
    }
  }
        
        
          // name validation

    if (empty($fname)) {
        if(empty($Lname))
        {
   $error = true;
   $nameError = "Please enter your full name.";
        }
        }
        
 // password validation        
  if (empty($password) ||empty($password2) ){
   $error = true;
   $passError = "Please enter your password.";
  }
else if($password != $password2)
        {
   $error = true;
   $passError = "two password not equal.";
          
        }
     //email validation
     if(empty($email))
    {   $error = true;
     $nameError = "Please enter your email.";
    }
        
    else
    { $query=false;
    $sql = "SELECT Email FROM Account WHERE Email='$email'";
   $result = mysqli_query($db, $sql);     
   if(mysqli_num_rows($result) > 0 ){
    $error = true;
    $emailError = "Provided Email is already in use.";
   }
     }
     // mobile validation

      if(empty($mob))
      {   $error = true;
   $mobError = "Please enter your Mobile.";}
          // adress validation
         if(empty($address)) 
         {   $error = true;
   $addressError = "Please enter your Address.";
         }
        
        if(! $error)
  {      
    if($type=="Customer")
        {
          $sql = " INSERT INTO Account ( Fname,Lname,Mobile,Email,Password, User_name,Gender,Address ) Values('$fname','$lname','$mob','$email','$password','$username','$sel','$address')";
            mysqli_query($db,$sql);
         $link ="your New  Customer is Added successfully !!"; 
       }   
       else if ($type=="Admin")
       {
         $sql = " INSERT INTO Account ( Fname,Lname,Mobile,Email,Password, User_name,Gender,Address,type ) Values('$fname','$lname','$mob','$email','$password','$username','$sel','$address','adm')";
                    mysqli_query($db,$sql);
                 $link ="your New Admin is Added successfully !!"; 
       }
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
width:20%;
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
				 <li class="active" ><a href="adduser.php">Add User</a></li>
                 <li><a href="deletecus.php">Delete Customer</a></li>	
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
<h2>Add User</h2>
		 <div class="col-md-6 reg-form">
			 <div class="reg">
				 <p>Welcome, please enter the following to continue.</p>
				
				 <form method="post" action= "adduser.php">
                     
               <div class="alert alert-success" role="alert">
                <strong><?php echo $link; ?></strong> 
                  </div> 
                    
                     <ul>
						 <li class="text-info">User Name: </li>
						 <li><input type="text" name="user_name" value=""> </li>
                <span class="text-danger"><?php echo $usernameError; ?></span>
           
					 </ul>
					 <ul>
						 <li class="text-info">First Name: </li>
						 <li><input type="text" name="fname" value=""></li>
                        
					 </ul>
					 <ul>
						 <li class="text-info">Last Name: </li>
						 <li><input type="text" name="lname" value=""></li>
                         <span class="text-danger"><?php echo $nameError; ?></span>
					 </ul>				 
					<ul>
						 <li class="text-info">Email: </li>
						 <li><input type="text" name="email" value=""></li>
                        <span class="text-danger"><?php echo $emailError; ?></span>
					 </ul>
					 <ul>
						 <li class="text-info">Password: </li>
						 <li><input type="password" name="password1" value=""></li>
					 </ul>
					 <ul>
						 <li class="text-info">Re-enter Password:</li>
						 <li><input type="password" name="password2" value=""></li>
                         <span class="text-danger"><?php echo $passError; ?></span>

					 </ul>
					 <ul>
						 <li class="text-info">Mobile Number:</li>
						 <li><input type="text" name="Mob" value=""></li>
                         <span class="text-danger"><?php echo $mobError; ?></span>
					 </ul>
                      <ul>
						 <li class="text-info">ِAddress:</li>
						 <li><input type="text" name="address" value=""></li>
                          <span class="text-danger"><?php echo $addressError; ?></span>
					 </ul>	
                     <ul>
                       <label for="sel1">Select Sex:</label>
                       <select class="form-control" name="sel1">
                        <option>Male</option>
                        <option>Female</option>
                           </select>
                          </ul> 
<br>
                          <ul>
                       <label for="sel2">Select User_Type:</label>
                       <select class="form-control" name="sel2">
                        <option>Customer</option>
                        <option>Admin</option>
                           </select>
                          </ul>
                           <br>
				<input type="submit" name="add"  value="Add"> 
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