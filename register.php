<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="ritu_project";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
if (isset($_REQUEST['submit'])) {

$name =  $_REQUEST['name'];
$email = $_REQUEST['email'];
$mobile_no =  $_REQUEST['mobile_no'];
$password = $_REQUEST['password'];
$user_id = rand('00000','99999');
    
// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO user (`name`, `email`, `mobile_no`,`password`,`user_id`)  VALUES ('$name', 
    '$email','$mobile_no','$password','$user_id')";
    
if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully. Your UserId is ".$user_id."</h3>"; 

    
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
}
}  
// Close connection
mysqli_close($conn);
?>
<!doctype html>
	<html lang="en">
	
	<head>
	<title>Railway Commodity Reservation System.</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">
	
	<link rel="stylesheet" href="commodity/fonts/icomoon/style.css">

	
	<link rel="stylesheet" href=" commodity /css/bootstrap.min.css">

	<link rel="stylesheet" href=" commodity /css/jquery.fancybox.min.css">

	<link rel="stylesheet" href=" commodity /css/owl.carousel.min.css">

	<link rel="stylesheet" href=" commodity /css/owl.theme.default.min.css">

	<link rel="stylesheet" href=" commodity /fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href=" commodity /css/aos.css">

	<link rel="stylesheet" href="cute-alert/cute-alert.css">

	<link rel="stylesheet" href="cute-alert/sticky-alert.css">

	<link rel="stylesheet" href="cute-alert/openextnlink.css">

	<link rel="stylesheet" href="cute-alert/style_red.css">

	
	<!-- MAIN CSS -->
	<link rel="stylesheet" href=" commodity /css/style.css">

	
	</head>
	<script src="js/jquery-3.3.1.min.js"></script>

	<Script type="text/javascript" src="cute-alert/cute-alert.js"></script>

	<Script type="text/javascript" src="jscript/common/functions.js"></script>
    <div id="overlayer"></div>
	<div class="loader">
	<div class="spinner-border text-primary" role="status">
	<span class="sr-only">Loading...</span>
	</div>
	</div>
	
	<div class="site-wrap" id="home-section">
	
	<div class="site-mobile-menu site-navbar-target">
	<div class="site-mobile-menu-header">
	<div class="site-mobile-menu-close mt-3">
	<span class="icon-close2 js-menu-toggle"></span>
	</div>
	</div>
	<div class="site-mobile-menu-body"></div>
	</div>
	
	
	<div class="top-bar">
	<div class="container">
	<div class="row">
	<div class="col-12">
	<a href="#" class=""><span class="d-none d-md-inline-block"><?php
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
echo date('d-m-Y H:i:s');
?></span></a>
	<span class="mx-md-2 d-inline-block"></span>
	<span class="mr-2 mainheadlbl d-none d-sm-none d-md-inline-block">Text Size</span><span class="font-smallsize d-none d-sm-none d-md-inline-block" onclick="decFontSize();">A-</span><span class="font-midsize d-none d-sm-none d-md-inline-block" onclick="setOrigFontSize();">A</span><span class="font-bigsize d-none d-sm-none d-md-inline-block" onclick="incFontSize();">A+</span> 
	<div class="float-right">
	
	</div>
	
	</div>
	
	</div>
	
	</div>
	</div>
	
	<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
	
	<div class="container">
	<div class="row align-items-center position-relative">
	
	
	<div class="site-logo"
	id="railLogo">
	<a href="" target="new"><img

	alt="" src="img/rlylogo1.png" style="height:60px;width:60px;margin-right:1rem;"></a>

	</div>
	
	<div class="col-12">
	<nav class="site-navigation text-right ml-auto " role="navigation">
	
	<ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
	<li><a href="index.php" class="nav-link">Home</a></li>

	<li><a href="index.php#about-section" class="nav-link">About Us</a></li>
	<li><a href="login.php" class="nav-link">User Login</a></li>
	<li><a href="admin_login.php" class="nav-link">Admin Login</a></li>
	<li><a href="index.php#faq-section" class="nav-link">FAQ</a></li>
	<li><a href="index.php#contact-section" class="nav-link">Contact</a></li>
	</ul>
	
	<img src="img/Emblem_of_India.png" class="d-sm-none d-none d-md-inline-block" style="position:absolute;top:0;height:60px;width:60px;right:2;" />
	</nav>
	
	</div>
	
	<div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
	
	</div>
	</div>
	
	</header>
    <form name="myForm" method="post">
    <br><br>
    <table align="center" cellpadding="0" cellspacing="0">
    <tbody><tr bgcolor="#95A5A6">
		<td><img src="img/rly-logo1.jpg"></td>
		<td align="center" width="640"><font color="white" size="+2"><b>User Registration Form</b></font></td>
		<td><img src="img/images1.jpg" height="90"></td>
	</tr>
	</tbody></table>
    <table style="border-bottom:solid #dddddd 2px;" bgcolor="white" align="center" width="800" cellspacing="0" cellpadding="0">
    <tbody><tr bgcolor="#32AADA">
    	<td style="padding-top: 5px;padding-bottom: 2px;">&nbsp;&nbsp;
    		<a href="index.php"><img src="img/home0.jpg" width="55" height="40"></a>&nbsp;&nbsp;
    	</td>
    </tr>
    <tr>
		<td style="padding-left: 20px;"><br>You are here:
		<a href="index.php" style="text-decoration: none;">Home </a>&gt;&gt;
		<a style="text-decoration: none;font-size: 20px;">User Registration Form</a>
		</td>
	</tr>
    </tbody></table>
    <!-- Start of Input form -->
    <table width="800" align="center" cellpadding="0" cellspacing="0">
		<tbody><tr>
	  		 <td bgcolor="white" align="center" width="400" height="300">
	  		 		<table border="0" cellspacing="0" cellpadding="3">
	       			<tbody><tr> 
 		       			<td align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>Name:</b></font></td>
 		       			<td><input type="text" name="name" id="name" value="" required required></td>
 		       			
	       			</tr>	
                       <tr> 
 		       			<td align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>Email Id:</b></font></td>
 		       			<td><input type="text" name="email" id="email" value=""></td>
 		       			
	       			</tr>	
                       <tr> 
 		       			<td align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>Mobile No:</b></font></td>
 		       			<td><input type="text" name="mobile_no" id="mobile_no" value="" maxlength="10" required></td>
 		       			
	       			</tr>	

           			<tr id="otp1" >   
  		       			<td align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>Enter Password:</b></font></td>
  		       			<td><input type="password" name="password" id="password" value="" maxlength="6" required></td>
  		       			<td></td>
	       			</tr>
		   			<tr>
            			<td></td>
						<td><input type="submit" name="submit" id="submit" value="Register"></td>
						<td></td>
          			</tr>
					</tbody></table>
			    </td>
			<td style="border-left:solid #dddddd 2px;" width="300" height="300" bgcolor="#FDFEFE" valign="top"><br>&nbsp;&nbsp;<b>Instructions for user Login:</b><br><br>
			&nbsp;&nbsp;&nbsp;&nbsp;a. Enter Name, email id, mobile no and password to register<br>		
			</td>
			</tr>
			
			<tr bgcolor="#4AA9B8" height="30">
				<td colspan="2">
				</td>
			</tr>
