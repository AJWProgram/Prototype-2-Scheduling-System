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
        <title>MAIN MENU</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form class ='box' action='mainmenu.php' method='post'>
        <h1>MAIN MENU</h1>
        <input type='submit' name='mainmenubutton' value='Schedule Generator'>
        <input type='submit' name='area1' value='Schedule Accessor'>
        <h2>
		<a href="logout.php" class="btn btn-danger ml-3">Log Out of Your Account</a>
	</h2>


    </form>       
    </body>
</html>

<?php
//TO CLICK GENERATOR BUTTON
if(isset($_POST['mainmenubutton'])){ //ISSET MEANS VARIABLE IS NOT EMPTY
    //HOW TO REDIRECT!
    header("Location: sg1.php");
}
?>

<?php
//TO CLICK ACCESSOR BUTTON
if(isset($_POST['area1'])){ //ISSET MEANS VARIABLE IS NOT EMPTY
    //HOW TO REDIRECT! PAGE YET TO BE DEVELOPED
    header("Location: welcome.php");
}
?>