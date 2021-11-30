<?php
$host = "localhost";
$user = 'root';
$password = '';
$database = 'fyp';

$connect = mysqli_connect($host, $user, $password, $database)
or die('Connecting to MYSQL failed');
echo 'database connected<br><br>'
?>