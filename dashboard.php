<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // If not logged in, redirect to login page
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <div class="dashboard">
        <h1>Welcome to the Admin Panel</h1>
        <p>You are logged in as: <?= $_SESSION['user_id']; ?></p>
        <a href="logout.php">Logout</a>
    </div>

</body>
</html>
