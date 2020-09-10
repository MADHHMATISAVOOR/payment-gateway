<?php
session_start();
$amt   =  $_POST['Amount'];
?>
<?php
$name =  $_POST['holdname'];
$mail =  $_POST['holdmail'];
?>
<html>
	<header>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
		<title>Education For Girl Child</title>
		<link rel="stylesheet" href="stylepay.css" type="text/css"/>
	</header>
	<body>
		<div class="container">
			<h1>Welcome To Education For Girl Child</h1>
		</div>
		<div class="container">
			<p id="act">Select the payment method</p>
			<center>
				<table>
					<tr><td><form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="3DVAWD4N6PFWC">
					<input type="hidden" name="business" value="<?php echo 'kenandchip@gmail.com'; ?>">
					<input type="hidden" name="currency_code" value="INR">
					<input type='hidden' name='cancel_return' value='http://localhost/Internship/cancel.php'>
					<input type='hidden' name='return' value='http://localhost/Internship/success.php'>
					<br>
					<center><input  type="image" src="images/paypal.png" class="t1"  border="0" name="submit" alt="PayPal – The safer, easier way to pay online!"></center>
					<input type="hidden" name="holdname" value="<?php echo "$name"?>">
					<input type="hidden" name="holdmail" value="<?php echo "$mail"?>">
					<input type="hidden" name="holdamount" value="<?php echo "$amt"?>">
					</form>
					</td></tr>
					<tr><td><h3 style="color:green">OR</h3><td></tr>
					<tr><td>
						<form  action="success.php" method="POST">
							<!-- Note that the amount is in paise = 50 INR -->
							<script
								src="https://checkout.razorpay.com/v1/checkout.js"
								data-key="rzp_test_SswW5VbHbR6fEb"
								data-buttontext="Pay with Razorpay"
								data-name="Education For Girl Child"
								data-description="Donation"
								data-image="images/girls.jpg"
								data-theme.color="#F37254"
								data-amount="<?php echo($amt*100);?>"
								data-name="<?php echo($name);?>"
								data-email="<?php echo($mail);?>"
							>
							</script>
							<input type="hidden" value="Hidden Element" name="hidden">
							<input type="hidden" name="holdname" value="<?php echo "$name"?>">
							<input type="hidden" name="holdmail" value="<?php echo "$mail"?>">
							<input type="hidden" name="holdamount" value="<?php echo "$amt"?>">
							</form>
					</td></tr>
				</table>
			</center>
		</div>
		<footer>
			<div>
				<marquee width="100%" direction="left" height="30%">
					Copyright © Education For Girl Child | For any feedback call us at +91000000000
				</marquee>
			</div>
		</footer>
	</body>
</html>
