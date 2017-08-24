<?php
require 'vendor/autoload.php';

$mail = new PHPMailer;
                       // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mailtrap.io';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'e10f696bc58fd8';                 // SMTP username
$mail->Password = '7a0070963fb70a';                           // SMTP password                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 2525;         
$mail->setFrom('kazdal.ugur@1ki3.com', 'Mailer');
$mail->addAddress('kazdal.ugur@1ki3.com', 'Joe User');     // Add

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