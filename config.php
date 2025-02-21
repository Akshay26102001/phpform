<?php
$host = "localhost"; // Change if using a remote database
$user = "root"; // Your database username
$password = ""; // Your database password
$dbname = "php_form_db"; // Your database name

$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
