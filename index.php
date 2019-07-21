<!DOCTYPE html>
<html lang="en" ng-app = "myModule">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
	</head>
<body ng-controller="myController">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="<a href="https://www.sourcecodester.com">Sourcecodester</a>
" rel="nofollow">https://www.eliasngumbipro.com">Eliasngumbipro</a>
</a>		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class ="text-primary">PHP - Simple User Login Using AngularJS</h3>
		<hr style = "border-top:1px dotted #000;"/>
		<div class="col-md-3">
			<h5>Username:admin</h5>
			<h5>Password:admin</h5>
		</div>
		<div class="col-md-6">
			<h3>User Login</h3>
			<br />
			<form ng-submit="userLogin()">
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" ng-model="username" ng-required="true"/>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" ng-model="password" ng-required="true"/>
				</div>
				<center><div class="text-danger" ng-model="result">{{result}}</div></center>
				<br />
				<div class="form-group">
					<button class="btn btn-primary form-control"><span class="glyphicon glyphicon-log-in"></span> Login</button>
				</div>
			</form>
		</div>
	</div>
 
<script src="js/angular.js"></script>	
<script src="js/script.js"></script>	
</body>	
</html>
