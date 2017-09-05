<?php 
require_once("../config.php");
session_start();
	$id = $_GET['id'];
	echo "string";
	exit();
	  $q = "SELECT * FROM students WHERE cur_samister = '$id' ";
        $r = mysqli_query($dbc,$q);
        if (mysqli_num_rows($r) <= 0) {
            echo "<p>Please add a student</p>";
             }else {            
				$_SESSION["stu_obj"] = $r;
				header("Location: /studentPortel/fee.php");
             }
?>