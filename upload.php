	<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>InstaShare</title>
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
	nav form{
		margin-left: 350px;
	}
	.upload{
		margin: auto;
		margin-top: 80px;
		margin-right: 150px;
		float: right;
		width: 400px;
	}
	.upload input{
		margin-top: 10px;
		margin-bottom: 10px;
	}

</style>
<script type="text/javascript">
	function logout(){
		window.location.href="includes/logout.php";
	}
</script>
<body>
	<nav class="navbar navbar-expand-sm bg-light navbar-light">
		<ul class="navbar-nav">
		<li class="nav-item">
		      <a class="nav-link" href="myuploads.php">Home</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="upload.php"><b>Upload</b></a>
		    </li>
				<li class="nav-item">
		      <a class="nav-link" onclick="logout()" style="cursor:pointer">Logout</a>
		    </li>
		</ul>
	</nav>
	<image src="images/Tulips.jpg" style="float:left;width:400px;height:400px;margin-left:100px;margin-top:40px"/>
			
	<div class="upload">
		<form method="post" action="includes/upload.inc.php" enctype="multipart/form-data">
			<div class="input-group"> 
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="image">
                <label class="custom-file-label" for="inputGroupFile01">Image</label>
              </div>
            </div>
			<input type="text" name="tags" class="form-control" placeholder="Hashtag">
			<button name="upload" class="btn btn-success">Upload</button>
		</form>
	</div>
</body>
</html>