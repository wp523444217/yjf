<?php



 include  '../../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.qq.com';  							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '523444217@qq.com';                 // SMTP username
$mail->Password = 'rwfjccwqoyoqbjgi';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('523444217@qq.com', '123456..');
$mail->addAddress('201946228@qq.com', 'Joe User');     // Add a recipient
$mail->addAddress('201946228@qq.com');               // Name is optional
$mail->addReplyTo('201946228@qq.com', 'Information');
$mail->addCC('201946228@qq.com');
$mail->addBCC('201946228@qq.com');

$mail->addAtachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAtachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}