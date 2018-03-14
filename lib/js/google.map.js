	google.maps.event.addDomListener(window, 'load', init);
	var myLatLng = new google.maps.LatLng(44.914538,-93.141957);

	function init() {
		var mapOptions = {
			zoom: 13,
			center: myLatLng, 
			styles: [	
				{
					stylers:[ 
						{"hue":"#C10005"}
					]
				},						
				{	
					featureType:"road",
					elementType:"labels",
					stylers:[
						{"visibility":"on"}							
					]
				},						
				{
					featureType:"road",
					elementType:"geometry",
					stylers:[
						{"lightness":0},
						{"saturation":-55},
						{"visibility":"on"}
					]
				},
				{
					featureType:"water",
					elementType:"labels",
					stylers:[
						{"visibility":"on"}							
					]
				},					
				{
					featureType:"water",
					stylers:[
						{"lightness":0},
						{"saturation":-70},
						{"visibility":"on"}
					]
				}
			]
		};
		var mapElement = document.getElementById('map');
		var map = new google.maps.Map(mapElement, mapOptions);
		var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
		var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			icon: 'https://www.emcp.com/lib/images/EMC_contact_map2.png'
		});
	}