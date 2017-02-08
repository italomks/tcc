<?php

require 'vendor/autoload.php';

$mail = new PHPMailer();

$mail->SMTPDebug = 2;                               // Enable verbose debug output

$mail->isSMTP();
$mail->Host = 'localhost';
$mail->Port = 8083;
$mail->SMTPAuth = false;
$mail->SMTPSecure = false;                           // Enable SMTP authentication
$mail->Username = 'mateus.giacomin2@hotmail.com';                 // SMTP username
$mail->Password = '587';                           // SMTP password

$mail->setFrom('itamks@outlook.com', 'Italo');
$mail->addAddress('italomarks3@gmail.com', 'Italo Marks');     // Add a recipient
$mail->addAddress('ellen@example.com');                       // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');   // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}