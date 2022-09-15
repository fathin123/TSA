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

// SQL to Update
$sql = "UPDATE peserta SET email='farah@gemail.com' WHERE id=1";

if($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>