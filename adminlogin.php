<?php
	$msg="";
	@$msg = $_GET['login'];
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
		font-size: 30px;
		font-style: italic;
		margin-left: 50px;
		margin-top: 25px;
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
	.loginPanel{
		float: right;
		margin-right: 150px;
		width: 300px;
		position: relative;
		margin-top: 200px;
	}
	input{
		margin-top: 5px;
		margin-bottom: 5px; 
	}
	.msg{
		color: red;
	}

</style>
<script >
	$(document).ready(function() {
		
		$("#home").click(function(){
			window.location.href="index.php";
		});
	});

</script>
</head>
<body>
	<div class="heading">
		<span style="font-size: 40px;"><img src="images/logo.png" style="width: 30px;">Grofers</span>
		<div class="menu">
			<button class="btn btn-primary" id="home">Home</button>
			
		</div>
	</div>
		<div class="body">
			<image src="images/admin.png" style="float:left;width:400px;height:400px;margin-left:150px;margin-top:100px"/>
			<div class="loginPanel">
				<form method="POST" action="includes/adminlogin.inc.php">
					<input type="email" name="email" placeholder="Email" class="form-control">
					<input type="password" name="password" placeholder="Password" class="form-control">
					<?php  if($msg!=""){
					echo "<span class='msg'>Invalid Request</span>";
			}?>
					<button class="btn btn-primary form-control" name="login">Login</button>
				</form>
		</div>
	</div>
</body>
</html>