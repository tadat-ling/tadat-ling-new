<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feedback = isset($_POST['feedback']) ? $_POST['feedback'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    // Set the recipient email address
    $to = "wenda.27@icloud.com";
    // Set the subject
    $subject = "New Feedback from User";
    // Create the email content
    $message = "Feedback: " . $feedback . "\nEmail: " . $email;

    // Set the headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Feedback sent successfully!";
    } else {
        echo "There was a problem sending your feedback.";
    }
} else {
    echo "Invalid request.";
}
?>
