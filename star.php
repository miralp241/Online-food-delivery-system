<?php
	session_start();
	$email = $_SESSION['email'];
    include_once 'includes/dbh.inc.php';
	$count = "SELECT * from users where email = '$email'";
    $result = mysqli_query($conn,$count);
    $x = mysqli_num_rows($result);
    if($x!=1){
        header("Location: index.php?login=false");
        exit();
    }
    $row = mysqli_fetch_array($result);
    $star = $row['star'];
    $pname = $row['pname'];
    $email1 = $row['email'];
?>
<html>
<head>
	<title>Grofers</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<style type="text/css">
	*{
		margin:0px;
		padding: 0px;
	}
	.heading{
		background-color: #eed;
		height: 60px;
	}
	.message {
		color : black;
		font-size: 20px;
		font-family: 'Pacifico';
		margin-left: 50px;
		margin-top: 25px;
        color: #8A8383;
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
	.search{
		margin-left: 350px;
	}

	.card{
		width: 310px;
		float: left;
		margin: 1%;
		margin-top: 1%;
	}
</style>
<script type="text/javascript">

		$(document).ready(function(){
            
            $("#logout").click(function(){
			    window.location.href="includes/logout.php";
		    });
            $("#star").click(function(){
                alert("Star membership availed");
                window.location.href="includes/star.inc.php";
		    });
	});
</script>
<body>
	<nav class="navbar navbar-expand-sm bg-light navbar-light">
		<ul class="navbar-nav">
		<li class="nav-item">
		      <a class="nav-link" href="userpage.php">Home</a>
		    </li>
            <li class="nav-item">
		      <a class="nav-link" href="mycart.php">My Cart</a>
		    </li>
			<li class="nav-item">
		      <a class="nav-link" href="myorders.php">My Orders</a>
		    </li>
            <?php if($star==0){?><li class="nav-item">
		      <a class="nav-link" href="star.php"><b>Star Membership</b></a>
		    </li><?php } ?>

			<li class="nav-item">
		      <a class="nav-link" id="logout" style="cursor:pointer">Logout</a>
		    </li>
		</ul>
	</nav>
    <h5 style="float:right;text-align:right;margin-right:2em"><?php echo $pname ?></h5>	
	<p></p><p>
	<div class="container">
    <p>
        <span class="message"><p class="message">Registering as a star member will provide free delivery on all orders for a year.<p class="message">Avail star membership at Rs. 900/year.</span>
        <p>
        <button class="btn btn-primary" id="star" style="margin-left:3em" id="buystar">Buy membership</button>
        
    </div>

</body>
</html>
