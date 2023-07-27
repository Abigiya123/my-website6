<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message  = $_POST['message'];

$email_form ='info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User name: $name.\n".
              "User email: $visitor_email.\n".
              "subject: $subject.\n".
              "User message: $message.\n";       

$to = 'admissions@gsu.edu';

$headers = "From: $email_from \r\n";

$headers = "Reply-to: $visitor_email \r\n";


mail($to,$email_subject, $email_body, $headers);

header("Loaction: content.html");

?>