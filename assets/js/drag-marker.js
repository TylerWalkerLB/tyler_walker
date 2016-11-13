/**
 * Created by tyler on 7/1/15.
 */

var map;
var infoWindow;
var geocoder;
var markerCircle;
var dragMarker;

var infoContent = '<div id="info-container-center"><p id="info-window-text">Please drag this marker to the area that you would like the Ad2Dallas meetings to take place. When your done, click the button below to submit your ideal location!</p><button class="google-styled-button red-button" onclick="clickReturn()"><span class="label">Save</span></button></div>';

function adInitialize() {
    var startingCenter = new google.maps.LatLng(32.779647, -96.799212);

    var theMapOptions = {
        zoom: 10,
        center: startingCenter,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        panControl: false
    };

    map = new google.maps.Map(document.getElementById('ad2-map-container'), theMapOptions);

    dragMarker = new google.maps.Marker({
        position: startingCenter,
        map: map,
        draggable: true
        ,title: 'Drag This Maker'
        ,crossOnDrag: false
    });

    var circleOptions = {
        strokeColor: '#ff0000',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: '#ff0000',
        fillOpacity: 0.35,
        map: map,
        center: startingCenter,
        radius: 2000
    };

    markerCircle = new google.maps.Circle(circleOptions);
    infoWindow = new google.maps.InfoWindow({
        content: infoContent,
        maxWidth: 250
    });
//    infoWindow.open(map,dragMarker);


    //add listener for when marker is dragged
    google.maps.event.addListener(dragMarker,'drag',movingCircles);

    //open infoWindow in case the user closes it
    google.maps.event.addListener(dragMarker,'click', function() {
        infoWindow.open(map,dragMarker);
    });
}

function movingCircles() {
    var markerPosition = dragMarker.getPosition();
//    alert(markerPosition);
    markerCircle.setCenter(markerPosition);
}

function clickReturn() {
    var markLat = dragMarker.getPosition().lat();
    var markLng = dragMarker.getPosition().lng();
    var ema = document.getElementById('email');
    var adEmail = ema.value;
    var zip = document.getElementById('zip');
    var adZip = zip.value;
    var cit = document.getElementById('city');
    var adCity = cit.value;
    var radios = document.getElementsByName('member');
    var adRadio = "";

    for (var i = 0, length = radios.length; i < length; i++) {
        if (radios[i].checked) {
            // do whatever you want with the checked radio
//            alert(radios[i].value);
            adRadio = radios[i].value;

            // only one radio can be logically checked, don't check the rest
            break;
        }
    }
//    alert('The lat is: '+markLat+' and the longitudpiece is '+markLng);
//    locat = "http://ad2.programmingchickens.com/process/submit.php?lat="+markLat+"&lng="+markLng;
//    location.href= locat;
}

//when the page loads, initialize the map
google.maps.event.addDomListener(window,'load',adInitialize);

