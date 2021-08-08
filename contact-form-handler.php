<?php
  $name = $_GET['name'];
  $visitorEmail = $_GET['email'];
  $message = $_GET['message'];
  $subject = $_GET['subject'];

  $emailBody = "User Name: $name \n".
               "User Email: $visitorEmail \n".
               "User Message: $message \n".
               "User Subject: $subject \n";
  $to = "goyalanu6@gmail.com";
  $headers = "Reply-To: $visitorEmail" . "\n";
  $headers .= 'Content-Type: text/plain; charset="iso-8859-1"' . "\n";
  $headers .= 'Content-Transfer-Encoding: 8bit';

if (mail($to,$subject,$emailBody,$headers)) {
  echo "email sent!";
} else {
   echo "error";
}
  header("Location: index.html");
?>
