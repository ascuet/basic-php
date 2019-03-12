<?php 
	include 'includes/connection.php';
	$dept_no = '1234';
	$dept_name = 'abcdef';
	$str = "UPDATE departments SET dept_name='".$dept_name."' WHERE dept_no='".$dept_no."'";
	
	mysqli_query($conn, $str);
?>