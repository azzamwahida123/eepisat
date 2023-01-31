<?php

$name    = $_POST['name'];
$email   = $_POST['email'];
$message = $_POST['message'];

$to  	 = "eepisatindonesia@gmail.com";
$subject = "Email From Website " .$name;
$txt	 = $message;

mail($to, $subject, $txt);

header('Location: success.php'); 

?>