<?php 
require_once("../config.php");
session_start();

	$id = $_GET['id'];
	$_SESSION["stu_obj"] = $id;
	header("Location: /studentPortel/fee.php");

	 /* $q = "SELECT * FROM students WHERE cur_samister = '$id' ";
        $r = mysqli_query($dbc,$q);
        if (mysqli_num_rows($r) <= 0) {
            echo "<p>Please add a student</p>";
             }else {            
				while( $row = $r->fetch_assoc() ) { 
					echo $row["name"]."<br>";
				}
				exit();
             }*/
?>