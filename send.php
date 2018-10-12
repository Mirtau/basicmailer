<?php

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.comcast.net';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'tjj72@comcast.net';                 // SMTP username
    $mail->Password = 'Car1206ter';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Sender
    $mail->setFrom( $email, $name);
    // recipient
    $mail->addAddress('tjj72@comcast.net', 'Tim');

$body = '<p><strong>Hello</strong>, You have received an email from ' . $name . ' the message is '. $message . ' you can contact them at ' . $phone . '</p>';
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'You have received an email from ' . $name;
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    header('location: index.php?sent');
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}



?>
