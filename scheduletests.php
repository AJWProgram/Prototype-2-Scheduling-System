<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>1.1 Schedule</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <h1>Here is your schedule: </h1>
        <p>AREA SELECTED: 1</p>
        <p>SUBJECT SELECTED: 1.1</p>
        
    </body>
</html>

<?php
include 'config.php';
$sql = "SELECT * FROM 11topics WHERE timeid = '2'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result); // PULLS ALL INFO
echo "<div class='content'>
    <a href='cisc_edit.php'>CISC/RISC: {$row['CISC']}</a>
    <h3>Input / Output Devices: {$row['IOD']}</h3>
    <h3>RAM and ROM: {$row['RAM']}</h3>
    <h3>Virtual Memory: {$row['VM']}</h3>
    <h3>Pipelining in a Processor: {$row['PIPE']}</h3>

</div>"
?>

<html>
    <button>CONFIRM</button>
</html>