<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject = htmlspecialchars($_POST['subject']);
    $name = htmlspecialchars($_POST['name']);
    $telephone = htmlspecialchars($_POST['telephone']);

    $to = "sriniisgod@gmail.com";
    $email_subject = "Help Request: " . $subject;
    $email_body = "You have received a new help request.\n\n".
                  "Name: $name\n".
                  "Telephone: $telephone\n".
                  "Subject: $subject";

    $headers = "From: noreply@yourdomain.com\r\n";
    $headers .= "Reply-To: noreply@yourdomain.com\r\n";

    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Your request has been sent successfully!";
    } else {
        echo "There was an error sending your request. Please try again.";
    }
}
?>
