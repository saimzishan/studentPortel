<?php 
require_once("config.php");

if( isset($_GET['del']) ) {
	$userId = $_GET['del'];
	$delUser = "DELETE FROM students where id=".$userId;
	//$updateUser = "UPDATE students set firstname='".$firstname."', lastname='".$lastname."', type='".$type."', active='".$active."', created_at='".date("Y-m-d H:i:s")."' WHERE id=".$userId;
	$rs = mysqli_query($conn, $delUser);
	$resp = array("success" => "1", "msg" => "User Deleted Successfully.");
	echo json_encode( $resp );

} else {
	$resp = array("error" => "1" ,"errorMsg" => "Invalid Inputs","msg" => "Invalid Inputs");
	echo json_encode( $resp );

}

exit;
?>