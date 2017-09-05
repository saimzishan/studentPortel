<?php 
require_once("../config.php");
session_start();

if( isset($_GET['del']) ) {
	$userId = $_GET['del'];
	$delUser = "DELETE FROM teachers where id=".$userId;
	//$updateUser = "UPDATE teachers set firstname='".$firstname."', lastname='".$lastname."', type='".$type."', active='".$active."', created_at='".date("Y-m-d H:i:s")."' WHERE id=".$userId;
	$rs = mysqli_query($dbc, $delUser);
	if($rs) {
		$_SESSION["msg"] = "Record Deleted successfully...";
		header("Location: /studentPortel/teachers.php");
	} else {
		$_SESSION["error"] = " ".mysqli_error($dbc);
		header("Location: /studentPortel/teachers.php".mysqli_error($dbc));
	}

} else {
	$resp = array("error" => "1" ,"errorMsg" => "Invalid Inputs","msg" => "Invalid Inputs");
	echo json_encode( $resp );

}

exit;
?>