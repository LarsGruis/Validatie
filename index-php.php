<?php

$name_error = '';
if(!empty($_POST['submitted']))
{
	$name = trim($_POST['name']);
	$address = trim($_POST['address']);
	$phone = trim($_POST['phone']);

	if (empty($name)) 
	{
		$name_error = 'Vul je naam in.';
	}

	if (empty($address)) 
	{
		$address_error = 'Vul je adres in.';
	}

	if (empty($phone)) 
	{
		$phone_error = 'Vul je telefoonnummer in.';
	}

	if(empty($_POST['selectedcake']))
	{
		$select_cake_error = "Kies een type cake";
	}

	else {
	$selected_cake = $_POST['selectedcake'];
	}

	if(empty($_POST['flavor']))
	{
		$flavor_error = "Kies een smaak van de lijst";
	}
	else
	{
		$flavor = $_POST['flavor'];
	}

	if(empty($_POST['agree']))
	{
    	$terms_error = "Als je akkoord gaat met de voorwaarden, klik dan het vinkje aan.";
    	$error=true;
	}
	else
	{
    	$agree = $_POST['agree'];
	}
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
	<nav class="navbar navbar-light bg-success">
  	  <a class="navbar-brand" href="index-php.html">
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

<form method="post" action='?' id="cakeform">
<div class="container">
    <div class="cont_order">
       <fieldset>
        <span class="error"><?php echo $select_cake_error; ?></span>
        <div class='field_container'>
        <label >Grootte cake</label><br/>
        <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round6" <?php ($selected_cake == 'Round6')? 'checked':'' ?> />Ronde cake 6" -  voor 8 personen</label><br/>
        <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round8" <?php ($selected_cake == 'Round8')? 'checked':'' ?> />Ronde cake 8" - voor 12 personen</label><br/>
        <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round10" <?php ($selected_cake == 'Round10')? 'checked':'' ?> />Ronde cake 10" - voor 16 personen</label><br/>
        <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round12" <?php ($selected_cake == 'Round12')? 'checked':'' ?> />Ronde cake 12" - voor 30 personen</label><br/>
        </div>
        
        <div class='field_container'>
            <label for="flavor">Kies smaak:</label >
            <span class="error"><?php echo $flavor_error ?></span>
            <select id="flavor" name='flavor' >
            <option value="">Kies smaak</option>
            <option <?php echo $flavor == 'Geel'?'selected':'';?>>Geel</option>
            <option <?php echo $flavor == 'Wit'?'selected':'';?>>Wit</option>
            <option <?php echo $flavor == 'Chocolade'?'selected':'';?>>Chocolade</option>
            <option <?php echo $flavor == 'Combo'?'selected':'';?>>Combo</option>
           </select>
        </div>
       <div class='field_container'>
           <span class='error'><?php echo $terms_error ?></span>
			<label class="inlinelabel">
			<input type="checkbox" id="agree" name='agree'
			<?php echo (empty($_POST['agree'])) ? '':'checked' ?> /> Ik ga akkoord met de voorwaarden
			</label>
       </div>
      </fieldset>
    </div>
    
    <div class="cont_details">
        <fieldset>
        <legend>Contactgegevens</legend>
        <label for='name'>Naam</label>
        <input type="text" id="name" name='name' class="form-control" id="formGroupExampleInput" value='<?php echo htmlentities($name) ?>' />
        <span class="error" class="alert alert-danger" role="alert"><?php echo $name_error ?></span>
        <br/>
        <label for='address'>Adres</label>
        <input type="text" id="address" name='address' class="form-control" id="formGroupExampleInput" value="<?php echo htmlentities($address) ?>" />
        <span class="error" class="alert alert-danger" role="alert"><?php echo $address_error ?></span>
        <br/>
        <label for='phonenumber'>Telefoonnummer</label>
        <input type="text"  id="phone" name='phone' class="form-control" id="formGroupExampleInput" value="<?php echo htmlentities($phone) ?>" />
        <span class="error" class="alert alert-danger" role="alert"><?php echo $phone_error ?></span>
        <br/>
        </fieldset>
    </div>
    <input type='submit' name="submitted" class="btn btn-success" id='submit' value='Submit'  />
</div>  
</form>
</body>
</html>