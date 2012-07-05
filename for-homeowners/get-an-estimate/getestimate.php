<?php
if (isset($_REQUEST['CWPtxtPhone']))
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
  $subject = "Get Estimate form submission from - www.collegeworks.com" ;
  $senderemail = $_REQUEST['CWPtxtEmail'];
  $senderfname = $_REQUEST['CWPtxtFirstname'];
  $senderlname = $_REQUEST['CWPtxtLastname'];
  $sendercat = $_REQUEST['CWPdrpCategory'];
  $sendertimeframe = $_REQUEST['CWPdrpTimeframe'];
  $senderaddr = $_REQUEST['CWPtxtAddress'];
  $sendercity = $_REQUEST['CWPtxtCity'];
  $senderstate = $_REQUEST['CWPdrpState'];
  $senderzip = $_REQUEST['CWPtxtZip'];
  $senderphone = $_REQUEST['CWPtxtPhone'];
  $senderevephone = $_REQUEST['CWPtxtEvePhone'];
  $sendercellphone = $_REQUEST['CWPtxtCellPhone'];
  $sendertext = $_REQUEST['CWPtxtFeedback'];
  
  $message = "Get Estimate form submission from - www.collegeworks.com\r\n\r\n" ;
  $message = $message . "First Name: " . $senderfname . "\r\n" ;
  $message = $message . "Last Name: " . $senderlname . "\r\n" ;
  $message = $message . "Category: " . $sendercat . "\r\n" ;
  $message = $message . "Timeframe: " . $sendertimeframe . "\r\n" ;
  $message = $message . "Address: " . $senderaddr . "\r\n" ;
  $message = $message . "City: " . $sendercity . "\r\n" ;
  $message = $message . "State: " . $senderstate . "\r\n" ;
  $message = $message . "Zip: " . $senderzip . "\r\n" ;
  $message = $message . "Email: " . $senderemail . "\r\n" ;
  $message = $message . "Day Phone: " . $senderphone . "\r\n" ;
  $message = $message . "Evening Phone: " . $senderevephone . "\r\n" ;
  $message = $message . "Cell Phone: " . $sendercellphone . "\r\n" ;
  $message = $message . "About the Project: " . $sendertext;
  
  mysql_query("insert into email_queue (sender, recipient, cc, bcc, subject, has_attachment, body, queued_on) values ('$sender', '$recipient', '','', '$subject', 0, '$message', NOW())");
  
  mysql_close($con);
  header('Location: getestimate.html');
  }
  else
  {
  	  echo "Invalid Input";
  }
?>