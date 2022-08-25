<?php

include "..\koneksi\koneksi1.php";

// Create Database
$sql = "CREATE DATABASE db_oo";
if ($conn->query($sql) === TRUE) {
    echo "Database created Successfully";
} else {
    echo "Errorr Creating Database: " . $conn->error;
}

$conn->close();
 
?>