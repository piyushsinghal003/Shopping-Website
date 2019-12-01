<?php
include'dbconnect.php';
if(isset($_REQUEST['itemno']))
{
$itemno = mysql_real_escape_string($_REQUEST['itemno']);
$sel = mysql_query("select * from products where itemno='$itemno'");
$arr = mysql_fetch_array($sel);
$item_name = $arr['itemno'];
$item_info = $arr['info'];
}


?>
<html>
<body>
<?php echo $_REQUEST['itemno'];?>
<h1>name:<?php echo $arr['itemno'];?></h1>
<h1>name:<?php echo"$item_info";?></h1>
</body>
</html>





<!DOCTYPE html>
<html>
<head>
<title>Luxury Watches A Ecommerce Category Flat Bootstrap Resposive Website Template | Home :: w3layouts</title>
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
</head>
<body>
	
	
	
	
	
	<?php
include("dbconnect.php");
if($_REQUEST['itemno'])
{
$itemno=$_REQUEST['itemno'];

}
   $sel=mysql_query("select * from products where itemno='$itemno'");
    while($arr=mysql_fetch_array($sel))
   { 
   $i=$arr['itemno'];
      echo "<br> <div class='col-md-9 single-main-left'><div class='sngl-top'>
	  <form method='post'>
	 
	  <center><h2><font face='Lucida Handwriting' size='+1' color='#CC99CC'>".$arr['descr']."</font></h2><br><br>
	<fieldset style='width:80%'><table border='0' >";
  
   echo "<tr>
   <tr><td><img src='images/$i.jpg' height='300' width='300'></td>
   <td><b><font face='Comic sans MS' size='+1'>Item No:</b>".$arr['itemno'].
   "<br><b>Price:</b>Rs&nbsp;".$arr['price'].
   "<br><b>Product Details:<br></b>".$arr['info'].
   " </font><br><br><a href='index.php?con=12 & itemno=$i'><img src='images/MetalPlakDa5new.gif' width='70' height='20'/></a>  </td>
   </tr></table></fieldset></center></form></div></div>";
    }
	?>
	</body>
	</html>