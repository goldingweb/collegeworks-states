<?php 
	$a = '../';
	include("../php-includes/00.site-links.php");
?>
<?php include("../php-includes/01.doctype.php"); ?>

<!-- ========== HEADER ========== -->
	<head>
<?php include("../php-includes/02.favicon.php"); ?>
		
		<title>College Works Painting - News</title>
		
		<meta name="keywords" content="College painters,college painting, collegeworks,college works house painting,college internship program">	
		
		<meta name="description" content="College Works Painting news about interns and customers.">

<?php include("../php-includes/03.styles.php"); ?>		
<?php include("../php-includes/04.jquery.php"); ?>
<?php include("../php-includes/04.prettyPhoto.php"); ?>
<?php include("../php-includes/04.scripts.php"); ?>

	<script type="text/javascript" src="../js/jquery.maphilight.min.js"></script>
	<script type="text/javascript">$(function() {
		$('.map').maphilight();
	});</script>

<script type="text/javascript">

var feedNumEntries = 15;
var _CWPnewsFeed;
var feedDivisionID;
var feedDivisionName;

function cwpnews_filter() {
	<?php if($_SERVER['QUERY_STRING']): ?>
	<?php
		$args = split(',', $_SERVER['QUERY_STRING']);
		print 'feedDivisionName = unescape("'.htmlspecialchars($args[1]).'");'."\n";
		print 'feedDivisionID = "'.htmlspecialchars($args[0]).'";'."\n";
		print 'CWP_News.rss_uri += "/'.htmlspecialchars($args[0]).'";'."\n";
	?>
	<?php endif; ?>
}

function cwpnews_initialize(CWPnewsFeed) {

    _CWPnewsFeed = CWPnewsFeed;

    if(feedDivisionName) {
	document.getElementById("newsArticleHeading").innerHTML += (' for ' + feedDivisionName);
    }

    var article = getParameterByName('article');
    if (!article) {
        article = 0;
    }
    if (_CWPnewsFeed.feed.entries.length > 0) {
	    cwpnews_showFeedItem(0);
    } else {
	document.getElementById("feedSidebar").style.display='none';
	document.getElementById("article-content").innerHTML = 'There are currently no articles for ' + feedDivisionName + ".  Please choose another state.";
    }
}

function cwpnews_showFeedItem(id) {
    document.getElementById("article-link").href = _CWPnewsFeed.feed.entries[id].link;
    document.getElementById("article-title").innerHTML = _CWPnewsFeed.feed.entries[id].title;
    var publishedDate = new Date(_CWPnewsFeed.feed.entries[id].publishedDate);
    document.getElementById("article-date").innerHTML = publishedDate.format("fullDate");
    var content = _CWPnewsFeed.feed.entries[id].content;
    document.getElementById("article-content").innerHTML = content;
}

</script>

<script src="https://www.google.com/jsapi?key=ABQIAAAAPDP9lhC8pMOrP7AWBIFIDRRgdTycar6di_vNj05gMUixEfUa1RSCXxF1HYh9ng-iJUAADidEZ9dKew" type="text/javascript"></script>
<script src="../js/cwpnews.js" type="text/javascript"></script>

	</head>
<!-- ========== end HEADER ========== -->

<!-- ========== BODY ========== -->
	<body>
		<div id="container">
		
<?php include("../php-includes/05.topper.php"); ?>

<?php $current = 5; include("../php-includes/06.menubar.php"); ?>

<?php include("../php-includes/07.mainer/news.php"); ?>

<?php include("../php-includes/08.footer.php"); ?>

		</div><!-- END #container -->
	</body>
<!-- ========== end BODY ========== -->

<?php include("../php-includes/09.facebookSDK.php"); ?>

<?php include("../php-includes/10.googleSDK.php"); ?>

</html>