<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'support@tradecare.in';

$email_subject = 'new query';

$email_body = "User name: $name.\n".
              "user email: $email.\n". 
              "User message: $message.\n";

$to = 'shivsharma@tradecare.in';

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: index.html");

>