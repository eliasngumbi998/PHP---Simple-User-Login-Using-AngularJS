<!DOCTYPE html>
<?php
	session_start();
	if(!ISSET($_SESSION['user_id'])){
		header("location:index.php");
	}
?>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<a class="navbar-brand" href = "<a href="https://www.sourcecodester.com">Sourcecodester</a>
" rel="nofollow">https://www.eliasngumbipro.com">Eliasngumbipro</a>
</a>			</div>
		</nav>
		<div class="col-md-3"></div>
		<div class="col-md-6 well">
			<h3 class  = "text-primary">PHP - Simple User Login Using AngularJS</h3>
			<hr style = "border-top:1px dotted #000;"/>
			<center><h3>WELCOME</h3></center>
			<a class = "btn btn-danger" href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a>
		</div>
	</body>
</html>
