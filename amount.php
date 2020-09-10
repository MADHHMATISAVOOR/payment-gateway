<?php 
session_start();
$cname =  $_POST['FirstName'];
$email =  $_POST['Email'];
 if (isset($_POST['Submit'])) { 
 $_SESSION['Amount']=$_POST['Amount'];
 } 

?>
<html>
	<header>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
		<title>Education For Girl Child</title>
		<link rel="stylesheet" href="stylepay.css" type="text/css"/>
	</header>
	<body>
		<div class="container">
			<h1>Welcome To Education For Girl Child <?php echo "$cname"?></h1>
			<p>Select the amount to donate</p>
			
		</div>
		<div class="container">
		<center>
			<input type="button" id="button" onclick="fillvalue50()" value="50">
			<input type="button" id="button" onclick="fillvalue100()" value="100">
			<input type="button" id="button" onclick="fillvalue500()" value="500">
		</center>
		</div>
		<div class="container fillamount">
		<script type="text/Javascript">
			function fillvalue50()
			{
				document.getElementById("enter").value=50;
			}
			function fillvalue100()
			{
				document.getElementById("enter").value=100;
			}
			function fillvalue500()
			{
				document.getElementById("enter").value=500;
			}
		</script>
		<center>
		<h3>OR</h3>
		<form action="payments.php" method="post" onsubmit="return formvalid();">
			<input type="number" id="enter" name="Amount" placeholder="Enter amount" value=""><br>
			<input type="hidden" name="holdname" value="<?php echo "$cname"?>">
			<input type="hidden" name="holdmail" value="<?php echo "$email"?>">
			<button id="confirm" type="submit" value="submit">Confirm</button>
		</form>
		</center>
		</div>
		<script type="text/Javascript">
			function formvalid()
			{
				var d=document.getElementById("enter").value;
				var amtformat=/^[0-9]*$/;
				if(amtformat.test(d)==false || d=="")
				{
				alert("Invalid Amount. Re-Enter");
				return false;
				}
				
				else		
				return true;
			}
		</script>
		<footer>
			<div>
				<marquee width="100%" direction="left" height="30%">
					Copyright © Education For Girl Child | For any feedback call us at +91000000000
				</marquee>
			</div>
		</footer>
	</body>
</html>
