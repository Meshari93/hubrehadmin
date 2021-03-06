// // This example adds a red rectangle to a map.
// var map, infoWindow;
//      function initMap() {
//        map = new google.maps.Map(document.getElementById('map'), {
//          center: {lat: -34.397, lng: 150.644},
//          zoom: 18
//        });
//
//        infoWindow = new google.maps.InfoWindow;
//
//        // Try HTML5 geolocation.
//        if (navigator.geolocation) {
//          navigator.geolocation.getCurrentPosition(function(position) {
//            var pos = {
//              lat: position.coords.latitude,
//              lng: position.coords.longitude
//            };
//            $('#lat').val(position.coords.latitude)
//            $('#lng').val(position.coords.longitude)
//            infoWindow.open(map);
//            map.setCenter(pos);
//             var marker = new google.maps.Marker({
//                      position: pos,
//                      map: map,
//                     });
//            }, function() {
//            handleLocationError(true, infoWindow, map.getCenter());
//          });
//        } else {
//          // Browser doesn't support Geolocation
//          handleLocationError(false, infoWindow, map.getCenter());
//        }
//      }
//
//      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
//        infoWindow.setPosition(pos);
//        infoWindow.setContent(browserHasGeolocation ?
//                              'Error: The Geolocation service failed.' :
//                              'Error: Your browser doesn\'t support geolocation.');
//                           infoWindow.open(map);
//      }


function initMap() {
       var map = new google.maps.Map(document.getElementById('map'), {
         zoom: 8,
         center: {lat: 40.731, lng: -73.997}
       });
       var geocoder = new google.maps.Geocoder;
       var infowindow = new google.maps.InfoWindow;

       document.getElementById('submit').addEventListener('click', function() {
         geocodeLatLng(geocoder, map, infowindow);
       });
     }

     function geocodeLatLng(geocoder, map, infowindow) {
       var input = document.getElementById('latlng').value;
       var latlngStr = input.split(',', 2);
       var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
       var adds;
       geocoder.geocode({'location': latlng}, function(results, status) {
         if (status === 'OK') {
           if (results[0]) {
             map.setZoom(11);
             var marker = new google.maps.Marker({
               position: latlng,
               map: map
             });
            adds = infowindow.setContent(results[0].formatted_address);
            // adds = setContent(results[0].formatted_address);
             infowindow.open(map, marker);

             window.alert(results[0].formatted_address);
             $('#addsForm').val(results[0].formatted_address);

           } else {
             window.alert('No results found');
           }
         } else {
           window.alert('Geocoder failed due to: ' + status);
         }
       });
     }
