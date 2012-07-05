
<!-- ===== mainer ===== -->
			<div id="mainer">
				
				<div class="c2-1 border shadow">
					<form class="nice" name="CWPForm" method="post" action="../../customer-review.php" onsubmit="return validateForm();">
						<div id="CWPformStyle">
							<h1>Customer Reviews</h1>

						<p>Contact our office at anytime to request a list of Customer Reviews.</p>

                        <p class="last ml30"><b>College Works Painting</b></p>
                        <p class="last ml30">1682 Langley Avenue</p>
                        <p class="last ml30">Irvine CA 92614</p>
                        <p class="ml30">(888) 450-9675</p>
                        
                        <p>College Works is committed to top notch class customer service by providing every homeowner with an honest quality paint job at an affordable price. As a national exterior painting contractor your feedback, including complaints, is very important to us so we can improve our service or maintain it at a high standard. Please take a few minutes to share your own experience with the job you received in our community.</p>
							<label>
								<span class="input-title">Your Name*</span>
								<input class="input-text large" type="text" name="CWPtxtName" id="CWPtxtName" onkeyup="whileTyping(this)"/>
							</label>
							
							<label>
								<span class="input-title">Your Email*</span>
								<input class="input-text large" type="text" class="input_text" name="CWPtxtEmail" id="CWPtxtEmail" onkeyup="whileTyping(this)"/>
							</label>
							
							<label>
								<span class="input-title">Property Address*</span>
								<input class="input-text large" type="text" name="CWPtxtAddress" id="CWPtxtAddress" onkeyup="whileTyping(this)"/>
							</label>
							
							<label>
								<span class="input-title">Year Painted*</span>
								<input class="input-text large" type="text" name="CWPtxtYearPainted" id="CWPtxtYearPainted" onkeyup="whileTypingPhone(this)" />
							</label>
							
							<label>
								<span class="input-title">Phone Number</span>
								<input class="input-text large" type="text" name="CWPtxtPhone" id="CWPtxtPhone" />
							</label>
							
							<label>
								<span class="input-title">Message*</span>
								<textarea class="message" name="CWPtxtMessage" id="CWPtxtMessage" onkeyup="whileTyping(this)"></textarea>
							</label>
							
							<span class="input-title ml10"></span>
							<input class="button medLrg nice radius blue" value="Submit Review" onclick="" type="submit">
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
						<li><a href="<?php echo $forHomeowners; ?>">For Homeowners</a></li>
						<li class="current"><a href="<?php echo $reviews; ?>">Customer Reviews</a></li>
					</ul>
				</div>
						
				<div class="clearer"></div>
								
			</div><!-- END #mainer -->
<!-- ===== end mainer ===== -->