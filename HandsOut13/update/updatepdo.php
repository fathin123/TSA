<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pdo";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",
     $username, $password);
    // Set the PDO errorr mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql ="UPDATE peserta SET email='farah109099@gmail.com' WHERE id=1";

    // Prepare statement
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // echo a message to say the UPDATE successfully;
    echo $stmt  ->rowCount() . "record UPDATE Successfully";
} catch (PDOException $e) {
    echo $sql / "<br>" . $e0>getMessage();
}
$conn = null;

?>