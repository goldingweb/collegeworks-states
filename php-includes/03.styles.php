
<!-- ========== STYLES ========== -->
		
		<link rel="stylesheet" type="text/css" href="<?php echo "$a"; ?>css/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo "$a"; ?>css/styles.css"  />
		<link rel="stylesheet" type="text/css" href="<?php echo "$a"; ?>css/images.css"  />
		
		<?php 
			$firefox = strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') ? true : false;
			$safari = strpos($_SERVER["HTTP_USER_AGENT"], 'Safari') ? true : false;
			$chrome = strpos($_SERVER["HTTP_USER_AGENT"], 'Chrome') ? true : false;
		
		
		if ($firefox) { //Firefox?
		echo '<link rel="stylesheet" type="text/css" href="'.$a.'css/firefox-styles.css"  />';
		}
		
		?>
		
		
		
		<!--[if FIREFOX]>
			<link rel="stylesheet" type="text/css" href="<?php echo "$a"; ?>css/firefox-styles.css"  />
		<![endif]-->
		
		<!--[if IE 8]>
			<link rel="stylesheet" type="text/css" href="<?php echo "$a"; ?>css/ie-styles-8.css"  />
		<![endif]-->
		
		<!--[if lte IE 7]>
			<link rel="stylesheet" type="text/css" href="<?php echo "$a"; ?>css/ie-styles.css"  />
		<![endif]-->