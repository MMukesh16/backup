<?php
// $to = 'sarath@constient.com';
// $subject = 'This is our test mail';
// $message = '<h1>Hello Sarath bro!!</h1>';
// $headers = "From : The sender name <mukeshkumar@constient.com>\r\n";
// $headers .= "reply-to:mukeshkumar@constient.com\r\n";
// $headers .= "Content-type: text/html; charset=UTF-8"."\r\n";

// mail($to,$subject,$message,$headers);
?>
<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "mukeshmano1698@gmail.com";
         $subject = "Test Mail";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:mukeshkumar@constient.com \r\n";
        //  $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>