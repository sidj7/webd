<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $targetDirectory = 'uploads/'; // Directory where the uploaded file will be stored
    $targetFile = $targetDirectory . basename($_FILES['fileToUpload']['name']); // Path of the uploaded file
    $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($fileExtension, $allowedExtensions)) {
        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetFile)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading the file.";
        }
    } else {
        echo "Invalid file extension. Only JPG, JPEG, PNG, and GIF files are allowed.";
    }
}
?>
