<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mailer = new PHPMailer();
$mailer->isSMTP();
$mailer->SMTPDebug = SMTP::DEBUG_SERVER;
$mailer->Host = 'smtp.gmail.com';
$mailer->SMTPAuth = true;
$mailer->Username = 'test@example.com';
$mailer->Password = 'password';
$mailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mailer->Port = 465;

$mailer->setFrom('test@example.com', 'John Doe');
$mailer->addReplyTo('test@example.com', 'John Doe');

$mailer->addAddress('test@example.com', 'Jane Doe');

// $mailer->addCC('test@example.com', 'John Ceo');
// $mailer->addBCC('test@example.com', 'John Cto');

$mailer->Subject = 'Hello';
$mailer->isHTML(true);
$mailer->Body = '<h1>hello</h1>';
$mailer->AltBody = 'hello';

// $mailer->addAttachment('file.pdf');

$mailer->send();