<?php
require 'PHPMailer-master/PHPMailerAutoload.php';
function sendmail($to,$subject,$body)
{

$mail = new PHPMailer;
$mail->IsSmtp();
$mail->SMTPDebug=0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';

$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->IsHTML(true);

$mail->Username = "planningevent4@gmail.com";
$mail->Password = "planning@event";

$mail->setFrom("planningevent4@gmail.com","planning@event");
$mail->addAddress($to);
$mail->Subject = $subject;
$mailContent = $body;
$mail->Body = $mailContent;

if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: '. $mail->ErrorInfo;
}else{
    echo 'Message has been sent';
}
}

?>
