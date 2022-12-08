<?php
include 'config.php';
$sql = "SELECT * FROM 11topics WHERE timeid = '2'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result); // PULLS ALL INFO

 $sql = "UPDATE 11topics SET CISC= CISC + 5";
// $result = mysqli_query($link, $sql);

function EditSchedule(){
    if (['CISC'] != 12){
        $sql = "UPDATE 11topics SET CISC = CISC - 1";
        $result = mysqli_query($link, $sql);
    }
}

while (['CISC'] != 12){
    $sql = "UPDATE 11topics SET CISC = CISC - 1";
    $result = mysqli_query($link, $sql);
    $sql = "SELECT * FROM 11topics WHERE timeid = '2'";
    $result = mysqli_query($link, $sql);
    if (['CISC'] == 12){
        break;
    }
}
?>