 

    
      <?php
             if (isset($_POST['partner'])) {
            $to="m.bilaldsu@gmail.com";
            $name = $_POST['name'];
            $email = $_POST['user_email'];
            $number = $_POST['number'];
            $company = $_POST['company'];
            $message = $_POST['message'];
            
            $headers = "From: $name \r\n";

            $headers .= "Reply-To: $email \r\n";
 
	        $message = "Name: " . $name . "\n"
	         . "Contact Name  : " . $company . "\n\n"
	        . "Email  : " . $email . "\n\n"
            . "Phone Number: " . $number . "\n\n"
           
            . "Message: "   . $_POST['message'];

	 

	$subject = "You have received a new message from the user $name.\n"   ; 
                          
 
          //  mail($to,$email_subject,$email_body,$headers); 
            
            if(mail($to, $subject, $message, $headers))  
   {
 
          
         echo '<script language="javascript">';
          echo 'alert("Message sent successfully! Thank you"); location.href="partner.html"';
          echo '</script>';
          
          
          
          

   }
   else
   {	
   	 //Fail Message
      echo "The message could not been sent!";
   }
             }
            ?>
    
    
    