<?php
// Title the page
$pageTitle = "Portfolio";
?>

<!DOCTYPE html>
<html>
<head>
    <?php require('../head-elements/head.php'); ?>

</head>

<body>
<?php include('../navigation/portfolio-nav.php'); ?>

<div class="small-12 columns main-container margin-fix" id="about-main">
    <div class="small-12 columns margin-fix" id="about-background">

        <div class="page-title small-12 columns" id="portfolio-title">
            <h1>What I Do</h1>
        </div>

        <div class="small-12 columns no-float" id="work">
            <h2>A quick look at some projects I have worked on</h2>

            <div class="small-12 columns" id="work-container">

                <div class="work-grid" id="all-me">
                        <div class="work-highlight" id="all-me-highlight">
                            <img src="../assets/images/work-logos/all-me-logo-300.png" alt="All Me" />
                            <p>All Me League</p>
                            <hr>
                            <p class="work-type">Font-End Development</p>
                            <div class="plus-circle" id="all-me-circle">+</div>
                        </div>
                </div>

                <div class="work-grid" id="pizza-patron">
                        <div class="work-highlight" id="pizza-patron-highlight">
                            <img src="../assets/images/work-logos/pizza-patron-logo-350.png" alt="Pizza Patron" />
                            <p>Pizza Patron</p>
                            <hr>
                            <p class="work-type">Web Application</p>
                            <div class="plus-circle" id="pizza-patron-circle">+</div>
                        </div>
                </div>

                <div class="work-grid" id="smileworkshop">
                        <div class="work-highlight" id="smileworkshop-highlight">
                            <div style="width:100%;text-align:center;height:80px;">
                                <img src="../assets/images/work-logos/smileworkshop-logo-350.png" alt="SmileWorkshop" />
                            </div>
                            <p>SmileWorkshop</p>
                            <hr>
                            <p class="work-type">Plugin Edit</p>
                            <div class="plus-circle" id="smileworkshop-circle">+</div>
                        </div>
                </div>

                <div class="work-grid" id="a1-security-group">
                        <div class="work-highlight" id="a1-security-group-highlight">
                            <div style="width:100%;text-align:center;height:80px;">
                                <img src="../assets/images/work-logos/a1-security-group-logo-350.png" alt="A1 Security Group" />
                            </div>
                            <p>A1 Security Group</p>
                            <hr>
                            <p class="work-type">Front-End Development</p>
                            <div class="plus-circle" id="a1-security-group-circle">+</div>
                        </div>
                </div>

                <div class="work-grid" id="a1-safes">
                        <div class="work-highlight" id="a1-safes-highlight">
                            <div style="width:100%;text-align:center;height:80px;">
                                <img src="../assets/images/work-logos/a1-safes-logo-350.png" alt="A1 Safes" />
                            </div>
                            <p>A1 Safes</p>
                            <hr>
                            <p class="work-type">Front-End Development</p>
                            <div class="plus-circle" id="a1-safes-circle">+</div>
                        </div>
                </div>

                <div class="work-grid" id="a1-locksmith">
                        <div class="work-highlight" id="a1-locksmith-highlight">
                            <div style="width:100%;text-align:center;height:80px;">
                                <img src="../assets/images/work-logos/a1-locksmith-logo-350.png" alt="A1 Locksmith" />
                            </div>
                            <p>A1 Locksmith</p>
                            <hr>
                            <p class="work-type">Landing Pages</p>
                            <div class="plus-circle" id="a1-locksmith-circle">+</div>
                        </div>
                </div>

            </div>
            
            <div class="small-12 columns" id="project-container">

                <div class="small-12 columns single-project" id="all-me-project">
                    <div class="small-12 columns project-title">
                        <img src="../assets/images/work-logos/all-me-logo-300.png" alt="All Me" class="project-square" />
                        <hr class="project-hr">
                        <p>Front-End Development</p>
                        <hr class="project-hr" style="margin-bottom: 40px;">
                    </div>
                    <div class="small-12 medium-6 columns project-description">
                        <h4>Project Details</h4>
                        <hr>
                        <p>The All Me League is a foundation that raises awareness about the dangers of using anabolic steroids and performance enhancing drugs (PEDs). Up until recently, they have operated mainly with baseball players, having strong support from the MLB, yet they wanted to expand their influence and target audience to all sports.</p>
                        <p>This new website was built to appeal to all athletes and focused on the social connection with young athletes. The "All Me Pledge" is a pledge to play PED free and is taken by taking a video of yourself reciting it, then sharing on your social media outlets.</p>
                        <p>I grew up playing baseball my entire life and was blessed to have the opportunity to play baseball in college. Working on a website that is involved with so many MLB players was a dream job, and is one of my favorite projects I have been a part of to date.</p>
                        <p class="working-for">*Built while working for Agency Entourage</p>
                    </div>
                    <div class="small-12 medium-6 columns project-links">
                        <h4>What I Did</h4>
                        <hr>
                        <ul>
                            <li>Front-end development for the All Me League website</li>
                        </ul>
                        <h4>What I Used</h4>
                        <hr>
                        <ul>
                            <li>CSS</li>
                            <li>Javascript</li>
                            <li>PHP</li>
                            <li>WordPress (with a ton of customization)</li>
                        </ul>
                        <h4>Check It Out</h4>
                        <hr>
                        <a href="http://allmeleague.com/" target="_blank" class="website-link">Website</a>
                    </div>
                    <div style="width:100%;height:1px;clear:both"></div>
                </div>

                <div class="small-12 columns single-project" id="pizza-patron-project">
                    <div class="small-12 columns project-title">
                        <img src="../assets/images/work-logos/pizza-patron-logo-350.png" alt="All Me" class="project-square" />
                        <hr class="project-hr">
                        <p>Web Application</p>
                        <hr class="project-hr" style="margin-bottom: 40px;">
                    </div>
                    <div class="small-12 medium-6 columns project-description">
                        <h4>The Problem</h4>
                        <hr>
                        <p>When I was brought onto this project, the site was using a Google Maps plugin to display a map that dropped pins on store locations (you have probably seen quite a few of these). While these plugins are easy to implement, every one is the same. In short, you add the address and information you want for each location, the plugin will find the latitude and longitude of that address, then it drops pins on the map for those locations. There is one major issue with these pin location: They do not place the pins EXACTLY where your location is according to Google Places. This creates a problem when someone is trying to find your business, yet the pin is dropped down the street from the actual location. The client specifically wanted the pins to align perfectly with the Google Places markers on the map.</p>
                        <h4>The Solution</h4>
                        <hr>
                        <p>After researching possible solutions, I discovered there was not a pre-built application to handle this functionality and did what I think any Javascript "junky" would do, started the application from scratch! If you follow the link titled "Application Page", you can see the final product. I'll explain what it is doing. The plugin works off of three major components, Google Maps API, Google Places API, and geolocation. When the user first loads the page, it will ask them to provide their location then geolocates and centers the map on their location. If they decide not to, it centers in on Dallas, TX. The application then finds the current center of the map in longitude and longitude and performs a Nearby Search from Google Places API, which returns all Pizza Patron Place Ids within a 50,000 meter radius of the map center. The application then takes those Place Ids and does a detail request with Google Places API and uses that information to place markers on the map. The above search is also performed anytime the map is moved or dragged.</p>
                        <h4>Final Product</h4>
                        <hr>
                        <p>The final product turned into something really unique. Pizza Patron now has a store locator that pulls all of its store data straight from Google, which means the pins are dropped on the exact position of the store location. As an added plus, because the data is being pulled directly from Google Places, each stores information that is displayed when a user clicks on a marker now matches exactly what Google has for that specific store. This allows a user to not only see the location and address, but the store's phone number, Street View, rating, links to the Google+ page, and even directions to the store. When I built this, there was only a couple of applications out there that had similar functionality, something I am very proud of.</p>
                        <p class="working-for">*Built while working for Agency Entourage</p>
                    </div>
                    <div class="small-12 medium-6 columns project-links">
                        <h4>What I Did</h4>
                        <hr>
                        <ul>
                            <li>Created a store locator that syncs up perfectly with Google Places</li>
                        </ul>
                        <h4>What I Used</h4>
                        <hr>
                        <ul>
                            <li>Google Maps Javascript API</li>
                            <li>Google Places Javascript API</li>
                            <li>HTML5 Geolocation</li>
                            <li>Lots of Javascript</li>
                        </ul>
                        <h4>Check It Out</h4>
                        <hr>
                        <a href="http://pizzapatron.com/find-us/" target="_blank" class="website-link">Application Page</a>
                    </div>
                    <div style="width:100%;height:1px;clear:both"></div>
                </div>

                <div class="small-12 columns single-project" id="smileworkshop-project">
                    <div class="small-12 columns project-title">
                        <img src="../assets/images/work-logos/smileworkshop-logo-350.png" alt="SmileWorkshop" class="project-rectangle" />
                        <hr class="project-hr">
                        <p>Plugin Edit</p>
                        <hr class="project-hr" style="margin-bottom: 40px;">
                    </div>
                    <div class="small-12 medium-6 columns project-description">
                        <h4>The Problem</h4>
                        <hr>
                        <p>The SmileWorkshop website contains a few different forms which generate leads for the dentist office. Due to the limitation of the Contact Forms 7 plugin, someone at Agency Entourage would be sent an email containing the submitted form. This form has a zip code input field, which Agency Entourage manually looks up that location on a map, then forwards the email to the closest store. At the end of every week, Agency Entourage also compiles a report containing all of the leads to send to the respective stores, which involves someone looking up the locations for the zip codes a second time. This was a very costly and time consuming process and needed to be automated.</p>
                        <h4>The Solution</h4>
                        <hr>
                        <p>Agency Entourage wanted to keep the current functionality of Contact Forms 7 for record keeping, but add in a way to analyze the zip code and automatically forward the submitted form to the correct store.<br>&nbsp;&nbsp;<strong>Step one:</strong> Get the latitude and longitude of all SmileWorkshop locations.<br>&nbsp;&nbsp;<strong>Step two:</strong> Call a function after the normal Contact Forms 7 functions.<br>&nbsp;&nbsp;<strong>Step three:</strong> Find the latitude and longitude of the submitted zip code.<br>&nbsp;&nbsp;<strong>Step four:</strong> Run the store locations and the submitted zip location through the Haversine Formula to find the closest location.<br>&nbsp;&nbsp;<strong>Step five:</strong> Send the submitted form to the closest store.<br>&nbsp;&nbsp;<strong>Step six:</strong> Update the Contact Forms 7 database to show the closest store.</p>
                        <h4>Final Product</h4>
                        <hr>
                        <p>On average, once spam has been filtered out, the forms are generating 80 leads per week. If it takes a member of Agency Entourage one minute to look up the zip code and forward the email to the correct store, that employee is spending one hour and twenty minutes a week forwarding leads. Automating this process has increased efficiency for Agency Entourage exponentially and eliminated any user errors that can arise through the old system (ie. delay in store receiving lead, accidentally sending to the wrong store, etc). Also, when Agency Entourage sends lead reports to SmileWorkshop, the closest store is already stored, allowing for quick and easy end-of-week reports.</p>
                        <p class="working-for">*Built while working for Agency Entourage</p>
                    </div>
                    <div class="small-12 medium-6 columns project-links">
                        <h4>What I Did</h4>
                        <hr>
                        <ul>
                            <li>Automated the process of finding the closest location to the user and sending that lead to SmileWorkshop.</li>
                        </ul>
                        <h4>What I Used</h4>
                        <hr>
                        <ul>
                            <li>PHP</li>
                            <li>Google Maps Geocoding API</li>
                            <li>Haversine Formula</li>
                            <li>Contact Forms 7</li>
                        </ul>
                    </div>
                    <div style="width:100%;height:1px;clear:both"></div>
                </div>

                <div class="small-12 columns single-project" id="a1-security-group-project">
                    <div class="small-12 columns project-title">
                        <img src="../assets/images/work-logos/a1-security-group-logo-350.png" alt="A1 Security Group" class="project-rectangle" />
                        <hr class="project-hr">
                        <p>Front-End Development</p>
                        <hr class="project-hr" style="margin-bottom: 40px;">
                    </div>
                    <div class="small-12 medium-6 columns project-description">
                        <h4>Project Details</h4>
                        <hr>
                        <p>Established in 2006, A1 Security Group became the third division of Joe East Enterprises. The security division complimented the other two divisions, A1 Locksmith and A1 Safes. When I was working for Joe East Enterprises, they wanted a website to show their security capabilities and generate leads for the division. The A1 Safes website had been established for years and the security group division wanted a website that looked very similar, yet still captured its own identity.</p>
                        <p>I worked closely with the A1 Security Group team to keep all content consistent with products and services they offer. We also made an effort to highlight the "Smart Home", which has been exploding in popularity throughout the North Texas area. The target audience was businesses in the DFW area that were looking to install or upgrade a security system to protect their employees, inventory, and business. A1 Security Group saw results almost immediately, receiving a huge lead two days after the site launched.</p>
                        <p class="working-for">*Built while working for Joe East Enterprises Inc.</p>
                    </div>
                    <div class="small-12 medium-6 columns project-links">
                        <h4>What I Did</h4>
                        <hr>
                        <ul>
                            <li>Front-end development and design for the A1 Security Group website</li>
                        </ul>
                        <h4>What I Used</h4>
                        <hr>
                        <ul>
                            <li>CSS</li>
                            <li>Javascript</li>
                            <li>PHP</li>
                            <li>WordPress (with some customization)</li>
                            <li>Photoshop / Illustrator</li>
                            <li>HTML</li>
                        </ul>
                        <h4>Check It Out</h4>
                        <hr>
                        <a href="http://www.a1securitygroup.com/" target="_blank" class="website-link">Website</a>
                    </div>
                    <div style="width:100%;height:1px;clear:both"></div>
                </div>

                <div class="small-12 columns single-project" id="a1-safes-project">
                    <div class="small-12 columns project-title">
                        <img src="../assets/images/work-logos/a1-safes-logo-350.png" alt="A1 Safes" class="project-rectangle" />
                        <hr class="project-hr">
                        <p>Front-End Development</p>
                        <hr class="project-hr" style="margin-bottom: 40px;">
                    </div>
                    <div class="small-12 medium-6 columns project-description">
                        <h4>Project Details</h4>
                        <hr>
                        <p>The A1 Safes website was already built when I began working for Joe East Enterprises, yet it needed a large of amount of updating, maintenance, and the addition of a few pages and functionalities. The most pressing issue was an outdated product list, which can be a major problem for an e-commerce site.</p>
                        <p>A1 Safes sells gun safes across many of their brick and mortar store locations around DFW, so I had to coordinate with the store managers to get an updated product inventory to work from. After adding all products that A1 Safes sold, I had to keep the online inventory up-to-date with the stores inventory. I also added and modified various pages to include features such as a store location page, virtual tours of some store locations, and a "Choose a Safe" form.</p>
                        <p class="working-for">*Built while working for Joe East Enterprises Inc.</p>
                    </div>
                    <div class="small-12 medium-6 columns project-links">
                        <h4>What I Did</h4>
                        <hr>
                        <ul>
                            <li>Front-end development and design for pages on the A1 Safes website</li>
                        </ul>
                        <h4>What I Used</h4>
                        <hr>
                        <ul>
                            <li>CSS</li>
                            <li>Javascript</li>
                            <li>PHP</li>
                            <li>Google Maps API</li>
                            <li>WordPress (with some customization)</li>
                            <li>Photoshop / Illustrator</li>
                            <li>HTML</li>
                        </ul>
                        <h4>Check It Out</h4>
                        <hr>
                        <a href="http://www.a-1safes.com/" target="_blank" class="website-link">Website</a>
                    </div>
                    <div style="width:100%;height:1px;clear:both"></div>
                </div>

                <div class="small-12 columns single-project" id="a1-locksmith-project">
                    <div class="small-12 columns project-title">
                        <img src="../assets/images/work-logos/a1-locksmith-logo-350.png" alt="A1 Locksmith" class="project-rectangle" />
                        <hr class="project-hr">
                        <p>Landing Pages</p>
                        <hr class="project-hr" style="margin-bottom: 40px;">
                    </div>
                    <div class="small-12 medium-6 columns project-description">
                        <h4>Project Details</h4>
                        <hr>
                        <p>The A1 Locksmith division of Joe East Enterprises is the largest locksmith company in the United States with over ten locations around DFW, a corporate office, and a massive fleet of certified locksmiths. This site is consistently the top result for numerous Google searches and is one of Joe East Enterprises crowning jewels.</p>
                        <p>Another developer was working to pinpoint leads and conversion rates across the site with how they relate to number of clicks, calls, and jobs. In order to hone these analytics down to exact, page by page numbers, there needed to be a ton of landing pages directed to exactly what the site visitor was searching for. I worked with the design team and another developer to create landing pages that actively update certain content for use in the custom analytic software that Joe East Enterprises had built. In order to avoid decreasing the websites outstanding Google search ranking, these pages had to be built to certain standard with consistency in mind. It was a great experience to work on live site that generates a high amount of traffic.</p>
                        <p class="working-for">*Built while working for Joe East Enterprises Inc.</p>
                    </div>
                    <div class="small-12 medium-6 columns project-links">
                        <h4>What I Did</h4>
                        <hr>
                        <ul>
                            <li>Design and front-end development of landing pages on the A1 Locksmith website</li>
                        </ul>
                        <h4>What I Used</h4>
                        <hr>
                        <ul>
                            <li>CSS</li>
                            <li>WordPress (with some customization)</li>
                            <li>Photoshop / Illustrator</li>
                            <li>HTML</li>
                        </ul>
                        <h4>Check It Out</h4>
                        <hr>
                        <a href="http://www.a-1locksmith.com/" target="_blank" class="website-link">Website</a>
                    </div>
                    <div style="width:100%;height:1px;clear:both"></div>
                </div>

            </div>
        </div>
    </div>
</div>


<?php include('../footer-elements/footer.php'); ?>

<!-- Scripts called at end of page load -->
<script src="../assets/js/home-resize.js"></script>

<script type="text/javascript">
        function showProject() {
            if (document.getElementsByClassName('showing')) {
                $('.showing').slideUp(400).removeClass('showing');
            }
            var curProject = '#' + jQuery(this).attr('id') + '-project';
            $(curProject).slideDown(400).addClass('showing');
            setTimeout(function() {
                $('html, body').animate({
                    scrollTop: jQuery('#project-container').offset().top
                },1000);
            },400);

        }

    $('.work-grid').on('click',showProject);
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