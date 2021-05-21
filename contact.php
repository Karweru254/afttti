<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $subject=$_POST['subject'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $msg=$_POST['msg'];

        $to='info@afttti.co.ke';
        $subject='Africa Film & TV Talent Training Institute';
        $message="Name: ".$name."\n"."Subject: ".$subject."\n"."Phone Number: ".$phone."\n". "Message: "."\n\n".$msg;
        $headers="From: ".$email;
        
        if(mail($to, $subject, $message, $headers)){
            echo "<h1>Sent Successfully! Thank you"." ".$name." ,We will contact you shortly!</h1>";
        }
        else{
            echo "Something went wrong";
        }
       

        
    }
?>