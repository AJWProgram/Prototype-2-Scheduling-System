<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>SCHEDULE GENERATION</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form class ='box' action='sg11.php' method='post'>
        <h1>SCHEDULE GENERATION</h1>
        <p>Area 1 selected - Please select a subject of study:  </p>
        <input type='submit' name='subject1' value='1.1'>
        <input type='submit' name='subject2' value='1.2'>
        <input type='submit' name='subject3' value='1.3'>
        <input type='submit' name='subject4' value='1.4'>
        <input type='submit' name='subject5' value='1.5'>
        </form>       
    </body>
</html>

<?php
//TO CLICK AREA 1
if(isset($_POST['subject1'])){ //ISSET MEANS VARIABLE IS NOT EMPTY
    // REDIRECT
    header("Location: scheduletests.php");
}

//TO CLICK AREA 2
if(isset($_POST['subject2'])){ //ISSET MEANS VARIABLE IS NOT EMPTY
    // REDIRECT - PAGE YET TO BE DEVELOPED!
    header("Location: welcome.php");
}
?>
