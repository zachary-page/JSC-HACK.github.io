<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$topic = $_POST['topic'];
$formcontent="From: $name \n Topic: $topic \n Message: $message";
$recipient = "natalie.e.cluck@nasa.gov";
$subject = 'Message about JSC Hack 2021';
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
