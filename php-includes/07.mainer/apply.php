
<!-- ===== mainer ===== -->
			<div id="mainer">
				<div class="white">
					<div class="c1">
						<img src="../../images/apply.jpg" class="frame left mb12" alt="" />
						<h1>Online Application</h1>

						<p>To learn more about how to apply to this program please call College Works Painting at (888) 450-9675 and one of our associates will be happy to assist you, or complete the following form and one of our associates will contact you.</p>
					</div>
				</div>
				
				<div class="c2-1 border shadow">
					<form class="nice" name="CWPForm" method="post" action="../../applynow.php" onsubmit="return validateForm();">
						<div id="CWPformStyle">
							<h1>Apply Now</h1>
							<label>
								<span class="input-title">Name*</span>
								<input class="input-text large" type="text" name="CWPtxtName" id="CWPtxtName" onkeyup="whileTyping(this)"/>
							</label>
							
							<label>
								<span class="input-title">City you will be living in this summer</span>
								<input class="input-text large" type="text" class="input_text" name="CWPtxtCity" id="CWPtxtCity"/>
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
								<span class="input-title">Zip Code</span>
								<input class="input-text large" type="text" name="CWPtxtZip" id="CWPtxtZip"/>
							</label>
							
							<label>
								<span class="input-title">Cell Phone*</span>
								<input class="input-text large" type="text" name="CWPtxtPhone" id="CWPtxtPhone" onkeyup="whileTypingPhone(this)" />
							</label>
							
							<label>
								<span class="input-title">E-mail*</span>
								<input class="input-text large" type="text" name="CWPtxtEmail" id="CWPtxtEmail" onkeyup="whileTypingEmail(this)" />
							</label>
							
							<label>
								<span class="input-title">School you attend</span>
								<input class="input-text large" type="text" name="CWPtxtSchool" id="CWPtxtSchool"/>
							</label>
							
							<label>
								<span class="input-title">Year and Major</span>
								<input class="input-text large" type="text" name="CWPtxtYear" id="CWPtxtYear"/>
							</label>
							
							<span class="input-title ml10"></span>
							<input class="button medLrg nice radius blue" value="Submit Form" onclick="" type="submit">
						</div>
					</form>
				</div>
				
				<div class="c2-2 noP shadow border">
					<?php include("../../php-includes/11.sidebar/SBawards.php"); ?>
				</div>
				
				<div class="clearer"></div>
				
				<div class="breadcrumbs">
					<ul class="breadcrumbs">
						<li><a href="<?php echo $home; ?>">Home</a></li>
						<li><a href="<?php echo $forStudents; ?>">For Student Interns</a></li>
						<li class="current"><a href="<?php echo $apply; ?>">Apply</a></li>
					</ul>
				</div>
						
				<div class="clearer"></div>
				
			</div><!-- END #mainer -->
<!-- ===== end mainer ===== -->