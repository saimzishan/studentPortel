<?php 
require_once("../config.php");
session_start();

$name		= $_REQUEST["name"];
$fname		= $_REQUEST["fatherName"];
$email		= $_REQUEST["email"];
$nic		= $_REQUEST["nic"];
$phone		= $_REQUEST["phone"];
$created_at = date("Y/m/d");

try {	
	$insert = "INSERT INTO teachers (name, f_name, email, nic, phone , created_at) VALUES ('$name', '$fname', '$email', '$nic', '$phone' , '$created_at' )";
	if(mysqli_query($dbc, $insert))
	{
		$_SESSION["msg"] = "Record Created successfully...";
		header("Location: /studentPortel/teachers.php");
	} else {
		$_SESSION["error"] = " ".mysqli_error($dbc);
		header("Location: /studentPortel/teachers.php".mysqli_error($dbc));
	}
}
//catch exception
catch(Exception $e) {
 $error = $e->getMessage();
  header("Location: /studentProtel/teachers.php/?error=".$error);
}	
?>