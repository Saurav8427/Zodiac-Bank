<?php
 require_once "Mail.php";
 
 $from = "Sandra Sender <souravsingh.ss508@gmail.com>";
 $to = "Ramona Recipient <2018kucp1028@gmail.com>";
 $subject = "Hi!";
 $body = "Hi,\n\nHow are you?";
 
 $host = "ssl://mail.gdom.net";
 $port = "80";
 $username = "LFC Hosted email";
 $password = "Corporation3";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'port' => $port,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }
 ?>