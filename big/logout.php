<?php


	session_start();
	unset( $_SESSION['username']);
	Header("Location:index.php");
?>