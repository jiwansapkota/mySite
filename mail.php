<?php
    $to = 'sapkotazeewan13@gmail.com';
    $email= $_POST["email"];
    $text= $_POST["message"];
    $phone= $_POST["phone"];
    $headers=$_POST["subject"];
    $name=$_POST["name"];
    mail($to,$headers,$message,$headers[,$name,$phone,$email])
    


   

    if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }

?>
