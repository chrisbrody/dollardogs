$(function() {
	$( "#amount_selectable" ).selectable();
	$( "#distance_selectable" ).selectable();
	$("body").niceScroll({styler:"fb",cursorcolor:"#7bc1bf", cursorwidth: '6', cursorborderradius: '10px', background: '#404040', spacebarenabled:false,  cursorborder: '', zindex: '1000'});

});

// custom scrollbar
   

// GEO LOCATION
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;	
}