<?php 
	$a = '../../';
	include("../../php-includes/00.site-links.php");
?>
<?php include("../../php-includes/01.doctype.php"); ?>

<!-- ========== HEADER ========== -->
	<head>
<?php include("../../php-includes/02.favicon.php"); ?>
		
		<title>College Works Painting - Satisfied Customers - Customer Testimonials</title>
		
		<meta name="keywords" content="College painters,customer testimonials,satisfied customers">	
		
		<meta name="description" content="College Works Painting delivers beautiful results! Get the stories in words and pictures from satisfied customers.">

<?php include("../../php-includes/03.styles.php"); ?>		

<?php include("../../php-includes/04.scripts.php"); ?>
<?php include("../../php-includes/04.jquery.php"); ?>
<?php include("../../php-includes/04.prettyPhoto.php"); ?>
	<script type="text/javascript" src="../../js/jquery.maphilight.min.js"></script>
	<script type="text/javascript">$(function() {
		$('.map').maphilight();
	});</script>

	<script type="text/javascript">
	
	function reference_search(form) {
		var zipcode = form.zip.value;
		var reference_letters_frame = document.getElementById('reference_letters_frame');
		reference_letters_frame.src = 'http://www.collegeworks.com/testimonials.php/references/' + zipcode;
	}

	function map_search(division_id) {
		var form = document.getElementById('formReferenceSearch');
		form.zip.value = "";
		var reference_letters_frame = document.getElementById('reference_letters_frame');
		reference_letters_frame.src = 'http://www.collegeworks.com/testimonials.php/division/' + division_id;
	}

	</script>

	</head>
<!-- ========== end HEADER ========== -->

<!-- ========== BODY ========== -->
	<body>
		<div id="container">
		
<?php include("../../php-includes/05.topper.php"); ?>

<?php $current = 3; $subCurrent = 33; include("../../php-includes/06.menubar.php"); ?>

<?php include("../../php-includes/07.mainer/results-and-testimonials.php"); ?>

<?php include("../../php-includes/08.footer.php"); ?>

		</div><!-- END #container -->
	</body>
<!-- ========== end BODY ========== -->

<?php include("../../php-includes/09.facebookSDK.php"); ?>

<?php include("../../php-includes/10.googleSDK.php"); ?>

</html>