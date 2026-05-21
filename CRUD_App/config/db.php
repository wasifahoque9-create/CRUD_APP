<?php
$dbHost = "localhost";
$dbPassword = '';
$dbName = 'crud_app';
$dbUsername = 'root';
$conn = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);
if($conn->connect_error){
    die('connection faild!');
}


?>