<?php
// define('CLI_SCRIPT', true);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust the path based on your setup

require_once('/var/www/html/moodle/config.php');

$recipient_email = get_config('local_emailplugin', 'testemailaddress');
$email_subject = get_config('local_emailplugin', 'testemailsubject');
$email_body = get_config('local_emailplugin', 'testemailmessage');

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'omer.fonerep@gmail.com'; // Your email address
    $mail->Password = 'adypeyguqjnmrefp'; // Your email password
    $mail->SMTPSecure = 'ssl' ;
    $mail->Port = 465;

    // Sender and recipient settings
    $mail->setFrom('omer.fonerep@gmail.com', 'Omer');
    $mail->addAddress($recipient_email);

    // Email content
    $mail->isHTML(false);
    $mail->Subject = $email_subject;
    $mail->Body    = $email_body;

    // Send email
    if($mail->send()){
        echo 'mail sent';
    }else {
        echo 'mail not sent';
    }
} catch (Exception $e) {
    echo get_string('testemailfailed', 'local_emailplugin') . ' PHPMailer Exception: ' . $mail->ErrorInfo;
}

