<?PHP
include 'config.php';
$sql = "SELECT * FROM 11topics WHERE timeid = '2';";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result); // PULLS ALL INFO

$sql = "declare @CISC_TIMEFRAME as varchar(20);
set @CISC_TIMEFRAME = {$row['CISC']}; ";
echo string $NewVariable;
?>