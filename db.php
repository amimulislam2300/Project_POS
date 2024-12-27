<?php
$host = 'localhost'; // Database server (usually localhost)
$dbname = 'admin_panel'; // Name of the database
$username = 'root'; // MySQL username (use 'root' if using XAMPP or WAMP)
$password = ''; // MySQL password (use '' if you don't have one)

try {
    // Create a PDO instance
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // In case of error, display an error message
    echo "Connection failed: " . $e->getMessage();
}
?>
