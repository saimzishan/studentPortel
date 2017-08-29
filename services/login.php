<?php 
require_once("config.php");
session_start();

$name		= $_REQUEST["u"];
$p		= $_REQUEST["p"];

$_SESSION["name"] = $name;
header("Location: /studentPortel/dashBoard.php");

?>