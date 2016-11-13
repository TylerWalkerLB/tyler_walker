<?php
// Title the page
$pageTitle = "About Me";
?>

<!DOCTYPE html>
<html>
<head>
    <?php require('../head-elements/head.php'); ?>

</head>

<body>
<?php include('../navigation/about-nav.php'); ?>

<div class="small-12 columns main-container margin-fix" id="about-main">
    <div class="small-12 columns margin-fix" id="about-background">

        <div class="page-title small-12 columns" id="about-title">
            <h1>WHO I AM</h1>
        </div>

        <div class="small-12 columns about-container">

            <div class="about-section small-12 columns" id="gipsy-section">
                <h2>A Bit of a Gipsy</h2>
                <p>While not from Roma, according to the definition as defined under English Law, I am a person who lives a "nomadic habit of life". I am originally from St. Cloud, Florida. Due to family moves and collegiate baseball I have lived in Florida, Arkansas, Mississippi, Oklahoma, and Texas.</p>
            </div>

            <div class="about-section small-12 columns" id="skills-section">
                <h2>Skills</h2>
                <p>This area is constantly growing. I love trying new things!</p>
                <div class="small-12 columns" id="skill-list">
                    <div class="small-12 medium-6 columns">
                        <ul>
                            <li>+&nbsp;&nbsp;Javascript</li>
                            <li>+&nbsp;&nbsp;PHP</li>
                            <li>+&nbsp;&nbsp;CSS</li>
                            <li>+&nbsp;&nbsp;HTML</li>
                            <li>+&nbsp;&nbsp;Growing Moustaches</li>
                            <li>+&nbsp;&nbsp;Many APIs, such as:
                                <ul>
                                    <li>-&nbsp;&nbsp;Google</li>
                                    <li>-&nbsp;&nbsp;Twitter</li>
                                    <li>-&nbsp;&nbsp;Instagram</li>
                                    <li>-&nbsp;&nbsp;Foursquare</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="small-12 medium-6 columns">
                        <ul>
                            <li>+&nbsp;&nbsp;Wordpress plugin development</li>
                            <li>+&nbsp;&nbsp;SQL</li>
                            <li>+&nbsp;&nbsp;Frameworks, such as:
                                <ul>
                                    <li>-&nbsp;&nbsp;Bootstrap</li>
                                    <li>-&nbsp;&nbsp;Foundation (used on this site)</li>
                                </ul>
                            </li>
                            <li>+&nbsp;&nbsp;Wordpress</li>
                            <li>+&nbsp;&nbsp;Custom development in Wordpress</li>
                            <li>+&nbsp;&nbsp;Magento</li>
                            <li>+&nbsp;&nbsp;Photoshop</li>
                            <li>+&nbsp;&nbsp;Illustrator</li>

                        </ul>
                    </div>
                    <div style="clear:both;"></div>
                </div>

            </div>

            <div class="about-section small-12 columns" id="baseball-section">
                <h2>Baseball Player</h2>
                <p>I was blessed to play baseball for almost my entire life, from Little League all the way through a crazy collegiate career. In 2008, I won a high school state championship in Arkansas while attending Woodlawn High School. My collegiate baseball career started at Southern Arkansas University in Magnolia, Arkansas. My sophomore year I transferred to Delta State University in Cleveland, Mississippi. While attending Delta State I suffered a serious injury to my throwing arm, had surgery, then transferred the following year to Northern Oklahoma College in Enid, OK. While in Oklahoma I went through my rehab and ended up gaining the opportunity to play at University of Texas at Dallas. I finished my baseball career at UT-Dallas in 2014 and will graduate in December 2015 with a degree in Information Technology and Systems.</p>
            </div>

            <div class="small-12 columns about-section" id="home-instagram">
                <a href="https://instagram.com/walk.piece/" target="_blank"><img src="../assets/images/instagram-logo.png" id="instagram-logo"></a>
                <div class="small-12 columns" id="instagram-container">
                    <div class="medium-12 large-4 columns">
                        <a id="insta-1"></a>
                    </div>
                    <div class="medium-12 large-4 columns">
                        <a id="insta-2"></a>
                    </div>
                    <div class="medium-12 large-4 columns">
                        <a id="insta-3"></a>
                    </div>
                </div>
            </div>

            <div style="clear: both;"></div>

            <div class="about-section small-12 columns" id="development-section">
                <h2>Development Career</h2>
                <p>A good friend of mine introduced me to Java in 2013, which gave me the coding bug. At the start of 2014, I started to work with PHP, Javascript, jQuery, and other web-based languages. While working a summer college job at Lowes, I met a customer, Mike Schneider, who is the CEO of Dallas based A-1 Locksmith, A-1 Safes, and A-1 Security Group. He brought me out for an interview and I started an internship for his company handling all of their websites, from design, development, and maintenance. This past summer I received an apprenticeship at Dallas based Agency Entourage. Here I began developing web applications and creating the front-end and back-end for various client's websites. I am currently working as a web developer for Agency Entourage.</p>
            </div>

        </div>

        <?php include('../footer-elements/footer.php'); ?>

    </div>
</div>



<!-- Scripts called at end of page load -->
<script src="../assets/js/home-resize.js"></script>
<script src="../assets/js/insta-feed.js"></script>

<script type="text/javascript">
    function contactIn() {
        var winLocation = window.location;
        if (winLocation == 'http://www.chadtylerwalker.com/about/?contact=yes') {
            $('html, body').animate({
                scrollTop: jQuery('#contact-form').offset().top
            },1000);
        }
    }

    document.addEventListener('DOMContentLoaded',contactIn);
</script>

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