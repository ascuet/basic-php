<?php 
	session_start();
	if(isset($_SESSION['username'])) {
		echo 'welcome';
	}
	else {
		echo 'not logged in';
		header('Location: login.php');
		//$_SESSION['username'] = 'aniksen';
	}
	//session_unset();
?>