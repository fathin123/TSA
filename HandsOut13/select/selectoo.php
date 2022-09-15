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
$sql = "SELECT id,nama,email FROM peserta";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    //Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nama:  " . $row["nama"] .
        " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 Results";
}

$conn->close();

?>