<?php

$userInput = $_POST['userInput'];

if ($userInput == null || $userInput == "") {
    echo false;
    die();
} else {

    $formatted = str_replace(" ","+",$userInput);
    $formatted = str_replace(",","",$formatted);

    $search = "https://maps.googleapis.com/maps/api/geocode/json?address=". $formatted ."&key=AIzaSyDUbQda73Js67O9121yolAt0TeXI3a3f0Y";

    $jsonData = file_get_contents($search);

    $locArray = json_decode($jsonData);

    $locLat = $locArray -> results[0]->geometry->location->lat;
    $locLng = $locArray -> results[0]->geometry->location->lng;

    $con = mysqli_connect('localhost','prograw9_com_in','h5ABEmv7!','prograw9_community_map');

    if (mysqli_connect_errno())
    {
        echo false;
        die();
    }

    $sql = "INSERT INTO community_locations (lat,lng) VALUES ('$locLat','$locLng')";
    $query = mysqli_query($con,$sql);

    if (!mysqli_query($con,$sql)) {
        echo false;
        die();
    } else {
        mysqli_close($con);
        echo true;
    }
}


die();