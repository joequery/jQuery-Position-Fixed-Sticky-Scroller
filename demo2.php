<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">  
<head>
    <title>Sticky Scroller</title>
    <link rel="stylesheet" type="text/css" href="demo2.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
    <script type="text/javascript" src="http://www.vertstudios.com/vertlib.min.js"></script>
    <script type="text/javascript" src="StickyScroller.min.js"></script>
    <script type="text/javascript" src="GetSet.js"></script>
    
        
    <script type="text/javascript">
    $(window).load(function()
    {
        var options = {
            start: 0,
            end: 1200,
            interval: 300,
            range: 100
        }
        var scroller = new StickyScroller("#scrollbox", options);
        var code = new StickyScroller("#code", options);
                        
        scroller.onNewIndex(function(index)
        {
            $("#scrollbox").html("Index " + index);
        });
        
        scroller.onScroll(function(index)
        {
            if(scroller.inRange())
            {
                
            }
        });
    });
    </script>
    
</head>
<body>
    <div id="main">
        <div id="scrollbox">Index 0</div>
        <div id="code"><pre>
        var options = {
            start: 0,
            end: 1200,
            interval: 300
        }
        var scroller = new StickyScroller("#scrollbox", options);
        var code = new StickyScroller("#code", options);
                        
        scroller.onNewIndex(function(index)
        {
            $("#scrollbox").html("Index " + index);
        });
        </pre></div>
        
        <div id="blocks">
        <div class="block"></div>
        <div class="block"></div>
        <div class="block"></div>
        <div class="block"></div>
        <div class="block"></div>
        <div class="block"></div>
        <div class="block"></div>
        <div id="blankspace"></div>
        </div>
    </div>
    
</body>
</html>