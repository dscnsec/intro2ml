<?php
    $to = 'varunvishal10@gmail.com';
    $firstname = $_POST["fname"];
    $subject= $_POST["subject"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    


    $headers = 'From Intro to ML Program' . "\r\n";
    $headers .= "From: " . $email . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$firstname.'  '.$laststname.'</td>
        </tr>
        <tr><td>Subject: '.$subject.'</td></tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Email: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'Failed';
    }

?>
