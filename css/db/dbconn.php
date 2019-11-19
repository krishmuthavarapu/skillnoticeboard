<?php
$databaseHost = 'localhost';
$databaseHost = 'root';
$databasePassword = '';
$databaseName = 'uslive';


$conn = mysqli_connect($databaseHost, $databaseHost, $databasePassword, $databaseName); 
if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}else{
}
?>