<?php
echo '<pre>'.print_r($_POST,true).'</pre>';

$name = trim($_POST['name']);
if(empty($name))
{
	echo "Please enter your name";
	exit;
}

echo "Success";

/*if(empty($_POST['selectedcake']))
{
    $select_cake_error = "Please select a cake size";
    $error=true;
}
else
{
    $selected_cake = $_POST['selectedcake'];
}

echo ($selected_cake=='Round6')? 'checked':'';

if(empty($_POST['flavor']))
{
    $flavor_error ="Please select a flavor from the list";
    $error=true;
}
else
{
    $flavor = $_POST['flavor'];
}

if(empty($_POST['Filling']) || count($_POST['Filling']) < 2)
{
    $filling_error = "Please select at least 2 items for filling";
    $error=true;
}

$filling = $_POST['Filling'];

if(empty($_POST['agree']))
{
    $terms_error = "If you agree to the terms, please check the box below";
    $error=true;
}
else
{
    $agree = $_POST['agree'];
}
?>*/
