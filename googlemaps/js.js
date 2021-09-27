var mymap;
var geocoder;
var directionsDisplay;
var directionsService;
//
// Skapar min map

//Visar vägbeskrivningen med text
function visaVagBeskrivning() {
    directionsDisplay = new google.maps.DirectionsRenderer;
    directionsService = new google.maps.DirectionsService;
    var selectedMode = document.getElementById('mode').value;
    var start = document.getElementById("start").value;
    var end = document.getElementById("end").value;

    directionsService.route({
        origin: start,
        destination: end,
        travelMode:  google.maps.TravelMode[selectedMode]
    }, function (response, status) {
        if (status === 'OK') {
            directionsDisplay.setMap(mymap);
            directionsDisplay.setDirections(response);
            directionsDisplay.setPanel(document.getElementById('infobox'));
        }else{
            window.alert('Directions request failed due to ' + status);
        }
    });
}

// Tar bort vägbeskrivningen från hemsidan
function taBortBeskrivning() {
    directionsDisplay.setMap(null);
    directionsDisplay.setPanel(document.getElementById('infobox' === false));
    document.getElementById('start').value = '';
    document.getElementById('end').value = '';
}





