<?php 
session_start();

 if (isset($_POST['Submit'])) { 
 $_SESSION['FirstName'] = $_POST['FirstName'];
 $_SESSION['Email']=$_POST['Email'];
 } 

?>
<html>
<head>
	<title>Education For Girl Child</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css" type="text/CSS"/>
	
</head>
<body>
	<div class="container">
			<h1>Welcome To Education For Girl Child.</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2><center>Personal Details</center></h2>
					</div>
					<div class="panel-body">
						<form autocomplete="off" id="form" action="amount.php" method="post" onsubmit="return formValidation();">
							<div class="field">
								<label for="name">Name</label><br>
								<input type="text" name="FirstName" placeholder="Name" id="n1" autocomplete="off"/>
							</div>
							<br>
						   <div class="field">
								 <label for="email">Email</label><br>
							  <input type="text" name="Email" placeholder="Email" id="email1" autocomplete="off"/>
							</div>
							
							<button style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif; margin:10px -2px; background-color:#337AB7; color:white; border:none; width:90px; height: 40px;" type="submit" value="submit">Confirm</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript">

function formValidation() {
			var a,b,e;
			
			a=document.getElementById("n1").value;
		    e=document.getElementById("email1").value;
		    const submitBtn = document.getElementById('submit');
		    var mailformat = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
			var nameformat=/^[A-Za-z_]{1,32}$/;
		   if(mailformat.test(e)==false)
		{
		alert("Invalid E-mail");
		return false;
		}
		
		else if(nameformat.test(a)==false)
		{
		alert("Invalid format of Name. Re-Enter");
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
