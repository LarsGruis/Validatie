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


