		<script type="text/javascript" src="<?php echo "$a"; ?>js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo "$a"; ?>js/prettyPhoto.css" />
		
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("a[rel^='prettyPhoto']").prettyPhoto({
					animation_speed: 'normal',							
					theme: 'facebook',
					overlay_gallery: false
				});
			});
		</script>
