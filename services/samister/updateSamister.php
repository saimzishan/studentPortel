
<?php 
require_once("../config.php");
session_start();

$fee		= $_REQUEST["fee"];
$id		= $_REQUEST["id"];

echo $fee;
$updated = date("Y/m/d");


try {	
	$insert = "UPDATE samester SET fee = '$fee', updated_at = '$updated' WHERE id = '$id' ";
	if(mysqli_query($dbc, $insert))
	{
		$_SESSION["msg"] = "Record Updated successfully...";
		header("Location: /studentPortel/samester.php");
	} else { 
		$_SESSION["error"] = " ".mysqli_error($dbc);
		header("Location: /studentPortel/samester.php");
	}
}
//catch exception
catch(Exception $e) {
 $error = $e->getMessage();
 $_SESSION["error"] =$error;
  header("Location: /studentPortel/samester.php");
}	
?>