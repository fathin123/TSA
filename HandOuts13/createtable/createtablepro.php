<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pro";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if (!$conn) {
    die("Connection filed: " . $mysqli_connenct_error());
}

// SQL to Create Table
$sql = "CREATE TABLE peserta (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    tgl_registrasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE
    CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table peserta Created Successfully";
} else {
    echo "Error Creating Table: " . mysqli_error($conn); 
}

mysqli_close($conn);

?>