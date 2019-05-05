Bedankt voor het invullen van dit formulier:

Welkom <?php echo $_POST["fname"]; ?> <?php echo $_POST["lname"]; ?><br>
Je post code is: <?php echo $_POST["postalcode"]; ?><br>
Je woonplaats is: <?php echo $_POST["livingarea"]; ?><br>
Je emailadres is: <?php echo $_POST["email"]; ?><br>
Je telefoonnummer is: <?php echo $_POST["phonenumber"];

<?php

function validate(){
	$voornaam = $_POST["fname"];
	$achternaam = $_POST["lname"];
	$postcode = $_POST["postalcode"];
	$woonplaats = $_POST["livingarea"];
	$email = $_POST["email"];
	$telefoonnummer = $_POST["phonenumber"];


	if (ctype_alpha($voornaam) == false) {
		echo "Vul een voornaam in <br>";
	}

	if (ctype_alpha($achternaam) == false) {
		echo "Vul een achternaam in <br>";
	}

	if (ctype_alpha($postcode) == false) {
		echo "Vul een postcode in <br>";
	}

	if (ctype_alpha($woonplaats) == false) {
		echo "Vul een woonplaats in <br>";
	}

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  $emailErr = "Invalid email format"; 
	}

	if (is_numeric($telefoonnummer) == false) {
		echo "Vul een telefoonnummer in <br>";
	}

	return "Bedankt voor het invullen van dit formulier";
}
?>

<?php include 'validate.php'; ?>

<?php

if (isset($_POST['submit'])) {
	$validate = validate();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Validation</title>
	<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel='icon' href='favicon2.ico' type='image/x-icon'/ >
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
	<?php
		echo $validate;
	?>

	<nav class="navbar navbar-light bg-success">
  	  <a class="navbar-brand" href="index-php.php">
    	<h1 class="text-white navbar-title">Validation PHP</h1>
  	  </a>
  	  <ul class="nav">
  			<li class="nav-item">
    			<a class="nav-link active" id="green-hover" href="index.html">HTML</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link" id="green-hover" href="index-js.html">Javascript</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link" id="green-hover" href="index-php.php">PHP</a>
  			</li>
		</ul>
	</nav>

	<div class="container">
		<form method="post">
		  <div class="form-group">
		    <label for="formGroupExampleInput">Voornaam</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="fname">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Achternaam</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="lname">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Postcode</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="postalcode">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Woonplaats</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="livingarea">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">E-mail</label>
		    <input type="email" class="form-control" id="formGroupExampleInput2" name="email">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput3">Telefoonnummer</label>
		    <input type="tel" class="form-control" id="formGroupExampleInput2" name="phonenumber">
		  </div>
		  <button type="submit" name="submit" class="btn btn-success">Opslaan</button>
		</form>
	</div>
</body>
</html>