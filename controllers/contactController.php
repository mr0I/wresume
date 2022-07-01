<?php
require_once('../helpers/main-helper.php');

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
//
//require '../libs/php_mailer/src/Exception.php';
//require '../libs/php_mailer/src/PHPMailer.php';
//require '../libs/php_mailer/src/SMTP.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clearInputs($_POST['name']);
    $email = clearInputs($_POST['email']);
    $msg = clearInputs($_POST['message']);


//    $mail = new PHPMailer;
//
//    $mail->isSMTP();                                      // Set mailer to use SMTP
//    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
//    $mail->Port = 587;                               // Enable SMTP authentication
//    $mail->SMTPAuth = true;                               // Enable SMTP authentication
//    $mail->Username = 'wizard2070@gmail.com';                 // SMTP username
//    $mail->Password = 'merona1728**';                           // SMTP password
//    $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
//
//    $mail->From = 'from@example.com';
//    $mail->FromName = 'Mailer';
//    $mail->addAddress('scoreboardprediction@gmail.com', 'Joe User');     // Add a recipient
//    $mail->addReplyTo('info@example.com', 'Information');
////    $mail->addCC('cc@example.com');
////    $mail->addBCC('bcc@example.com');
//
//    $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
////    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//    $mail->isHTML(true);                                  // Set email format to HTML
//
//    $mail->Subject = 'Here is the subject';
//    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
//
//    if(!$mail->send()) {
//        echo 'Message could not be sent.';
//        echo 'Mailer Error: ' . $mail->ErrorInfo;
//    } else {
//        echo 'Message has been sent';
//    }
//
//    return;


//die(json_encode(getSiteUrl(),JSON_PRETTY_PRINT));

    $to      = 'wizard2070@gmail.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: webmaster@example.com'       . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $res = mail($to, $subject, $message, $headers);

    if ($res) {
        $_SESSION['mail'] = 'Done';
        header("Location: http://localhost/wresume");
        die();
    } else {
        $_SESSION['mail'] = 'Error';
        header("Location: http://localhost/wresume");
        die();
    }
}
