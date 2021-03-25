<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
 
// tạo connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// kiểm tra connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$a = $_POST ["abc"];
$b = $_POST ["email"];
$c = $_POST ["phone"];
$d = $_POST ["mess"];


$sql = "INSERT INTO mess(Fullname, Email, Phone, Massa)
        VALUES ('$a', '$b', '$c', '$d');";

if (mysqli_query ($conn, $sql)) {
    echo "ok";
}
