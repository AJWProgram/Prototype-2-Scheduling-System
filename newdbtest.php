<?php
include 'config.php';
$sql = "SELECT * FROM 12topics WHERE timeid = '2'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result); // PULLS ALL INFO
echo "<div class='content'>
<h3>Input / Output Devices: {$row['METHOD']}</h3>
</div>"

$sql = "UPDATE 12topics SET METHOD = METHOD - 5";
$result = mysqli_query($link, $sql);
// NOTE: THIS WORKS DESPITE BEING SEEMINGLY UNABLE TO EDIT THE DATABASE
?>