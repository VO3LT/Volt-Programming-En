<?php
if ($_SERVER['REQUEST_METHOD']) == 'POST' {
    $user = filter_var($_POST['yname'], FILTER_SANITIZE_STRING);
    $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $msg = filter_var($_POST['massage'], FILTER_SANITIZE_STRING);

    $headers = 'Form: ' . $mail . '\r\n';

    mail('elshikha637@gmail.com', 'contact form', $msg, $headers);

    $user = '';
    $mail = '';
    $msg = '';
}
?>