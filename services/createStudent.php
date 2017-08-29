<?php 
require_once("config.php");

$name		= $_REQUEST["name"];
$fname		= $_REQUEST["fatherName"];
$email		= $_REQUEST["email"];
$registration		= $_REQUEST["registration"];
$nic		= $_REQUEST["nic"];
$phone		= $_REQUEST["phone"];
$created_at = date("Y/m/d");

try {	
	$insert = "INSERT INTO students (name, f_name, reg_number, email, nic, phone , created_at) VALUES ('$name', '$fname', '$registration', '$email', '$nic', '$phone' , '$created_at' )";
	if(mysqli_query($dbc, $insert))
	{
		header("Location: /studentProtel/?msg=Record save successfully...");
	} else {
		header("Location: /studentProtel/?error=Somethig went wronge...");
	}
}
//catch exception
catch(Exception $e) {
 $error = $e->getMessage();
  header("Location: /studentProtel/?error=".$error);
}	
?>