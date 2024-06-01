<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use Dotenv\Dotenv;

require 'vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$appName = $_ENV['APP_NAME'] ?? 'Default App Name';
$baseUrl = $_ENV['BASE_URL'] ?? 'http://localhost';
$mailFromAddress = $_ENV['MAIL_FROM_ADDRESS'] ?? 'default@example.com';
$mailFromName = $_ENV['MAIL_FROM_NAME'] ?? 'Default Name';

echo "APP_NAME: " . $appName . PHP_EOL;
echo "BASE_URL: " . $baseUrl . PHP_EOL;
echo "MAIL_FROM_ADDRESS: " . $mailFromAddress . PHP_EOL;
echo "MAIL_FROM_NAME: " . $mailFromName . PHP_EOL;
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = $_ENV['MAIL_HOST'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $_ENV['MAIL_USERNAME'];
    $mail->Password   = $_ENV['MAIL_PASSWORD'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = $_ENV['MAIL_PORT'];

    // Recipients
    $mail->setFrom($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME']);
    $mail->addAddress('frankykolondam@gmail.com');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body in bold!';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
