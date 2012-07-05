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
  $subject = "Student Apply form submission from - www.collegeworks.com" ;
  $senderemail = $_REQUEST['CWPtxtEmail'];
  $sendername = $_REQUEST['CWPtxtName'];
  $sendercity = $_REQUEST['CWPtxtCity'];
  $senderstate = $_REQUEST['CWPdrpState'];
  $senderzip = $_REQUEST['CWPtxtZip'];
  $senderphone = $_REQUEST['CWPtxtPhone'];
  $senderschool = $_REQUEST['CWPtxtSchool'];
  $senderyear = $_REQUEST['CWPtxtYear'];
  
  $message = "Student Apply form submission from - www.collegeworks.com\r\n\r\n" ;
  $message = $message . "Name: " . $sendername . "\r\n" ;
  $message = $message . "City Where Living this Summer: " . $sendercity . "\r\n" ;
  $message = $message . "State: " . $senderstate . "\r\n" ;
  $message = $message . "Zip: " . $senderzip . "\r\n" ;
  $message = $message . "Email: " . $senderemail . "\r\n" ;
  $message = $message . "Phone: " . $senderphone . "\r\n" ;
  $message = $message . "School you Attend: " . $senderschool . "\r\n" ;
  $message = $message . "Year and Major: " . $senderyear;
  
  mysql_query("insert into email_queue (sender, recipient, cc, bcc, subject, has_attachment, body, queued_on) values ('$sender', '$recipient', '','', '$subject', 0, '$message', NOW())");
  
  mysql_close($con);
  header('Location: applynow.html');
  }
  else
  {
  	  echo "Invalid Input";
  }
?>