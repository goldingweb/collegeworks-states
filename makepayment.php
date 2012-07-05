<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>College Works Painting - Make a Payment</title>
<meta name="description" content="College Works Painting offers homeowners premium quality paint jobs. College Works utilizes college interns to help organize an experienced crew of painters whom are also supervised by a district manager to give you a top notch paint job along with a warranty." />
<meta name="keywords" content="College painters,college painting, collegeworks,college works house painting,college internship program" />
<link href="style.css" rel="stylesheet" type="text/css" />
<!--[if IE]>
    <link href="iestyle.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script src="/js/global.js" type="text/javascript"></script>

</head>
<body>
<?php
  // Get submitted form variables
  $address = $_POST['CWPtxtAddress'];
  $city    = $_POST['CWPtxtCity'];
  $state   = $_POST['CWPdrpState'];
  $zip     = $_POST['CWPtxtZip'];

  // Verify address using the same XML-RPC server we use for Zope.
  $request = xmlrpc_encode_request("verify_address_cdyne", array($address, '', $city, $state, $zip));
  $context = stream_context_create(array('http' => array ('method' => 'POST',
                                                          'header' => 'Content-Type: text/xml',
                                                          'content' => $request)));
  $file = file_get_contents("http://nsg1:7777", false, $context);
  $response = xmlrpc_decode($file);

  if (!$response['error']) {
    // Get the verified address data
    $v_address = $response['address1'];
    $v_city    = $response['city'];
    $v_state   = $response['state'];
    $v_zip     = substr($response['zipcode'], 0, 5);

    // Connect to the database
    $sqluser = "cwp_seo";
    $sqlpass = "Ya9taVaY";
    $sqlhost = "fritsdb";
    $sqldb = "NSGFrits2004";
    
    $con = mysql_connect($sqlhost,$sqluser,$sqlpass);
    if (!$con) {
      die('Could not connect: ' . mysql_error());
    };
    mysql_select_db($sqldb, $con);
    
    // Find the job in the DB.
    $jobquery = sprintf("SELECT c.*, g.* FROM client c LEFT JOIN division d ON c.division = d.divId LEFT JOIN division_group g ON d.division_group = g.group_id WHERE address1 = '%s' AND city = '%s' AND state = '%s' AND zip LIKE '%s%%' AND booked = 1",
                        mysql_real_escape_string($v_address),
                        mysql_real_escape_string($v_city),
                        mysql_real_escape_string($v_state),
                        mysql_real_escape_string($v_zip));
    $result = mysql_query($jobquery);
    
    if (!$result) {
      $msg = 'SQL Error: ' . mysql_error() . "\n";
      $msg .= 'Query: ' . $jobquery;
      die($msg);
    }
    
    $num_rows = mysql_num_rows($result);
    if ($num_rows > 0) {
      $client = mysql_fetch_assoc($result);
      $cid = $client['cid'];
      $profile_id = $client['cc_profile_id'];
      if (!$profile_id) {
        $profile_id = "49030004647100000002";
      }
    }
  }
?>

