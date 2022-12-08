<?php
session_start();
if(!isset($_SESSION["loggedin"])|| $_SESSION["loggedin"] !== true){
	header("location: login.php");
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	<link rel="stylesheet" href:"https;//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.main.css">
	<style>
		body{ font: 14px sans-serif; text-align: center; }
	</style>
</head>
<body>
	<h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to your scheduling system.</h1>
	<p>
		<a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
		<a href="logout.php" class="btn btn-danger ml-3">Log Out of Your Account</a>
	</p>
</body>
</html>

