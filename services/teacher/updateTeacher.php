
<?php 
require_once("../config.php");
session_start();

$name		= $_REQUEST["name"];
$fname		= $_REQUEST["fatherName"];
$email		= $_REQUEST["email"];
$nic		= $_REQUEST["nic"];
$phone		= $_REQUEST["phone"];
$id		= $_REQUEST["id"];
$updated = date("Y/m/d");


try {	
	$insert = "UPDATE students SET name = '$name', f_name = '$fname', email = '$email', nic = '$nic', phone = '$phone', updated_at = '$updated' WHERE id = '$id' ";
	if(mysqli_query($dbc, $insert))
	{
		$_SESSION["msg"] = "Record Updated successfully...";
		header("Location: /studentPortel/teachers.php");
	} else { 
		$_SESSION["error"] = " ".mysqli_error($dbc);
		header("Location: /studentPortel/teachers.php");
	}
}
//catch exception
catch(Exception $e) {
 $error = $e->getMessage();
 $_SESSION["error"] =$error;
  header("Location: /studentPortel/teachers.php");
}	
?>