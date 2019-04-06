<?php
	require ("include/header.php")
?>
<main class="container">
	<form id="logIn" method="post" action="create.php">
		<!-- Email entry -->
		<div>
			<p>Please enter your email address: </p>
			<input type="text" name="email" placeholder="Enter Your Email" required="">
		</div>
		<!-- Password entry -->
		<div>
			<p>Please enter and re-enter your password</p>
			<input type="text" name="password" placeholder="Enter Your Password" required="">
		</div>
		<div>
			<input type="text" name="passwordTwo" placeholder="Re-Enter Your Password" required="">
		</div>
		<div>
			<input type="text" name="firstName"placeholder="First Name">
			<input type="text" name="lastName" placeholder="Last Name">
		</div>

		<!--City Selection-->
		<p>Where do you want to Konnect?</p>
		<div id="citySelection">
		  <select name="city" required="">
		  	<option value="">Please Select a Region</option>
			<option value="	Hastings	">	Hastings	</option>
			<option value="	Peel	">	Peel	</option>
			<option value="	Brant	">	Brant	</option>
			<option value="	Brant	">	Brant	</option>
			<option value="	Leeds and Grenville	">	Leeds and Grenville	</option>
			<option value="	Halton	">	Halton	</option>
			<option value="	Waterloo	">	Waterloo	</option>
			<option value="	Peel	">	Peel	</option>
			<option value="	Prescott and Russell	">	Prescott and Russell	</option>
			<option value="	Stormont	">	Stormont	</option>
			<option value="	Kenora	">	Kenora	</option>
			<option value="	Algoma	">	Algoma	</option>
			<option value="	Sudbury	">	Sudbury	</option>
			<option value="	Wellington	">	Wellington	</option>
			<option value="	Haldimand	">	Haldimand	</option>
			<option value="	Hamilton	">	Hamilton	</option>
			<option value="	Kawartha Lakes	">	Kawartha Lakes	</option>
			<option value="	Kenora	">	Kenora	</option>
			<option value="	Frontenac	">	Frontenac	</option>
			<option value="	Waterloo	">	Waterloo	</option>
			<option value="	Middlesex	">	Middlesex	</option>
			<option value="	York	">	York	</option>
			<option value="	Peel	">	Peel	</option>
			<option value="	Niagara	">	Niagara	</option>
			<option value="	Norfolk	">	Norfolk	</option>
			<option value="	Nipissing	">	Nipissing	</option>
			<option value="	Simcoe	">	Simcoe	</option>
			<option value="	Durham	">	Durham	</option>
			<option value="	Ottawa	">	Ottawa	</option>
			<option value="	Grey	">	Grey	</option>
			<option value="	Renfrew	">	Renfrew	</option>
			<option value="	Peterborough	">	Peterborough	</option>
			<option value="	Durham	">	Durham	</option>
			<option value="	Niagara	">	Niagara	</option>
			<option value="	Prince Edward	">	Prince Edward	</option>
			<option value="	Hastings	">	Hastings	</option>
			<option value="	Lambton	">	Lambton	</option>
			<option value="	Algoma	">	Algoma	</option>
			<option value="	Niagara	">	Niagara	</option>
			<option value="	Elgin	">	Elgin	</option>
			<option value="	Perth	">	Perth	</option>
			<option value="	Timiskaming	">	Timiskaming	</option>
			<option value="	Niagara	">	Niagara	</option>
			<option value="	Thunder Bay	">	Thunder Bay	</option>
			<option value="	Cochrane	">	Cochrane	</option>
			<option value="	Toronto	">	Toronto	</option>
			<option value="	York	">	York	</option>
			<option value="	Waterloo	">	Waterloo	</option>
			<option value="	Niagara	">	Niagara	</option>
			<option value="	Essex	">	Essex	</option>
			<option value="	Oxford	">	Oxford	</option>
		  </select>
		  <br><br>
		</div>
		<!-- Skill entry -->
		<p>Here you can enter up to 4 skills!</p>
		<p>have too many to think of right now? Thats alright,</p>
		<p> just leave them empty and fill them in later!</p>
		<div>
			<input type="text" name="firstSkill" placeholder="Enter Skill Number 1!" required="">
		</div>
		<div>
			<input type="text" name="secondSkill" placeholder="Enter Skill Number 2!">
		</div>
		<div>
			<input type="text" name="thirdSkill" placeholder="Enter Skill Number 3!">
		</div>
		<div>
			<input type="text" name="fourthSkill" placeholder="Enter Skill Number 4!">
		</div>
		<div>
			<p>Almost there! Just hit submit and you'll be konnected!</p>
			<input type="submit" name="create" value="Create">
		</div>

	</form>
</main>
</body>	
</html>