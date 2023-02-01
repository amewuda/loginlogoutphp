<?php
session_start();
require('connect.php');

if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
	header('location: login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple System</title>
</head>
<body>
	<header>
		<div>
			<h1>The Website | Holla</h1>
		</div> 
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#">Sign up</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</header>
	<form method="POST" action="<?php echo $_SERVER['PHP_SERVER'] ?>">
		<label for="add">Your username</label>
		<input id="add" type="text" name="name" placeholder="Write your name"><br>
		<label for="add">Your own email</label>
		<input id="add" type="email" name="email" placeholder="Write your email" required>
		<input type="submit" name="submit" value="Submit">
		
	</form>
</body>
</html>