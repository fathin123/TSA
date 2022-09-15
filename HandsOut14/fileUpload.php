<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
    $target_path = "HandsOut14/";

    $target_path = $target_path.basename(
        $_FILES['uploadedfile']['name']
    );

    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_path)){
        echo "The file ".basename($_FILES['uploadedfile']['name'])."has been upload";
    } else {
        echo "There was an error uploading the file, please try again!";
    }
    ?>
</body>
</html>