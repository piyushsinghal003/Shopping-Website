<!DOCTYPE html>
<html>
<head>
<title>NUCLEUS ELECTRO ENTERPRISES |about us</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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

	<!--top-header-->
	<!--start-logo-->
	<div class="logo">
	<img src="images/LOGO5.jpg" width="1320px" height="100px">	
	<div class="header-bottom">
		<!-- header start-->
			<div class="header">
				<div class="col-md-9 header-left">
				<div class="top-nav">
					<ul class="memenu skyblue">
					<li class="active"><a href="index.php">Home</a></li>
						<li class="grid"><a href="about.php">About Us</a>
							
						</li>
						<li class="grid"><a href="#">Product Zone</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Manufacturing</h4>
										<ul>
											
											<li><a href="stabilisers.php">Servo Voltage Stabiliser</a> </li>
											<li><a href="voltage-stab.php">Voltage Stabiliser</a> </li>
											<li><a href="chargers.php">Battery Chargers</a></li>
											<li><a href="ups-inverters.php">UPS/Inverters</a></li>
											<li><a href="transformers.php">Transformers</a> </li>
											<li><a href="cvt.php">Constant Voltage Transformers</a></li>
											<li><a href="led.php">LED Lights</a></li>
											<li><a href="welding.php">Welding Machine</a></li>
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Marketing</h4>
										<ul>
											<li><a href="exide.php">EXIDE Battery Distr.</a></li>
											<li><a href="">Solar Products</a>
												<div class="mepanel">
								                  <div class="row">
									               <div class="col1 me-one">
								                      <h4>Solar Products</h4>
										<ul>
											
											<li><a href="panels.php">i. Solar Panels</a> </li>
											<li><a href="controllers.php">ii. Solar Controller</a></li>
											<li><a href="street-light.php">iii. Solar Street Lights</a></li>
											<li><a href="plants.php">iv. Roof Top Plants</a></li>
											
										</ul>
									</div>
									</li>
											
										</ul>
									</div>

								</div>
							</div>
						</li>
						<li class="grid"><a href="enquiry.php">Enquiry</a>

						</li>
						
						<li class="grid"><a href="contact.php">Contact</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 header-right"> 
				<div class="search-bar">
				<form action="search.php" method="get">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value=""name="search" >
					</form>
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>

		</div>
	</div>
	<!-- header end-->
	</div>
	</div>
	
<?php mysql_connect("localhost","root","")or die("could not connect");
mysql_select_db("luxury")or die("could not find db!");
$output = '';

if(isset($_REQUEST['search']))
{
$searchq = $_REQUEST['search'];
$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
$query = mysql_query("SELECT * FROM products WHERE subcatg LIKE '%$searchq%' ")
or die("could not search");
$count = mysql_num_rows($query);
if($count ==0)
{
$output = 'there is no search result!';
}
else
{
while($row = mysql_fetch_array($query))
{
$itemname = $row['itemno'];
$info = $row['info'];
$output .='<div><a href="stabilisers.php">('.$itemname.')</a><br> '.$info.'<div><br>';
}
}
}
?>

<diV>
<?php print("$output") ;?>
</div>

	
	
	<!--information-starts-->
	<div class="background">
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
					<h3>OUR PRODUCTS</h3>
					<ul>
						<li><a href="#"><p>Stabilisers in all ranges</p></a></li>
						<li><a href="#"><p>Inverters</p></a></li>
						<li><a href="#"><p>Battery Chargers</p></a></li>
						<li><a href="#"><p>Welding Machine</p></a></li>
						<li><a href="#"><p>Transformers</p></a></li>
						
						
					</ul>
				</div>
				
				<div class="col-md-3 infor-left">
					<h3>Our Customers</h3>
					
					<ul>
						<li><a href="about.php"><p>BHEL,SBI</p></a></li>
						<li><a href="about.php"><p>M.P.E.B.,OPTEL</p></a></li>
						<li><a href="about.php"><p>ALL INDIA RADIO</p></a></li>
						<li><a href="about.php"><p>RAILWAYS</p></a></li>
						
						
					</ul>
				</div>
				
				<div class="col-md-3 infor-left">
				
					<h3>Company Information</h3>
					<h4>NUCLEUS ELECTRO ENTERPRISES,
						<span>DEPENDABLE SYSTEMS,</span>
						NUCLEUS House,Ram Bhawan,
						jahagirabad ,Bhopal-462008</h4>
					<h5>M.:+919425015486 ,Ph.:2675675</h5>	
					<h5>Fax:0755-2572180</h5>
					<h5>mail@ <a href="enquire.php">nucleus_nee@rediffmail.com</a>,
					      <a href="enquire.php">  vivek7b@yahoo.com </a></h5>
					
				</div>
				<div class="clearfix"></div>
			</div>
			<div><p class="designer">Designed & Developed by Stickle Computers|</p>
			</div>
		</div>
	</div>
	<!--information-end-->
	</div>
	<!--information-end-->
	<!--footer-starts-->
	</body>
	</html>
