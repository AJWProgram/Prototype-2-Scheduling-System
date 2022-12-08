<!-- 

<DOCTYPE !html>
<html>
    
<head>
<meta charset="utf-8">
<title>SCHEDULE GENERATION</title>
<link rel='stylesheet' href='style.css'>
</head>

<body>
<form class='box' action='scheduletests.php' method='post'>;

<p>Did the subject selected take you a shorter, exact, or longer amount of time as suggested?</p>
<input type='submit' name='area2' value='SHORTER'>
<input type='submit' name='mainmenubutton' value='EXACT'>
<input type='submit' name='area1' value='LONGER'>
</form>
</body>
</html>
 -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>1.1 CISC and RISC</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <p>Did the subject selected take you a shorter, exact, or longer amount of time as suggested?</p>
        <form class ='box' action='cisc_edit.php' method='post'>
            <input type='submit' name='area1' value='SHORTER'>
            <input type='submit' name='area2' value='EXACT'>
            <input type='submit' name='mainmenubutton' value='LONGER'>
        </form>       
    </body>
</html>

<?php
include 'config.php';

//SHORTER
if(isset($_POST['area1'])){ //ISSET MEANS VARIABLE IS NOT EMPTY
    // FOR LOGIN PAGE - HOW TO REDIRECT!
    $sql = "UPDATE 11topics SET CISC= CISC - 5";
    $result = mysqli_query($link, $sql);
    header("Location: scheduletests.php");
}

//EXACT
if(isset($_POST['mainmenubutton'])){
    $sql = "UPDATE 11topics SET CISC= CISC";
    $result = mysqli_query($link, $sql);
    header("Location: scheduletests.php");
}

//LONGER
if(isset($_POST['mainmenubutton'])){
    $sql = "UPDATE 11topics SET CISC= CISC + 5";
    $result = mysqli_query($link, $sql);
    header("Location: scheduletests.php");
}
?>