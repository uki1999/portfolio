<?php $name = $_POST['Name'];
$email = $_POST['Email'];
$text = $_POST['Text'];
$message = $_POST['Message'];
$formcontent="From: $name \n Project: $text \n Message: $message";
$recipient = "urosradisavljevic10@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>