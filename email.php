<?php
// Variables
$name = $_REQUEST['name'];
$subject = $_REQUEST['subject'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];


// CHECK INPUT 
if(empty($name)||empty($subject)||empty($email)||empty($message))
{
    echo "Please fill all the details";
}
else
{
    mail("siddharthasingh1520@gmail.com", "<subject: $subject>","from:$name  <Email: $email>  <subject: $subject>  <message: $message>");

    echo"script type='text/javascript'>
    alert('Mail Sent Successfully');

    window.history.log(-1);
    
    </script>";
}

?>