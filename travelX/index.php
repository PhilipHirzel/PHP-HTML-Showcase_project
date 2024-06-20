<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>TravelX - Your Gateway to Adventure</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="control/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="control/css/noscript.css" />
    </noscript>
</head>

<body class="homepage is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header">

            <!-- Inner -->
            <div class="inner">
                <header>
                    <h1><a href="index.php" id="logo">TravelX</a></h1>
                    <hr />
                    <p>Experience Luxury Without Limits</p>
                </header>
                <footer>
                    <a href="#banner" class="button circled scrolly">Explore</a>
                </footer>
            </div>

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>
                        <a href="#">Destinations</a>
                        <ul>
                            <li><a href="./view/subpages/dest-tropical.php">Tropical Paradise</a></li>
                            <li><a href="./view/subpages/dest-mountain.php">Mountain Retreats</a></li>
                            <li><a href="./view/subpages/dest-city.php">City Tours</a></li>
                            <li><a href="./view/subpages/dest-beach.php">Beach Resorts</a></li>
                            <li>
                                <a href="#">More Options &hellip;</a>
                                <ul>
                                    <li><a href="./view/subpages/dest-luxury.php">Luxury Cruises</a></li>
                                    <li><a href="./view/subpages/dest-adventure.php">Adventure Travel</a></li>
                                    <li><a href="./view/subpages/culture.php">Cultural Journeys</a></li>
                                    <li><a href="./view/subpages/eco-tour.php">Eco Tourism</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li><a href="view/subpages/my-account.php">Account</a></li>
                    <?php else: ?>
                        <li><a href="login.php">Login</a></li>
                    <?php endif; ?>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>

        </div>

        <!-- Banner -->
        <section id="banner">
            <header>
                <h2>Welcome to <strong>TravelX</strong>.</h2>
                <p>
                    Your gateway to unforgettable journeys. Explore the world with us.
                </p>
            </header>
        </section>

        <!-- Carousel -->
        <section class="carousel">
            <div class="reel">

                <article>
                    <a href="#" class="image featured"><img src="view/images/pic01.jpg" alt="" /></a>
                    <header>
                        <h3><a href="#">Explore Exotic Beaches</a></h3>
                    </header>
                </article>

                <article>
                    <a href="#" class="image featured"><img src="view/images/pic02.jpg" alt="" /></a>
                    <header>
                        <h3><a href="#">Mountain Adventures</a></h3>
                    </header>
                </article>

                <article>
                    <a href="#" class="image featured"><img src="view/images/pic03.jpg" alt="" /></a>
                    <header>
                        <h3><a href="#">Cultural Expeditions</a></h3>
                    </header>
                </article>

                <article>
                    <a href="#" class="image featured"><img src="view/images/pic04.jpg" alt="" /></a>
                    <header>
                        <h3><a href="#">Urban Explorations</a></h3>
                    </header>
                </article>

                <article>
                    <a href="#" class="image featured"><img src="view/images/pic05.jpg" alt="" /></a>
                    <header>
                        <h3><a href="#">Luxury Cruises</a></h3>
                    </header>
                </article>

                <article>
                    <a href="#" class="image featured"><img src="view/images/pic17.jpg" alt="" /></a>
                    <header>
                        <h3><a href="#">Nature Expeditions</a></h3>
                    </header>
                </article>

                <article>
                    <a href="#" class="image featured"><img src="view/images/pic18.jpg" alt="" /></a>
                    <header>
                        <h3><a href="#">City Hops</a></h3>
                    </header>
                </article>

            </div>
        </section>

        <!-- Main -->
        <div class="wrapper style2">

            <article id="main" class="container special">
                <a href="#" class="image featured"><img src="view/images/pic06.jpg" alt="" /></a>
                <header>
                    <h2><a href="#">Discover the Wonders of the World</a></h2>
                    <p>
                        Join us on a journey to explore the most breathtaking sights and experiences the world has to
                        offer.
                    </p>
                </header>
                <p>
                    From the majestic mountains to the serene beaches, we offer travel experiences that cater to all
                    types of explorers. Our customized packages ensure that you get the most out of your adventure, with
                    top-notch services and unforgettable memories. Whether you're looking for a relaxing getaway or an
                    adrenaline-pumping adventure, TravelX has got you covered.
                </p>
                <footer>
                    <a href="#" class="button">Continue Reading</a>
                </footer>
            </article>

        </div>

        <!-- Features -->
        <div class="wrapper style1">

            <section id="features" class="container special">
                <header>
                    <h2>Why Choose TravelX?</h2>
                    <p>We provide personalized travel experiences to create lifelong memories.</p>
                </header>
                <div class="row">
                    <article class="col-4 col-12-mobile special">
                        <a href="#" class="image featured"><img src="view/images/pic07.jpg" alt="" /></a>
                        <header>
                            <h3><a href="#">Personalized Itineraries</a></h3>
                        </header>
                        <p>
                            Our travel experts craft customized itineraries tailored to your preferences and interests.
                        </p>
                    </article>
                    <article class="col-4 col-12-mobile special">
                        <a href="#" class="image featured"><img src="view/images/pic08.jpg" alt="" /></a>
                        <header>
                            <h3><a href="#">Exclusive Deals</a></h3>
                        </header>
                        <p>
                            Enjoy exclusive deals and discounts on flights, hotels, and activities when you book with
                            us.
                        </p>
                    </article>
                    <article class="col-4 col-12-mobile special">
                        <a href="#" class="image featured"><img src="view/images/pic09.jpg" alt="" /></a>
                        <header>
                            <h3><a href="#">24/7 Support</a></h3>
                        </header>
                        <p>
                            Our support team is available 24/7 to assist you with any travel needs or emergencies.
                        </p>
                    </article>
                </div>
            </section>

        </div>

        <!-- Footer -->
        <div id="footer">
            <div class="container">
                <div class="row">

                    <!-- Tweets -->
                    <section class="col-4 col-12-mobile">
                        <header>
                            <h2 class="icon brands fa-twitter circled"><span class="label">Tweets</span></h2>
                        </header>
                        <ul class="divided">
                            <li>
                                <article class="tweet">
                                    Just booked an amazing trip with TravelX! Can't wait to explore the beaches of Bali.
                                    #TravelX
                                    <span class="timestamp">5 minutes ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="tweet">
                                    Had the best experience ever in the Swiss Alps thanks to TravelX! #Adventure
                                    #TravelX
                                    <span class="timestamp">30 minutes ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="tweet">
                                    Thanks to TravelX for organizing an unforgettable cultural tour of Japan. #Culture
                                    #TravelX
                                    <span class="timestamp">3 hours ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="tweet">
                                    TravelX made our honeymoon magical with their personalized itinerary. #Romance
                                    #TravelX
                                    <span class="timestamp">5 hours ago</span>
                                </article>
                            </li>
                        </ul>
                    </section>

                    <!-- Posts -->
                    <section class="col-4 col-12-mobile">
                        <header>
                            <h2 class="icon solid fa-file circled"><span class="label">Posts</span></h2>
                        </header>
                        <ul class="divided">
                            <li>
                                <article class="post stub">
                                    <header>
                                        <h3><a href="#">Top 10 Beach Destinations for 2024</a></h3>
                                    </header>
                                    <span class="timestamp">3 hours ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="post stub">
                                    <header>
                                        <h3><a href="#">Exploring the Cultural Wonders of Asia</a></h3>
                                    </header>
                                    <span class="timestamp">6 hours ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="post stub">
                                    <header>
                                        <h3><a href="#">Adventure Travel: Tips for Thrill Seekers</a></h3>
                                    </header>
                                    <span class="timestamp">Yesterday</span>
                                </article>
                            </li>
                            <li>
                                <article class="post stub">
                                    <header>
                                        <h3><a href="#">How to Plan a Perfect Getaway</a></h3>
                                    </header>
                                    <span class="timestamp">2 days ago</span>
                                </article>
                            </li>
                        </ul>
                    </section>

                    <!-- Photos -->
                    <section class="col-4 col-12-mobile">
                        <header>
                            <h2 class="icon solid fa-camera circled"><span class="label">Photos</span></h2>
                        </header>
                        <div class="row gtr-25">
                            <div class="col-6">
                                <a href="#" class="image fit"><img src="view/images/pic10.jpg" alt="" /></a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="image fit"><img src="view/images/pic11.jpg" alt="" /></a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="image fit"><img src="view/images/pic12.jpg" alt="" /></a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="image fit"><img src="view/images/pic13.jpg" alt="" /></a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="image fit"><img src="view/images/pic14.jpg" alt="" /></a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="image fit"><img src="view/images/pic15.jpg" alt="" /></a>
                            </div>
                        </div>
                    </section>

                </div>
                <hr />
                <div class="row">
                    <div class="col-12">

                        <!-- Contact -->
                        <section class="contact">
                            <header>
                                <h3>Contact Us for Your Next Adventure</h3>
                            </header>
                            <p>We're here to help you plan the perfect trip. Reach out to us via social media or our
                                contact form.</p>
                            <ul class="icons">
                                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a>
                                </li>
                                <li><a href="#" class="icon brands fa-facebook-f"><span
                                            class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon brands fa-instagram"><span
                                            class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon brands fa-pinterest"><span
                                            class="label">Pinterest</span></a></li>
                                <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a>
                                </li>
                                <li><a href="#" class="icon brands fa-linkedin-in"><span
                                            class="label">Linkedin</span></a></li>
                            </ul>
                        </section>

                        <!-- Copyright -->
                        <div class="copyright">
                            <ul class="menu">
                                <li>&copy; TravelX. All rights reserved.</li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="control/js/jquery.min.js"></script>
    <script src="control/js/jquery.dropotron.min.js"></script>
    <script src="control/js/jquery.scrolly.min.js"></script>
    <script src="control/js/jquery.scrollex.min.js"></script>
    <script src="control/js/browser.min.js"></script>
    <script src="control/js/breakpoints.min.js"></script>
    <script src="control/js/util.js"></script>
    <script src="control/js/main.js"></script>

</body>

</html>