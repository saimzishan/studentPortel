
<?php 
require_once("../config.php");
session_start();

$name		= $_REQUEST["name"];
$credit_hour		= $_REQUEST["credit_hour"];
$teacher_id		= $_REQUEST["teacher_id"];
$samester_id		= $_REQUEST["samester_id"];
$id		= $_REQUEST["id"];
$updated = date("Y/m/d");
/*echo $id;
echo "<br>";
echo "Teacher ".$teacher_id;
echo "<br>";
echo "Samester ".$samester_id;
exit();*/

try {	
	$insert = "UPDATE subjects SET name = '$name', credit_hour = '$credit_hour', teacher_id = '$teacher_id', samester_id = '$samester_id', updated_at = '$updated' WHERE id = '$id' ";
	if(mysqli_query($dbc, $insert))
	{
		$_SESSION["msg"] = "Record Updated successfully...";
		header("Location: /studentPortel/subjects.php");
	} else { 
		$_SESSION["error"] = " ".mysqli_error($dbc);
		header("Location: /studentPortel/subjects.php");
	}
}
//catch exception
catch(Exception $e) {
 $error = $e->getMessage();
 $_SESSION["error"] =$error;
  header("Location: /studentPortel/subjects.php");
}	
?>