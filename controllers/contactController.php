<?php
require_once('../helpers/main-helper.php');


session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contact-form'])) {
    $name = clearInputs($_POST['name']);
    $email = clearInputs($_POST['email']);
    $phone = clearInputs($_POST['phone']);
    $msg = clearInputs($_POST['message']);


    $logFile = fopen("../logfile.txt", "a+") or die("Unable to open file!");
    $data = array(
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'message' => $msg
    );

    fwrite($logFile, "\n");
    fwrite($logFile, json_encode($data));
    fclose($logFile);

    $_SESSION['mail'] = 'Done';
    header("Location: " . getSiteUrl());
    die();
}
