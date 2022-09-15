<?php

include "..\koneksi\koneksi2.php";

// Create Database
$sql = "CREATE DATABASE db_pro";
if (mysqli_query($conn, $sql)) {
    echo "Database created Successfully";
} else {
    echo "Errorr Creating Database: " . mysqli_error($conn);
}

mysqli_close($conn);
 
?>