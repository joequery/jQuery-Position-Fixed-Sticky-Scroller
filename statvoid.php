<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">  
<head>
    <title>Sticky Scroller</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
    <script type="text/javascript" src="http://www.vertstudios.com/vertlib.min.js"></script>
    <script type="text/javascript" src="StickyScroller.min.js"></script>
    <script type="text/javascript" src="GetSet.js"></script>
    
        
    <script type="text/javascript">
    $(document).ready(function()
    {
		var resolution = $(window).height();
		var footerOffset = $("#footer").offset().top;
		var blockHeight = $("#scrollbox").height();

        var scroller = new StickyScroller("#scrollbox", {
            start: 0,
            end: footerOffset-resolution+blockHeight+30,
			margin: resolution-blockHeight-15,
            interval: footerOffset-resolution+blockHeight+30,
		});
		
		scroller.onNewIndex(function(index){
			if(index === 0){
				$("#scrollbox").html("Keep scrolling until the awesome form!");
			}
			else{
				$("#scrollbox").html("You're at the awesome form!");
			}
		});
    });
    </script>
    
	<style type="text/css">

		#main{
		margin-top: 0px;
		margin-left: 30px;
		}
			#scrollbox{
			position: fixed;
			bottom: 15px;
			right: 15px;
			width: 150px;
			background-color: #FF0000;
			height: 150px;
			}
			
			#footer{
			margin-top: 1500px;
			background-color: #000000;
			height: 400px;
			width: 100%;
			}
	</style>

</head>
<body>
    <div id="main">
		<div id="scrollbox">Keep scrolling until the awesome form!</div>
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	blah<br />
	
	<div id="footer"></div>
    </div>
    
</body>
</html>
