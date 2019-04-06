<?php
	echo($_SESSION["id"]);
	$sql = "SELECT users.*, skills.* FROM skills AS skills INNER JOIN users as users ON skills.id = {$_SESSION["id"]} and users.id = {$_SESSION["id"]};";

	require("include/connection.php");
	$cmd = $conn -> prepare($sql);
	$cmd->execute();
	$userInfo = $cmd->fetch();
	
	$userId= $userInfo['id'];

	$userEmail= $userInfo['email'];
	$userPassword = $userInfo['password'];

	$userFirstName= $userInfo['firstName'];
	$userLastName= $userInfo['lastName'];

	$userLocation= $userInfo['location'];

	$userFirstSkill= $userInfo['firstSkill'];
	$userSecondSkill= $userInfo['secondSkill'];
	$userThirdSkill= $userInfo['thirdSkill'];
	$userFourthSkill= $userInfo['fourthSkill'];
?>