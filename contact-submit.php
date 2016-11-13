<?php

$subEmail = $_POST['email'];
$subName = $_POST['name'];
$subMessage = $_POST['message'];

if ($subEmail !== null) {
    $finalEmail = filter_var($subEmail, FILTER_SANITIZE_EMAIL);
} else {
    echo false;
    die();
}

if ($subName !== null) {
    $finalName = filter_var($subName, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
} else {
    echo false;
    die();
}

if ($subMessage !== null) {
    $finalMessage = filter_var($subMessage, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
} else {
    echo false;
    die();
}

$emailto = 'tyler@chadtylerwalker.com';
$toname = 'Tyler Walker';
$emailfrom = $finalEmail;
$fromname = $finalName;
$subject = 'Contact Submission from Personal Site';
$messagebody = $finalMessage;
$headers =
    'Return-Path: ' . $emailfrom . "\r\n" .
    'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
    'X-Priority: 3' . "\r\n" .
    'X-Mailer: PHP ' . phpversion() .  "\r\n" .
    'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
    'MIME-Version: 1.0' . "\r\n" .
    'Content-Transfer-Encoding: 8bit' . "\r\n" .
    'Content-Type: text/plain; charset=UTF-8' . "\r\n";
$params = '-f ' . $emailfrom;
$emailTest = mail($emailto, $subject, $messagebody, $headers, $params);

if ($emailTest) {
    echo true;
}
else {
    echo false;
}

die();