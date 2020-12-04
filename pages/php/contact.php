<?php 
 
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $message = $_POST['message'];
 $formcontent = " From: $first_name \n $last_name \n \n Phone: $phone \n \n Message: $message";
 $recipient = "juliclot123@gmail.com";
 $subject = "Contact Form";
 $mailheader = "From: $email \r\n";
 mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
 header('Location: ../Help.html');

?>