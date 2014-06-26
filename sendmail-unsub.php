<?php
/**
 * Created by IntelliJ IDEA.
 * User: kateschlagel
 * Date: 6/17/14
 * Time: 8:10 PM
 */

$name = $_POST['name'];

$to = 'kmaillette@gmail.com';
$subject = 'Unsubscribe from Newsletter';

$message = "Name: $name\n";
$message .= 'Email: ' . $_POST['email'] . "\n";
$message .= "\n";

$headers =	'From: <' . $_POST['email'] . '> '. $name ."\r\n" .
    'Reply-To: <' . $_POST['email'] . '> '. $name . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


mail($to, $subject, $message, $headers);
header('location: http://localhost:8888/RCon/unsub-conf.html');
?>