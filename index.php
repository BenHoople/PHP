<!DOCTYPE html>

<html>
<head>
	<title>Konnect</title>
	<link rel="styleSheet" href="css/bootstrap.css">
</head>
<body>
<div class="col-3">
	<h1>Konnecting!</h1>
	<h4>konnecting you to professionals and professionals to you!</h4>
	<form id="logIn" method="post">
		<div>
			<input type="text" name="email" placeholder="Enter Your Email">
		</div>
		<div>
			<input type="text" name="password" placeholder="Enter Your Password">
		</div>
		<br>
		<div>
			<input type="submit" name="logIn" value="Log-In">
		</div>
	</form>
<br>
	<div>
		<div>
			<p>Dont have an account? Sign up now!</p>
		</div>
		<div>
			<a href="accountCreation.php"><input type="submit" name="createAccount" value="Create Account"></a>
		</div>
	</div>

</div>

</body>
</html>
<?php
	
	if(isset($_POST['logIn'])){
		require("include/connection.php");

		$email = trim($_POST['email']);
		$password = trim($_POST['password']);

		$sql = "SELECT * from users where email = '{$email}';";

		$cmd=$conn->prepare($sql);
		$cmd->execute();

		$logInCredentials = $cmd->fetch();

		if(($logInCredentials != null) && (password_verify($password, $logInCredentials['password']))){

			session_start();
			echo'heres where we start';
			$_SESSION['id']= $logInCredentials['id'];

			echo('made it this far');

			$_SESSION['email'] = $logInCredentials['email'];
			$_SESSION['firstName'] = $logInCredentials['firstName'];
			$_SESSION['lastName'] = $logInCredentials['lastName'];
			$_SESSION['location'] = $logInCredentials['location'];

			echo($_SESSION['email']);
			echo($_SESSION['firstName']);
			echo($_SESSION['lastName']);
			echo ($_SESSION['id']);
			header("refresh: 5; url=userAccount.php?");
			$conn = null;
		}else{
			echo('<p>Invalid Log-In</p>');
		}
}
?>