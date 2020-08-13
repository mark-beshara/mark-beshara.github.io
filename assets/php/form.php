<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "markapbeshara@gmail.com";
$subject = "Contact Form";
$mailheader = "MIME-Version: 1.0" . "\r\n";
$mailheader .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$mailheader .= "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader);
echo "Thank You!";
?>