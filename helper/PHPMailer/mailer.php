<?php

require_once 'src/PHPMailer.php';

function sendMails($email, $name, $subject, $content){
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->CharSet = "UTF-8";
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'huongngoc.developer@gmail.com';                 // SMTP username
        $mail->Password = 'huong111@@@';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to  465
    
        //Recipients
        $mail->setFrom('huongngoc.developer@gmail.com', 'SHOP_MYSTORE');
        $mail->addReplyTo('huongngoc.developer@gmail.com', 'SHOP_MYSTORE');
        $mail->addAddress($email, $name);               // Name is optional
    
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $content;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        return true;

    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        return false;
    }
}


?>