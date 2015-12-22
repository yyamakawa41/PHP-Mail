
<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $message = $_POST['message'];

       require_once('/usr/share/php/libphp-phpmailer/class.phpmailer.php');
       $mail = new PHPMailer(); // defaults to using php "mail()"
       $mail->AddReplyTo($email,$name);
       $mail->SetFrom($email, 'From '.$name);
       $address = "yyamakawa@gmail.com";
       $mail->AddAddress($address, "Yohsuke J Yamakawa");
       $mail->Subject    = "Contact email from Portfolio";
       $mail->MsgHTML($message);
       if(!$mail->Send()) {
       echo "Mailer Error: " . $mail->ErrorInfo;
       } else {
       echo "Message sent!";
       }
?>