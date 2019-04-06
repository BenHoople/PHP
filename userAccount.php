<div>
<?php
	require("include/header.php");
	require("include/connection.php");
	require("include/auth.php");
	require("include/findUserInfo.php");

	echo "<div>
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
		<th>{$userFirstName}</th>
		<th>{$userEmail}</th>
		<th>{$userLocation}</th>
		<th></th>
	</tr>
	<tr>
		<th>Skills:</th>
		<th>{$userFirstSkill}</th>
		<th>{$userSecondSkill}</th>
		<th>{$userThirdSkill}</th>
		<th>{$userFourthSkill}</th>
	</tr>
	</div>

	";
	?>
</div>

	<?php

	$sql = "SELECT  users.firstName, users.location, users.email, skills.* FROM skills AS skills INNER JOIN users as users ON skills.id=users.id and users.location = '{$userLocation}';";
	$cmd = $conn -> prepare($sql);
	$cmd->execute();
	$localUsers = $cmd->fetchAll();
	echo "
	<h1>Hey {$userFirstName}, Here's a list of like minded people in your area:</h1>
	<p>Dont like it? <a href='accountVerification.php?account_id={$userId}'>Edit Here!</a></p>
	";
?>
<table class="table table-striped">
	<tr>
		<th></th>
		<th>Name</th>
		<th>Email</th>
		<th>Location</th>
		<th></th>
	</tr>
	<tr>
		<th></th>
		<th></th>
		<th style="text-align: center;">--Skills--</th>
		<th></th>
		<th></th>
	</tr>
	<?php
		foreach ($localUsers as $user) {
		echo 
			"<tr>
				<th>Info:</th>
				<th>{$user['firstName']}</th>
				<th>{$user['email']}</th>
				<th>{$user['location']}</th>
				<th></th>
			</tr>
			<tr>
				<th>Skills:</th>
				<th>{$user['firstSkill']}</th>
				<th>{$user['secondSkill']}</th>
				<th>{$user['thirdSkill']}</th>
				<th>{$user['fourthSkill']}</th>
			</tr>";
		}
	?>
</table>
</body>
</html>