</tbody></table>

	<footer class="site-footer">
	<div class="container">
	<div class="row">
	<div class="col col-lg-2 col-sm-4" align="center">
  </div>
	<div class="col col-lg-2 col-sm-4" align="center">
	<a href="javascript:showDisclaimer()">Disclaimer</a>

	</div>
	<div class="col col-lg-2 col-sm-4" align="center">
	<a href="javascript:showPrivacyPolicy()">Privacy Policy </a>

	</div>
	<div class="col col-lg-2 col-sm-4" align="center">
	<a href="javascript:showCopyright()" >Copyright Policy</a>

	</div>
	<div class="col col-lg-2 col-sm-4" align="center">
	<a href="sitemap.jsp" target="new">Sitemap</a>
	 </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
		  <div class="col-md-12">
		    <div class="border-top pt-5">
		      <p class="copyright">
		    Copyright ©<script>document.write(new Date().getFullYear());</script>2022 All rights reserved | This Portal has been designed and developed by CRIS
		    </p>
		    </div>
		  </div>

        </div>
      </div>
    </footer>

</form>
    <footer class="site-footer">
	<div class="container">
	<div class="row">
	<div class="col col-lg-2 col-sm-4" align="center">

	</div>
	<div class="col col-lg-2 col-sm-4" align="center">
	<a href="javascript:showDisclaimer()">Disclaimer</a>

	</div>
	<div class="col col-lg-2 col-sm-4" align="center">
	<a href="javascript:showPrivacyPolicy()">Privacy Policy </a>

	</div>
	<div class="col col-lg-2 col-sm-4" align="center">
	<a href="javascript:showCopyright()" >Copyright Policy</a>

	</div>
	<div class="col col-lg-2 col-sm-4" align="center">
	<a href="sitemap.jsp" target="new">Sitemap</a>

	</div>
	</div>
	<div class="row pt-5 mt-5 text-center">
	<div class="col-md-12">
	<div class="border-top pt-5">
	<p class="copyright">
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Portal has been designed and developed by RITUNATH
	</p>
	</div>
	</div>

	
	
	</div>
	
	
	<script src="js/popper.min.js"></script>

	<script src="js/bootstrap.min.js"></script>

	<script src="js/owl.carousel.min.js"></script>

	<script src="js/jquery.sticky.js"></script>

	<script src="js/jquery.waypoints.min.js"></script>

	<script src="js/jquery.animateNumber.min.js"></script>

	<script src="js/jquery.fancybox.min.js"></script>

	<script src="js/jquery.easing.1.3.js"></script>

	<script src="js/aos.js"></script>

	
	<script src="js/main.js"></script>

	

    </body>
    </html>