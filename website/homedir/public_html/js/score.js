document.addEventListener("DOMContentLoaded", function(event) {

    var dflt = {
      min: 0,
      max: 10,
       formatNumber: true,
		gaugeWidthScale: 0.2,
		 donut: true,
		 levelColors: ["#f26522"],
        counter: true
    }

    var score_1 = new JustGage({
      id: 'score_1',
      defaults: dflt
    });
	
	  var score_2 = new JustGage({
      id: 'score_2',
      defaults: dflt
    });
	
	var score_3 = new JustGage({
      id: 'score_3',
      defaults: dflt
    });
	
	var score_4 = new JustGage({
      id: 'score_4',
      defaults: dflt
    });
	
	var score_5 = new JustGage({
      id: 'score_5',
      defaults: dflt
    });
	var score_6 = new JustGage({
      id: 'score_6',
      defaults: dflt
    });
	
	var score_7 = new JustGage({
      id: 'score_7',
      defaults: dflt
    });
	
	var score_8 = new JustGage({
      id: 'score_8',
      defaults: dflt
    });


  });
  
var harita;
function initMap() {
  harita = new google.maps.Map(document.getElementById('harita'), {
    center: {lat: 40.712776, lng: -74.005974}, // varsayılan merkez konumu
    zoom: 12 // varsayılan zoom seviyesi
  });
}

function showAddressOnMap(address) {
  var geocoder = new google.maps.Geocoder();
  geocoder.geocode({'address': address}, function(results, status) {
    if (status === 'OK') {
      harita.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
        map: harita,
        position: results[0].geometry.location
      });
    } else {
      alert('Geocode başarısız oldu: ' + status);
    }
  });
}