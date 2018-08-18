<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Angular JS - Login|Register</title>
	<link rel="stylesheet" href="css/style.css">
	<!-- Bootstrap-4.1.3 CSS -->
	<link rel="stylesheet" href="css/bootstrap-4.1.3.min.css">
	<!-- Angular JS-1.7.2  -->
	<script type="text/javascript" src="js/angular-1.7.2.min.js"></script>
</head>
<body>
<br>
<h2 align="center">Angular JS Login-Register App</h2>
<br>
<div ng-app="login_register_app" ng-controller="login_register_controller" class="container form-style">
	<?php if(!isset($_SESSION['name'])) { ?>
	<div class="alert {{alertClass}} alert-dismissible" ng-show="alertMsg">
		<a href="#" class="close" ng-click="closeMsg()" alert-label="close">&times;</a>
		{{alertMessage}}
	</div>
	<div class="panel panel-default" ng-show="login_form">
		<div class="panel-heading">
			<h3 class="panel-title">login</h3>
		</div>
		<div class="panel-body">
			<form method="post" ng-submit="submitLogin()">
				<div class="form-group">
					<label>Enter Your Email</label>
					<input type="text" name="email" ng-model="loginData.email" class="form-control">
				</div>
				<div class="form-group">
					<label>Enter Your Pssword</label>
					<input type="password" name="password" ng-model="loginData.password" class="form-control">
				</div>
				<div class="form-group" align="center">
					<input type="submit" name="login" value="Login" class="btn btn-primary">
					<input type="button" name="register_link" class="btn btn-primary btn-link" ng-click="showRegister()" value="Register">
				</div>
			</form>
		</div>
	</div>
	<div class="panel panel-default" ng-show="register_form">
		<div class="panel-heading">
			<h3 class="panel-title">Register</h3>
		</div>
		<div class="panel-body">
			<form method="post" ng-submit="submitRegister()">
				<div class="form-group">
					<label>Enter Your Name</label>
					<input type="test" name="name" ng-model="registerData.name" class="form-control">
				</div>
				<div class="form-group">
					<label>Enter Your Email</label>
					<input type="test" name="email" ng-model="registerData.email" class="form-control">
				</div>
				<div class="form-group">
					<label>Enter Your Password</label>
					<input type="password" name="password" ng-model="registerData.password" class="form-control">
				</div>
				<div class="form-group" align="center">
					<input type="submit" name="register" value="Register" class="btn btn-primary">
					<input type="button" name="login_link" class="btn btn-primary btn-link" ng-click="showLogin()" value="Login">
				</div>
			</form>
		</div>
	</div>
	<?php } else { ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">
					<h3 class="panel-title">Welcome to the App</h3>
				</div>
				<div class="panel-body">
					<h1>Hello! <?=$_SESSION['name'];?></h1>
					<a href="logout.php">logout</a>
				</div>
			</div>
		</div>

	<?php } ?>
</div>
</body>
</html>

<script type="text/javascript">
	var app = angular.module('login_register_app', []);
	app.controller('login_register_controller', function($scope, $http){
		$scope.closeMsg = function(){
			$scope.alertMsg = false;
		}
		$scope.login_form = true;
		$scope.showRegister = function(){
			$scope.login_form = false;
			$scope.register_form = true;
			$scope.alertMsg = false;
		}
		$scope.showLogin = function(){
			$scope.register_form = false;
			$scope.login_form = true;
			$scope.alertMsg = false;
		}
		$scope.submitRegister = function(){
			$http({
				method:"POST",
				url:"register.php",
				data:$scope.registerData
			}).then(function(response){
				$scope.alertMsg = true;
				if(response.data.error != ''){
					$scope.alertClass = 'alert-danger';
					$scope.alertMessage = response.data.error;
				}else{
					$scope.alertClass = 'alert-success';
					$scope.alertMessage = response.data.message;
					$scope.registerData = {};
				}
			});
		};
		$scope.submitLogin = function(){
			$http({
				method :"POST",
				url:"login.php",
				data:$scope.loginData
			}).then(function(response){
				if(response.data.error != ''){
					$scope.alertMsg = true;
					$scope.alertClass = 'alert-danger',
					$scope.alertMessage = response.data.error
				}else{
					location.reload();
				}
			});
		}
	});
</script>