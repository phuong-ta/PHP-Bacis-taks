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

$sql = "SELECT * FROM mess;";
$tulos = mysqli_query ($conn, $sql);

if ($tulos) {

    while ($row=mysqli_fetch_array($tulos)) {
       echo $row[0]; 
       echo $row[1];
       echo $row[2];
       echo $row[3];
    }

}
?> 