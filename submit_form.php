<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $country = $_POST['country'];
    $subjects = $_POST['subject1'];

    echo "<h2>Form Data Received:</h2>";
    echo "<p><b>Name:</b> $name</p>";
    echo "<p><b>Email:</b> $email</p>";
    echo "<p><b>Message:</b> $message</p>";
    echo "<p><b>Selected Country:</b> $country</p>";
    echo "<p><b>Selected Subjects:</b> ";
    foreach ($subjects as $subject) {
        echo "$subject ";
    }
    echo "</p>";
} else {
    echo "Invalid request method!";
}
?>
