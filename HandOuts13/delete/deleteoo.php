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

// SQL to Delete a record
$sql = "DELETE FROM peserta WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record Deleted Successfully";
} else {
    echo "Error: deleting record" . $con->error;; 
}

$conn->close();

?>