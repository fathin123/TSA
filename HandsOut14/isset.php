<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <title>Document</title> -->
</head>
<body>

    <?php
        if(isset($_GET["nama"]) AND isset($_GET["email"]) AND isset($_GET["telp"]))
        {
            echo "Hallo" . $_GET["nama"] . "!!<br>";
            echo "Alamat emailmu adalah" . $_GET["email"] . "!!<br>";
            echo "No Teleponmu adalah" . $_GET["telp"] . "!!<br>";
        } else {
            echo "Anda harus mengakses halaman ini dari myform.html";
        }
    ?>
    
</body>
</html>