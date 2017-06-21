/**
 * Created by tuanh on 5/27/2017.
 */
var map;
var service;
var pyrmont;
var markers = [];
var meeting = null;
function initialize() {
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    $( "#date_dating" ).datepicker({ dateFormat: 'dd/mm/yy' });
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

    for( i = 0; i < event_location.length; i++ ) {
        var position = new google.maps.LatLng(event_location[i][1], event_location[i][2]);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            icon: './images/icon/star-3.png',
            title: event_location[i][0]
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));
    }


//Lấy địa điểm hẹn hò

    google.maps.event.addListener(map, 'click', function(event) {
        placeMarker(event.latLng);
    });

    function placeMarker(location) {
        if ( meeting != null ) {
            meeting.setMap(null);
        }
        meeting = new google.maps.Marker({
            position: location,
            map: map,
            icon: './images/icon/star.png'
        });
    }

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

function  bookDate() {
    if ( $('#time_dating').val() =='' || $('#date_dating').val()== '' || $('#location_dating').val()=='' ) {
        $('#check_field').show();
    } else if (meeting == null) {
        $('#check_location').show();
    }else {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            data: {
                id_couple: id_couple,
                time: $('#time_dating').val(),
                day: $('#date_dating').val(),
                location_name: $('#location_dating').val(),
                location: {lat: meeting.getPosition().lat(), lng: meeting.getPosition().lng()}

            },
            url: '/dating/book',
            success: function (data) {
                if (data == 0) {
                    swal("Tạo lịch thành công!", "", "success");
                    window.location.replace('/dating');
                }
            },

        });
    }
}






