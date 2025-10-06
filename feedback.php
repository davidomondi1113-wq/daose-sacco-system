<?php include 'header.php'; ?>
    <main>
        <h2>Feedback</h2>
        <p>We value your feedback. Please share your suggestions below.</p>
        <form action="#" method="post">
            <label for="name">Full Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="feedback">Your Feedback:</label><br>
            <textarea id="feedback" name="feedback" rows="5" required></textarea><br><br>

            <button type="submit">Submit</button>
        </form>
    </main>
<?php include 'footer.php'; ?>
