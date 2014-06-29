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

$message = "I wish to unsubscribe from your newsletter. Please remove me from your mailing list.\n";
$message .= "Name: $name\n";
$message .= 'Email: ' . $_POST['email'] . "\n";
$message .= "\n";

$headers =	'From: <' . $_POST['email'] . '> '. $name ."\r\n" .
    'Reply-To: <' . $_POST['email'] . '> '. $name . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


mail($to, $subject, $message, $headers);
header('location: http://www.rosasconversations.com/unsub-conf.html');
?>