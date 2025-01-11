<?php
if($_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $file_tmp = $_FILES['file']['tmp_name'];
    
    // Check if the uploaded file is a valid image
    $image_info = getimagesize($file_tmp);
    
    if($image_info !== false) {
        // Move the uploaded file to a specific location
        $destination = '../pictures/' . $_FILES['file']['name'];
        
        if(move_uploaded_file($file_tmp, $destination)) {
            echo 'File uploaded successfully and it is a picture.';
        } else {
            echo 'Error uploading file.';
        }
    } else {
        echo 'The uploaded file is not a valid picture.';
    }
} else {
    echo 'Error uploading file: ' . $_FILES['file']['error'];
}
?>