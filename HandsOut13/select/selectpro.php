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
$sql = "SELECT id,nama,email FROM peserta";
$result = mysqli_query($conn, $sql);

if($result->num_rows > 0) {
    //Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nama:  " . $row["nama"] .
        " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 Results";
}
mysqli_close($conn);

?>