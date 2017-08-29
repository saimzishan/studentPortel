
<?php 
require_once("config.php");

$name		= $_REQUEST["name"];
$fname		= $_REQUEST["fatherName"];
$email		= $_REQUEST["email"];
$registration		= $_REQUEST["registration"];
$nic		= $_REQUEST["nic"];
$phone		= $_REQUEST["phone"];
$id		= $_REQUEST["id"];
$updated = date("Y/m/d");

try {	
	$insert = "UPDATE students SET name = '$name', f_name = '$fname', reg_number = '$registration', email = '$email', nic = '$nic', phone = '$phone', updated_at = '$updated' WHERE id = '$id' ";
	if(mysqli_query($dbc, $insert))
	{
		header("Location: /studentProtel/?msg=Record updated successfully...");
	} else { 
		header("Location: /studentProtel/?error=".mysqli_error($dbc));
	}
}
//catch exception
catch(Exception $e) {
 $error = $e->getMessage();
  header("Location: /studentProtel/?error=".$error);
}	
?>