<?php
$headers = 'From: Code Test artjwprogram@gmail.com' . "\r\n" . 'Reply-To: artjwprogram@gmail.com' . '\r\n' . 'X-Mailer: PHP/' . phpversion() . '\r\n';
$message = 'TEST';

mail('artjwprogram@outlook.com', 'Test', $message, $headers);
echo 'Sent';
?>