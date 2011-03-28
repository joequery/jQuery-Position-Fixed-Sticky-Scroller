<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">  
<head>
    <title>Sticky Scroller</title>
    <link rel="stylesheet" type="text/css" href="demo.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
    <script type="text/javascript" src="http://www.vertstudios.com/vertlib.min.js"></script>
    <script type="text/javascript" src="StickyScroller.js"></script>
    <script type="text/javascript" src="GetSet.js"></script>
    
        
    <script type="text/javascript">
    $(window).load(function()
	{
		var res = $(window).height();
		var newRes = 0;
		var block = $("#scrollbox");
		var blockHeight = $(block).height();
		var padding = 50;
		$(block).css('top', res-blockHeight-padding);

		var scroller = new StickyScroller("#scrollbox",{
			margin: res-blockHeight-padding,
			start: 0,
			end: "parent"
		});

		$(window).resize(function(){
			scroller.recalculate();
		});
    });

    </script>
    
</head>
<body>
    <div id="main">
        <div id="block">
			<div id="scrollbox">This scrolling object stays in the parent</div>
        </div>
		<div id="block2"></div>
    </div>
    
</body>
</html>
