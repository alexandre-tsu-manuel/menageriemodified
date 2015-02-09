<?php
	include('session.php');
	session_destroy();
	if(isset($_GET['page']))
		header('location: ../' . $_GET['page']);
	else
		header('location: ..');
?>