<?php
// Title the page
$pageTitle = "Web Application & Front-End Developer";
?>

<!DOCTYPE html>
    <html>
<head>
    <?php require('head-elements/head.php'); ?>
</head>

<body>

<div class="small-12 columns main-container margin-fix" id="home-main">
    <?php include('navigation/home-nav.php'); ?>
    <div class="small-12 columns margin-fix" id="home-background">
        <div class="small-12 columns margin-fix" id="logo-container">
            <img src="assets/images/logo-white.png" id="logo-100" />
            <img src="assets/images/logo-white-30.png" id="logo-30" />
            <img src="assets/images/logo-white-10.png" id="logo-10" />
        </div>
    </div>
    <div class="small-12 columns" id="home-mobile">
        <div class="mobile-container">
            <img src="assets/images/logo-white.png" id="mobile-home-logo" />
            <h2>Tyler Walker</h2>
        </div>
    </div>
</div>

<!-- Scripts called at end of page load -->
<script src="http://www.chadtylerwalker.com/assets/foundation/js/foundation.min.js"></script>
<script src="http://www.chadtylerwalker.com/assets/js/jquery-ui.min.js"></script>
<script type="text/javascript"> jQuery(document).foundation(); </script>
<script src="assets/js/home-resize.js"></script>
<script src="assets/js/home-logo.js"></script>

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