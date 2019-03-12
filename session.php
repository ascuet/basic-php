<?php 
	session_start();
	// set session variable start
	$_SESSION["username"] = "anik";
	$_SESSION["password"] = "123456";
	// set session variable end

	// remove all session variables start
	session_unset(); 
	// remove all session variables end

	// destroy the session start
	session_destroy(); 
	// destroy the session end

	
 ?>