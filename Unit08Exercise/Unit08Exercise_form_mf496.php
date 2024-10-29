
<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Us</h2>
    <form action="Unit08Exercise_action_mf496.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" name="name" required><br><br>
       
        <label for="email">Email:</label><br>
        <input type="text" name="email" required><br><br>
       
        <label for="message">Message:</label><br>
        <textarea name="message" rows="5" required></textarea><br><br>
       
        <input type="reset" value="Reset">
        <input type="submit" value="Submit">
    </form>
    <p>Mazher Farooq, IT202 & 003, Internet Application, Unit 08 Exercise, mf496@njit.edu</p>
    <p>
       <?php
           date_default_timezone_set("America/New_York");
           echo "The date and time is " . date("D M j h:ia T Y");
       ?>
    </p>
</body>
</html>