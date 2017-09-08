<?php 
	require_once("config.php");
	session_start();

	$name		= $_REQUEST["u"];
	$p		= $_REQUEST["p"];

    $q = "SELECT * FROM users WHERE email = '$name' AND password = '$p' ";
    $r = mysqli_query($dbc,$q);
    if (mysqli_num_rows($r) <= 0) {
        $_SESSION["error"] = "User or passwor wronge";
        header("Location: ../login.php");
    } else {
        $row = $r->fetch_array();
        echo $_SESSION['stu_id'] = $row['stu_id'];
        echo $_SESSION['email'] = $row['email'];
        header("Location: ../index.php");
    }
?>