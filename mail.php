<?php 



$to       = 'nelsonnellzcarter@gmail.com';
$subject  = 'Testing sendmail.exe';
$message  = 'Hi, you just received an email using sendmail!';
$headers  = 'From: [nelson.omueti.business]@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
    echo "Email sent";
else
    echo "Email sending failed";
 