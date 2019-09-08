<?php
	$msg="";
	@$msg = $_GET['signup'];
?>


<!DOCTYPE html>
<html>
<head>
	<title>Grofers</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<style type="text/css">
	*{
		margin:0px;
		padding: 0px;
	}
	.heading{
		background-color: grey;
		height: 60px;
	}
	.heading span {
		color : black;
		font-size: 30px;
		font-style: italic;
		margin-left: 50px;
		margin-top: 50px;
	}
	.heading img{
		margin-right:10px;
		margin-bottom: 10px;
	}
	.menu {
		float: right;
		margin-right: 20px;
		margin-top: 10px;
	}
	
	.signupPanel{
		margin:auto;
		width: 400px;
		margin-top: 40px;
	}
	input{
		margin-top: 5px;
		margin-bottom: 10px; 
	}
	h2{
		margin-left: 615px;
		margin-top:100px; 
	}
	.msg{
		color: red;
	}
</style>
<script>
	$(document).ready(function() {
		
		$("#home").click(function(){
			window.location.href="index.php";
		});

	});
</script>
<body>
	<div class="heading">
		<span style="font-size: 40px"><img src="images/logo.png" style="width: 30px;">Grofers</span>
		<div class="menu">
			<button class="btn btn-primary" id="home">Login</button>
		</div>
	</div>
	<h2>Sign Up</h2>
	<div class="signupPanel">
		<form method="POST" action="includes/signup.inc.php">
		<input type="email" name="email" placeholder="Email" class="form-control"><?php  if($msg!=""){
					echo "<span class='msg'>Email not available</span>";
			}?>
			<input type="text" name="pname" placeholder="Name" class="form-control">
			<input type="text" name="address" placeholder="Address" class="form-control">
			<input type="text" name="pincode" placeholder="Pincode" pattern="[0-9]{6}" class="form-control">
			<input type="text" name="mobile" placeholder="Mobile"  pattern="[6789][0-9]{9}" class="form-control">
			<input type="password" name="password" placeholder="Password" class="form-control">
			<button class="btn btn-primary form-control" name="signup">Create Account</button>
		</form>
	</div>
</body>
</html>