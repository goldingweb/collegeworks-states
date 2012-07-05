<?php 
	$a = '../../';
	include("../../php-includes/00.site-links.php");
?>
<?php include("../../php-includes/01.doctype.php"); ?>

<!-- ========== HEADER ========== -->
	<head>
<?php include("../../php-includes/02.favicon.php"); ?>
		
		<title>Mark Moses - College Works Painting Alumni</title>
		
		<meta name="keywords" content="Mark Moses,College painters,college painting, collegeworks,college works,college intern program,college internship program,students,interns,business internship program,successful career, rewarding">	
		
		<meta name="description" content="Read the latest stories and experiences from Interns at College Works Painting. Our graduates have used their experience to launch highly successful careers.">

<?php include("../../php-includes/03.styles.php"); ?>		

<?php include("../../php-includes/04.scripts.php"); ?>

	</head>
<!-- ========== end HEADER ========== -->

<!-- ========== BODY ========== -->
	<body>
		<div id="container">
		
<?php include("../../php-includes/05.topper.php"); ?>

<?php $current = 2; $subCurrent = 23; include("../../php-includes/06.menubar.php"); ?>


<!-- ===== mainer ===== -->
			<div id="mainer">
				<div class="white">
					<div class="c1">
						<h1>Alumni Success Stories</h1>
						<a href="<?php echo $alumniSuccess; ?>#mark-moses">&lt; Return to Alumni Success Stories</a>
					</div>
				</div>
				
				<div class="c2-1 border shadow">
						<img src="../../images/alumni/mark-moses.jpg" class="frame left" alt="Mark Moses" />
						
						<h2 class="noM">Mark Moses</h2>
						<p><em>CEO, Platinum Capital Corporation</em></p>
						<p class="last">Platinum Capital won the Ernst and Young Entrepreneur of the year award and was ranked #10 on the INC 500. Platinum is a mortgage brokerage company. "Imagine being #10 on the Inc 500 before you are 35! Wow, I could not have done that if I did not start my entrepreneurial career when I was 18 with you."</p>

					</div>
					<div class="c2-2 noP shadow border">
					<?php include("../../php-includes/11.sidebar/SBapply.php"); ?>
				</div>
				
				<div class="clearer"></div>
				
				<div class="breadcrumbs">
					<ul class="breadcrumbs">
						<li><a href="<?php echo $home; ?>">Home</a></li>
						<li><a href="<?php echo $forStudents; ?>">For Student Interns</a></li>
						<li><a href="<?php echo $alumniSuccess; ?>">Alumni Success Stories</a></li>
						<li class="current"><a href="<?php echo $markMoses; ?>">Mark Moses</a></li>
					</ul>
				</div>
						
				<div class="clearer"></div>
							
			</div><!-- END #mainer -->
<!-- ===== end mainer ===== -->

<?php include("../../php-includes/08.footer.php"); ?>

		</div><!-- END #container -->
	</body>
<!-- ========== end BODY ========== -->

<?php include("../../php-includes/09.facebookSDK.php"); ?>

<?php include("../../php-includes/10.googleSDK.php"); ?>

</html>