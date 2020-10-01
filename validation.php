<?php
echo "<pre>";

    $user = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "aaronthegreat123456789a@gmail.com";
    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != ''){
        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

            $body = "";

            $body .= "From ".$user."\r\n";
            $body .= "Email ".$email."\r\n";
            $body .= "Subject ".$subject."\r\n";
            $body .= "Message ".$message."\r\n";


            mail($to,$subject,$body);

            $message_sent = true;
        }
    }
echo "</pre>";
?>
