<?php
	require ("include/header.php");
	require ("include/findUserInfo.php");
?>

	<form id="logIn" method="post">
		<div>
			<input type="text" name="email" placeholder="Enter Your Email" required="">
		</div>
		<div>
			<input type="text" name="password" placeholder="Enter Your Password" required="">
		</div>
		<div>
			<input type="submit" name="logIn" value="Log-In">
		</div>
	</form>
<?php
	if(isset($_POST['logIn'])){
		$enteredEmail = $_POST['email'];
		$enteredPassword = $_POST['password'];

		$sql = "SELECT users.*, skills.* FROM skills AS skills INNER JOIN users as users ON skills.id=users.id and users.id = {$_GET['account_id']} and password = '{$enteredPassword}' and email = '{$enteredEmail}';";
		$cmd = $conn->prepare($sql);
		$cmd->execute();
		$query = $cmd->fetchAll();
		print_r ($query);
		if ($query[0]['id']!==$userId) {//dont know how to make this prettier... i guess i'll always have an undefined offset.
			echo "<h2>You must have entered something wrong!</h2>";
		}elseif ($query[0]['id']==$userId) {
			header("refresh: 2; url=changeAccountDetails.php?account_id={$userId}");
		}
	}
?>

</body>
</html>

<!--soo many problems... where do i begin? i wont... i just wont.-->