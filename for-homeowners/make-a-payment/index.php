<?php 
	$a = '../../';
	include("../../php-includes/00.site-links.php");
?>
<?php include("../../php-includes/01.doctype.php"); ?>

<!-- ========== HEADER ========== -->
	<head>
<?php include("../../php-includes/02.favicon.php"); ?>
		
		<title>College Works Painting - Make a Payment</title>
		
		<meta name="keywords" content="College painters,college painting, collegeworks,college works house painting,college internship program">	
		
		<meta name="description" content="College Works Painting offers homeowners premium quality paint jobs. College Works utilizes college interns to help organize an experienced crew of painters whom are also supervised by a district manager to give you a top notch paint job along with a warranty.">

<?php include("../../php-includes/03.styles.php"); ?>		

<?php include("../../php-includes/04.scripts.php"); ?>

		<script type="text/javascript" src="../../js/validate/formvalidationpayment.js"></script>	

	</head>
<!-- ========== end HEADER ========== -->

<!-- ========== BODY ========== -->
	<body>
		<div id="container">
		
<?php include("../../php-includes/05.topper.php"); ?>

<?php $current = 3; $subCurrent = 36; include("../../php-includes/06.menubar.php"); ?>

<?php include("../../php-includes/07.mainer/make-a-payment.php"); ?>

<?php include("../../php-includes/08.footer.php"); ?>

		</div><!-- END #container -->
	</body>
<!-- ========== end BODY ========== -->

<?php include("../../php-includes/09.facebookSDK.php"); ?>

<?php include("../../php-includes/10.googleSDK.php"); ?>

</html>