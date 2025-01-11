<?php
$target_dir = "../pictures/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.<br>";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["file"]["size"] > 500000) {
    echo "Sorry, your file is too large.<br>";
    $uploadOk = 0;
}

// Allow certain file formats
if (
    $imageFileType == "php" ||
    $imageFileType == "php1" ||
    $imageFileType == "php2" ||
    $imageFileType == "php3" ||
    $imageFileType == "php4" ||
    $imageFileType == "php5" ||
    $imageFileType == "php6" ||
    $imageFileType == "php7" ||
    $imageFileType == "php8" ||
    $imageFileType == "phtml"
) {
    echo "Not Allow Upload Shell";
    $uploadOk = 0;
}else{
    echo "hacker said: ".$imageFileType;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.<br>";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded in /pictures.<br>";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
}
