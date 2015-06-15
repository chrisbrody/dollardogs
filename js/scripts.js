$(function() {
	$( "#amount_selectable" ).selectable();
	$( "#distance_selectable" ).selectable();
	$("body").niceScroll({styler:"fb",cursorcolor:"#7bc1bf", cursorwidth: '6', cursorborderradius: '10px', background: '#404040', spacebarenabled:false,  cursorborder: '', zindex: '1000'});

});

// custom scrollbar
   

// GEO LOCATION
var Latitude;
var Longitude;

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    Latitude = position.coords.latitude; 
    Longitude = position.coords.longitude;	
}
