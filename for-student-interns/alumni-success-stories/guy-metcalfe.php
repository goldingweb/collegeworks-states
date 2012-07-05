<?php 
	$a = '../../';
	include("../../php-includes/00.site-links.php");
?>
<?php include("../../php-includes/01.doctype.php"); ?>

<!-- ========== HEADER ========== -->
	<head>
<?php include("../../php-includes/02.favicon.php"); ?>
		
		<title>Guy Metcalfe - College Works Painting Alumni</title>
		
		<meta name="keywords" content="Guy Metcalfe,College painters,college painting, collegeworks,college works,college intern program,college internship program,students,interns,business internship program,successful career, rewarding">	
		
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
						<a href="<?php echo $alumniSuccess; ?>#guy-metcalfe">&lt; Return to Alumni Success Stories</a>
					</div>
				</div>
				
				<div class="c2-1 border shadow">
						<img src="../../images/alumni/guy-metcalfe.jpg" class="frame left" alt="Guy Metcalfe" />
						
						<h2 class="noM">Guy Metcalfe</h2>
						<p><em>Global Head Of Real Estate Investment Banking, Morgan Stanley Real Estate Funds</em></p>
						<p>He is a member of the National Association of Real Estate Investment Trusts, The Real Estate Roundtable, the Urban Land Institute where he is also a ULI council member and the National Mul- tifamily Housing Council, where he is an executive board member.</p>
						<p>Guy is a member of the Investment Committee for the Morgan Stanley Real Estate Funds, which have acquired over $100 billion of real estate since 1990.</p>
						<p>Guy has been at Morgan Stanley 17 years and has advised real estate clients on, over $250 billion of real estate transactions including mergers, acquisitions, asset sales, restructur- ings, and public and private equity and debt financings.</p>
						<p>He is a member of the National Association of Real Estate Investment Trusts, The Real Estate Roundtable, the Urban Land Institute where he is also a ULI council member and the National Multifamily Housing Council, where he is an executive board member.</p>
						<p class="last">Guy is a member of the Investment Committee for the Morgan Stanley Real Estate Funds, which have acquired over $100 billion of real estate since 1990.</p>

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
						<li class="current"><a href="<?php echo $guyMetcalfe; ?>">Guy Metcalfe</a></li>
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