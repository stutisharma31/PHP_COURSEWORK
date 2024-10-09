<?php

$target_dir = __DIR__ . "/uploads/";

// Check if the form is submitted
if (isset($_POST["submit"])) {
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file is an image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "File is not an image.<br>";
        $uploadOk = 0;
    }

    // Check file size (max 3MB)
    if ($_FILES["image"]["size"] > 3000000) {
        echo "Sorry, your file is too large. Max 3MB allowed.<br>";
        $uploadOk = 0;
    }

    // Allow only certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.<br>";
    } else {
        // Move the file to the uploads directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.<br>";
        } else {
            echo "Sorry, there was an error uploading your file.<br>";
        }
    }
}

// Fetch all images from the uploads directory
$images = glob($target_dir . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Upload an Image</h2>
    <form action="index.php" method="post" enctype="multipart/form-data">
        Select an image to upload:
        <input type="file" name="image" id="image">
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <h2>Image Gallery</h2>
    <div class="gallery">
        <?php
        if ($images) {
            foreach ($images as $image) {
                echo '<div class="gallery-item">';
                echo '<img src="' . $image . '" alt="' . basename($image) . '">';
                echo '</div>';
            }
        } else {
            echo "No images uploaded yet.";
        }
        ?>
    </div>

</body>
</html>
