<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form fields data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Email address where you want to receive the messages
    $to = "aishafaisal2001@gmail.com";
    // $to = "man411210@gmail.com";

    // Email headers
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";


    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Subject: $subject\n";
    $email_content .= "Message: $message\n";

 
    if (mail($to, $subject, $email_content, $headers)) {
        // Return success response
        echo json_encode(["result" => "success"]);
    } else {
       
        echo json_encode(["result" => "error"]);
    }
} else {
    
    echo json_encode(["result" => "error"]);
}
?>

