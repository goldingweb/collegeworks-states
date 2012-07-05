<script type="text/javascript">

var feedNumEntries = 7;
var _CWPnewsFeed;

function cwpnews_initialize(CWPnewsFeed) {

    _CWPnewsFeed = CWPnewsFeed;

    var article = getParameterByName('article');
    if (!article) {
        article = 0;
    }

    cwpnews_showFeedItem(0);
}

function cwpnews_showFeedItem(id) {
    document.getElementById("article-link").href = _CWPnewsFeed.feed.entries[id].link;
    document.getElementById("article-title").innerHTML = _CWPnewsFeed.feed.entries[id].title;
    var publishedDate = new Date(_CWPnewsFeed.feed.entries[id].publishedDate);
    document.getElementById("article-date").innerHTML = publishedDate.format("fullDate");
    var content = _CWPnewsFeed.feed.entries[id].content;
    document.getElementById("article-content").innerHTML = content.replace(/\<\/p\>/gi, '</p><br />');
}

</script>

<script src="https://www.google.com/jsapi?key=ABQIAAAAPDP9lhC8pMOrP7AWBIFIDRRgdTycar6di_vNj05gMUixEfUa1RSCXxF1HYh9ng-iJUAADidEZ9dKew" type="text/javascript"></script>
<script src="../js/cwpnews.js" type="text/javascript"></script>

<!-- ===== mainer ===== -->
			<div id="mainer">
				<div class="white">
					<div class="c1"><h1>News</h1></div>
				</div>
				
				<div class="c2-1 border shadow">
					<div class="articleImage">
					
					</div>
					<div class="article">
					<h2>College Works Painting News</h2><br />
					
					<p><a id="article-link" style="color: #000000;" href="http://www.coalcitycourant.com/main.asp?SectionID=14&amp;SubSectionID=14&amp;ArticleID=7723"><span id="article-title"></span></a></p>
					<p><b><span id="article-date"></span></b></p><br />
					<div id="article-content">
					
					</div>
					
					</div>
				</div>
				
				<div class="c2-2 noP border shadow">
					<div id="feed" class="sidebarModuleFull"></div>
				</div>
									
				<div class="clearer"></div>
				
				<div class="breadcrumbs">
					<ul class="breadcrumbs">
						<li><a href="<?php echo $home; ?>">Home</a></li>
						<li class="current"><a href="<?php echo $news; ?>">News</a></li>
					</ul>
				</div>
						
				<div class="clearer"></div>
					
			</div><!-- END #mainer -->
<!-- ===== end mainer ===== -->