<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'user';

$conn = new mysqli($host ,$user ,$pass ,$db);

if($conn->connect_error){
die("connection failed :". $conn->connect_error);

}


?>