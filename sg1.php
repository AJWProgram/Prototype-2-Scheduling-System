
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>SCHEDULE GENERATION</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form class ='box' action='sg1.php' method='post'>
        <h1>SCHEDULE GENERATION</h1>
        <p>Please select an area of study: </p>
        <input type='submit' name='area1' value='Area 1 (inludes 1.1 -> 1.5)'>
        <input type='submit' name='area2' value='Area 2 (includes 2.1 -> 2,3)'>
        </form>       
    </body>
</html>

<?php
//TO CLICK AREA 1
if(isset($_POST['area1'])){ //ISSET MEANS VARIABLE IS NOT EMPTY
    // REDIRECT
    header("Location: sg11.php");
}

//TO CLICK AREA 2
if(isset($_POST['area2'])){ //ISSET MEANS VARIABLE IS NOT EMPTY
    // REDIRECT
    header("Location: sg12.php");
}


?>