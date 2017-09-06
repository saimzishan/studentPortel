<?php 
require_once("../config.php");
session_start();

$stu_id		= $_REQUEST["stu_id"];
$amount		= $_REQUEST["stu_fee"];
$samister_id		= $_REQUEST["samister_id"];
$month		= $_REQUEST["date"];
$created_at = date("Y/m/d");

try {	
	$insert = "INSERT INTO stu_fee  (stu_id, samister_id, month, amount, created_at) VALUES ('$stu_id', '$samister_id',
	 '$month', '$amount', '$created_at' )";
	if(mysqli_query($dbc, $insert))
	{
		$_SESSION["msg"] = "Record Created successfully...";
		header("Location: /studentPortel/fee.php");
	} else {
		$_SESSION["error"] = " ".mysqli_error($dbc);
		header("Location: /studentPortel/fee.php");
	}
}
//catch exception
catch(Exception $e) {
 $error = $e->getMessage();
 $_SESSION["error"] = " ".$error;
  header("Location: /studentProtel/fee.php");
}	
?>