<?php
  $name = htmlspecialchars($_POST['Name']);
  $email = htmlspecialchars($_POST['Email']);
  $text = htmlspecialchars($_POST['Text']);
  $message = htmlspecialchars($_POST['Message']);
  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "urosradisavljevic10@gmail.com"; 
      $subject = "From: $name <$email>";
      $body = "Name: $name\nEmail: $email\nProject: $text\n\nMessage:\n$message\n\nRegards,\n$name";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Your message has been sent";
      }else{
         echo "Sorry, failed to send your message!";
      }
    }else{
      echo "Enter a valid email address!";
    }
  }else{
    echo "Email and message field is required!";
  }
?>