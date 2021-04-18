<?php 
	session_start();
	session_destroy();
	header('location: /farming-website/#home');
?>