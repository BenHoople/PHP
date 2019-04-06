<?php

	require("include/header.php");
	require("include/findUserInfo.php");

	echo "<div>
	<form method='post'>
	<table class='table table-striped'>
	<tr>
		<th>Your Profile:</th>
		<th>Name</th>
		<th>Email</th>
		<th>Location</th>
		<th></th>
	</tr>
	<tr>
		<th>Info:</th>

		<th><input type='text' name='firstName' value='{$userFirstName}' required=''></th>
		<th><input type='text' name='lastName' value='{$userLastName}' required=''></th>
		<th><input type='text' name='email' value='{$userEmail}' required=''></th>
		<th><input type='text' name='location' value='{$userLocation}' required=''></th>
		<th></th>
	</tr>
	<tr>
		<th>Password:</th>
		<th><input type='text' name='password' value='{$userPassword}' required=''></th>
		<th><input type='text' name='passwordRetype' value='{$userPassword}' required=''></th>
		<th>Enter and Re-Enter Your New Password</th>
		<th></th>
	</tr>
	<tr>
		<th>Skills:</th>
		<th><input type='text' name='firstSkill' value='{$userFirstSkill}' required=''></th>
		<th><input type='text' name='secondSkill' value='{$userSecondSkill}'></th>
		<th><input type='text' name='thirdSkill' value='{$userThirdSkill}'></th>
		<th><input type='text' name='fourthSkill' value='{$userFourthSkill}'></th>
	</tr>
	</div>
	<input type='submit' name='submit' value='Submit Changes'>
	<input type='submit' name='delete' value='Delete Account'>
	</form>

	";

	if(isset($_POST['submit']))
		{
			$userFirstName = $_POST['firstName'];
			$userLastName = $_POST['lastName'];
			$userEmail = $_POST['email'];
			$userPassword = $_POST['password'];
			$userPasswordReTyped = $_POST['passwordRetype'];
			$userLocation = $_POST['location'];
			$userFirstSkill = $_POST['firstSkill'];
			$userSecondSkill = $_POST['secondSkill'];
			$userThirdSkill = $_POST['thirdSkill'];
			$userFourthSkill = $_POST['fourthSkill'];
  			

  			if($userPassword===$userPasswordReTyped){
  			//replace info
			$sql = "update users set email='{$userEmail}', password='{$userPassword}', firstName='{$userFirstName}', lastName='{$userLastName}', location='{$userLocation}' where id ={$userId};";
			$cmd = $conn->prepare($sql);
			$cmd->execute();

			//replace skills
			$sql ="UPDATE skills SET firstSkill = '{$userFirstSkill}', secondSkill = '{$userSecondSkill}', thirdSkill = '{$userThirdSkill}', fourthSkill='{$userFourthSkill}' where id={$userId};";


			$cmd = $conn->prepare($sql);
			$cmd->execute();

			header("refresh: .5;");
		}else{
			echo "Your passwords don't match";
		}
		}
		if (isset($_POST['delete'])) {
			$sql = "delete from skills where id = {$userId}";
			$cmd = $conn->prepare($sql);
			$cmd->execute();
			
			$sql = "delete from users where id = {$userId}";
			$cmd = $conn->prepare($sql);
			$cmd->execute();
			header("refresh:.1;url=index.php");
		}
		if(isset($_POST['back'])){
			header("refresh:.1;url=userAccount.php?account_id={$userId}");
		}
?>
<input type="submit" name="back" value="Go Back">
</body></html>
