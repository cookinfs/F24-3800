<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $targetDir = './gallery/';
    $targetFile = $targetDir . basename($_FILES['file']['name']);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Validate file type
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($imageFileType, $allowedTypes)) {
        echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
        exit;
    }

    // Upload file
    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
        header("Location: ../pictures.html");
        exit;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
