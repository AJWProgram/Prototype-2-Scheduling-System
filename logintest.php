

<!DOCTYPE html>

<head>
<meta charset="utf-8">
<title>Login Page</title>
</head>

<body>
<?php
	require "check.php";
	if (isset($failed)){echo "<div>INVALID USER/PASSWORD</div>";}
?>
<form class='box' method='post'>
<h1>USER LOGIN</h1>
<input type='text' name='user' placeholder='ENTER USERNAME' required />
<input type='password' id='password' name='password' placeholder='ENTER PASSWORD' required />

<input type='submit' name='loginbutton' value='Login'>
<input type='submit' name='test1' value='Forgot Info?'>
<input type='submit' name='test2' value='Sign Up'>

</form>



</body>
</html>