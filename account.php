<?php
      $link="update your password";

    session_start();
$db = mysqli_connect("localhost","root","","store");
 $num = $_SESSION['nop']; 
 $usernameError="";
        $nameError="";
        $passError="";
        $oldpassError="";
if(isset($_POST['update']))
{
       
    // $link="sucsseful pressed"; 
         $username=$_SESSION['doaa'];
       // $username = mysql_real_escape_string($_POST['user_name']);
        $oldpassword=mysql_real_escape_string($_POST['password0']);
         $password=mysql_real_escape_string($_POST['password1']);
         $password2=mysql_real_escape_string($_POST['password2']);
       
         $error = false;
         $passworderror=false;
 
if(empty($username))
{
       $error = true;
   $usernameError = "Please enter your User name.";
}
else{ 
    $query=false;
    $sql= "SELECT AID FROM Account Where User_name='$username'";
    $result = mysqli_query($db, $sql);

   if( mysqli_num_rows($result) ==0 ){
    $error = true;
    $usernameError = "Incorret username";
    }
  }
  if (empty($oldpassword) ){
   $error = true;

   $oldpassError = " Please  enter your  old password.";
  }
  else{ 

    $query=false;
    $sql= "SELECT * FROM Account Where User_name='$username' AND password=$oldpassword ";
    $result = mysqli_query($db, $sql);

   if( mysqli_num_rows($result) ==0 ){
    $error = true;
   $oldpassError = "Incorret password ,please enter your Old Password";
    }
  }

 
if(!empty($password)){ 

    $query=false;
    $sql= "SELECT * FROM Account Where User_name='$username' AND password=$password ";
    $result = mysqli_query($db, $sql);

   if( mysqli_num_rows($result) >0 ){
    $passworderror = true;
   $passError = "The password not changed, Please  if you want update it enter your New password.";
    }
  }
if (empty($password) ||empty($password2) ){
   $error = true;

   $passError = " Please  enter your  password.";
  }
 
  else if($password != $password2 && $passworderror==false)
        {
   $error = true;
   $passError = "two password not equal.";
          
        }
  else if($error == false)
  {
          $sql = "
     UPDATE   account   
    SET  password=$password 
    WHERE  User_name='$username'
    ";
            mysqli_query($db,$sql);
            $link="successful uptade ";
   }

} 
?>

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
<style>
.update form{
margin-top:1em;
}
.update ul li {
display: inline-block;
margin:7px 0;
width: 72%;
}
.update ul li.text-info{
width:27%;
color:#5d5959;
}
.update form input[type="text"],.update form input[type="password"] {
width: 100%;
padding: 8px;
font-size: 1em;
font-weight: 400;
border: 1px solid #D6D6D6;
outline: none;
color:#5d5959;
}
.update form input[type="submit"]{
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
        <div class="header">
	 <div class="container">
		 <div class="header-left">
			 <div class="top-menu">
				 <ul>
				 <li class="active"><a href="index_customer.php">HOME</a></li>
				 <li><a href="woman.php">PRODUCT</a></li>
                 <li ><a href="free_pattern_customer.php">FREE PATTERN</a></li>      

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
<div class="container" style="padding-top: 60px;">
  <h1 class="page-header">Edit Account Password</h1>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <img src="pexels-photo-27714.jpg" class="avatar img-circle img-thumbnail" alt="avatar">
       
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
       <div class="alert alert-success" role="alert">
                <strong><?php echo $link; ?></strong> 
                  </div> 
      <h3>Personal info</h3>
       <div class="update">
       <form method="post" action= "account.php">
             
           <ul>
             <li class="text-info">Old Password: </li>
             <li><input type="password" name="password0" value="" placeholder="Enter Your Old Password"></li>
                                    <span  class="text-danger"><?php echo $oldpassError; ?></span>

           </ul> 
           <ul>
             <li class="text-info">Password: </li>
             <li><input type="password" name="password1" value="" placeholder="Enter Your New Password"></li>
           </ul>
           <ul>
             <li class="text-info">Re-enter Password:</li>
             <li><input type="password" name="password2" value=""></li>
                         <span  class="text-danger"><?php echo $passError; ?></span>

           </ul>
           
                     
                     
        <input type="submit" name="update"  value="UPDATE"> 
           <p class="click">By clicking this button, you agree to my modern style <a>Pollicy Terms and Conditions</a> to Use</p> 
         </form>
         </div>
    </div>
  </div>
</div>
</body>
</html>