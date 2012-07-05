<?php 
	$a = '../';
	include("../php-includes/00.site-links.php");
?>
<?php include("../php-includes/01.doctype.php"); ?>

<!-- ========== HEADER ========== -->
	<head>
<?php include("../php-includes/02.favicon.php"); ?>
		
		<title></title>
		
		<meta name="keywords" content="">	
		
		<meta name="description" content="">

<?php include("../php-includes/03.styles.php"); ?>		

<?php include("../php-includes/04.scripts.php"); ?>

	</head>
<!-- ========== end HEADER ========== -->

<!-- ========== BODY ========== -->
	<body>
		<div id="container">
		
<?php include("../php-includes/05.topper.php"); ?>

<?php $current = 5; include("../php-includes/06.menubar.php"); ?>

<?php include("../php-includes/07.mainer/article.php"); ?>

<?php include("../php-includes/08.footer.php"); ?>

		</div><!-- END #container -->
	</body>
<!-- ========== end BODY ========== -->

<?php include("../php-includes/09.facebookSDK.php"); ?>

<?php include("../php-includes/10.googleSDK.php"); ?>

</html>