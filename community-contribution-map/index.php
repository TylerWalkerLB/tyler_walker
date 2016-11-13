<?php
// Title the page
$pageTitle = "Community Contribution Map";
?>

<!DOCTYPE html>
<html>
<head>
    <?php require('../head-elements/head.php'); ?>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyAqOGCimwfIX3QiGflvz1XuutF2oagLMvY&signed_in=true&ver=1"></script>

</head>

<body>
<?php include('../navigation/map-nav.php'); ?>

<div class="small-12 columns main-container margin-fix" id="map-main">

    <div class="small-12 columns margin-fix" id="map-background">

        <div class="small-12 medium-6 columns" id="map-title">
            <h3>Community<br>Contribution<br>Map</h3>
        </div>

        <div class="medium-6 hidden-for-small-down columns" id="map-logo">
<!--            <a href="http://www.chadtylerwalker.com/">-->
<!--                <img class="map-logo" src="" />-->
<!--            </a>-->
        </div>

        <div class="small-12 large-12 columns" id="map-overview-container">

            <div class="small-12 medium-6 columns" style="padding-top: 50px;">
                <p id="map-overview">Google Maps is an incredible tool for analyzing location data. The Community Contribution Map was built to let everyone visualize how expansive the influence of a website can be. If you would like to contribute, share where you are!</p>
            </div>

            <div class="small-12 medium-6 columns" style="padding-top: 50px;z-index: 1000;">
                <div id="home-map-3" style="margin:0 auto;width:300px;">
                    <input id="home-map-input" name="home-map-input" placeholder="ex: Dallas, TX" onkeyup="ent(event);"/>
                    <button id="home-map-submit" onclick="findLatLng();">Share</button>
                    <p id="home-location-find">Or find your current location</p>
                    <p id="location-error">Sorry, there was an error</p>
                    <p id="location-success">Thank you for contributing!</p>
                </div>
            </div>
            <div class="small-12 columns">
                <p id="click-map">Click on the map to interact</p>
            </div>
        </div>

        <div class="small-12 large-10 columns large-centered" id="map-container">
            <div id="community-map"></div>
        </div>
    </div>
</div>


<?php include('../footer-elements/footer.php'); ?>

<!-- Scripts called at end of page load -->
<script src="../assets/js/home-resize.js"></script>
<script src="../assets/js/community-contribution-map.js"></script>

<!-- Google Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-69526941-1', 'auto');
    ga('send', 'pageview');

</script>

</body>
</html>