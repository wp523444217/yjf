<?php
require '../../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

 $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.qq.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = '1002732404@qq.com';                 // SMTP username
        $mail->Password = 'vkrnzctgzrtxbcfd';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to
         
        $mail->setFrom('1002732404@qq.com', 'Mailer');
        $mail->addAddress('1002732404@qq.com', 'Joe User');     // Add a recipient
        $mail->addAddress('1002732404@qq.com');               // Name is optional
        $mail->addReplyTo('1002732404@qq.com', 'Information');
        $mail->addCC('1002732404@qq.com');
        $mail->addBCC('1002732404@qq.com');
         
        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML
         
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            echo '信息发送失败';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo '恭喜你成功发送';
        }
    

