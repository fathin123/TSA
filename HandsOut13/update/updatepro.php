<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pro";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if (!$conn) {
    die("Connection filed: " . mysqli_connect_error());
}

// SQL to Create Table
$sql = "UPDATE peserta SET email='andi@gemail.com' WHERE id=2";
if (mysqli_query ($conn,$sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>