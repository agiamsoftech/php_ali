<?php 
// error_reporting(0);
include_once ("db_connect.php"); 
?>
<?php
	include_once ("functions.php");
	//ini_set("display_errors")0);
	$SERVER_PATH="http://localhost/php_ali";
?>
<html>

<head>
	<title>PHP Marathon ALI</title>
	<script src="js/validation.js" type="text/javascript"></script>
</head>
<body>
<table width="90%" border="1" align="center">
  <tr>
    <th><a href="student_view.php">Student</a></th>
    <th><a href="staff_add.php">Staff</a></th>
    <th>Salary</th>
    <th>Fee</th>
	<th><a href="login.php">Login</a></th>
  </tr>
</table>
<br /> 