<?php
session_start();
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
if(!isset($_SESSION['user_id']) && $_SESSION['type'] != "user"){
    header('Location: login.php');
}else{
    //echo $_SESSION['user_id'];exit();
    //header('Location: user_dashboard.php');
    
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
}
mysqli_close($conn);?>
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
    <!-- Start of Input form -->
    <h3>Hi <?php echo $_SESSION['user_id']; ?>, You have logged in successfully.</h3>
    <form method='post' action="">
        <input type="submit" value="Logout" name="but_logout">
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
		    Copyright ©<script>document.write(new Date().getFullYear());</script>2022 All rights reserved | This Portal has been designed and developed by CRIS
		    </p>
		    </div>
		  </div>

        </div>
      </div>
    </footer>
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