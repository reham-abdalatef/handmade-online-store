<?php

    $link="Please fill this form";

 session_start();
$db = mysqli_connect("localhost","root","","store");
        $nameError="";
        $commentError="";
          $name = "";
        $comment="";

$query5=false;
    $sql5= "SELECT * FROM visitor_review Where PID='1'";
    $result5 = mysqli_query($db, $sql5);

if(isset($_POST['sub']))
{
        $name = mysql_real_escape_string($_POST['name']);
        $comment=mysql_real_escape_string($_POST['comment']);
       $error = false;

if(empty($name))
{
       $error = true;
   $nameError = "Please enter your Name.";
}
if(empty($comment))
		{
		       $error = true;
		    $commentError = "Please enter your Comment.";
		
		}
if( $error==false)
{
	$query=false;
    $sql= "SELECT * FROM visitor_review Where PID='1' AND visname='$name' ";
    $result = mysqli_query($db, $sql);

   if( mysqli_num_rows($result) >0 ){
    $error = true;
    $commentError = "You Already Commented on this before ";
    }

}

if( $error==false)
    {
		 $link ="your registration is successful !!"; 
  

      $query=false;
    $sql= "INSERT INTO visitor_review ( visname,PID,review) Values('$name','1','$comment')";
    $result = mysqli_query($db, $sql);

	}
	if( $error==true)
    {
		 $link ="your registration is faild !!"; 
	}

}

$sql = "SELECT * FROM free_pattern Where PID = '1'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result);
$description = $row['discription'];
$arr = explode(".", $description);
$img = array();
$Sql = "SELECT * FROM pattern_image Where PID = '1'";
$result1 = mysqli_query($db,$Sql);
while($row1 = mysqli_fetch_assoc($result1))
{
 $img[] = $row1['image'];
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
<title>Shopper an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| single :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<style >
.named{

	color: rgb(120,120,120);
	font-weight: bold;
    font-style: normal;
	font-size: 1.2em;
	 
	    padding-left: 10px;

}
.commentd{
    color:rgb(128,128,128);
        font-weight: normal;
    font-style: normal;
    padding-left:50px;
	font-size: 1.15em;
}
.one{
	  
          padding-top: 6px;
	
	    padding-bottom: : 20px;
    border-color: rgb(120,120,120);

	border-style: solid;
}

.row form input[type="submit"]{
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
<div class="header single">
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
					 <li><a href="register.php">REGISTRATION</a> <span>/<span> &nbsp;</li>
					 <li><a href="login.php"> LOGIN</a></li>
				 </ul>			 
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
 <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 1
      $("#slider2").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 500,
		 namespace: "callbacks",
      });
    });
  </script>
    <script src="js/responsiveslides.min.js"></script>
   
<!---------------------------------------------------------------------------->
    <div class="about">
        
        <div class="row">
  <div class="col-sm-7">
	 <div class="container">
		
         
              <div class="about-info">
		 <h3>STEPS</h3>
                  <br>
          <div class="about-section">
		 <div class="about-pic">
		 <img src = "<?php echo $img[0]; ?>" alt="">
		 </div>
		 <div class="about-text">
			<p> <?php echo $arr[0]; ?></p>
		 </div>	
			<div class="clearfix"></div>	
        </div>
<br>
             
        <div class="about-section">

		 <<div class="about-pic">
		 <img src = "<?php echo $img[1]; ?>" alt="">
		 </div>
		 <div class="about-text">
			<p> <?php echo $arr[1]; ?></p>
		 </div>	
			<div class="clearfix"></div>	
        </div>
             
           <br>
             
        <div class="about-section">

		 <div class="about-pic">
		 <img src = "<?php echo $img[2]; ?>" alt="">
		 </div>
		 <div class="about-text">
			<p> <?php echo $arr[2]; ?></p>
		 </div>	
			<div class="clearfix"></div>	
        </div>
                  
                  <br>
             
        <div class="about-section">

		 <div class="about-pic">
		 <img src = "<?php echo $img[3]; ?>" alt="">
		 </div>
		 <div class="about-text">
			<p> <?php echo $arr[3]; ?></p>
		 </div>	
			<div class="clearfix"></div>	
        </div>
                  <br>
             
        <div class="about-section">

		 <div class="about-pic">
		 <img src = "<?php echo $img[4]; ?>" alt="">
		 </div>
		 <div class="about-text">
			<p> <?php echo $arr[4]; ?></p>
		 </div>	
			<div class="clearfix"></div>	
        </div>
                  <br>
             
        <div class="about-section">

		 <div class="about-pic">
		 <img src = "<?php echo $img[5]; ?>" alt="">
		 </div>
		 <div class="about-text">
			<p> <?php echo $arr[5]; ?></p>
		 </div>	
			<div class="clearfix"></div>	
        </div>
                  <br>
             
        <div class="about-section">

		 <div class="about-pic">
		 <img src = "<?php echo $img[6]; ?>" alt="">
		 </div>
		 <div class="about-text">
			<p> <?php echo $arr[6]; ?></p>
		 </div>	
			<div class="clearfix"></div>	
        </div>
                  <br>
             
        <div class="about-section">

		 <<div class="about-pic">
		 <img src = "<?php echo $img[7]; ?>" alt="">
		 </div>
		 <div class="about-text">
			<p> <?php echo $arr[7]; ?></p>
		 </div>	
			<div class="clearfix"></div>	
        </div>
                  <br>
             
        <div class="about-section">

		 <div class="about-pic">
		 <img src = "<?php echo $img[8]; ?>" alt="">
		 </div>
		 <div class="about-text">
			<p> <?php echo $arr[8]; ?></p>
		 </div>	
			<div class="clearfix"></div>	
        </div>
                  <br>
             
        <div class="about-section">

		 <<div class="about-pic">
		 <img src = "<?php echo $img[9]; ?>" alt="">
		 </div>
		 <div class="about-text">
			<p> <?php echo $arr[9]; ?></p>
		 </div>	
			<div class="clearfix"></div>	
        </div>
                  <br>
             
             
             
             </div>
             
         </div>
         
        </div>
          <div class="col-sm-5">
           <div class="row">
             <form method="post" action= "pattern1.php">

  <div class="form-group">
    <label for="name">NAME :</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
     <span  class="text-danger"><?php echo  $nameError; ?></span>
  </div>
                  
  <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" name="comment" placeholder="Enter Your comment"></textarea>
    <span  class="text-danger"><?php echo  $commentError; ?></span>
</div>

  <input type="submit" name="sub"  value="submit"> 
</form>
              </div>
              
              <br>
                
              <hr size=2>
              
 <div class="row">
               
       <h2>Comments:</h2> 
              <br>
              </div>
          
<?php while ($row5=mysqli_fetch_array( $result5)): ;?>
	<div class="one">
                <h class= "named"><?php echo $row5[0]; ?></h>
                          <br>  
                <p class="commentd"><?php echo $row5[2]; ?></p>
               <br>
                </div>
                <br>

            <?php endwhile; ?>
     
      
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
		