<?php
include'dbconnect.php';
	
		$row = mysql_query("select * products");
		$con=$catg =$subcatg=$se = 0;
		$_REQUEST['con']=$con;
		$_REQUEST['catg']=$catg;
		$_REQUEST['subcatg']=$subcatg;
		$_REQUEST['se']=$se;
		
?>

<!DOCTYPE html>
<html>
<head>

<title>NUcleus Electro Enterprises</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="js/simpleCart.min.js"> </script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="js/jquery.easydropdown.js"></script>
<style>


</style>			
</head>
<body> 
	<!--top-header-->
	<div class="top-header">
		<div class="container">
			<div class="top-header-main">
			<div class="logo">
			<a href="index2.php"><h1 style="color:white">NUCLEUS ELECTRO ENTERPRISES</h1></a>
			</div>
			
				<div class="col-md-6 top-header-left">				
					<div class="drop">
						
					</div>					
				</div>
				
				
			</div>
		</div>
	</div>
	<!--top-header-->
	
	<!--start-logo-->
	<div class="logo">
	
	<img src="./images/logo1.jpg" width="150px" height="90px"/>
	<h3>DEPENDABLE SYSTEMS</h3>
	
	<hr>
	<div class="header-bottom">
		<div class="container">
			<div class="header">
				<div class="col-md-9 header-left">
				<div class="top-nav">
					<ul class="memenu skyblue"><li class="active"><a href="home.php?con=1">Home</a></li>
						<li class="grid"><a href="index2.php?con=1">About Us</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Shop</h4>
										<ul>
											<li><a href="about.php">Company Profile</a></li>
											<li><a href="about.php">Our Customers</a></li>
											<li><a href="about.php">Our Certifications</a></li>
										</ul>
									</div>
								
								
								</div>
							</div>
						</li>
						<li class="grid"><a href="#">Product Zone</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Manufacturing</h4>
										<ul>
											
											<li><a href="stabilisers.php?catg=1 & subcatg=stabiliser">Servo Voltage Stabiliser</a></li>
											<li><a href="chargers.php?catg=1 & subcatg=chargers">Battery Chargers</a></li>
											<li><a href="ups-inverters.php?catg=1 & subcatg=ups-inverters">UPS/Inverters</a></li>
											<li><a href="transformers.php?catg=1 & subcatg=transformers">Constant Voltage Transformers</a></li>
											<li><a href="led.php?catg=1 & subcatg=led">LED Lights</a></li>
											
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Supplying</h4>
										<ul>
											<li><a href="products.html">Automatic Voltage Stabiliser</a></li>
											<li><a href="products.html">Servo Voltage Stabiliser</a></li>
											<li><a href="products.html">Battery Chargers</a></li>
											<li><a href="products.html">UPS/Inverters</a></li>
											<li><a href="products.html">Constant Voltage Transformers</a></li>
											<li><a href="products.html">LED Lights</a></li>
											
										</ul>
									</div>

								</div>
							</div>
						</li>
						<li class="grid"><a href="#">Enquiry</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Shop</h4>
										<ul>
											<li><a href="products.html">Products</a></li>
											<li><a href="products.html">Applications</a></li>
											<li><a href="products.html">Budget</a></li>
											<li><a href="index2.php?con=2">Contact</a></li>
											<li><a href="products.html">Address</a></li>
											<li><a href="products.html">Email</a></li>
										
										</ul>
									</div>
									
									
								</div>
							</div>
						</li>
						<li class="grid"><a href="typo.html">Blog</a>
						</li>
						<li class="grid"><a href="contact.php?con=2">Contact</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 header-right"> 
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>

		</div>
	</div>
	</div>
	<div class="logo">
<?php

if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='stabiliser')
{
include("stabilisers.php");
}
}
 
 if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='chargers')
{
include("chargers.php");
}
}
 
  if($_REQUEST['con']==2)
 {
  include'contact.php';
 }
 if($_REQUEST['con']==1)
 {
 include'home.php';
 }
 
 if($_REQUEST['con']==14)
 {
  include'single.php';
 }
 
 /*
 if(!($_REQUEST['catg'])and !($_REQUEST['con'])and !($_REQUEST['se']))
{
include("home.php");
} 
*/

/*
if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='chargers')
{
include("chargers.php");
}
}

if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='transformers')
{
include("transformers.php");
}
}

if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='ups-inverters')
{
include("ups-inverters.php");
}
}

if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='led')
{
include("led.php");
}
}

if($_REQUEST['con']==14)
 
 {
	include("single.php");
 }
 */
 

 
 ?>
 </div>
 
<!--information-starts-->
	<div class="information">
		<div class="container">
			<div class="infor-top">
				<div class="col-md-3 infor-left">
					<h3>Follow Us</h3>
					<ul>
						<li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
						<li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
						<li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>Information</h3>
					<ul>
						<li><a href="#"><p>Specials</p></a></li>
						<li><a href="#"><p>New Products</p></a></li>
						<li><a href="#"><p>Our Stores</p></a></li>
						<li><a href="contact.html"><p>Contact Us</p></a></li>
						
					</ul>
				</div>
				
				<div class="col-md-3 infor-left">
					<h3>About Us</h3>
					
					<ul>
						<li><a href="account.html"><p>Company Profile</p></a></li>
						<li><a href="#"><p>Our Customers</p></a></li>
						<li><a href="#"><p>Our Certifications</p></a></li>
						
						
					</ul>
				</div>
				
				<div class="col-md-3 infor-left">
					<h3>Store Information</h3>
					<h4>NUCLEUS ELECTRO ENTERPRISES,
						<span>DEPENDABLE SYSTEMS,</span>
						jahagirabad ,bhopal</h4>
					<h5>+955 123 4567</h5>	
					<p><a href="mailto:example@email.com">nucleus@example.com</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--information-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-6 footer-left">
					<form>
						<input type="text" value="Enter Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}">
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<div class="col-md-6 footer-right">					
					<p>© 2016 Stickle Computers. All Rights Reserved |</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</body>
</html>
