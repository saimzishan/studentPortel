<?php 
require_once("../config.php");
session_start();

$name		= $_REQUEST["name"];
$credit_hour		= $_REQUEST["credit_hour"];
$teacher_id		= $_REQUEST["teacher_id"];
$samester_id		= $_REQUEST["samester_id"];
$created_at = date("Y/m/d");

try {	
	$insert = "INSERT INTO subjects  (name, credit_hour, samester_id, teacher_id, created_at) VALUES ('$name', '$credit_hour', '$samester_id', 
	'$teacher_id', '$created_at' )";
	if(mysqli_query($dbc, $insert))
	{
		$_SESSION["msg"] = "Record Created successfully...";
		header("Location: /studentPortel/subjects.php");
	} else {
		$_SESSION["error"] = " ".mysqli_error($dbc);
		header("Location: /studentPortel/subjects.php");
	}
}
//catch exception
catch(Exception $e) {
 $error = $e->getMessage();
 $_SESSION["error"] = " ".$error;
  header("Location: /studentProtel/subjects.php");
}	
?>