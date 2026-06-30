<?php

if (isset($_POST['name'])) {


    $name = htmlspecialchars($_POST['name']);

    $email = htmlspecialchars($_POST['email']);

    $subject = htmlspecialchars($_POST['subject']);

    $message = htmlspecialchars($_POST['message']);



    $to = "yabetsaman@gmail.com";


    $email_subject = "New Contact Form Message";


    $email_body =
        "Name: $name\n" .
        "Email: $email\n" .
        "Subject: $subject\n" .
        "Message:\n$message";



    $headers = "From: Website Contact <1234yabetsaman@gmail.com>\r\n";

    $headers .= "Reply-To: $email\r\n";



    if (mail($to, $email_subject, $email_body, $headers)) {


        echo "Message Sent Successfully";


        header("Location: contact.html");


    } else {


        echo "Message Failed";

    }


}

?>