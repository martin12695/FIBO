/**
 * Created by tuanh on 5/27/2017.
 */
var map;
var service;
var infowindow;
var pyrmont;
var markers = [];
function initialize() {
    pyrmont = new google.maps.LatLng(10.814144,106.679714);
    var image = {
        url: '/images/icon/Heart-red-icon.png',
        size: new google.maps.Size(50, 50),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(50, 50)
    };
    map = new google.maps.Map(document.getElementById('map'), {
        center: pyrmont,
        zoom: 15
    });

    var myLocation = new google.maps.Marker({
        map: map,
        position: mypoint,
        title: 'Vị trí của bạn',
        icon: image
    });

    var loveLocation = new google.maps.Marker({
        map: map,
        position: lovepoint,
        title: 'Vị trí của người ấy',
        icon: image
    });

}
function createMarker(place) {
    var placeLoc = place.geometry.location;
    var marker = new google.maps.Marker({
        map: map,
        position: place.geometry.location
    });
    markers.push(marker);


    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(place.name);
        infowindow.open(map, this);
    });
}

function clearMarkers() {
    setMapOnAll(null);
}
function callback(results, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
        for (var i = 0; i < results.length; i++) {
            var place = results[i];
            createMarker(results[i]);
        }
    }
}
function setMapOnAll(map) {
    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
    }
}
function search() {
    clearMarkers();
    //var type = $('#location_type').val();
    var radius = $('#radius').val();
    var type_location = $('#location_type').val();
    var request = {
        location: pyrmont,
        radius: radius,
        keyword: type_location
    };

    service = new google.maps.places.PlacesService(map);
    service.nearbySearch(request, callback);

}


