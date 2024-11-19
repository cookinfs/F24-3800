<?php
$dir = "../gallery/";
$images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
$data = [];
$baseUrl = "http://localhost/"; // Replace with your actual base URL

foreach ($images as $image) {
    $data[] = [
        'src' => $baseUrl . $image,
        'title' => basename($image)
    ];
}

header('Content-Type: application/json');
echo json_encode($data);
?>

