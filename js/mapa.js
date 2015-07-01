function initialize() {

	var lat =[40.2097584,
			40.1753593,
			40.2072445,
			40.2116507,
			40.2104985,
			40.209507,
			40.2073823,
			40.210019,

			40.1753593,
			40.1753593];

	var lon = [-8.4266166,
			-8.3895211,
			-8.4216171,
			-8.4115682,
			-8.4260325,
			-8.4259166,
			-8.4282688,
			-8.4135044,

			-8.4266166,
			-8.4266166];

for(var i =0; i<=8; i++){
	var LatLng =new google.maps.LatLng(lat[i],lon[i]);

	var mapCanvas = document.getElementById('mapa-'+i);

	var mapOptions = {
	  center: LatLng , 
	  zoom: 16,
	  mapTypeId: google.maps.MapTypeId.ROADMAP,
	  keyboardShortcuts: false,
	  streetViewControl: false,
	  mapTypeControl: false
	};
	var map = new google.maps.Map(mapCanvas, mapOptions);
	       

	var marker = new google.maps.Marker({
	    position: LatLng ,
	    map: map,
	    title: 'Coimbra'
	});
		
		marker.setMap(map);
	}
}
google.maps.event.addDomListener(window, 'load', initialize);