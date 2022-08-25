<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_oo";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection filed: " . $conn->connect_error);
}

// SQL to Create Table
$sql = "CREATE TABLE peserta (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    tgl_registrasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE
    CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table peserta Created Successfully";
} else {
    echo "Error Creating Table"; 
}

?>