<?php 
error_reporting(0);
$dbc = mysqli_connect('localhost','root',''); 
if (!$dbc) { 
	die('Could not connect to MySQL: ' . mysqli_error()); 
} 
mysqli_select_db( $dbc, 'stu_portal') or die('Could not select database.');
//mysqli_close($conn); 
?> 