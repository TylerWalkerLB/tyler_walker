<?php
$dom = new DOMDocument('1.0');
$node = $dom->createElement('markers');
$parnode = $dom->appendChild($node);

//connect to database
$con = mysqli_connect("localhost", "prograw9_com_out",'h5ABEmv7!','prograw9_community_map');

//check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect. Please retry. Error: " . mysqli_connect_error();
}

$sql = "SELECT * FROM community_locations";
$query = mysqli_query($con,$sql);
$numrows = mysqli_num_rows($query);

header("Content-type: text/xml");

//make sure there are rows to be found
if ($numrows != 0 ) {
    while ($row = mysqli_fetch_array($query)) {
        if ($row['lat'] !== '0.0000000') {
            //Add to XML document node
            $node = $dom->createElement("marker");
            $newnode = $parnode -> appendChild($node);
            $newnode -> setAttribute("lat",$row['lat']);
            $newnode -> setAttribute("lng",$row['lng']);
        }

    }

    echo $dom -> saveXML();

}

?>
 