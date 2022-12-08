<?php
$to = 'newajwsignup@outlook.com';
$subject = 'the subject';
$message = 'hello';
$headers = array(
    'From' => 'artjwprogram@gmail.com', //Password: World123!
    'Reply-To' => 'artjwprogram@gmail.com',
    'X-Mailer' => 'PHP/' . phpversion()
);


mail($to, $subject, $message, $headers);
?>