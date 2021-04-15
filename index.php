<?php
$host="db";
$user="Suveksha";
$password="Suveksha";
$db="BloodData";

$conn=new mysqli_connect($host,$user,$password,$db);
if (!$conn) {
  die("Connection failed: " .mysqli_connect_error());
}
echo "Connected successfully";
?>
