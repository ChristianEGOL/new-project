<?php

/**
 * Test Mail
 */
$transport = (new Swift_SmtpTransport($_ENV['MAIL_HOST'], $_ENV['MAIL_PORT']))
    ->setUsername($_ENV['MAIL_USERNAME'])
    ->setPassword($_ENV['MAIL_PASSWORD']);

$mailer = new Swift_Mailer($transport);
