<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$to = 'rajdeepj1363@gmail.com';
$subject = 'Website Review';
$sender_name = $_POST["name"];
$message = $_POST["mail"];
$message = "Name: ".$sender_name."\n\n".$message;
$from = $_POST["mailid"];

// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>