<div id="wrapper">
  <div id="header">
  <a href="http://www.collegeworks.com"><img id="logo" src="logo.jpg" style="position:absolute;" alt="College Works Painting" /></a>
  <div id="socialMedia"><div class="socialText">FOLLOW US |</div>
  <div class="socialMediaLinks">
     <g:plusone size="small" annotation="none"></g:plusone>&nbsp;&nbsp;
     <a href="http://www.facebook.com/CollegeWorksPainting"><img src="socialfb.jpg" alt="facebook" /></a>&nbsp;&nbsp;
     <a href="http://www.twitter.com/college_works"><img src="socialtw.jpg" alt="twitter" /></a>&nbsp;&nbsp;
     <a href="http://www.youtube.com/user/CollegeWorks2011"><img src="socialyt.jpg" alt="youtube" /></a>
  </div>
  </div>
      <ul class="topNav" style="top:35px;">
        <li><a href="forstudents.html">For Students</a></li> |
        <li class="topNavActive"><a href="forhomeowners.html">For Homeowners</a></li> |
        <li><a href="aboutus.html">About Us</a></li> |
        <li><a href="news.html">News</a></li> |
        <li><a href="safety.html">Safety</a></li> |
        <li><a href="faq.html">FAQ</a></li> |
        <li><a href="contact.html">Contact</a></li>
      </ul>  </div> 
  <div id="siteNav">
     <ul id="menu">  
       <li><a href="forhomeowners.html">For Homeowners</a></li>  
       <li><a href="howwework.html">How We Work</a></li>  
       <li><a href="testimonials.html">Results & Testimonials</a></li>  
       <li><a href="resultsgallery.html">Gallery</a></li>  
       <li><a href="getestimate.html">Get Estimate</a></li>  
       <li class="active"><a href="payment.html">Make Payment</a></li>
     </ul>
  </div> 
  <div id="mainContentWrapper">
    <div id="leftContent">
      <div id="pageModule">
        <h1>Make Payment</h1><br />
        <div itemscope itemtype="http://data-vocabulary.org/Organization">
          <p style="font-size:1.1em;">
            <?php if($response['error']): ?>
              <div style="font-size:1.1em;">
                <?php echo $response['error_message']; ?>
                <a href="http://www.collegworks.com/payment.html">Go back</a> and try again.
              </div>
            <?php elseif($num_rows == 0): ?>
              <div style="font-size:1.1em;">
                No job found for address.
                <a href="http://www.collegeworks.com/payment.html">Go back</a> and try again.
              </div>
            <?php else: ?>
              <div style="font-size:1.1em;">
                You are making a payment for the property located at:<br/>
                <?php echo $v_address ?><br/>
                <?php echo $v_city . ", " . $v_state . " " . $v_zip; ?> <br/>
              </div>
              <br>
              <script type="text/javascript">
                function doSubmit(thisform)
                {
                  with(thisform) { 
                    var error = "";
                    var amtsel = false;
                
                    //All required fields need to be filled
                    if(cardholder_first_name.value == "" || cardholder_first_name.value == null)
                      error = error + "Please fill in the Cardholder First Name field.\n ";
                    if(cardholder_last_name.value == "" || cardholder_last_name.value == null)
                      error = error + "Please fill in the Cardholder Last Name field.\n ";
                    if(cardholder_street_address.value == "" || cardholder_street_address.value == null)
                      error = error + "Please fill in the Cardholder Billing Address field.\n ";
                    if(cardholder_zip.value == "" || cardholder_zip.value == null)
                      error = error + "Please fill in the Cardholder Billing Zip field.\n ";
                    if(card_number.value == "" || card_number.value == null)
                      error = error + "Please fill in the Card Number field.\n ";
                    if(card_exp_date.value == "" || card_exp_date.value == null)
                      error = error + "Please fill in the Card Exp Date field.\n ";
                    if(cvv2.value == "" || cvv2.value == null)
                      error = error + "Please fill in the CVV2 field.\n ";
                    if(isNaN(amount.value) || amount.value == "" || amount.value == null)
                      error = error + "Invalid dollar amount.\n ";
                    if(cardholder_email.value != cardholder_email_verify.value)
                      error = error + "Email addresses do not match.\n";
                    transaction_amount.value = amount.value; 
                    if(error != "") {
                      alert(error);
                      return false;
                    }
                    else {
                      subbut.disabled = true;
                      return true;
                    }
                  }
                } 
                
                function roundNumber(num, dec) {
                  var result = Math.round(num*Math.pow(10,dec))/Math.pow(10,dec);
                  return result;
                } 

                function toggleBillingAddress() {
                  with(document.forms['cc_form']) {
                    if (cardholder_street_address.disabled) {
                      cardholder_street_address.value = '';
                      cardholder_zip.value = '';
                    } else {
                      cardholder_street_address.value = '<?php echo addslashes($v_address); ?>';
                      cardholder_zip.value = '<?php echo addslashes($v_zip); ?>';
                    }
                  }
                }
              </script>
                
              <style type="text/css" media="screen">
                  #payhereTable th { border: 1px solid #666666; background-color: #AAAAAA; }
                  .req { color: red; }
              </style>
              <form method="POST" action="https://www.merchante-solutions.com/jsp/tpg/secure_checkout.jsp" 
                                  onsubmit="return doSubmit(this)" name="cc_form">
                <div id="CWPformStyle">
                  <input type="hidden" name="profile_id" value="<?php echo $profile_id; ?>">
                  <input type="hidden" name="transaction_amount" value="">
                  <input type="hidden" name="css_url" value="https://www.collegeworks.com/style.css">
                  <input type="hidden" name="cancel_url" value="http://www.collegeworks.com/payment.html">
                  <input type="hidden" name="return_url" value="http://www.collegeworks.com/paymentprocessed.php">
                  <input type="hidden" name="logo_url" value="https://www.collegeworks.com/logo.jpg">
                  <input type="hidden" name="merchant_email" value="creditcards@collegeworks.com">
                  <input type="hidden" name="ship_to_address" value="<?php echo $address . "\n" . $city . ", " . $state . " " . $zip; ?>">
                  <input type="hidden" name="client_reference_number" value="<?php echo $cid; ?>">
                  <input type="hidden" name="use_merch_receipt" value="Y">
                  
                  <h3>Cardholder Information</h3>
                  <label>
                    <span>First Name<strong class="req">*</strong></span>
                    <input type="text" name="cardholder_first_name" size="30" maxlength="40">
                  </label>
                  <label>
                    <span>Last Name<strong class="req">*</strong></span>
                    <input type="text" name="cardholder_last_name" size="30" maxlength="40">
                  </label>
                  <label>
                    <span>Email</span>
                    <input type="text" name="cardholder_email" size="30" maxlength="40">
                  </label>
                  <label>
                    <span>Verify Email</span>
                    <input type="text" name="cardholder_email_verify" size="30" maxlength="40">
                  </label>
                  <input type="checkbox" name="property_is_billing" style="width: 20px;" onClick="toggleBillingAddress()">
                  Use property address for billing address.
                  <label>
                    <span>Billing Street Address<strong class="req">*</strong></span>
                    <input type="text" name="cardholder_street_address" size="30" maxlength="40">
                  </label>
                  <label>
                    <span>Billing Zip<strong class="req">*</strong></span>
                    <input type="text" name="cardholder_zip" size="10" maxlength="9">
                  </label>
                  <br/>
                  <h3>Billing Information</h3>
                  <label>
                    <span>Card Number<strong class="req">*</strong></span>
                    <input type="text" name="card_number" size="18" maxlength="16">
                  </label>
                  <label>
                    <span>Card Exp Date (MMYY)<strong class="req">*</strong></span>
                    <input type="text" name="card_exp_date" size="5" maxlength="4">
                  </label>
                  <label>
                    <span>CVV2<strong class="req">*</strong></span>
                    <input type="text" name="cvv2" size="5" maxlength="4">
                  </label>
                  <br/>
                  <h3>Amount</h3>
                  <label>
                    <span>&nbsp;</span>
                    $<input type="text" name="amount" value="">
                  </label>
                  <!-- input type="submit" class="formFields" value="Continue" name="subbut" -->
                  <input type="hidden" name="cid" value="<?php echo $cid; ?>">
                  <br/> 
                  <input type="button" value="Cancel" onClick="document.location='payment.html'" style="width: 49%; display: inline;">
                  <input type="submit" value="Submit Payment" nam="subbut" style="width: 49%; display: inline;">
                </div>
              </form>
            <?php endif; ?>
          </p>
        </div>
      </div>
    </div>
    <div id="rightSidebar">
      <div class="sidebarModule" style="height:auto;">
        <h2>Frequently Asked Questions</h2><br />
        <p><strong>Q:</strong> What text is supposed to go here?</p><br />
        <p><strong>A:</strong> I have no idea!</p>
      </div>
      <div class="sidebarModule">
        <h2 align="center">Awards</h2>
        <p>College Works Painting and its young entrepreneurs are proud to be recognized by the following:</p><br />
        <div style="margin:0 0 0 18px;">
          <img src="prlogo.jpg" alt="The Princeton Review" width="75" height="75" />
          <img src="eyeoty.jpg" alt="Entrepreneur of the Year" width="75" height="75" />
        </div>
        <a href="http://www.la.bbb.org/business-reviews/Painting-Contractors/College-Works-Painting-in-Irvine-CA-13010177" target="_blank" rel="nofollow"><img style="margin:10px 0 0 10px;" src="bbbbadge.png" width="112" height="42" alt="College Works Painting, premium and quality painting: BBB Rating A+" title="College Works Painting, premium and quality painting: BBB Rating A+" /><img style="margin:10px 0 0 5px;" src="bbbgrade.png" width="42" height="42" alt="College Works Painting, premium and quality painting: BBB Rating A+" title="College Works Painting, premium and quality painting: BBB Rating A+" /></a>
      </div>
    </div> 
    <div id="footer">
      <ul class="footerNav">
          <li class="footerNavActive"><a href="forstudents.html">For Students</a> |</li>
          <li><a href="forhomeowners.html">For Homeowners</a> |</li>
          <li><a href="aboutus.html">About Us</a> |</li>
          <li><a href="aboutuslicenses.html">Licenses</a> |</li>
          <li><a href="news.html">News</a> |</li>
          <li><a href="safety.html">Safety</a> |</li>
          <li><a href="faq.html">FAQ</a> |</li>
          <li><a href="contact.html">Contact</a> |</li>
          <li><a href="privacypolicy.html">Privacy Policy</a> |</li>
          <li><a href="termsofuse.html">Terms of Use</a></li>
        </ul>
      <p align="center">&copy; College Works Painting. All Rights Reserved</p>
    </div>
  </div>
</div>
</body>

</html>
