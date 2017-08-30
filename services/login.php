<?php 
	require_once("config.php");
	session_start();

	$name		= $_REQUEST["u"];
	$p		= $_REQUEST["p"];

	if ($name == 'admin' && $p == 'admin') {
		$_SESSION["name"] = $name;
		header("Location: /studentPortel/dashBoard.php");
	}

	$_SESSION["error"] = "Invelid username or password ";
	header("Location: ../login.php");
?>