                    	var feed = new google.feeds.Feed('http://www.collegeworkspaintingmidwest.com/news/rss/3');
                    	feed.setNumEntries(7);
                    	feed.load(function(result) {
                    		if (result.error) {
                    			return false;
                    		}
                    		for (var i = 0; i < result.feed.entries.length; i++) {
                    			var entry = result.feed.entries[i],
                    				date = new Date(entry.publishedDate),
                    				day = date.format('dayOnly'),
                    				month = date.format('monthOnly'),
                    				content = entry.content.replace(/\<\/p\>/gi, '</p>'),
                    				out = '<li><div class="wrapper data-top"><div class="data">' + day + '<br /><span>' + month + '</span></div><div class="extra-wrap1">' + content.substring(0, 300) + '...</div></div></li>';
                    			$('#mycarousel-1').append(out);
                    		}
                    	});