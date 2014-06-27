<?php
/**
 * Created by IntelliJ IDEA.
 * User: kateschlagel
 * Date: 6/17/14
 * Time: 8:10 PM
 */

$name = $_POST['name'];

$to = 'rosa.conversations@hotmail.com';
$subject = 'Subscribe to Newsletter';

$message = "I want to receive your newsletter. Please add me to your mailing list.\n";
$message .= "Name: $name\n";
$message .= 'Email: ' . $_POST['email'] . "\n";
$message .= "\n";

$headers =	'From: <' . $_POST['email'] . '> '. $name ."\r\n" .
    'Reply-To: <' . $_POST['email'] . '> '. $name . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


mail($to, $subject, $message, $headers);
header('location: http://www.rosasconversations.com/thank-you.html');
?>