<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "msvathansilva@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo"meassage send";

?>