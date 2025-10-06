<!-- complaints.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints - My Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>My Website</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="complaints.php">Complaints</a>
        </nav>
    </header>

    <main>
        <h2>Submit a Complaint</h2>
        <p>If you have any issues or concerns, please let us know by filling out the form below:</p>

        <form action="process_complaints.php" method="POST" class="complaint-form">
            <label for="name">Your Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Your Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">Complaint Details:</label><br>
            <textarea id="message" name="message" rows="6" required></textarea><br><br>

            <button type="submit">Submit Complaint</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2025 My Website. All rights reserved.</p>
    </footer>
</body>
</html>
