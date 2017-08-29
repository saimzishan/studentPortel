
<?php 
require_once("config.php");
session_start();

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
		$_SESSION["msg"] = "Record Updated successfully...";
		header("Location: /studentPortel/");
	} else { 
		$_SESSION["error"] = " ".mysqli_error($dbc);
		header("Location: /studentPortel/".mysqli_error($dbc));
	}
}
//catch exception
catch(Exception $e) {
 $error = $e->getMessage();
  header("Location: /studentProtel/?error=".$error);
}	
?>