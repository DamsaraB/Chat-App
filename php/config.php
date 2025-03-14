<?php
$hostname = "localhost";
$username = "root";
$password = "";
$port = 3307;
$dbname = "chat_app";

$conn = mysqli_connect($hostname, $username, $password, $dbname, $port);
if (!$conn) {
  echo "Database connection error" . mysqli_connect_error();
}
?>