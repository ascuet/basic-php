<?php 
	include 'includes/connection.php';
	$dept_no = '1234';
	$dept_name = 'abcd';
	$str = "INSERT INTO departments (dept_no, dept_name)
			VALUES ('".$dept_no."', '".$dept_name."')";
	
	mysqli_query($conn, $str);
 ?>