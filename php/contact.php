<?php

$name = $_POST['name'];
$last = $_POST['last'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['message'];
$to = 'yukiro.azn@live.com';
$subject = 'New Message';

$headers = "From: ".$name. "\r\n".
"CC: contact@jaydigital.fr";

$txt = "Name:   " .$name.
"\r\nLast Name:   " .$last.
"\r\nEmail:   " .$email.
"\r\nContact:   " .$contact.
"\r\nMessage:   ". $message;

if($email!=null){
mail($to, $subject, $txt, $headers);
}

header('Location:ty.html');
?>
