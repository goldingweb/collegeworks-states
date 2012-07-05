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
  $recipient = "bill@healthnews.org";
  $sender = "no-reply@collegeworks.com" ;
  $subject = "Customer Review form submission from - www.collegeworks.com" ;
  $senderemail = mysql_real_escape_string($_REQUEST['CWPtxtEmail']);
  $sendername = mysql_real_escape_string($_REQUEST['CWPtxtName']);
  $yearpainted = mysql_real_escape_string($_REQUEST['CWPtxtYearPainted']);
  $propertyaddress = mysql_real_escape_string($_REQUEST['CWPtxtAddress']);
  $senderphone = mysql_real_escape_string($_REQUEST['CWPtxtPhone']);
  $sendertext = mysql_real_escape_string($_REQUEST['CWPtxtMessage']);
  
  $message = "Customer Review form submission from - www.collegeworks.com\r\n\r\n" ;
  $message = $message . "Name: " . $sendername . "\r\n" ;
  $message = $message . "Email: " . $senderemail . "\r\n" ;
  $message = $message . "Phone: " . $senderphone . "\r\n" ;
  $message = $message . "Property Address: " . $propertyaddress . "\r\n" ;
  $message = $message . "Year Painted: " . $yearpainted . "\r\n" ;
  $message = $message . "Message: " . $sendertext;
  
  mysql_query("insert into email_queue (sender, recipient, cc, bcc, subject, has_attachment, body, queued_on) values ('$sender', '$recipient', '','', '$subject', 0, '$message', NOW())");
  
  mysql_close($con);
  header('Location: customerreviews-thanks.html');
  }
  else
  {
  	  echo "Invalid Input";
  }
?>