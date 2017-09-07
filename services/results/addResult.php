<?php 

require_once("../config.php");
session_start();

$eng		= $_REQUEST["textBox1"];
$algo		= $_REQUEST["textBox2"];
$c			= $_REQUEST["textBox3"];
$foc		= $_REQUEST["textBox4"];
$dld		= $_REQUEST["textBox5"];
$discrete	= $_REQUEST["textBox6"];
$stu_id	= $_REQUEST["stu_id"];

$created_at = date("Y/m/d");
try {	
	$insert = "INSERT INTO result1 (stu_id, algorithem, c, discrete, foc, eng, dld, created_at) VALUES ('$stu_id', '$algo', 
	'$c', '$discrete', '$foc', '$eng' , '$dld', '$created_at' )";
	if(mysqli_query($dbc, $insert))
	{
		// update student samister 1 to 2
		$update = "UPDATE students SET cur_samister = 2 WHERE id = '$stu_id' ";
		if(mysqli_query($dbc, $update))
		{
			$_SESSION["msg"] = "Record Creadted & student Updated successfully...";
			header("Location: /studentPortel/index.php");
		} else { 
			$_SESSION["error"] = " ".mysqli_error($dbc);
			header("Location: /studentPortel/index.php");
		}
	} else {
		$_SESSION["error"] = " ".mysqli_error($dbc);
		header("Location: /studentPortel/results.php".mysqli_error($dbc));
	}
}
//catch exception
catch(Exception $e) {
 $_SESSION["error"] = $e->getMessage();
  header("Location: /studentProtel/results.php");
}	
?>