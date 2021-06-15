<?php
$to_email = $email;
$subject = "Response from website";
$string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@$%^&*()";
$password = substr(str_shuffle($string),0,6);
$headers = "From: akankshagoyalju2000@gmail.com";
if (mail($to_email,$subject,$password,$headers)){
	echo "Mail sent Successfully";
} else {
	echo "Can not send mail";
}



?>