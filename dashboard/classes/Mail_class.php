<?php

use PHPMailer\PHPMailer\PHPMailer;

class Mail_class
{

    public function send_mail($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
        $mail->setFrom('$from, $from_name');
        $mail->addAddress($to);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->isHTML(true);

        return $mail->send();

    }
}
