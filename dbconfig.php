<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "u977620062_image_upload";
$dbPassword = "u977620062_Image_upload";
$dbName     = "u977620062_image_upload";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>