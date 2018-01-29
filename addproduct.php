<?php
    $link="please add your product.........";
 session_start();
$db = mysqli_connect("localhost","root","","store");

        $usernameError="";
        $nameError="";
        $passError="";
        $priceError="";
$emailError="";
if(isset($_POST['add']))
{
    
    $username = mysql_real_escape_string($_POST['user_name']);
        $price=mysql_real_escape_string($_POST['price']);
         $lname=mysql_real_escape_string($_POST['lname']);
         $email=mysql_real_escape_string($_POST['email']);
         $password=mysql_real_escape_string($_POST['password2']);
       $error = false;
    if(empty($username))
{
       $error = true;
   $usernameError = "Please enter your Product name.";
}
    
    if(empty($Lname))
        {
   $error = true;
   $nameError = "Please enter your Product status.";
        }
    if(empty($price))
        {
   $error = true;
   $nameError = "Please enter your Product price.";
        }
    
    if(empty($password2))
        {
   $error = true;
   $nameError = "Please enter your image.";
        }
    
      if(empty($email))
        {
   $error = true;
   $nameError = "Please enter the type of the product.";
        }
    
    
    $sql= "SELECT * FROM Product Where type='$email'";
    $result = mysqli_query($db, $sql);     
   if(mysqli_num_rows($result) > 9 )
   {
       $link="maximum prodctus exceeded in this category";
   }
    else if(!$error)
    {
        $sql = " INSERT INTO Product ( Price,Type,image,statue,name) Values('$price','$email','$password2','$lname','$username')";
            mysqli_query($db,$sql);
         $link ="your insertion is successful !!";    
        
        
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
     
     <div class="col-md-6 reg-form">
       <div class="reg">
       
         <form method="post" action= "register.php">
                     
               <div class="alert alert-success" role="alert">
                <strong><?php echo $link; ?></strong> 
                  </div> 
                   
                     <ul>
             <li class="text-info">Product Name: </li>
             <li><input type="text" name="user_name" value=""> </li>
                <span class="text-danger"><?php echo $usernameError; ?></span>
           
           </ul>
           <ul>
             <li class="text-info">price: </li>
             <li><input type="text" name="price" value=""></li>
                    <span class="text-danger"><?php echo $priceError; ?></span>
                        
           </ul>
           <ul>
             <li class="text-info">status: </li>
             <li><input type="text" name="lname" value=""></li>
                         <span class="text-danger"><?php echo $nameError; ?></span>
           </ul>         
          <ul>
             <li class="text-info">type: </li>
             <li><input type="text" name="email" value=""></li>
                        <span class="text-danger"><?php echo $emailError; ?></span>
           </ul>
        
           <ul>
             <li class="text-info">image:</li>
             <li><input type="text" name="password2" value=""></li>
                         <span class="text-danger"><?php echo $passError; ?></span>

           </ul>
           
                    
                    
        <input type="submit" name="add"  value="Add Now"> 
           
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