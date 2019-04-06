<?php
	require ("include/header.php");
	//global $user;

?>

<main class="container">
   <h1>Hopefully this worked!</h1>
    <?php
    
      try {

        if(isset($_POST['create'])){
        	//variables
			$email = $_POST['email'];

	        $password = $_POST['password'];
	        $passwordTwo = $_POST['passwordTwo']; 

	        $firstName = $_POST['firstName'];
	        $lastName = $_POST['lastName'];

	        $location = trim($_POST['city']);

	        $firstSkill = $_POST['firstSkill'];
	        $secondSkill = $_POST['secondSkill'];
	        $thirdSkill = $_POST['thirdSkill'];
	        $fourthSkill = $_POST['fourthSkill'];

	        //check to ensure needed variables aren't empty
          	if(!empty($email) && !empty($password) 
          	&& !empty($passwordTwo) && !empty($firstSkill)) {

	          	//check the passwords match
	          	if ($password !== $passwordTwo){
	          		echo "Your passwords don't match!";
	          		header("refresh: 5; url=accountCreation.php");
	          	}elseif ((!strpos($email,'@'))&&(!strpos($email, '-'))) {
	          		echo "Your email isn't valid! Or contains a dash which is dumb.";
	          		header("refresh: 5; url=accountCreation.php");
	          	}else{
	          		$hashed_password = password_hash($password, PASSWORD_DEFAULT); 
	          		echo($hashed_password);

	          		//require my connection
		            require('include/connection.php');

		            //hash password
		            

	          		//insert the new user into the users database:
	            	$sql = "INSERT INTO users
						(
						email,
						password,
						firstName,
						lastName,
						location)
						VALUES
						('{$email}',
						'{$hashed_password}',
						'{$firstName}',
						'{$lastName}',
						'{$location}');";



					//prep my code
		            $cmd = $conn->prepare($sql);

		            //bind hashed password
					//$cmd->bindParam(':password',$hashed_password);

					echo($sql);

		            //execute my code  
		            $cmd->execute(); 
	          		//bind their skills
	          		//write my code
				    $sql = "select id from users where email = '{$email}' and password = '{$hashed_password}'";
				    //prep my code
				    $cmd = $conn->prepare($sql);
				    //execute
				    $cmd -> execute();
				    //fetch
				    $userAccountInfo = $cmd->fetchAll();
				    $userId = $userAccountInfo[0][0];
				    //write user skills
				    $sql = "INSERT INTO skills (id,
					firstSkill,
					secondSkill,
					thirdSkill,
					fourthSkill) VALUES
					({$userId},
					'{$firstSkill}',
					'{$secondSkill}',
					'{$thirdSkill}',
					'{$fourthSkill}');";



				    //prep my code
				    $cmd = $conn->prepare($sql);
			        //execute
				    $cmd -> execute();
		            //end command
		            $cmd -> closeCursor();

		            //require('UserObject/userObject.php');

		            //$user = new User($firstName, $lastName, $email, $location, $firstSkill, $secondSkill, $thirdSkill, $fourthSkill, $userId);
		            //echo $user;


		            header("refresh: 1; url= userAccount.php?account_id={$userId}");
        	}
        }       
        }
      }

    catch(PDOException $e) {
      echo $e; 
      echo "<p> There was an error with your form submission </p>";
    }
	?>
</main>
</body>
</html>

