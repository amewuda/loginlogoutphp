<?php 
	session_start();
	require('connect.php');
	if (isset($_POST) and !empty($_POST)){
		$email = mysqli_real_escape_string($conection, $_POST['email']);
		$password = md5(mysqli_real_escape_string($connection, $_POST['password']));
		$query = "SELECT * FROM users WHERE email ='$email' and password ='$password'";
		//query = 'SELECT name, password, id FROM users';

		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		$count = mysqli_num_rows($result);
		if ($count == 1){
			$_SESSION['email'] = $email;
			header('location: index.php');
			
		} else{
			echo "Login credentials not right";
		}
	}

	if(isset($_POST['submit'])){
		$email = $_SESSION['email'];
		echo "Hello " . $email . " ";
		echo "This is the best";
		echo "<a href='logout.php'>Logout</a>";
	}else{
		echo " Login please";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple Login Logout System</title>
</head>
<body>
	<header>
		<div>
			<h1>The Website</h1>
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
	
	<form method="POST">
		<label for="add">Your email</label>
		<input id="add" type="email" name="email" placeholder="Write your email"><br>
		<label for="adde">Your password</label>
		<input id="adde" type="password" name="password" placeholder="Write your password" required>
		<input type="submit" name="submit" value="Submit">
		
	</form>
</body>
</html>