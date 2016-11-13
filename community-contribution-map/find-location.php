<?php

$navLat = $_POST['navLat'];
$navLng = $_POST['navLng'];

if ($navLat == null || $navLat == "" || $navLng == null || $navLng == "") {
    echo false;
    die();
} else {

    $con = mysqli_connect('localhost','prograw9_com_in','h5ABEmv7!','prograw9_community_map');

    if (mysqli_connect_errno())
    {
        echo false;
        die();
    }

    $sql = "INSERT INTO community_locations (lat,lng) VALUES ('$navLat','$navLng')";
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