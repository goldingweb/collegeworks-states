<?php
$active[$current] = "class=current";
$active[$subCurrent] = "class=current";
?>

<!-- ===== menubar ===== -->
			<div id="menubar">
				<ul>  
					<li <?php echo $active[1] ?>><a href="<?php echo "$a"; ?>">Home</a></li>  
					<li <?php echo $active[2] ?>>
						<a href="<?php echo $forStudents; ?>">For Student Interns<img src="<?php echo $a; ?>images/triangle.png" /></a>
						<ul>
							<li <?php echo $active[21] ?>><a href="<?php echo $whatsItLike; ?>">What's It Like</a></li>
							<li <?php echo $active[22] ?>><a href="<?php echo $forParents; ?>">For Parents</a></li>
							<li <?php echo $active[23] ?>><a href="<?php echo $alumniSuccess; ?>">Alumni Success Stories</a></li>
							<li <?php echo $active[24] ?>><a href="<?php echo $apply; ?>">Apply</a></li>
						</ul>
					</li>  
					<li <?php echo $active[3] ?>>
						<a href="<?php echo $forHomeowners; ?>">For Homeowners<img src="<?php echo $a; ?>images/triangle.png" /></a>
						<ul>
							<li <?php echo $active[31] ?>><a href="<?php echo $qualityGuarantee; ?>">Quality Guarantee</a></li>
							<li <?php echo $active[32] ?>><a href="<?php echo $premium; ?>">Premium Service Plan</a></li>
							<li <?php echo $active[33] ?>><a href="<?php echo $resultsTestimonials; ?>">Results & Testimonials</a></li>
							<li <?php echo $active[34] ?>><a href="<?php echo $gallery; ?>">Gallery</a></li>
							<li <?php echo $active[35] ?>><a href="<?php echo $getEstimate; ?>">Get an Estimate</a></li>
							<li <?php echo $active[36] ?>><a href="<?php echo $makePayment; ?>">Make a Payment</a></li>
							<li <?php echo $active[37] ?>><a href="<?php echo $warrantyRegistration; ?>">Warranty Registration</a></li>
						</ul>
					</li>  
					<li <?php echo $active[4] ?>>
						<a href="<?php echo $about; ?>">About Us<img src="<?php echo $a; ?>images/triangle.png" /></a>
						<ul>
							<li <?php echo $active[41] ?>><a href="<?php echo $mission; ?>">Mission</a></li>
							<li <?php echo $active[42] ?>><a href="<?php echo $values; ?>">Values</a></li>
							<li <?php echo $active[43] ?>><a href="<?php echo $leadership; ?>">Leadership Team</a></li>
							<li <?php echo $active[44] ?>><a href="<?php echo $communityService; ?>">Community Service</a></li>
						</ul>
					</li>  
					<li <?php echo $active[5] ?>>
						<a href="<?php echo $news; ?>">News<img src="<?php echo $a; ?>images/triangle.png" /></a>
						<ul>
							<li <?php echo $active[51] ?>><a href="<?php echo $communityImpact; ?>">Community Impact</a></li>
						</ul>
					</li>  
					<li <?php echo $active[6] ?>><a href="<?php echo $safety; ?>">Safety</a></li>  
					<li <?php echo $active[7] ?>><a href="<?php echo $faq; ?>">FAQ's</a></li>  
					<li <?php echo $active[8] ?>><a href="<?php echo $contact; ?>">Contact</a></li>  
				</ul>
			</div> <!-- END #menubar -->
<!-- ===== end menubar ===== -->