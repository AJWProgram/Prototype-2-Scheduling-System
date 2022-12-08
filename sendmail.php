<?php
    $dest = "newawprogram@gmail.com";
    $subjetc = "TEST EMAIL";
    $body ="hello";
    $headers = "From: newawprogram@gmail.com";

    if (mail($dest, $subjetc, $body, $headers)) {
        echo "Email sent to $dest";
    }   else{
        echo "failed to send";

    }
    ?>
    