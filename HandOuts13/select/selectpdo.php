<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr?><th>ID</th><th>Nama</th><th>Email</th></tr>";
class TableRows extends RecursiveIteratorIterator {    
    function _construct($it) {
        parent::_construct($it, self::LEAVES_ONLY);
    }
    function current() {
        return "<td style='width:150pc;border:1px solid black;'>" . parent::current(). "</td>";
    }
    function beginChildren() {
        echo "<tr>";
    }
    function endChildren() {
        echo "</tr>" . "\n";
    }
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pdo";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",
     $username, $password);
    // Set the PDO errorr mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id,nama,email FROM peserta");
    $stmt->execute();

    // Set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>