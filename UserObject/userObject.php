<?php
class User{

	public function __construct($userId, $email, $firstName, $lastName, $location, $skill_one, $skill_two="", $skill_three="", $skill_four=""){
		//users table
		$this->userId = $userId;
		$this->email = $email;
		$this->firstName = $firstName; 
		$this->lastName = $lastName;
		$this->location = $location;
		//skills table
		$this->skill_one = $skill_one; 
		$this->skill_two = $skill_two; 
		$this->skill_three = $skill_three;
		$this->skill_four = $skill_four; 
		
	}
	public function __construct($userId){
		$this->userId = $userId;
	}


}
?>