<?php
require_once('../helpers/main-helper.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clearInputs($_POST['name']);
    $email = clearInputs($_POST['email']);
    $msg = clearInputs($_POST['message']);


    $mail = new PHPMailer;

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = gethostbyname('mail.dgmarketz.com');  // Specify main and backup SMTP servers
    $mail->Port = 587;                               // Enable SMTP authentication
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'info@dgmarketz.com';                 // SMTP username
    $mail->Password = ']s2wO8)4X2VZxs';                           // SMTP password
    $mail->SMTPAutoTLS = false;
    $mail->SMTPSecure = false;
//    $mail->SMTPOptions = array(
//        'ssl' => array(
//            'verify_peer' => false,
//            'verify_peer_name' => false,
//            'allow_self_signed' => true
//        )
//    );

    $mail->From = 'from@example.com';
    $mail->FromName = 'Mailer';
    $mail->addAddress('scoreboardprediction@gmail.com', 'Joe User');     // Add a recipient
    $mail->addReplyTo('info@example.com', 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');
    $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->SMTPDebug  = 2;

    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


    try{
        $mail->send();
    } catch (\Exception $err){
//        echo 'Error'.$err;
        die('error' . $err);
        exit();
    }

//    if($mail->send()) {
//        $_SESSION['mail'] = 'Done';
//        header("Location: http://localhost/wresume");
//        die();
//    } else {
//        $_SESSION['mail'] = 'Error';
//        header("Location: http://localhost/wresume");
//        die();
//    }

    //return;




//die(json_encode(getSiteUrl(),JSON_PRETTY_PRINT));

//    $to      = 'wizard2070@gmail.com';
//    $subject = 'the subject';
//    $message = 'hello';
//    $headers = 'From: webmaster@example.com'       . "\r\n" .
//        'Reply-To: webmaster@example.com' . "\r\n" .
//        'X-Mailer: PHP/' . phpversion();
//
//    $res = mail($to, $subject, $message, $headers);
//
//    if ($res) {
//        $_SESSION['mail'] = 'Done';
//        header("Location: http://localhost/wresume");
//        die();
//    } else {
//        $_SESSION['mail'] = 'Error';
//        header("Location: http://localhost/wresume");
//        die();
//    }
}
