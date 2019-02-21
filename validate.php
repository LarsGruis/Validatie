<html>
<body>

<?php

if (isset($_POST['submit'])) {
	validateAction();
}

function validate(){
	$voornaam = $_POST["fname"];
	$achternaam = $_POST["lname"];
	$postcode = $_POST["postalcode"];
	$woonplaats = $_POST["livingarea"];
	$email = $_POST["email"];
	$telefoonnummer = $_POST["phonenumber"];


	if (ctype_alpha($voornaam) == false) {
		echo "Vul een voornaam in";
	}

	if (ctype_alpha($achternaam) == false) {
		echo "Vul een achternaam in";
	}

	if (ctype_alpha($postcode) == false) {
		echo "Vul een postcode in";
	}

	if (ctype_alpha($woonplaats) == false) {
		echo "Vul een woonplaats in";
	}

	if (ctype_alpha($email) == false) {
		echo "Vul een e-mailadres in";
	}

	if (ctype_alpha($telefoonnummer) == false) {
		echo "Vul een telefoonnummer in";
	}
}
?>

</body>
</html>

