<?php
	$connection = mysqli_connect('localhost', 'root', '', 'logins');
	if(!$connection){
		echo 'Connection error: ' . mysqli_connect_error();
	}
?>