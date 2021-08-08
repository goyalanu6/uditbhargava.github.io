<?php
  $name = $_POST['name'];
  $visitorEmail = $_POST['email'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];

  $emailBody = "User Name: $name. \n".
               "User Email: $visitorEmail. \n".
               "User Message: $message. \n".
               "User Subject: $subject. \n";
  $to = "goyalanu6@gmail.com";
  $headers = "Reply-To: $visitorEmail \r\n"
  mail($to,$subject,$emailBody,$headers);
  header("Location: index.html");
?>
