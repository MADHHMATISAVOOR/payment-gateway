<?php
session_start();
?>
<?php
$names =  $_POST['holdname'];
$mails=  $_POST['holdmail'];
$amts=$_POST['holdamount'];
?>
<html>
	<head>
		<title>Education For Girl Child</title>
		<link href='https://fonts.googleapis.com/css?family=Indie Flower' rel='stylesheet'>
		<link rel="stylesheet" href="style.css" type="text/CSS"/>
	</head>
	<body>
		
		<div class="container">
			<span><a href="index.php"><button style="width:190px" type="button">Make another donation</button></a></span>
			<span><h1 style="margin:0px">Transaction Successful</h1></span>
		</div>
		<div class="container">
			<center><img style="width:20%; height:40%" src="images/emoji1.png" alt="happy"></center>
		</div>
		<center><table>
			<tr><td>Name</td><td>Email</td><td>Donated</td></tr>
			<tr>
				<td align="center"><?php echo $names;?></td>
				<td align="center"><?php echo $mails;?></td> 
				<td align="center"><?php echo "INR ". $amts;?></td>
			</tr>
		</table></center>
		<marquee width="100%" direction="right">
			<h3 style="font-family:Indie Flower; font-size:40px">Thankyou for helping!</h3>
		</marquee>
		<div class="container">
		<footer>
			<div>
				<marquee width="100%" direction="left" height="30%">
					Copyright © Education For Girl Child | For any feedback call us at +91000000000
				</marquee>
			</div>
		</footer>
	</body>
</html>
