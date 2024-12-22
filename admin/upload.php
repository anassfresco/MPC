<?php
session_start();
include("../include/connect.php");

// Basic admin authentication
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    die(json_encode(['error' => 'Unauthorized']));
}

// Create upload directory if it doesn't exist
$upload_dir = "../img/news/content";
if (!file_exists($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $filename = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file['name']);
    $filepath = $upload_dir . '/' . $filename;

    // Check if it's a valid image
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
    if (!in_array($file['type'], $allowed_types)) {
        die(json_encode(['error' => 'Invalid file type']));
    }

    if (move_uploaded_file($file['tmp_name'], $filepath)) {
        // Return the location for TinyMCE
        echo json_encode(['location' => '../img/news/content/' . $filename]);
    } else {
        echo json_encode(['error' => 'Failed to upload file']);
    }
} else {
    echo json_encode(['error' => 'No file uploaded']);
} 