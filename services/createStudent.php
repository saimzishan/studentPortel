<?php 
require_once("config.php");
session_start();

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
		$_SESSION["msg"] = "Record Created successfully...";
		header("Location: /studentPortel/");
	} else {
		$_SESSION["error"] = " ".mysqli_error($dbc);
		header("Location: /studentPortel/");
	}
}
//catch exception
catch(Exception $e) {
 $error = $e->getMessage();
  header("Location: /studentProtel/?error=".$error);
}	
?>