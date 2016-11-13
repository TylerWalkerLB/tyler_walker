/**
 * Created by tyler on 7/1/15.
 */

var map;
var infoWindow;
var geocoder;
var markerCircle;
var dragMarker;

function mapInitialize() {

    var startingCenter = new google.maps.LatLng(32.779647, -96.799212);
    var oklahomaCenter = new google.maps.LatLng(36.901273,-97.075551);

    var theMapOptions = {
        zoom: 4,
        center: oklahomaCenter,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        panControl: false
    };

    var mapStyle = [{"elementType":"geometry","stylers":[{"hue":"#ff4400"},{"saturation":-68},{"lightness":-4},{"gamma":0.72}]},{"featureType":"road","elementType":"labels.icon"},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"hue":"#0077ff"},{"gamma":3.1}]},{"featureType":"water","stylers":[{"hue":"#00ccff"},{"gamma":0.44},{"saturation":-33}]},{"featureType":"poi.park","stylers":[{"hue":"#44ff00"},{"saturation":-23}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"hue":"#007fff"},{"gamma":0.77},{"saturation":65},{"lightness":99}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"gamma":0.11},{"weight":5.6},{"saturation":99},{"hue":"#0091ff"},{"lightness":-86}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"lightness":-48},{"hue":"#ff5e00"},{"gamma":1.2},{"saturation":-23}]},{"featureType":"transit","elementType":"labels.text.stroke","stylers":[{"saturation":-64},{"hue":"#ff9100"},{"lightness":16},{"gamma":0.47},{"weight":2.7}]}];

    map = new google.maps.Map(document.getElementById('community-map'), theMapOptions);
    map.setOptions({styles: mapStyle});

    downloadURL('get-points.php', function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName('marker');
        numId = markers.length;

        for (i=0;i<numId;i++) {
            var point = new google.maps.LatLng(
                parseFloat(markers[i].getAttribute("lat")),
                parseFloat(markers[i].getAttribute("lng"))
            );
            var marker = new google.maps.Marker({
                map: map,
                position: point
            });
        }
    });

    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function (event) {
        var that = $(this);

        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('#community-map').css("pointer-events", "none");
    }

    var onMapClickHandler = function (event) {
        var that = $(this);

        // Disable the click handler until the user leaves the map area
        that.off('click', onMapClickHandler);

        // Enable scrolling zoom
        that.find('#community-map').css("pointer-events", "auto");

        // Handle the mouse leave event
        that.on('mouseleave', onMapMouseleaveHandler);
    }

// Enable map zooming with mouse scroll when the user clicks the map
    jQuery('#map-container').on('click', onMapClickHandler);
}


function findLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var data = {
                navLat : position.coords.latitude,
                navLng : position.coords.longitude
            };

            jQuery.ajax({
                type : 'POST',
                url : 'find-location.php',
                data : data,
                success : function(response) {
                    if (response) {
                        document.getElementById('home-map-input').value = "";
                        downloadURL('get-points.php', function(data) {
                            var xml = data.responseXML;
                            var markers = xml.documentElement.getElementsByTagName("marker");
                            var rep = markers.length;
                            for (var i = numId; i < markers.length; i++) {
                                var point = new google.maps.LatLng(
                                    parseFloat(markers[i].getAttribute("lat")),
                                    parseFloat(markers[i].getAttribute("lng"))
                                );
                                var marker = new google.maps.Marker({
                                    map: map,
                                    position: point
                                    ,animation: google.maps.Animation.DROP
                                });
                            }
                            numId = rep;
                        });
                        jQuery('#location-success').fadeIn(300);
                        setTimeout(function(){
                            jQuery('#location-success').fadeOut(300);
                        },2000);
                    } else {
                        jQuery('#location-error').fadeIn(300);
                        setTimeout(function(){
                            jQuery('#location-error').fadeOut(300);
                        },2000);
                    }
                }
            });
        },function() {
            jQuery('#location-error').fadeIn(300);
            setTimeout(function(){
                jQuery('#location-error').fadeOut(300);
            },2000);
        });
    }
}
jQuery('#home-location-find').on('click',findLocation);

function findLatLng() {
    var inputVal = document.getElementById('home-map-input').value;

    var data = {
        'userInput' : inputVal
    };

    jQuery.ajax({
        type : 'POST',
        url : 'google-search.php',
        data : data,
        success : function(response) {
            if (response) {
                document.getElementById('home-map-input').value = "";
                downloadURL('get-points.php', function(data) {
                    var xml = data.responseXML;
                    var markers = xml.documentElement.getElementsByTagName("marker");
                    var rep = markers.length;
                    for (var i = numId; i < markers.length; i++) {
                        var point = new google.maps.LatLng(
                            parseFloat(markers[i].getAttribute("lat")),
                            parseFloat(markers[i].getAttribute("lng"))
                        );
                        var marker = new google.maps.Marker({
                            map: map,
                            position: point
                            ,animation: google.maps.Animation.DROP
                        });
                    }
                    numId = rep;
                });
                jQuery('#location-success').fadeIn(300);
                setTimeout(function(){
                    jQuery('#location-success').fadeOut(300);
                },2000);
            } else {
                jQuery('#location-error').fadeIn(300);
                setTimeout(function(){
                    jQuery('#location-error').fadeOut(300);
                },2000);
            }
        }
    });
}

function ent(e) {
    var unicode = e.keyCode ? e.keyCode : e.charCode;
    if (unicode == 13) {
        findLatLng();
    }
}

function downloadURL(url, callback) {
    var request = window.ActiveXObject ?
        new ActiveXObject('Microsoft.XMLHTTP') :
        new XMLHttpRequest;

    request.onreadystatechange = function() {
        if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
        }
    };

    request.open('GET', url, true);
    request.send(null);
}

function doNothing() {}

//when the page loads, initialize the map
google.maps.event.addDomListener(window,'load',mapInitialize);

