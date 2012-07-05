					<script type="text/javascript" src="<?php echo $a; ?>js/validate/formvalidationapply.js"></script>
					<form class="formSB nice" name="CWPForm" method="post" action="<?php echo $a; ?>applynow.php" onsubmit="return validateForm();">
						<div id="CWPformStyle">
							<h1>Apply Now</h1>
							<p class="small">Are you, or will you soon be, a college undergraduate? Does earning <b>great money</b> and being <b>in charge of your future</b> sound appealing? Then don't wait. Apply online today by filling out the following information:</p>
							<div class="SBblueBG">
								<label>
									<span class="input-title sidebar">Name*</span>
									<input class="input-text expand nice" type="text" name="CWPtxtName" id="CWPtxtName" onkeyup="whileTyping(this)"/>
								</label>
								
								<label>
									<span class="input-title sidebar">City you will be<br />living in this summer</span>
									<input class="input-text expand" type="text" class="input_text" name="CWPtxtCity" id="CWPtxtCity"/>
								</label>
								
								<label>
									<span class="input-title sidebar">State*</span>
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
									<span class="input-title sidebar">Zip Code</span>
									<input class="input-text expand" type="text" name="CWPtxtZip" id="CWPtxtZip"/>
								</label>
								
								<label>
									<span class="input-title sidebar">Cell Phone*</span>
									<input class="input-text expand" type="text" name="CWPtxtPhone" id="CWPtxtPhone" onkeyup="whileTypingPhone(this)" />
								</label>
								
								<label>
									<span class="input-title sidebar">E-mail*</span>
									<input class="input-text expand" type="text" name="CWPtxtEmail" id="CWPtxtEmail" onkeyup="whileTypingEmail(this)" />
								</label>
								
								<label>
									<span class="input-title sidebar">School you attend</span>
									<input class="input-text expand" type="text" name="CWPtxtSchool" id="CWPtxtSchool"/>
								</label>
								
								<label>
									<span class="input-title sidebar">Year and Major</span>
									<input class="input-text expand" type="text" name="CWPtxtYear" id="CWPtxtYear"/>
								</label>
							</div>
							<input class="button small nice radius blue center" value="Submit Application" onclick="" type="submit">
						</div>
					</form>

