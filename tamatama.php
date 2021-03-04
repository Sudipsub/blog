 <?php
         $to      = "sudipsub123@gmail.com"; // Send email to our user
                       $subject = 'Signup | Verification'; // Give the email a subject 
                        $message = '

                        balsal
                        '; // Our message above including the link

                        $headers = 'From: Sudipsub123@gmail.com' . "\r\n"; // Set from headers
                    echo   mail($to, $subject, $message, $headers); //
        echo "all okay";

?>