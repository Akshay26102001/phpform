<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Contact Form</title>
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
    <div class="container">
        <h2>Contact Us</h2>
        <form action="process.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea name="message" required></textarea>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
