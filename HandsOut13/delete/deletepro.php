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

// SQL to Delete Record
$sql = "DELETE FROM peserta WHERE id=2";

if (mysqli_query ($conn,$sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>