<html>
<body>
<?php
$uname="Piyush Singhal";
$contact = "9713945604";
$email = "pksnghl3@outlook.com";
$user_message = "hello i want to purchase an item for ur company can u plz, guide me.";
$message = "<table><tr>";
$message .="<td>Dear,</td><td></td></tr>";
$message.= "<tr><td>NUCLEUS ELECTRO ENTERPRISES</td><td></td></tr>";
$message.= "<tr><td>Name Of Customer:</td><td>$uname</td></tr>";
$message.= "<tr><td>Contact Number:</td><td>$contact</td></tr>";
$message.="<tr><td></td><td>$user_message</td></tr>";
$message.= "<tr><td></td><td>Please respond as soon as possible.</td></tr>";
$message.= "<tr><td>Enquiry Number:</td><td></td></tr>";
$message.="<tr><td>Thanks</td><td></td></tr></table>";
	echo "$message";			
?>				
</body>
</html>