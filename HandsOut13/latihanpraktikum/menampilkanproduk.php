<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dts_tsa";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection filed: " . $conn->connect_error);
}

// SQL to Create Table
$sql = "SELECT nama_produk, harga_produk, merk_produk FROM produk";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    //Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Nama Produk " . $row["nama_produk"]. " - Harga:  " . $row["harga_produk"] .
        " - Merk: " . $row["merk_produk"] . "<br>";
    }
} else {
    echo "0 Results";
}

$conn->close();

?>