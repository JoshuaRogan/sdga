$(document).ready(function() {
	google.maps.event.addDomListener(window, 'load', initialize);
	

});



var tour = [
	{	
		location: new google.maps.LatLng(33.473472, -81.903576),
		title: "NCAA Championships",
		desc: "The NCAA Collegiate Championships held in North Augusta SC.",
		link: "http://ncdgc.com/"
	},	
	{	
		location: new google.maps.LatLng(40.621239, -79.819466),
		title: "PDGA World Championships",
		desc: "Here is a short description for this tournmanet",
		link: "http://www.pdga.com/world-championships"
	},	
	{	
		location: new google.maps.LatLng(41.036111, -75.683889),
		title: "Pocono Open",
		desc: "Here is a short description for this tournmanet",
		link: "http://mrdiscgolf.com/"
	},
		{	
		location: new google.maps.LatLng(40.545357, -75.076721),
		title: "Tinicum Open",
		desc: "Here is a short description for this tournmanet",
		link: "http://www.pdga.com/tour/event/19884"
	},
	{	
		location: new google.maps.LatLng(39.638753, -75.756279),
		title: "Delaware Disc Golf Challenge",
		desc: "Here is a short description for this tournmanet",
		link: "http://www.pdga.com/tour/event/19605"
	},	
	{	
		location: new google.maps.LatLng(40.621463, -79.814455),
		title: "Worlds Invasion | Deer Lakes",
		desc: "Here is a short description for this tournmanet",
		link: "http://www.pdga.com/tour/event/19605"
	},	
	{	
		location: new google.maps.LatLng(41.062697, -80.041941),
		title: "Worlds Invasion | Slipper Rock",
		desc: "Here is a short description for this tournmanet",
		link: "http://www.pdga.com/tour/event/19605"
	},
	// {	
	// 	location: new google.maps.LatLng(40.847661,-77.877864),
	// 	title: "PDGA World Championships"
	// },



]



var markers = [];




function initialize() {
	var mapOptions = {
		zoom: 6,
		center: new google.maps.LatLng(37.283294,-80.278816),
		// draggable: false
		scrollwheel: false
	};
	map = new google.maps.Map(document.getElementById('tour-map'),mapOptions);

	//Add the markers to the map
	for (var i = 0; i < tour.length; i++) {
		
		var infowindow = new google.maps.InfoWindow({
			content: "<div class='tourmap-infowindow'><h3>" + tour[i].title + "</h3><p>" + tour[i].desc + "<br/> <a href='" + tour[i].link + "' target='_blank'>Tournament Info</a></p></div>"
		});

		var marker = new google.maps.Marker({
			position: tour[i].location,
			title: tour[i].title,
			map:map,
			clickable: true,
			animation: google.maps.Animation.DROP,
			infowindow: infowindow
		});

		google.maps.event.addListener(marker, 'click', function() {
			this.infowindow.open(map,this);
		});


	}
  // google.maps.event.addListener(marker, 'click', toggleBounce);
}


function toggleBounce() {
	if (marker.getAnimation() != null) {
		marker.setAnimation(null);
	} 
	else {
		marker.setAnimation(google.maps.Animation.BOUNCE);
	}
}

function addMarker(position) {
	new google.maps.Marker({
		position: position,
		map:map,
		draggable:true,
		animation: google.maps.Animation.DROP
	});
}


