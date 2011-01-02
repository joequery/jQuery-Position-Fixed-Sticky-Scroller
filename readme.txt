//------------------------------------------
//         jQuery Sticky Scroller
//------------------------------------------

Example call:
var scroller = new StickyScroller("#scrollbox",
{
    start: 300,
    end: 1800,
    interval: 300,
    range: 100,
    margin: 100
});

Property descriptions.
start: At what vertical position of the scrollbar the object will actually begin scrolling (in pixels)
end: At what vertical position of the scrollbar the object will stop scrolling (in pixels)
margin: How many pixels below the browser window the object will be fixed while scrolling (in pixels)
interval: The length of each index (in pixels)
range: Length of a range of pixels starting at the top of interval. Convenient for callbacks.

To see full documentation, head over to
http://www.vertstudios.com/blog/jquery-sticky-scroller-position-fixed-plugin/

