<?php
if (isset($_REQUEST['CWPtxtEmail']))
  {
  $sqluser = "cwpmail";
  $sqlpass = "Q8UtN1H0";
  $sqlhost = "fritsdb";
  $sqldb = "NSGFrits2004";
  
  $con = mysql_connect($sqlhost,$sqluser,$sqlpass);
  if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
  mysql_select_db($sqldb, $con);

  //if "email" is filled out, proceed
  $recipient = "l@nsgmail.com";
  $sender = "no-reply@collegeworks.com" ;
  $subject = "Contact Us form submission from - www.collegeworks.com" ;
  $senderemail = $_REQUEST['CWPtxtEmail'];
  $sendername = $_REQUEST['CWPtxtName'];
  $senderphone = $_REQUEST['CWPtxtPhone'];
  $sendertext = $_REQUEST['CWPtxtMessage'];
  
  $message = "Contact Us form submission from - www.collegeworks.com\r\n\r\n" ;
  $message = $message . "Name: " . $sendername . "\r\n" ;
  $message = $message . "Email: " . $senderemail . "\r\n" ;
  $message = $message . "Phone: " . $senderphone . "\r\n" ;
  $message = $message . "Message: " . $sendertext;
  
  mysql_query("insert into email_queue (sender, recipient, cc, bcc, subject, has_attachment, body, queued_on) values ('$sender', '$recipient', '','', '$subject', 0, '$message', NOW())");
  
  mysql_close($con);
  header('Location: contact-college-works-painting/index.php');
  }
  else
  {
  	  echo "Invalid Input";
  }
?>