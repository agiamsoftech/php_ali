<?php
	// $db=mysqli_connect("localhost","root","") or die(mysqli_error());
	// $db_sel=mysqli_select_db("php_ali") or die(mysqli_error());

	$db_sel = new mysqli("localhost","root","","php_ali");

	// Check connection
	if ($db_sel -> connect_errno) {
		echo "Failed to connect to MySQL: " . $db_sel -> connect_error;
		exit();
	}
?>