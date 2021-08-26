<?php
$to      = 'mastergaming4612@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: nvp23481@gmail.com' . "\r\n" .
    'Reply-To: nvp23481@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>