<?php
    $link="Please fill this form";
    session_start();
$db = mysqli_connect("localhost","root","","store");

        $usernameError="";
        $nameError="";
        $passError="";
        $mobError="";
        $addressError="";
        $emailError="";
    if(isset($_POST['reg']))
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
        {  $sql = " INSERT INTO Account ( Fname,Lname,Mobile,Email,Password, User_name,Gender,Address ) Values('$fname','$lname','$mob','$email','$password','$username','$sel','$address')";
            mysqli_query($db,$sql);
         $link ="your registration is successful !!";    
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

</head>
<body>
<!---->
<div class="header men">
   <div class="container">
     <div class="header-left">
       <div class="top-menu">
         <ul>
         <li><a href="index.php">HOME</a></li>
         <li  ><a href="woman_visitor.php">Product</a></li>
         <li ><a href="free_pattern.php">FREE PATTERN</a></li>       
         </ul>
       </div>
     </div>
     <div class="logo">
       <a href="index.php"><img src="images/logo.png" alt=""/></a>
     </div>
     <div class="header-right">
          <div class="signin">
          
          <ul>
                      <li class="active" ><a href="register.php">REGISTRATION</a> <span>/</span> &nbsp;</li>
           <li><a href="login.php"> LOGIN</a></li>
         </ul>       
       </div>
     </div>
     <div class="clearfix"></div>
   </div>
</div>
<!---->
<div class="registration-form">
   <div class="container">
     <h2>Registration</h2>
     <div class="col-md-6 reg-form">
       <div class="reg">
         <p>Welcome, please enter the following to continue.</p>
         <p>If you have previously registered with us, <a href="#">click here</a></p>
         <form method="post" action= "register.php">
                     
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
        <input type="submit" name="reg"  value="Register Now"> 
           <p class="click">By clicking this button, you agree to my modern style <a>Pollicy Terms and Conditions</a> to Use</p> 
         </form>
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