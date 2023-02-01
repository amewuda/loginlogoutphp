<?php
session_start(); //start session
	if(isset($_POST['submit'])){
		$_SESSION['name'] = htmlentities($_POST['name']);
		$_SESSION['email'] = htmlentities($_POST['email']);
		if(empty($_SESSION['name'] and $_SESSION['email'])){
			echo "Enter the codes";
		} else{
			echo $_SESSION['name'] . ' ' . $_SESSION['email'];
		}
	}
?>