<?php

$name = $_POST['name'];

$to = 'kmaillette@gmail.com';
$subject = 'Subscribe to Newsletter';

$message = "I want to receive your newsletter. Please add me to your mailing list.\n";
$message .= "Name: $name\n";
$message .= 'Email: ' . $_POST['email'] . "\n";
$message .= "\n";

$headers =	'From: <' . 'theuch@server60.web-hosting.com' . '> '. $name ."\r\n" .
    'Reply-To: <' . $_POST['email'] . '> '. $name . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

//Run mail() function and assign its returned value to "$bool" variable:
$bool = mail($to, $subject, $message, $headers);

//Check the contents of $bool to see if mail() returned TRUE or FALSE:
if($bool == TRUE) {
    echo "Yeah, your mail was accepted for delivery";
} else {
    echo "Nope! Your mail was not accepted for delivery.";
}

//mail($to, $subject, $message, $headers);
//header('location: http://www.rosasconversations.com/thank-you.html');

?>