
<!-- ===== mainer ===== -->
			<div id="mainer">
				<div class="white">
					<div class="c1">
						<img src="../../images/apply.jpg" class="frame left mb12" alt="" />
						<h1>Make a Payment</h1>
						<p>Thank you for choosing College Works Painting for your home improvement project. Please enter your information below for online payment processing. If you have a problem, please feel free to contact our corporate office to conduct your payment over the phone at 888.450.9675 during regular business hours, Mon-Fri 7AM-5PM (PST).</p>
					</div>
				</div>
				<div class="c2-1 border shadow">
					<form class="nice" name="CWPForm" method="post" action="https://www.collegeworks.com/makepayment.php" onsubmit="return validateForm();">
						<div id="CWPformStyle">
							<h1>Find Your Job:</h1>
							<label>
								<span class="input-title">Address 1*</span>
								<input class="input-text large" type="text" name="CWPtxtAddress" id="CWPtxtAddress" onkeyup="whileTyping(this)"/>
							</label>
							<label style="padding-top:0px;">
								<span class="input-title">City*</span>
								<input class="input-text large" style="margin-top:10px;" type="text" class="input_text" name="CWPtxtCity" id="CWPtxtCity" onkeyup="whileTyping(this)"/>
							</label>
							<label>
								<span class="input-title">State*</span>
								<select name="CWPdrpState" id="CWPdrpState" onChange="whileSelectingState(this);" >
									<option selected="selected" value="">Select State</option>
									<option value="AL">Alabama</option>
									<option value="AK">Alaska</option>
									<option value="AZ">Arizona</option>
									<option value="AR">Arkansas</option>
									<option value="CA">California</option>
									<option value="CO">Colorado</option>
									<option value="CT">Connecticut</option>
									<option value="DE">Delaware</option>
									<option value="DC">District of Columbia</option>
									<option value="FL">Florida</option>
									<option value="GA">Georgia</option>
									<option value="HI">Hawaii</option>
									<option value="ID">Idaho</option>
									<option value="IL">Illinois</option>
									<option value="IN">Indiana</option>
									<option value="IA">Iowa</option>
									<option value="KS">Kansas</option>
									<option value="KY">Kentucky</option>
									<option value="LA">Louisiana</option>
									<option value="ME">Maine</option>
									<option value="MD">Maryland</option>
									<option value="MA">Massachusetts</option>
									<option value="MI">Michigan</option>
									<option value="MN">Minnesota</option>
									<option value="MS">Mississippi</option>
									<option value="MO">Missouri</option>
									<option value="MT">Montana</option>
									<option value="NE">Nebraska</option>
									<option value="NV">Nevada</option>
									<option value="NH">New Hampshire</option>
									<option value="NJ">New Jersey</option>
									<option value="NM">New Mexico</option>
									<option value="NY">New York</option>
									<option value="NC">North Carolina</option>
									<option value="ND">North Dakota</option>
									<option value="OH">Ohio</option>
									<option value="OK">Oklahoma</option>
									<option value="OR">Oregon</option>
									<option value="PA">Pennsylvania</option>
									<option value="RI">Rhode Island</option>
									<option value="SC">South Carolina</option>
									<option value="SD">South Dakota</option>
									<option value="TN">Tennessee</option>
									<option value="TX">Texas</option>
									<option value="UT">Utah</option>
									<option value="VT">Vermont</option>
									<option value="VA">Virginia</option>
									<option value="WA">Washington</option>
									<option value="WV">West Virginia</option>
									<option value="WI">Wisconsin</option>
									<option value="WY">Wyoming</option>
								</select>
							</label>
							<label>
								<span class="input-title">Zip Code*</span>
								<input class="input-text medium" type="text" name="CWPtxtZip" id="CWPtxtZip" onkeyup="whileTypingZip(this)" />
							</label>
								<span class="input-title ml10"></span>
								<input type="submit" class="button medLrg nice radius blue" value="Next"/>
						</div>
					</form>
					
				</div>
				<div class="c2-2 noP border shadow">
					<?php include("../../php-includes/11.sidebar/SBFAQ2.php"); ?>
				</div>
				
				<div class="c2-2 noP border shadow">
					<?php include("../../php-includes/11.sidebar/SBawards.php"); ?>
				</div>
				
				<div class="clearer"></div>
				
				<div class="breadcrumbs">
					<ul class="breadcrumbs">
						<li><a href="<?php echo $home; ?>">Home</a></li>
						<li><a href="<?php echo $forHomeowners; ?>">For Homeowners</a></li>
						<li class="current"><a href="<?php echo $makePayment; ?>">Make a Payment</a></li>
					</ul>
				</div>
						
				<div class="clearer"></div>
							
			</div><!-- END #mainer -->
<!-- ===== end mainer ===== -->