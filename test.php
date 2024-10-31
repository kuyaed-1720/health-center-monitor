<?php
// Redirect all requests to the public directory
$url = $_SERVER['REQUEST_URI'];
$publicPath = __DIR__ . '/public';

// Check if the requested file exists in the public directory
if (file_exists($publicPath . $url)) {
    // Serve the requested file
    return false;
} else {
    // Redirect to the public/index.php file
    header('Location: ' . $url . 'public');
    exit;
}
