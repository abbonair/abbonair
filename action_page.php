<?php
 $name = $_POST['name']; 
 $visitor_email = $_POST['email']; 
 $message = $_POST['subject']; 

 $email_from ='abbonair@gmail.com'

 $email_subject = 'Meddlenade från hemsidan'

 $email_body = "Avsändare: $name.\n".
               "Avsändarens e-mail: $visitor_email.\n".
               "Meddelande: $message.\n"; 

 $to = "abbonair@gamil.com"; 
 $headers = "From: $email_from \r\n";
 $headers .= "Reply-To: $email_from \r\n";

 mail($to,$email_subject,$email_body,$headers);
 header("Location: kontakt.html"); 

?>