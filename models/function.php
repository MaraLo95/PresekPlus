<?php

//Send Mail Function Using SMTP
function sendMail($subjects,$message,$to){
    include_once SRV_ROOT.'models/smtp/PHPMailer.php';
    include_once SRV_ROOT.'models/smtp/Exception.php';
    include_once SRV_ROOT.'models/smtp/SMTP.php'; 
    
    $mail = new \PHPMailer\PHPMailer\PHPMailer();
    
    $mail->isSMTP();
    $mail->CharSet = 'UTF-8';

    $mail->SMTPAuth = true;
    $mail->Username = 'makieric95@gmail.com';
    $mail->Password = '12345';
    $mail->Host = 'gmail.com'; //Server Host

    $mail->From = 'makieric95@gmail.com';
    $mail->FromName = 'Presek Plus';
    $mail->Subject = $subjects;

    $mail->isHTML();
    $mail->msgHTML($message);
    $mail->addAddress($to);

    $mail->send();             
}