<?php
$to = 'sarath@constient.com';
$subject = 'This is our test mail';
$message = '<h1>Hello Sarath bro!!</h1>';
$headers = "From : The sender name <mukeshkumar@constient.com>\r\n";
$headers .= "reply-to:mukeshkumar@constient.com\r\n";
$headers .= "Content-type: text/html; charset=UTF-8"."\r\n";

mail($to,$subject,$message,$headers);
?>